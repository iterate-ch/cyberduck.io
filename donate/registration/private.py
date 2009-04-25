#!/usr/local/bin/python

import os
import sys
import sqlite3

import registration

from datetime import datetime
from aquaticprime import licenceData

#create table registration(name TEXT, email TEXT PRIMARY KEY, license TEXT, timestamp TEXT, transactionid TEXT);

def batch(file):
	for line in open(file, 'r'):
		insert(u'', line.rstrip())


# Add new donator to database
def insert(name, email):
	conn = sqlite3.connect(registration.db)
	c = conn.cursor()

	row = (name, email, licenceData({u'Email':email}), datetime.now().isoformat(), u'')
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


# Send registration keys to all users in the database
def reminder():
	conn = sqlite3.connect(registration.db)
	c = conn.cursor()

	try:
		c.execute('select * from registration')
		for row in c:
			name = row[0]
			email = row[1]
			license = row[2]
			print u'Sending donation key reminder to', email
			try:
				registration.reminder(name, email, license)
			except (ErrorMessage):
				print u'Error sending reminder to ' + email + ':', ErrorMessage
	finally:
		# We can also close the cursor if we are done with it
		c.close()

	