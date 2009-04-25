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
		return False


if __name__=="__main__":
	print "Content-type: text/html"
	print
	try:
		form = cgi.FieldStorage()
		if confirm(form):
			status = form['payment_status'].value
			email = form['payer_email'].value
			if not status == "Completed":
				logging.warn('IPN Payment status %s not handled for %s', status, email)
			else:
				try:
					itemname = form['item_name'].value
					firstname = form['first_name'].value
					lastname = form['last_name'].value
					name = firstname + ' ' + lastname
					timestamp = form['payment_date'].value
					transaction = form['txn_id'].value
					# Insert into registration database
					logging.info('Insert %s into registration database', email)
					license = registration.insert(name, email, timestamp, transaction)
					# Send confirmation
					#registration.confirm(name, email, license)
					#logging.info('Confirmation sent to %s', email)
				except KeyError, (ErrorMessage):
					logging.error('Missing key %s', ErrorMessage)
					cgi.print_exception()
	except:
		logging.error('Unexpected error:'.join(format_exception(*exc_info())))
		cgi.print_exception()
