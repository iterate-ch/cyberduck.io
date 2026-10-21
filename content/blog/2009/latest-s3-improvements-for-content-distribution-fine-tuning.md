Title: Latest S3 improvements for content distribution fine tuning
Date: 2009-08-14 12:56
Modified: 2009-08-14 12:56
Category: Cyberduck
Author: David Kocher
Slug: latest-s3-improvements-for-content-distribution-fine-tuning
Summary: The latest 3.2.1 point release was a maintenance release but brought much better Amazon S3 integration for those serious about content delivery using the Amazon CloudFront infrastructure. For those who have skipped the release notes, a quick reminder of the new features that let you control and fine tune your distributions from within Cyberduck. If

The latest 3.2.1 point release was a maintenance release but brought much better Amazon S3 integration for those serious about content delivery using the Amazon CloudFront infrastructure. For those who have skipped the [release notes](http://cyberduck.ch/changelog/), a quick reminder of the new features that let you control and fine tune your distributions from within Cyberduck.

-   If you want to distribute content using *BitTorrent*, the Info window now displays the URL for the selected file.
-   Temporary publicly accessible URLs are displayed in the Info window also in the S3 section. This allows to give URLs to third parties to access content that is generally not accessible from anonymous users.
-   Access Logging can be configured for both S3 and CloudFront. Log files are stored under `logs/` the S3 bucket
-   To control caching, a `Cache-Control` header can be configured for files. This allows you to minimize access costs for static content.

For more details, refer to the Cyberduck Wiki [help section on S3](http://trac.cyberduck.ch/wiki/help/en/howto/s3).

Expect support for the Rackspace CloudFiles logging feature [announced yesterday](http://www.rackspacecloud.com/blog/2009/08/cloud-files-feature-release/) in an upcoming release.
