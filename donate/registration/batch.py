#!/usr/local/bin/python

import os
import sys
import sqlite3

from datetime import datetime

import registration

def insert(file):
	for line in open(file, 'r'):
		registration.insert(u'', line.rstrip(), datetime.now().isoformat(), u'')

def delete(file):
	for line in open(file, 'r'):
		registration.delete(line.rstrip())


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

	