#!/usr/bin/env python
# -*- coding: utf-8 -*-

import os
import sys

import registration

def insert(file):
	for line in open(file, 'r'):
		registration.insert(line.rstrip())


def delete(file):
	for line in open(file, 'r'):
		registration.delete(line.rstrip())


def reminder(file):
	for line in open(file, 'r'):
		email = line.rstrip()
		registration.reminder(None, email, registration.find(email))
