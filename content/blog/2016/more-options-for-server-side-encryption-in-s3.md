Title: More options for Server Side Encryption in S3
Date: 2016-05-23 13:19
Modified: 2016-07-03 16:14
Category: Cyberduck
Author: David Kocher
Slug: more-options-for-server-side-encryption-in-s3
Summary: Server side encryption (SSE) for stored files is supported and can be enabled by default for all uploads in the S3 preferences or for individual files in the File → Info (⌘-I) → S3. AWS handles key management and key protection for you. Cyberduck previously supported server-side encryption using SSE-S3 where files are encrypted with a

Server side encryption ([SSE](http://docs.aws.amazon.com/AmazonS3/latest/dev/serv-side-encryption.html)) for stored files is supported and can be enabled by default for all uploads in the S3 preferences or for individual files in the *File → Info (⌘-I) → S3*. AWS handles key management and key protection for you. Cyberduck previously supported server-side encryption using SSE-S3 where files are encrypted with a default key managed by S3 using AES-256.

Cyberduck [5.0](https://trac.cyberduck.io/milestone/5.0) and later now supports the use of private keys used for servers-side encryption of files uploaded to S3 managed in AWS Key Management Service ([KMS](https://aws.amazon.com/kms/)). The dropdown list in the *Info *panel allows to choose from all private keys managed in AWS Key Management Service (KMS). This requires the kms:ListKeys and kms:ListKeys permission for the AWS credentials used to connect to S3.

[![AWS SSE-KMS Private Key Selection](/2016/05/AWS-SSE-KMS-Private-Key-Selection.png)](/2016/05/AWS-SSE-KMS-Private-Key-Selection.png)

You can give it a try in the latest [snapshot build](https://trac.cyberduck.io/wiki/help/en/howto/preferences#Update).
