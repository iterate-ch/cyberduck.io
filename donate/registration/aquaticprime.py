#!/usr/bin/python
import os
import sha

from base64 import decodestring as b64decode
from base64 import encodestring as b64encode
from binascii import unhexlify as hex2bin

pubKey = u'0xAF026CFCF552C3D09A051124A596CEF7BBB26B15629504CD163B09675BE507C9C526ED3DBFCB91B78F718E0886A18400B56BC00E9213228CD6D6E9C84D8B6099AA3DE6E6F46F6CC7970982DE93A2A7318351FDFA25AE75B403996E50BB40643384214234E84EDA3E518772A4FF57FE29DD7C77A5EEB14C9023CA18FEC63236EF'
privKey = u'***REMOVED***'

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

#print licenceData({u'name':u'koen'})