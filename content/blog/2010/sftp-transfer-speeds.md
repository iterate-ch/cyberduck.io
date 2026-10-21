Title: SFTP transfer speeds
Date: 2010-11-17 22:23
Modified: 2011-11-27 22:18
Category: Cyberduck
Tags: sftp, ssh
Author: David Kocher
Slug: sftp-transfer-speeds
Summary: We recently did an in-depth session to analyze the reasons of inferior SFTP throughput rates for file transfers compared to OpenSSH. We have a resolution that should give much better results now that makes use of parallel requests in the SFTP protocol layer. You can switch to the latest beta build that includes the fix

We recently did an in-depth session to analyze the reasons of [inferior SFTP throughput rates](http://trac.cyberduck.ch/ticket/185) for file transfers compared to OpenSSH. We have a resolution that should give much better results now that makes use of parallel requests in the SFTP protocol layer.

[![](http://sudo.ch/wp/uploads/2010/11/SFTP-Transfer.png "SFTP Transfer")](http://sudo.ch/wp/uploads/2010/11/SFTP-Transfer.png)

You can [switch](http://trac.cyberduck.ch/wiki/help/en/faq#NightlyandBetabuilds) to the latest beta build that includes the fix to give it a try. If you are in the private beta for Windows, use *Check for Update…* to update automatically.
