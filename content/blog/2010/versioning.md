Title: Versioning
Date: 2010-06-21 18:31
Modified: 2011-11-27 22:15
Category: Cyberduck
Tags: aws, cloud, s3, versioning
Author: David Kocher
Slug: versioning
Summary: Amazon S3, the cloud storage service Cyberduck can connect to, supports a versioning feature. This allows to revert to previous revisions of a file replaced in S3. The latest snapshot build of Cyberduck supports versioning in S3 in the following way: Toggle the versioning status using File → Info → S3 Display previous versions and

Amazon S3, the cloud storage service Cyberduck can [connect](http://trac.cyberduck.ch/wiki/help/en/howto/s3) to, supports a [versioning feature](http://aws.amazon.com/s3/faqs/#What_is_Versioning). This allows to revert to previous revisions of a file replaced in S3. The latest [snapshot build](http://update.cyberduck.ch/nightly/) of Cyberduck supports versioning in S3 in the following way:

-   Toggle the versioning status using *File → Info → S3*
-   Display previous versions and deleted files in the browser using *View → Show Hidden Files*. Past revisions are displayed in a grey text colour and can be downloaded or permanently deleted like regular files.
-   Revert files to a previous version using *File → Revert* or the Browser context menu.
-   Optionally enabling [Multi-Factor Authentication (MFA)](http://aws.amazon.com/mfa/) Delete

![](http://sudo.ch/wp/uploads/2010/06/versioning.png "S3 Versioning in Cyberduck")
