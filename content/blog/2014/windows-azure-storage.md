Title: Windows Azure Storage
Date: 2014-01-30 15:46
Modified: 2014-01-30 15:46
Category: Cyberduck
Author: David Kocher
Slug: windows-azure-storage
Summary: We are about to reintroduce support for Windows Azure Storage on a new solid foundation after we dumped support some time ago. The new implementation in Cyberduck is fast and supports features such as editing metadata, editing ACLs on containers and copying shared signature URLs for giving temporary access to users with a time limited

[![azure](/2014/01/azure.png)](/2014/01/azure.png)

We are about to reintroduce support for [Windows Azure Storage](https://trac.cyberduck.ch/wiki/help/en/howto/azure) on a new solid foundation after we [dumped support some time ago](/2013/04/05/spring-cleaning/). The new implementation in Cyberduck is fast and supports features such as editing metadata, editing ACLs on containers and copying shared signature URLs for giving temporary access to users with a time limited signed URL to files in a container.

We plan to enable Windows Azure Storage by default in version [4.5](https://trac.cyberduck.io/milestone/4.5). If you want to give it a try just now, install the latest [snapshot build](https://trac.cyberduck.io/wiki/help/en/faq#SnapshotandBetabuilds) and install the [Azure connection profile](https://svn.cyberduck.io/trunk/profiles/Azure.cyberduckprofile).
