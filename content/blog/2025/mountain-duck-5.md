Title: Mountain Duck 5
Date: 2025-08-19 11:12
Modified: 2025-08-20 10:58
Category: Mountain Duck
Author: David Kocher
Slug: mountain-duck-5
Summary: We are thrilled to announce Mountain Duck 5, the premier choice to mount server and cloud storage as a disk in Finder on macOS and the File Explorer on Windows. Version 5 is a solid major upgrade in development for several years with many new features and refinements, including a new Integrated Connect Mode, storage-independent file versioning

We are thrilled to announce [Mountain Duck 5](https://mountainduck.io/), the premier choice to mount server and cloud storage as a disk in *Finder* on macOS and the *File Explorer* on Windows. Version 5 is a solid major upgrade in development for several years with many new features and refinements, including a new Integrated Connect Mode, storage-independent file versioning support, and SMB connections.

## New Features

### Integrated Connect Mode

Mountain Duck 5 features a new [*Integrated* connect mode](https://docs.mountainduck.io/mountainduck/connect/integrated/) using native APIs on Windows & macOS to integrate in the file explorer. No device driver installation or network mount required. The connect mode delivers significantly faster file write performance and file operations that match the speed of local disk operations, and a user experience similar to OneDrive on Windows or iCloud Drive on macOS but with any cloud storage provider of your choice.

![](/2024/01/Screenshot-2024-01-30-at-10.50.15.png)

Windows Search and Spotlight on macOS can be used to search for files on remote storage in *Integrated* connect mode.

See also the blog post [Integrated Connect Mode](/2025/08/12/integrated-connect-mode/) for this feature.

### SMB Support

As already available in [Cyberduck](https://cyberduck.io/), Mountain Duck 5 expands its protocol support with the addition of [SMB (Server Message Block)](https://docs.mountainduck.io/protocols/smb/), enabling seamless connectivity to Windows file shares, Linux Samba, macOS File Sharing & Azure File Shares.


<div class="wp-block-image">
<figure class="aligncenter size-large is-resized"><a href="/2024/01/Screenshot-2024-01-30-at-11.32.47.png"><img width="1024" height="790" src="/2024/01/Screenshot-2024-01-30-at-11.32.47.png" alt="" class="wp-image-2825" style="width:592px;height:auto" /></a></figure>
</div>


See also dedicated blog post [SMB Protocol Support](/2023/10/18/smb-protocol-support/) for this feature.

### Activity Window

Track and cancel currently running sync operations in the new *Activity* panel available from the status bar (macOS) or tray (Windows) menu. It shows all running operations on files, pending sync tasks as well as any pending mount process.


<div class="wp-block-image">
<figure class="aligncenter size-full is-resized"><a href="/2024/01/Screenshot-2024-01-30-at-11.05.11.png"><img width="962" height="458" src="/2024/01/Screenshot-2024-01-30-at-11.05.11.png" alt="" class="wp-image-2827" style="width:521px;height:auto" /></a></figure>
</div>


### Custom Versioning

The new [Custom Versioning](https://docs.mountainduck.io/mountainduck/versions/#custom-versioning) feature allows to safeguard and restore previous file versions. The previous version is stashed away before overwriting a file.


<div class="wp-block-image">
<figure class="aligncenter size-large is-resized"><a href="/2024/01/Screenshot-2024-01-30-at-10.49.42.png"><img width="1024" height="282" src="/2024/01/Screenshot-2024-01-30-at-10.49.42.png" alt="" class="wp-image-2828" style="width:585px;height:auto" /></a></figure>
</div>


The option is available for all protocols with no support of file versioning such as [FTP](https://docs.mountainduck.io/protocols/ftp/), [SFTP](https://docs.mountainduck.io/protocols/sftp/) or [WebDAV](https://docs.mountainduck.io/protocols/webdav/) ensuring your files are protected with version history regardless of the underlying storage protocol. File versions can be view and restored in the [Info window](https://docs.cyberduck.io/mountainduck/info/).

See also the blog post [Custom Versioning](/2025/08/12/custom-versioning/) for this feature.

## Pricing

Version 5 is the first paid upgrade after [version 4 debuted](/2020/06/18/mountain-duck-4/) in June 2020 with 17 free minor updates released since. Users with a license for version 4 receive an [upgrade](https://mountainduck.io/buy/upgrade/) discount between 20% to 100%.
