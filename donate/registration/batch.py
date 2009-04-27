#!/usr/bin/env python
# -*- coding: utf-8 -*-

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


def reminder(file):
	for line in open(file, 'r'):
		email = line.rstrip()
		registration.reminder(None, email, registration.find(email))
