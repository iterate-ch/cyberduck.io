#!/usr/local/bin/python

import cgi
import os
import registration

print "Content-Type: text/plain"    # is following
print                               # blank line, end of he	
try:
	form = cgi.FieldStorage()
	if form.has_key("email"):
		email = form["email"].value
		license = registration.find(email)
		if license != None:
			registration.reminder(None, email, license)
			print u'A new donation key has been sent to your email.'
		else:
			print u'Lookup failed.'
	else:
		print u'Lookup failed.'
except:
	print u'Lookup failed.'
	