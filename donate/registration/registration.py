#!/usr/bin/python

import os
import sys
import smtplib
import sqlite3

from email import encoders
from email.message import Message
from email.mime.base import MIMEBase
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText

from aquaticprime import licenceData
from datetime import datetime

#create table registration(name TEXT, email TEXT PRIMARY KEY, license TEXT, timestamp TEXT, transactionid TEXT);

db = 'donations.sqlite'

def insert(email):
	conn = sqlite3.connect(db)
	c = conn.cursor()

	row = (u'', email, licenceData({u'Email':email}), datetime.now().isoformat(), u'')
	print 'Add license key for ' + email
	try:
		c.execute('insert into registration values(?,?,?,?,?)', row)
	except sqlite3.IntegrityError, (ErrorMessage):
		print u'Error adding license key for ' + email + ':', ErrorMessage
		pass
	finally:
		# Save (commit) the changes
		conn.commit()
		# We can also close the cursor if we are done with it
		c.close()


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
	return None


def reminder(email):
	reminder(None, email, find(email))


def reminder(name, email, license):
	if license:
		# Create the enclosing (outer) message
		outer = MIMEMultipart()
		outer['Subject'] = 'Cyberduck Donation Key'
		outer['To'] = email
		outer['From'] = 'David Kocher <key@cyberduck.ch>'
		outer.preamble = u'Please use a MIME-aware mail reader.\n'
		if name != None:
			greeting = ' '.join(('Hello', name, ','))
		else:
			greeting = ''
		text = greeting + u"\nYou or someone else has requested to recover your Cyberduck Donation Key. As a contributor to Cyberduck, you receive a donation key that disables the donation prompt which is displayed after installing or updating Cyberduck.\n\nDouble click the attached file to register your donation key with Cyberduck.\n\nPlease not that Cyberduck 3.2 or later is required.\n\nBest Regards,\nDavid Kocher\n\n---\nPost bug reports and feature requests at http://trac.cyberduck.ch/\n---\nHelp Wiki at http://help.cyberduck.ch"
		body = MIMEText(text, 'plain')
		outer.attach(body)

		ctype = 'application/octet-stream'
		maintype, subtype = ctype.split('/', 1)
		attachment = MIMEBase(maintype, subtype)
		attachment.set_payload(license)
		# Encode the payload using Base64
		encoders.encode_base64(attachment)
		# Set the filename parameter
		attachment.add_header('Content-Disposition', 'attachment', filename=email+u'.cyberducklicense')
		outer.attach(attachment)

		# Now send the message
		s = smtplib.SMTP()
		s.connect("localhost")
		s.sendmail("David Kocher <key@cyberduck.ch>", email, outer.as_string())
		s.quit()
		return True
	else:
		return False			
