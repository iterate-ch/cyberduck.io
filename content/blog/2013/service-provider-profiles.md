Title: Service Provider Profiles
Date: 2013-04-05 17:10
Modified: 2013-10-10 13:58
Category: Cyberduck
Author: David Kocher
Slug: service-provider-profiles
Summary: There are many new providers pushing into the cloud storage market accessing open protocols that Cyberduck supports, OpenStack being the most relevant in the party. As we don’t want the connection dropdown list in the connection panel of Cyberduck to grow to a confusingly long list we tend not to add every single provider entering

There are many new providers pushing into the cloud storage market accessing open protocols that Cyberduck supports, OpenStack being the most relevant in the party. As we don’t want the connection dropdown list in the connection panel of Cyberduck to grow to a confusingly long list we tend not to add every single provider entering the market to the list. But to simplify the connection setup for customers, we publish so called [connection profiles](http://trac.cyberduck.ch/wiki/help/en/howto/connection#ConnectionProfiles) in collaboration with providers. These profiles contain specific connection settings for a hosting provider and a custom icon to make it easily recognizable in the list of bookmarks. To install, just double click a connection profile (*.cyberduckprofile)* (both on Mac & Windows supported) to register it with Cyberduck.

[![Dump Truck](/2013/04/Dump-Truck.png)](/2013/04/Dump-Truck.png)[![greenqloud](/2013/04/greenqloud.png)](http://trac.cyberduck.ch/wiki/help/en/howto/greenqloud) [![hpcloud](/2013/04/hpcloud.png)](http://trac.cyberduck.ch/wiki/help/en/howto/hpcloud)

Some profiles recently published include:

-   [HP Cloud Object Storage](http://trac.cyberduck.ch/wiki/help/en/howto/hpcloud), built on OpenStack™ technology.
-   [GreenQloud](http://trac.cyberduck.ch/wiki/help/en/howto/greenqloud), offering [S3 compatible](http://trac.cyberduck.ch/wiki/help/en/howto/s3) storage only using renewable energy in Ireland.
-   [DreamObjects Cloud Storage](http://trac.cyberduck.ch/wiki/help/en/howto/dreamobjects), both [Amazon S3](http://trac.cyberduck.ch/wiki/help/en/howto/s3) and OpenStack [Swift](http://trac.cyberduck.ch/wiki/help/en/howto/openstack) compatible.
-   [Cloud.ca](http://trac.cyberduck.ch/wiki/help/en/howto/cloud-ca), located in Canada using OpenStack Swift.
-   [Dump Truck Online Storage](http://trac.cyberduck.ch/wiki/help/en/howto/dumptruck) by Golden Frog.

With the connection profile installed, only the user credentials must be provided to login with the hostname, port and protocol preconfigured.

**Update** Technical documentation has been posted to the [wiki](https://trac.cyberduck.ch/wiki/help/en/howto/profiles).
