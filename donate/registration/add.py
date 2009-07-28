#!/usr/bin/env python
# -*- coding: utf-8 -*-

import cgi
import registration
import logging
from traceback import format_exception
from sys import exc_info

if __name__=="__main__":
	print "Content-type: text/plain"
	print
	try:
		form = cgi.FieldStorage()
		if form.has_key("email"):
			email   = cgi.escape(form['email'].value)
			license = registration.insert(email.rstrip())
			if license != None:
				registration.reminder(None, email, license)
				print u'A new donation key has been sent to '+email+'.'
			else:
				print u'Registration failed for '+email+'.'
		else:
			print u'No registration can be found.'
	except:
		logging.error('Unexpected error:'.join(format_exception(*exc_info())))
		print u'No registration can be found.'
