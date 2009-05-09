#!/usr/bin/env python
# -*- coding: utf-8 -*-

import os
import sys

import smtplib
import sqlite3

from traceback import format_exception
from sys import exc_info
import logging

from email import encoders
from email.message import Message
from email.mime.base import MIMEBase
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText

import email.Utils
import email.Charset 
email.Charset.add_charset('utf-8',email.Charset.SHORTEST, None, None)

from datetime import datetime

from aquaticprime import licenceData

#create table registration(name TEXT, email TEXT PRIMARY KEY, license TEXT, timestamp TEXT, transactionid TEXT);
db = 'donations.sqlite'

LOG_FILENAME = 'registration.log'

import logging
logging.basicConfig(level=logging.DEBUG,
                    format='%(asctime)s %(levelname)-8s %(message)s',
                    datefmt='%a, %d %b %Y %H:%M:%S',
                    filename=LOG_FILENAME,
                    filemode='a')

def delete(email):
	conn = sqlite3.connect(db)
	c = conn.cursor()

	row = (email,)
	try:
		c.execute('delete from registration where (email=?)', row)
		logging.info('Deleted license for %s', email)
	finally:
		# Save (commit) the changes
		conn.commit()
		# We can also close the cursor if we are done with it
		c.close()


def insert(email):
	insertImpl(u'', email, datetime.now().isoformat(), u'')


# Add new donator to database
def insertImpl(name, email, timestamp, transaction):
	conn = sqlite3.connect(db)
	c = conn.cursor()

	license = licenceData({u'Email':email, u'Product':'Cyberduck', u'Timestamp':timestamp, u'Transaction':transaction})
	row = (name, email, license, timestamp, transaction)
	logging.info('Add license key for %s, %s', name, email)
	try:
		c.execute('insert into registration values(?,?,?,?,?)', row)
	except sqlite3.IntegrityError, (ErrorMessage):
		logging.error('Error adding license key for %s:%s', email, ErrorMessage)
		pass
	finally:
		# Save (commit) the changes
		conn.commit()
		# We can also close the cursor if we are done with it
		c.close()
	return license


def find(email):
	conn = sqlite3.connect(db)
	c = conn.cursor()
	
	t = (email,)
	try:
		c.execute('select license from registration where email=?', t)
		for row in c:
			return row[0]
	finally:
		# We can also close the cursor if we are done with it
		c.close()
	logging.warn('Lookup for %s failed', email)
	return None


def greeting(name):
	if name != None:
		return ' '.join((u'Hello', name))
	else:
		return u'Hello'
	
	
def confirm(name, to, license):
	text = greeting(name) + u",\n\nThank you very much for your support! The transaction has been completed, and another receipt from Paypal has been emailed to you.\n\nYour donation is very much appreciated and will help to advance development and make Cyberduck even better.  As a contributor to Cyberduck, you receive a donation key that disables the donation prompt which is displayed after installing or updating Cyberduck.\n\nDouble click the attached file or drag it to the Cyberduck application icon to register your donation key.\n\nPlease note that Cyberduck 3.2 or later is required.\n\nHave fun,\nDavid Kocher\n\n---\nHelp Wiki at http://help.cyberduck.ch\n---\nPost bug reports and feature requests at http://trac.cyberduck.ch/\n\n"
	body = MIMEText(text.encode('utf-8'), 'plain', 'utf-8')
	mail(name, to, body, license)


def reminder(name, to, license):
	text = greeting(name) + u",\n\nYou or someone else has requested to recover your Cyberduck Donation Key. As a contributor to Cyberduck, you receive a donation key that disables the donation prompt which is displayed after installing or updating Cyberduck.\n\nDouble click the attached file or drag it to the Cyberduck application icon to register your donation key.\n\nPlease note that Cyberduck 3.2 or later is required.\n\nHave fun,\nDavid Kocher\n\n---\nHelp Wiki at http://help.cyberduck.ch\n---\nPost bug reports and feature requests at http://trac.cyberduck.ch/\n\n"
	body = MIMEText(text.encode('utf-8'), 'plain', 'utf-8')
	mail(name, to, body, license)


def mail(name, to, body, license):
	# Create the enclosing (outer) message
	multipart = MIMEMultipart()
	multipart["Date"] = email.Utils.formatdate(localtime=1)
	multipart["Message-ID"] = email.Utils.make_msgid()
	if name != None:
		multipart['Subject'] = 'Cyberduck Donation Key for '+name
	else:
		multipart['Subject'] = 'Cyberduck Donation Key for '+to
	multipart['To'] = to
	# multipart['Bcc'] = 'license@cyberduck.ch'
	multipart['From'] = 'David Kocher <key@cyberduck.ch>'
	multipart.preamble = u'Please use a MIME-aware mail reader.\n'
	multipart.attach(body)

	ctype = 'application/octet-stream'
	maintype, subtype = ctype.split('/', 1)
	attachment = MIMEBase(maintype, subtype)
	attachment.set_payload(license)
	# Encode the payload using Base64
	encoders.encode_base64(attachment)
	# Set the filename parameter
	attachment.add_header('Content-Disposition', 'attachment', filename=to+u'.cyberducklicense')
	multipart.attach(attachment)

	# Now send the message
	s = smtplib.SMTP()
	s.connect("localhost")
	logging.info('Sending license to %s', to)
	s.sendmail("David Kocher <key@cyberduck.ch>", to, multipart.as_string())
	s.quit()
