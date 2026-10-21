Title: Upload 5TB
Date: 2011-01-22 15:37
Modified: 2011-01-22 15:37
Category: Cyberduck
Author: David Kocher
Slug: upload-5tb
Summary: The latest snapshot build of Cyberduck supports multipart uploads to Amazon S3. The benefits are twofold: Concurrent upload of parts of the file (currently configured up to 10 parallel requests) making use of all available bandwidth. The size limit for files is 5TB instead of 5GB. Give it a try if you are moving big

The latest [snapshot build](http://trac.cyberduck.ch/wiki/help/en/faq#NightlyandBetabuilds) of Cyberduck supports [multipart uploads](http://aws.amazon.com/about-aws/whats-new/2010/11/10/Amazon-S3-Introducing-Multipart-Upload/) to Amazon S3. The benefits are twofold:

-   Concurrent upload of parts of the file (currently configured up to 10 parallel requests) making use of all available bandwidth.
-   The size limit for files is 5TB instead of 5GB.

Give it a try if you are moving big files.
