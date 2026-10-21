Title: CloudFront for the rest of us with custom origins
Date: 2010-11-17 22:44
Modified: 2011-11-27 22:20
Category: Cyberduck
Tags: aws, cdn, cloudfront, custom origin, s3
Author: David Kocher
Slug: cloudfront-for-the-rest-of-us-with-custom-origins
Summary: Configuring a bucket in S3 to make its content available through the Amazon CloudFront CDN (Content distribution network) was always most straight forwarded in Cyberduck. Both distributions for static files and streaming can be configured using the Distribution tab of the Info panel when connected to your S3 account with a snap. Because Amazon has

Configuring a bucket in S3 to make its content available through the Amazon [CloudFront](http://aws.amazon.com/cloudfront/) CDN (Content distribution network) was always most [straight forwarded](http://trac.cyberduck.ch/wiki/help/en/howto/cloudfront) in Cyberduck. Both distributions for static files and streaming can be configured using the *Distribution* tab of the Info panel when connected to your S3 account with a snap.

Because [Amazon has now lifted the requirement](http://aws.amazon.com/about-aws/whats-new/2010/11/09/cloudfront-adds-support-for-custom-origins-and-sla/) to upload your content to S3 to make it available in CloudFront, their powerful CDN feature can now be used with any server used as the origin source for content. This is especially useful for content generated only on demand or where your workflow just doesn’t allow to upload content additionally to S3.

[![](http://sudo.ch/wp/uploads/2010/11/CDN.png "CDN")](http://sudo.ch/wp/uploads/2010/11/CDN.png)

As of the [latest beta and snapshot builds](http://trac.cyberduck.ch/wiki/help/en/faq#NightlyandBetabuilds) of Cyberduck, you can connect to any server using FTP or SFTP and configure it as the origin of a new Amazon CloudFront CDN distribution. We expect this to make CloudFront a lot more popular for users that are tied to existing server resources but want to make us of content distribution in the cloud.

Detailed [usage instructions](http://trac.cyberduck.ch/wiki/help/en/howto/cloudfront#CustomOriginHTTPHTTPSDistributions) can be found in the help wiki. Give it a try!
