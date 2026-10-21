Title: File History in Mountain Duck 4
Date: 2020-06-17 19:24
Modified: 2020-06-17 19:24
Category: Mountain Duck
Author: Laura Vogt
Slug: file-history-in-mountain-duck-4
Summary: Mountain Duck 4 adds a file history feature which allows you to see which files were recently edited by you or someone else on the server and which files are currently transferred or pending synchronization. Synchronization Progress The sync progress area of the file history section shows the files that currently get synchronized and the

[Mountain Duck 4](https://mountainduck.io/) adds a file [history](https://trac.cyberduck.io/wiki/help/en/howto/mount/sync/history) feature which allows you to see which files were recently edited by you or someone else on the server and which files are currently transferred or pending synchronization.

![](/2020/02/Recent-Files.png)

## Synchronization Progress

The sync progress area of the file history section shows the files that currently get synchronized and the files that will get synchronized after the current synchronization process. There are different synchronization states that can get displayed within that area: idle, active synchronization process, and prepare for synchronization.

Shown for active synchronization processes are transfer rate, remaining data, and already transferred data. If Mountain Duck synchronizes files in a badge, the file state might differ to the state within the file browser. The sync progress display limit is five entries.

Clicking on a file in the sync progress Mountain Duck reveals it in Finder or File Explorer on Windows.

## Recently used Files

The second key section of the file history feature is the *Recent Files* area in which you can see the last 20 items that Mountain Duck uses for one of the following processes: delete, create, upload, and download. Also, a file may show up with an error state indicating an issue while synchronizing. Further details are available through the Finder or Explorer extension sync options menu item.

Clicking on a file in the *Recent Files* section Mountain Duck reveals it in Finder or File Explorer on Windows. You can clear out all entries of the list by clicking on the Clear Menu button at the end of the file history menu.
