#!/usr/local/bin/python

import cgi
import time
import urllib2
import sys
from urllib import urlencode
from traceback import format_exception
from sys import exc_info
import logging

import registration

#PP_URL = "https://www.sandbox.paypal.com/cgi-bin/webscr"
PP_URL = "https://www.paypal.com/cgi-bin/webscr"

def confirm(form):
	# f is the form handle to the cgi form passed by paypal
	newparams={}
	for key in form.keys():
		newparams[key]=form[key].value
	newparams["cmd"]="_notify-validate"
	params = urlencode(newparams)
	req = urllib2.Request(PP_URL)
	req.add_header("Content-type", "application/x-www-form-urlencoded")
	fo = urllib2.urlopen(PP_URL, params)
	result = fo.read()
	if result == "VERIFIED":
		logging.info('Callback verification complete')
		return True
	else:
		logging.warn('Callback verification failed')
		raise RuntimeError('Callback verification failed')


if __name__=="__main__":
	print "Content-type: text/html"
	print
	try:
		form = cgi.FieldStorage()
		if confirm(form):
			charset = form.getfirst('charset') or 'UTF8'
			status = form.getfirst('payment_status').decode(charset)
			email = form.getfirst('payer_email').decode(charset)
			if not status == "Completed":
				logging.warn('IPN Payment status %s not handled for %s', status, email)
			else:
				try:
					logging.debug('Charset is %s', charset)
					itemname = form.getfirst('item_name', '').decode(charset)
					firstname = form.getfirst('first_name', '').decode(charset)
					lastname = form.getfirst('last_name', '').decode(charset)
					name = firstname + ' ' + lastname
					timestamp = form.getfirst('payment_date', '').decode(charset)
					transaction = form.getfirst('txn_id', '').decode(charset)
					# Insert into registration database
					logging.info('Insert %s into registration database', email)
					license = registration.insert(name, email, timestamp, transaction)
					# Send confirmation
					registration.confirm(name, email, license)
					logging.info('Confirmation sent to %s', email)
				except KeyError, (ErrorMessage):
					logging.error('Missing key %s', ErrorMessage)
					raise
	except:
		logging.error('Unexpected error:'.join(format_exception(*exc_info())))
		cgi.print_exception()
