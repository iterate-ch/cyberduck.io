#!/usr/local/bin/python

import os
import sha

from base64 import decodestring as b64decode
from base64 import encodestring as b64encode
from binascii import unhexlify as hex2bin

pubKey = open('public.key', 'r').read() 
privKey = open('private.key', 'r').read() 

def hex2dec(s):
	return int(s, 16)

def dec2hex(n):
	val = "%X" % n
	while len(val) < 256:
		val = '0' + val
	return val

def powmod(x,a,m):
	r=1
	while a>0:
		if a%2==1: r=(r*x)%m
		a=a>>1; x=(x*x)%m
	return r

def reverse(s):
	rs = ""
	for x in s:
		rs = x + rs
	return rs

def getSignature(information):
	
	keys = information.keys()
	keys.sort()
	
	total = u''.join([information[key] for key in keys]).replace(u"'", u"'\\''")
	
	hash = sha.new(total.encode('utf-8')).hexdigest()
	
	paddedHash = '0001'

	for i in range(0, 105):
		paddedHash += 'ff'

	paddedHash += '00' + hash
		
	decryptedSig = hex2dec(paddedHash)
	
	sig = powmod(decryptedSig, hex2dec(privKey), hex2dec(pubKey))
	sig = dec2hex(sig)
	sig = hex2bin(sig)
	sig = b64encode(sig)

	return sig

def licenceData(license_info):
	
	# license_info should be a dict with all the licence items
	
	keys = license_info.keys()
	keys.sort()
	
	signature = getSignature(license_info)
	
	licence_data = u"<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n"
	licence_data += u"<!DOCTYPE plist PUBLIC \"-//Apple Computer//DTD PLIST 1.0//EN\" \"http://www.apple.com/DTDs/PropertyList-1.0.dtd\">\n"
	licence_data += u"<plist version=\"1.0\">\n<dict>\n"

	for key in keys:

		licence_data += u"\t<key>" + key + u"</key>\n"
		licence_data += u"\t<string>" + license_info[key] + u"</string>\n"

	licence_data += u"\t<key>Signature</key>\n"
	licence_data += u"\t<data>" + signature + u"</data>\n"
	licence_data += u"</dict>\n"
	licence_data += u"</plist>\n"
	
	return licence_data
