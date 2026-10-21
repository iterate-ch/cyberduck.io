Title: 4.4. What’s inside.
Date: 2013-10-25 13:54
Modified: 2013-10-25 13:55
Category: Cyberduck
Author: David Kocher
Slug: 4-4-whats-inside
Summary: We have put a lot of effort into the 4.4 release (now available for download and currently in review in the Mac App Store) which caused it to be be postponed for several months behind original schedule. There are various aspects we wanted to cleanup in Cyberduck, some of them I want to highlight here.

We have put a lot of effort into the [4.4](https://trac.cyberduck.ch/milestone/4.4) release (now available for download and currently in review in the Mac App Store) which caused it to be be postponed for several months behind original schedule.

There are various aspects we wanted to cleanup in Cyberduck, some of them I want to highlight here.

**Foundation Libraries. **There core of Cyberduck includes protocol implementations. We make use of open source implementations of WebDAV ([Sardine](https://github.com/lookfirst/sardine)) and SFTP ([Ganymed SSH2](https://code.google.com/p/ganymed-ssh-2/)) to which we contribute. For 4.4 we forked a new OpenStack Swift client library ([OpenStack Swift Client Java Bindings](https://github.com/dkocher/java-openstack-swift)) to support [multiple regions](https://trac.cyberduck.ch/ticket/6902) and allow [Keystone](https://trac.cyberduck.ch/ticket/6330) authentication.

**Embedded Runtime.** We wanted to get rid of the install requirement for Java on OS X and bundle the runtime with Cyberduck as we previously already did for the Mac App Store version. The embedded runtime is now the default.

**More reliable transfers**. We now fail fast on errors during a multi file transfer and offer the option to continue with the remaining files or abort the transfer. The refactored code is also a lot more efficient determining the transfer action for duplicate files.

**Safer edits. **When editing files on the server, changes are now uploaded by default with a temporary name and moved only when the upload completes.

**Tests**. We are tired of regression bugs between versions and added 830 new unit and integration tests to make our code bullet proof to upcoming changes. We are now running continuous builds executing all tests with [coverage and rule compliance tests](https://sonar.cyberduck.ch/dashboard/index/822). To make our code testable we refactored our core package shared between the Mac & Windows versions and fixed some [100 bugs](https://trac.cyberduck.ch/query?status=closed&group=resolution&milestone=4.4) on the way. We are now having a zero known bugs day in our [issue tracker](https://trac.cyberduck.ch/query?status=assigned&status=new&status=reopened&group=component&max=500&col=id&col=summary&col=status&col=type&col=priority&col=milestone&col=component&order=priority). The refactoring also allows to share more code in use on both Mac & Windows. This will lead to the same problems on both platforms and helps to reduce our support effort.

And, yes, we updated our [website](http://cyberduck.ch) with a new responsive design to salute the 4.4 release.
