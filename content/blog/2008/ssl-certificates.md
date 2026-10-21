Title: Certificate Trust Management
Date: 2008-03-31 17:43
Modified: 2008-03-31 17:43
Category: Cyberduck
Author: David Kocher
Slug: ssl-certificates
Summary: I have recently changed the implementation to verify SSL certificates, which is used for secured FTP, WebDAV and Amazon S3 connections. Cyberduck 3 will honour the trust settings you can configure in Keychain.app and will display the certificate chain that fails validation upon connecting to a server. Previously, a custom dialog was shown which is

I have recently changed the implementation to verify SSL certificates, which is used for secured FTP, WebDAV and Amazon S3 connections. Cyberduck 3 will honour the trust settings you can configure in Keychain.app and will display the certificate chain that fails validation upon connecting to a server. Previously, a custom dialog was shown which is now replaced by the same standard dialog (which allows editing the trust settings) used in Safari.app or Mail.app.

[![Certificate Trust Setting](http://sudo.ch/wp/uploads/thumb-cert.jpg)](http://sudo.ch/wp/uploads/cert.jpg)

Cyberduck 3.0 is expected to be released next month. The current [nightly build](http://update.cyberduck.ch/nightly/) (use with caution) is available for testing.
