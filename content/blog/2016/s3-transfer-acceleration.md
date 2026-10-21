Title: S3 Transfer Acceleration
Date: 2016-10-19 20:38
Modified: 2016-11-04 14:37
Category: Cyberduck
Author: David Kocher
Slug: s3-transfer-acceleration
Summary: Amazon S3 Transfer Acceleration enables fast, easy, and secure transfers of files over long distances between your client and an S3 bucket. Transfer Acceleration takes advantage of Amazon CloudFront’s globally distributed edge locations. As the data arrives at an edge location, data is routed to Amazon S3 over an optimized network path. In general, the farther

> Amazon S3 Transfer Acceleration enables fast, easy, and secure transfers of files over long distances between your client and an S3 bucket. Transfer Acceleration takes advantage of Amazon CloudFront’s globally distributed edge locations. As the data arrives at an edge location, data is routed to Amazon S3 over an optimized network path. In general, the farther away you are from an Amazon S3 region, the higher the speed improvement (up to 300% faster) you can expect from using Amazon S3 Transfer Acceleration.

Cyberduck [5.2](https://cyberduck.io/changelog) and Mountain Duck [1.6](https://mountainduck.io/changelog/) now uses the accelerate endpoints for file transfers to S3 when enabled for the bucket. Refer to the [wiki](https://trac.cyberduck.io/wiki/help/en/howto/s3#TransferAcceleration) for more information.

[![s3-transfer-acceleration](/2016/10/S3-Transfer-Acceleration.png)](/2016/10/S3-Transfer-Acceleration.png)
