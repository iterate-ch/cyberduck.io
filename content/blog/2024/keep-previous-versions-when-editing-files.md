Title: Keep previous versions when editing files
Date: 2024-06-27 16:16
Modified: 2024-06-27 16:16
Category: Cyberduck
Author: David Kocher
Slug: keep-previous-versions-when-editing-files
Summary: Cyberduck 9 adds a new custom file versioning feature for protocols with no native versioning support, such as FTP/SFTP and WebDAV. The feature is added as a security measure to reduce the risk of file loss when editing changes. You can enable the option by default in the Editor tab in Preferences. The versions can

Cyberduck 9 adds a new custom file versioning feature for protocols with no native versioning support, such as FTP/SFTP and WebDAV.

The feature is added as a security measure to reduce the risk of file loss when editing changes. You can enable the option by default in the *Editor* tab in Preferences.

![](/2024/04/270108656-83f25e32-240d-4007-839d-7aac2a6b7d0c.png)

The versions can be previewed, deleted or restored in [*Edit* `→` *Info `→`* *Versions*](https://docs.cyberduck.io/cyberduck/info/) with the same user interface as when working with revisions from protocols with native versioning support such as a versioned bucket in S3.

![](/2024/06/Versions-Info-Panel.png)

Technically instead of overwriting files, previous versions are moved to a folder named `.duckversions` created adjacent to the edited file. The [documentation](https://docs.cyberduck.io/cyberduck/edit/) has more details.
