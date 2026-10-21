Title: Protect files in S3 with server side encryption
Date: 2015-05-20 13:39
Modified: 2016-04-05 14:53
Category: Cyberduck
Author: David Kocher
Slug: protect-files-in-s3-with-server-side-encryption
Summary: Server side encryption for file uploads to S3 is not new and supported since version 4.2. Still we want to give short summary how to ensure all files uploaded to a bucket are protected. Create a new bucket in S3 choosing File → New Folder… in Cyberduck. Refer to Create a bucket. Enforce encryption by

Server side encryption for file uploads to S3 is not new and supported since version [4.2](https://trac.cyberduck.io/milestone/4.2). Still we want to give short summary how to ensure all files uploaded to a bucket are protected.

-   Create a new bucket in S3 choosing *File → New Folder…* in Cyberduck. Refer to [Create a bucket](https://trac.cyberduck.io/wiki/help/en/howto/s3#Creatingabucket).

-   Enforce encryption by applying a bucket policy using the AWS S3 console. Choose *Edit Bucket Policy* and enter the policy

        {
         "Version": "2012-10-17",
         "Id": "PutObjPolicy",
         "Statement": [
         {
           "Sid": "DenyUnEncryptedObjectUploads",
           "Effect": "Deny",
           "Principal": "*",
           "Action": "s3:PutObject",
           "Resource": "arn:aws:s3:::bucketname/*",
           "Condition": {
             "StringNotEquals": {
               "s3:x-amz-server-side-encryption": "AES256"
             }
           }
          }
        ]
        }

-   In *Preferences… → S3 → Encryption* choose *AES256* as the default.

You can verify an object is encrypted in S3, by choosing *⌘-I* for a object and choose the *S3* tab. Ensure the *Server Side Encryption* checkbox is selected.  
[![S3 Server Side Encryption](/2015/05/S3-Server-Side-Encryption.png)](/2015/05/S3-Server-Side-Encryption.png)

References

-   [Protecting Data Using Server-Side Encryption with Amazon S3-Managed Encryption Keys (SSE-S3](http://docs.aws.amazon.com/AmazonS3/latest/dev/UsingServerSideEncryption.html)
