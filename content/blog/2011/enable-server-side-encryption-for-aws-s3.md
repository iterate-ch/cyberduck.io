Title: Enable server side encryption for AWS S3
Date: 2011-11-07 11:03
Modified: 2011-11-27 22:16
Category: Cyberduck
Tags: aws, cloud, encryption, s3
Author: David Kocher
Slug: enable-server-side-encryption-for-aws-s3
Summary: The latest snapshot build of Cyberduck for Mac & Windows allows the configuration of server side encryption for files in Amazon S3. Server side encryption provides you the ability to encrypt data stored in Amazon S3. You can encrypt data on upload simply by selecting AES256 as the default encryption algorithm for uploads to S3

The latest [snapshot build](http://trac.cyberduck.ch/wiki/help/en/faq#SnapshotandBetabuilds) of Cyberduck for Mac & Windows allows the configuration of server side encryption for files in Amazon S3. Server side encryption provides you the ability to encrypt data stored in Amazon S3. You can encrypt data on upload simply by selecting *AES256* as the default encryption algorithm for uploads to S3 in the Preferences or selecting the checkbox in the Info panel for data already uploaded. Decryption happens automatically when data is retrieved.

[![](http://sudo.ch/wp/uploads/2011/11/AWS-Sever-Side-Encryption.png "AWS Sever Side Encryption")](http://sudo.ch/wp/uploads/2011/11/AWS-Sever-Side-Encryption.png)
