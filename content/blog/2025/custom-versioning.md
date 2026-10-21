Title: Custom Versioning
Date: 2025-08-12 17:01
Modified: 2025-08-18 20:13
Category: Mountain Duck
Author: David Kocher
Slug: custom-versioning
Summary: With Mountain Duck 5, a new storage-independent versioning option is introduced for protocols with no support for file versioning such as FTP/SFTP, WebDAV, and OpenStack Swift. Safeguard against potential file loss with custom versioning. Stash changes to a file in a versioned folder on the server. The custom versioning option can be enabled in the

With [Mountain Duck](https://mountainduck.io/) 5, a new storage-independent versioning option is introduced for protocols with no support for file versioning such as FTP/SFTP, WebDAV, and OpenStack Swift. Safeguard against potential file loss with custom versioning. Stash changes to a file in a versioned folder on the server.

The custom versioning option can be enabled in the bookmark configuration or by default in *Preferences* → *Versions* tab.

![](/2025/08/Mountain-Duck-Preferences-Versioning.png)

Use the context menu [Info → Versions](https://docs.cyberduck.io/mountainduck/info/) to retrieve the file history where previous versions can be previewed, deleted or restored. Alternatively manage previous versions stored in the folder named `.duckversions` adjacent to the file.

![](/2025/08/Mountain-Duck-Info-Custom-Versioning.png)

More information on the settings can be found in the [documentation](https://docs.mountainduck.io/mountainduck/versions/#custom-versioning).
