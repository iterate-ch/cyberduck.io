#!/usr/bin/python

import os
import sys
import sqlite3

import registration

#create table registration(name TEXT, email TEXT PRIMARY KEY, license TEXT, timestamp TEXT, transactionid TEXT);

def insertFromFile(file):
	for line in open(file, 'r'):
		insertEmail(line.rstrip())


# Send registration keys to all users in the database
def sendReminderForAll():
	conn = sqlite3.connect(registration.db)
	c = conn.cursor()
	try:
		c.execute('select * from registration')
		for row in c:
			name = row[0]
			email = row[1]
			license = row[2]
			print u'Sending donation key reminder to', email
			registration.reminder(name, email, license)
	finally:
		# We can also close the cursor if we are done with it
		c.close()
	return None

	