Title: Large Uploads for OpenStack Swift
Date: 2013-11-25 16:30
Modified: 2014-06-18 08:26
Category: Cyberduck
Author: David Kocher
Slug: large-uploads-for-openstack-swift
Summary: We have integrated large upload support (5GB+) in 4.4.1 contributed by Joel Wright. OpenStack Swift requires files larger than 5GB to be split into segments on upload. This is quite cumbersome to implement as it is not transparently handled by the Swift server. By default Cyberduck is configured to use segmented uploads for files larger than 2GB

We have integrated [large upload](https://trac.cyberduck.io/wiki/help/en/howto/openstack#LargeUploads) support (5GB+) in [4.4.1](https://trac.cyberduck.io/milestone/4.4.1) [contributed](https://github.com/dkocher/java-openstack-swift/pull/1) by Joel Wright. OpenStack Swift requires files larger than 5GB to be split into segments on upload. This is quite cumbersome to implement as it is not transparently handled by the Swift server. By default Cyberduck is configured to use segmented uploads for files larger than 2GB which has the advantage to allow the resume of interrupted transfers.

[![Softlayer Large Upload](/2013/11/Softlayer-Large-Upload.png)](/2013/11/Softlayer-Large-Upload.png)

As [corporate backing](http://www.openstack.org/user-stories/) of OpenStack continues to be strong we continue to improve support for Swift features and interoperability in Cyberduck.
