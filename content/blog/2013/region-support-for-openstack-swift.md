Title: Region support for OpenStack Swift
Date: 2013-07-02 13:00
Modified: 2013-07-21 22:09
Category: Cyberduck
Tags: cloudfiles, hpcloud, openstack, rackspace, swift
Author: David Kocher
Slug: region-support-for-openstack-swift
Summary: The latest snapshot build supports Keystone (2.0) authentication for OpenStack Swift connections. While only of technical interest, this allows to access all regions supported by cloud providers with an OpenStack Swift installation. For Rackspace Cloudfiles this will list both Dallas (DFW) and Chicago (ORD) located containers in the browser window. For HP Cloud the connection profile has

The latest [snapshot](https://trac.cyberduck.ch/wiki/help/en/faq#SnapshotandBetabuilds) build supports Keystone (2.0) authentication for OpenStack Swift connections. While only of technical interest, this allows to access all regions supported by cloud providers with an OpenStack Swift installation. For [Rackspace Cloudfiles](https://trac.cyberduck.ch/wiki/help/en/howto/cloudfiles) this will list both Dallas (DFW) and Chicago (ORD) located containers in the browser window. For [HP Cloud ](https://trac.cyberduck.ch/wiki/help/en/howto/hpcloud)the connection profile has also been updated to use the new authentication scheme to support *US East* and *US West *regions transparently.

[![HP Cloud Multiple Regions](/2013/07/HP-Cloud-Multiple-Regions.png)](/2013/07/HP-Cloud-Multiple-Regions.png)

 

**Update** You can now choose the region when creating a new container. The regions available is determined from the authentication response of the OpenStack Identity service. We have added a [connection profile to the wiki ](https://trac.cyberduck.ch/wiki/help/en/howto/openstack#Authenticationwithkeystoneforcontextv2.0tokens)to connect to any OpenStack Swift installation using Keystone Auth 2.0 authentication.
