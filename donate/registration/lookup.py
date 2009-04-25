#!/usr/local/bin/python

import cgi
import registration
import logging
from traceback import format_exception
from sys import exc_info

if __name__=="__main__":
	print "Content-type: text/html"
	print
	try:
		form = cgi.FieldStorage()
		email = cgi.escape(form['email'].value)
		license = registration.find(email)
		if license != None:
			registration.reminder(None, email, license)
			print u'A new donation key has been sent to your email.'
		else:
			print u'Lookup failed. You are not a registered user.'
	except:
		logging.error('Unexpected error:'.join(format_exception(*exc_info())))
		cgi.print_exception()
