Title: Alternative to the official Dropbox client
Date: 2023-03-07 13:32
Modified: 2023-03-07 13:32
Category: Cyberduck
Categories: Cyberduck, Mountain Duck
Tags: dropbox
Author: David Kocher
Slug: alternative-to-the-official-dropbox-client
Summary: Dropbox recently adopted the File Provider API available on macOS to be used as the exclusive way to synchronize files with their own app. The most prominent change from a user perspective is the limitation to store all synchronized files in ~/Library/CloudStorage as required by the File Provider API. Many users with large data sets

Dropbox recently [adopted](https://help.dropbox.com/installs/macos-support-for-expected-changes) the File Provider API available on macOS to be used as the exclusive way to synchronize files with their own app. The most prominent change from a user perspective is the limitation to store all synchronized files in *~/Library/CloudStorage* as required by the File Provider API. Many users with large data sets preferred to set a custom location on an external disk previously which is no longer an option.

## Use Mountain Duck instead of the official Dropbox client

[Mountain Duck](https://mountainduck.io/) is a viable alternative to the official Dropbox client. It allows to connect to and synchronize your files in Dropbox without any additional bloat. In Mountain Duck [Preferences](https://docs.mountainduck.io/mountainduck/preferences/#cache-location), you can change your cache location to a different folder or even to an external drive.

![](/2023/03/Mountain-Duck-Sync-Preferences.png)

### Connecting to Dropbox

Mounting your *Dropbox* in Finder is straight forward using Mountain Duck:

-   Select *Open Connection* within the Mountain Duck dropdown menu
-   A new [bookmark](https://docs.mountainduck.io/mountainduck/interface/#bookmarks) window will pop up
-   Select *Dropbox* from the protocol section on the top and choose *Connect*
-   Your web browser will open leading you through the authentication and authorization flow


<div class="wp-block-group"><div class="wp-block-group__inner-container is-layout-constrained wp-block-group-is-layout-constrained">
<figure class="wp-block-image size-large is-style-default"><a href="/2023/03/Dropbox-Authorization-1.png"><img width="1024" height="653" src="/2023/03/Dropbox-Authorization-1.png" alt="" class="wp-image-2753" /></a></figure>
</div></div>


Once successfully connected, your files from Dropbox will open in Finder. To connect to a single folder instead of the root, add a path to your bookmark configuration. Without adding a *Path* to the bookmark configuration, you will be connected to the root of your Dropbox.

![](/2023/03/Screenshot-2023-03-03-at-09.15.28.png)

### Connect to multiple accounts

Connect to and work with multiple [Dropbox](https://docs.mountainduck.io/protocols/dropbox/) accounts simultaneously. Repeat the above steps to connect to an additional Dropbox account you may have access. Open a new bookmark and login to the other Dropbox account in your web browser when authorizing access for Mountain Duck.

## Use Cyberduck to retrieve files from Dropbox without syncing

Alternatively, use [Cyberduck](https://cyberduck.io/) to browse your Dropbox without syncing the files to your computer.
