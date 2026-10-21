Title: Multiple Connections for File Transfers
Date: 2015-04-17 14:14
Modified: 2015-04-17 20:11
Category: Cyberduck
Author: David Kocher
Slug: multiple-connections-for-file-transfers
Summary: Version 4.7 of Cyberduck brings support to use multiple connections for downloads and uploads. When there are many small files this can double or triple transfer speeds because of the parallel execution. Enable Multiple Connections per default in Preferences → Transfers or when per bookmark. The maximum number of connections to open is limited with

Version [4.7](https://trac.cyberduck.io/milestone/4.7) of Cyberduck brings support to use multiple connections for downloads and uploads. When there are many small files this can double or triple transfer speeds because of the parallel execution. Enable *Multiple Connections* per default in *Preferences → Transfers* or when per bookmark. The maximum number of connections to open is limited with the control in the lower right of the *Transfers* window. Please refer to our [documentation](https://trac.cyberduck.io/wiki/help/en/howto/transfer#MultipleConnections).

[![Preferences Multiple connections for transfers](/2015/04/Preferences-Multiple-connections-for-transfers1.png)](/2015/04/Preferences-Multiple-connections-for-transfers1.png)

This feature is supported for all connection protocols for downloads & uploads. Additionally large single file uploads to OpenStack Swift (2GB threshold) and Amazon S3 (100MB threshold) will use multiple connections and upload the file in segments.

We have also worked on improving throughput for downloads with segmenting single large files into parts. This will split a download into multiple segments for concurrent transfer and assemble the file when complete. This feature is currently experimental and can be enabled manually. Refer to the [documentation](https://trac.cyberduck.io/wiki/help/en/howto/transfer#SegmentedDownloads).

To use multiple connections for file transfers with [Cyberduck CLI](https://duck.sh/), use the --parallel option.
