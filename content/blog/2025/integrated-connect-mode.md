Title: Integrated Connect Mode
Date: 2025-08-12 17:02
Modified: 2025-08-20 09:35
Category: Mountain Duck
Author: David Kocher
Slug: integrated-connect-mode
Summary: The new Integrated connect mode in Mountain Duck 5 synchronizes files and folders from a directory on the local disk with support from macOS and Windows. While the Online and Smart Synchronization modes use device driver on Windows and NFS on macOS respectively to mount connections, the Integrated mode uses the tightly integrated File Provider (macOS) and Cloud

The new [*Integrated* connect mode](https://docs.cyberduck.io/mountainduck/connect/integrated/) in [Mountain Duck](https://mountainduck.io/) 5 synchronizes files and folders from a directory on the local disk with support from macOS and Windows.

![](/2025/08/Mountain-Duck-5.png)

![](/2025/08/Mountain-Duck-5-Screenshot-Windows-scaled.png)

While the *[Online](https://docs.mountainduck.io/mountainduck/connect/online/)* and *[Smart Synchronization](https://docs.mountainduck.io/mountainduck/connect/sync/)* modes use device driver on Windows and NFS on macOS respectively to mount connections, the *Integrated* mode uses the tightly integrated *File Provider* (macOS) and *Cloud Files* (Windows) APIs to sync files from regular folder on the local disk like iCloud or OneDrive does. It allows faster writing and copy processes and access to cached content when offline.


<figure class="wp-block-image size-large is-resized"><a href="/2024/01/Screenshot-2024-01-30-at-10.50.15-1.png"><img width="1024" height="230" src="/2024/01/Screenshot-2024-01-30-at-10.50.15-1.png" alt="" class="wp-image-2839" style="width:841px;height:auto" /></a></figure>


### Synchronization

The usage of dedicated operating system features for syncing make Mountain Duck 5 future proof. Like in [*Smart Synchronization*](https://docs.cyberduck.io/mountainduck/connect/sync/) connect mode, files are displayed as placeholders, cached on local disk and optionally selected to always keep offline.


<div class="wp-block-image">
<figure class="aligncenter size-large is-resized"><a href="/2025/08/Mountain-Duck-Context-Menu-Windows.png"><img width="1024" height="783" src="/2025/08/Mountain-Duck-Context-Menu-Windows.png" alt="" class="wp-image-3072" style="width:628px;height:auto" /></a></figure>
</div>


The improved user experience includes familiar file management controls directly within Finder and Windows Explorer, allowing users to easily select files to keep offline, remove cached data, or exclude items from synchronization. Visual indicators provide instant feedback on synchronization status through additional icons displayed next to filenames. Real-time progress is shown during file transfers with progress bars over file icons and circular progress indicators, giving users complete visibility into upload and download operations.

### Additional Context Menu Items

Additional context menu items in Windows Explorer and Finder.app on macOS provided by the system allow to download files or free up space for files already cached.

### Spotlight

*Windows Search* and *Spotlight* on macOS can be used to search for files on remote storage in *Integrated* connect mode.

![](/2025/08/Mountain-Duck-Spotlight-Search.png)

### New Default

The *Integrated* connect mode is the default for new connections configured. Existing bookmarks retain the connect mode when an existing cache location is found.
