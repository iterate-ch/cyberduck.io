<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
  include "functions.php";
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta name="generator" content=
  "HTML Tidy for Mac OS X (vers 12 April 2005), see www.w3.org" />
  <?php echo(echoheader("~dkocher | cyberduck | changelog", ".")); ?>
<style type="text/css">
/*<![CDATA[*/
 div.c3 {text-align: right}
 div.c2 {text-align: left}
 div.c1 {text-align: center}
/*]]>*/
</style>
</head>

<body id="changelog">
  <div class="standard" align="center">
    <table border="0" cellpadding="5" cellspacing="5" width="700">
      <tr>
        <td class="box-solid" width="150" valign="middle">
          <div class="c1">
            <img src="img/cyberduck.icon.png" width="128" height=
            "128" alt="Cyberduck" border="0" />
          </div>
        </td>

        <td colspan="2" class="box-solid">
          <div class="underline">
            <?php echo(echomenu(".."));?>
          </div><br />
          <?php echo(echotitle());?>

          <div class="c2">
            <?php echo(echosubmenu("."));?>
          </div>
        </td>
      </tr>

      <tr>
        <td width="150"></td>

        <td colspan="2" class="box-solid">(There is also an
        <a href="./changelog.rss">RSS</a> feed and <a href=
        "http://cvs.cyberduck.ch/cyberduck-cocoa/Changelog.txt?rev=HEAD&amp;content-type=text/vnd.viewcvs-markup">
        text</a> file.)</td>
      </tr>

      <tr>
        <td class="box-filled" width="150" valign="top">
        <strong>2.5</strong> <em>Aug-29-2005</em><br />
        <a href="./Cyberduck-2.5.dmg">Download</a><br />
        Mac OS X 10.3.9 or later</td>

        <td colspan="2" class="box-dash">
          <ul>
            <li>[Feature] Graphical interface refinements</li>

            <li>[Bugfix] Caching issue with multiple connections to
            the same host</li>

            <li>[Bugfix] When moving to the parent directory the
            previous working directory is always selected</li>

            <li>[Bugfix] Selected files are always remembered when
            refreshing the browsing list</li>

            <li>[Bugfix] Remove custom icon and resource fork after
            download</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-filled" width="150" valign="top">
        <strong>2.5b4</strong> <em>Aug-10-2005</em><br />
        <a href="./Cyberduck-2.5b4.dmg">Download</a></td>

        <td colspan="2" class="box-dash">
          <ul>
            <li>[Feature] Updated navigation bar interface
            elements</li>

            <li>[Bugfix] Vastly improved performance when listing
            directories</li>

            <li>[Bugfix] Do not reconnect if connecting to the same
            host from a different bookmark</li>

            <li>[Bugfix] Sorting history menu correctly</li>

            <li>[Bugfix] Refresh issues in outline view</li>
          </ul>
        </td>
      </tr><?php echo(echogoogle());?>

      <tr>
        <td class="box-filled" width="150" valign="top">
        <strong>2.5b3</strong> <em>July-18-2005</em><br />
        <a href="./Cyberduck-2.5b3.dmg">Download</a></td>

        <td colspan="2" class="box-dash">
          <ul>
            <li>[Localize] Catalan Localization</li>

            <li>[Feature] Spotlight Importer for bookmarks</li>

            <li>[Feature] Synchronize bookmarks with .Mac</li>

            <li>[Feature] Send custom commands to server (FTP)</li>

            <li>[Feature] Auto scrolling log view</li>

            <li>[Feature] Updated application icon (Thanks to
            Admiral Potato)</li>

            <li>[Bugfix] New connection dialog remembers field
            values</li>

            <li>[Bugfix] Correctly parsing filenames beginning with
            whitespace (FTP)</li>

            <li>[Bugfix] Don't allow editing files with well known
            binary file type extensions</li>

            <li>[Bugfix] Excluding individual files when
            synchronising</li>

            <li>[Bugfix] Improved stability using outline view</li>

            <li>[Bugfix] Remember sorted column and direction</li>

            <li>[Bugfix] Sort child items in browser outline
            view</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-filled" width="150" valign="top">
        <strong>2.5b2</strong> <em>May-30-2005</em><br />
        <a href="./Cyberduck-2.5b2.dmg">Download</a></td>

        <td colspan="2" class="box-dash">
          <ul>
            <li>[Localize] Indonesian Localization</li>

            <li>[Bugfix] Resorting browser view will not change
            selection</li>

            <li>[Bugfix] Remember state of expanded items in
            outline view</li>

            <li>[Bugfix] Applescript issues</li>

            <li>[Feature] Updated to Growl 0.7</li>

            <li>[Feature] Edit menu shows all available
            editors</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-filled" width="150" valign="top">
        <strong>2.4.6</strong> <em>May-30-2005</em><br />
        <a href="./Cyberduck-2.4.6.dmg">Download</a><br />
        Mac OS X 10.3 or later</td>

        <td colspan="2" class="box-dash">
          <ul>
            <li>[Bugfix] Right-click a file in the browser will
            first select before it displays the contextual
            menu</li>

            <li>[Bugfix] Transfer success notification when remote
            editing file even when transfer fails (Growl)</li>

            <li>[Bugfix] Resolved incompatibility with SSH-1 keys
            in ~/.ssh/known_hosts (SFTP)</li>

            <li>[Bugfix] Applescript compatiblity issues with
            10.4</li>

            <li>[Bugfix] Browser column width compatiblity issues
            with 10.4</li>

            <li>[Bugfix] Could not drag bookmark file to drawer
            when empty</li>

            <li>[Bugfix] Ignored custom port when selecting
            bookmark in connection dialog</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-filled" width="150" valign="top">
        <strong>2.5b1</strong> <em>May-04-2005</em><br />
        <a href="./Cyberduck-2.5b1.dmg">Download</a></td>

        <td colspan="2" class="box-dash">
          <ul>
            <li>[Feature] FTP using TLS support (using AUTH TLS as
            in draft-murray-auth-ftp-ssl-16) for the control
            channel (sending login credentials) and optionally the
            data channel (file listings and transfers) if the
            server is capable of.</li>

            <li>[Feature] Store X.509 certificates in Keychain</li>

            <li>[Feature] Custom icon with progressbar in the
            Finder when downloading files</li>

            <li>[Feature] Browser outline view</li>

            <li>[Feature] Toolbar button to switch view</li>

            <li>[Feature] History of recently connected hosts</li>

            <li>[Feature] Set character encoding per bookmark</li>

            <li>[Feature] Set connect mode (active/passive) per
            bookmark (FTP)</li>

            <li>[Feature] Show folders in working directory (and
            autocomplete) in 'Go to Folder' dialog</li>

            <li>[Feature] Exclude duplicate files from transfer
            upon alert</li>

            <li>[Feature] Apply button in file info dialog</li>

            <li>[Feature] Duplicate files on server</li>

            <li>[Feature] Preferences window with toolbar</li>

            <li>[Feature] Option to turn off disconnect prompt in
            Preferences</li>

            <li>[Feature] Option to keep connection alive in
            Preferences</li>

            <li>[Feature] Choose character encoding in connection
            dialog</li>

            <li>[Feature] Choose connect mode in connection dialog
            (FTP)</li>

            <li>[Feature[ Drop down list of folders in Goto
            dialog</li>

            <li>[Feature] Sorting files by permission</li>

            <li>[Feature] UTF-8 is now used as the default
            character encoding</li>

            <li>[Feature] Edit with non-default editor using the
            browser context menu</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-filled" width="150" valign="top">
        <strong>2.4.5</strong> <em>May-04-2005</em><br />
        <a href="./Cyberduck-2.4.5.dmg">Download</a></td>

        <td colspan="2" class="box-dash">
          <ul>
            <li>[Feature] Added Tag to the list of supported
            editors (http://www.talacia.com/)</li>

            <li>[Bugfix] No permissions set on transferred files
            when connection closed unexpectedly (SFTP)</li>

            <li>[Bugfix] Resuming uploads might corrupt files
            (SFTP)</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-filled" width="150" valign="top">
        <strong>2.4.4</strong> <em>April-27-2005</em><br />
        <a href="./Cyberduck-2.4.4.dmg">Download</a></td>

        <td colspan="2" class="box-dash">
          <ul>
            <li>[Localize] Danish Localization</li>

            <li>[Localize] Polish Localization</li>

            <li>[Feature] Added CSSEdit to the list of supported
            editors (http://macrabbit.com/cssedit/)</li>

            <li>[Feature] Added CotEditor to the list of supported
            editors (http://www.aynimac.com/)</li>

            <li>[Feature] Gray out files in browser view when
            disconnected</li>

            <li>[Bugfix] Unexpected null reply received (FTP)</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-filled" width="150" valign="top">
        <strong>2.4.3</strong> <em>April-11-2005</em><br />
        <a href="./Cyberduck-2.4.3.dmg">Download</a></td>

        <td colspan="2" class="box-dash">
          <ul>
            <li>[Bugfix] Browser refresh issues</li>

            <li>[Bugfix] Synchronization</li>

            <li>[Localize] Hungarian Localization</li>

            <li>[Bugfix] Modification date changed when uploading
            files from the external editor</li>

            <li>[Bugfix] Browser window could lock up when
            reconnecting and login was needed</li>

            <li>[Feature] Disconnect item in menubar</li>

            <li>[Bugfix] Bug fixes</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-filled" width="150" valign="top">
        <strong>2.4</strong> <em>March-28-2005</em><br />
        <a href="./Cyberduck-2.4.dmg">Download</a></td>

        <td colspan="2" class="box-dash">
          <ul>
            <li>[Localize] Swedish Localization</li>

            <li>[Feature] Additional encryption ciphers supported
            (SFTP)</li>

            <li>[Feature] Action dropdown menu in toolbar</li>

            <li>[Feature] Added Jedit X to the list of supported
            editors (http://www.artman21.net/product/JeditX/)</li>

            <li>[Feature] Added mi to the list of supported editors
            (http://mimikaki.net/)</li>

            <li>[Feature] Added Smultron to the list of supported
            editors (http://smultron.sourceforge.net/)</li>

            <li>[Bugfix] Rendezvous implementation updated</li>

            <li>[Bugfix] Folder to synchronize not selectable in
            some cases</li>

            <li>[Bugfix] Fallback to default directory when
            specified directory doesn't exist</li>

            <li>[Bugfix] Resolved incompatibility with SSH-1 keys
            in ~/.ssh/known_hosts (SFTP)</li>

            <li>[Bugfix] Resolved crash in info window when group
            was unknown</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-filled" width="150" valign="top">
        <strong>2.4b4</strong> <em>February-03-2005</em><br />
        <a href="./Cyberduck-2.4b4.dmg">Download</a></td>

        <td colspan="2" class="box-dash">
          <ul>
            <li>[Bugfix] Dragging files to the Finder</li>

            <li>[Bugfix] Reordering bookmarks</li>

            <li>[Bugfix] SSH exception handling (SFTP)</li>

            <li>[Bugfix] Bookmark selection in connection
            dialog</li>

            <li>[Bugfix] Items in transfer window not removed</li>

            <li>[Bugfix] Deleting more than one bookmark at
            once</li>

            <li>[Bugfix] Corrupted resource files in Chinese
            localization</li>

            <li>[Bugfix] Corrupted resource files in Japanese
            localization</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-filled" width="150" valign="top">
        <strong>2.4b3</strong> <em>January-29-2005</em><br />
        <a href="./Cyberduck-2.4b3.dmg">Download</a></td>

        <td colspan="2" class="box-dash">
          <ul>
            <li>[Localize] Russian Localization</li>

            <li>[Feature] Preliminary AppleScript support (see
            .scpt script samples)</li>

            <li>[Feature] Quick Connect field and hostname field in
            connection dialog accept URLs as input</li>

            <li>[Feature] Reordering bookmarks using drag and
            drop</li>

            <li>[Bugfix] Deleting more than 10 files at once</li>

            <li>[Bugfix] Typing in transfer window causes
            crash</li>

            <li>[Bugfix] Transcript causes crash</li>

            <li>[Bugfix] Reporting correct file size for large
            files</li>

            <li>[Bugfix] Disable resume on ASCII tranfers
            (FTP)</li>

            <li>[Bugfix] Incompatiblity with Filezilla Server
            (FTP)</li>

            <li>[Bugfix] Synchronizing current working
            directory</li>

            <li>[Bugfix] Graceful failure on SSH connection
            problems</li>

            <li>[Bugfix] Correctly resolving '~' in filenames</li>

            <li>[Bugfix] Bug fixes</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-filled" width="150" valign="top">
        <strong>2.4b2</strong> <em>January-06-2005</em><br />
        <a href="./Cyberduck-2.4b2.dmg">Download</a></td>

        <td colspan="2" class="box-dash">
          <ul>
            <li>[Feature] Allow the selection of files in the
            browser by typing more than just the first character of
            the filename</li>

            <li>[Feature] A bookmark in the drawer can be selected
            by typing its hostname</li>

            <li>[Feature] Preserve the modification date on upload
            (SFTP)</li>

            <li>[Feature] Preserve the modification date on upload
            if the server supports 'CHMOD UTIME' (FTP)</li>

            <li>[Bugfix] Determine changed files based on
            modification date when synchronizing</li>

            <li>[Bugfix] Opening an URL linking to a file opens a
            browser window</li>

            <li>[Bugfix] Changing the username of a newly created
            bookmark of a connected server might affect an existing
            bookmark of the same server but with a different
            username.</li>

            <li>[Bugfix] Logging the response of 'LIST' (FTP)</li>

            <li>[Bugfix] Selection of bookmark in connection
            dialog</li>

            <li>[Bugfix] Performance issue in log view (thanks to
            Douglas Davidson)</li>

            <li>[Feature] Live scrolling log view</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-filled" width="150" valign="top">
        <strong>2.4b1</strong> <em>December-28-2004</em><br />
        <a href="./Cyberduck-2.4b1.dmg">Download</a></td>

        <td colspan="2" class="box-dash">
          <ul>
            <li>[Feature] Synchronization of files</li>

            <li>[Feature] Create new files on server</li>

            <li>[Feature] Support for Novell Netware file listings
            (FTP)</li>

            <li>[Feature] Growl notification support (see
            http://growl.info)</li>

            <li>[Feature] Limit number of concurrent connections to
            a remote host</li>

            <li>[Feature] Move remote files with copy &amp;amp;
            paste</li>

            <li>[Feature] Select a file in the browser by typing
            its first character</li>

            <li>[Feature] Put remote files into the transfer queue
            with copy &amp;amp; paste</li>

            <li>[Feature] Apply permissions recursively</li>

            <li>[Feature] Option to apply default permissions to
            transferred files in Preferences</li>

            <li>[Feature] Option to preserve modification date on
            download in Preferences</li>

            <li>[Feature] Switch encoding per browser with menu or
            toolbar item</li>

            <li>[Feature] Switch 'Show hidden files' per browser
            with menu or toolbar item</li>

            <li>[Feature] Transfer Queue with "Aqua" progress
            indicator</li>

            <li>[Feature] Provide a proxy icon for the connection
            in the window title bar</li>

            <li>[Feature] The proxy icon in the window title bar
            can then be dragged to the bookmark drawer or the
            Finder</li>

            <li>[Feature] Bookmarks of recently connected hosts are
            saved in ~/Library/Application
            Support/Cyberduck/History</li>

            <li>[Feature] Updated toolbar icons (Thanks to Matt
            Ball)</li>

            <li>[Feature] Display the number of files in the
            browser</li>

            <li>[Feature] Added TextMate to the list of supported
            editors (see http://macromates.com)</li>

            <li>[Feature] Dialog for duplicated files lists all at
            once instead of consecutively asking</li>

            <li>[Feature] Filter field is now a standard search
            field</li>

            <li>[Feature] Read bookmarks from "/Library/Application
            Support/Cyberduck/" instead of the individual user
            bookmarks file if available</li>

            <li>[Feature] Check for running transfers on
            application quit</li>

            <li>[Feature] Updated FTP core (FTP)</li>

            <li>[Feature] Saving passwords as 'Internet Password'
            in the Keychain</li>

            <li>[Localize] Norwegian Localization</li>

            <li>[Bugfix] Update existing browsers when changing the
            default interface attributes in the Preferences</li>

            <li>[Bugfix] Don't cache DNS lookups forever</li>

            <li>[Bugfix] Bookmark drawer icon has no text-only
            equivalent</li>

            <li>[Bugfix] Tabbing between browser and filter
            box</li>

            <li>[Bugfix] Quick Connect Field has initial focus</li>

            <li>[Bugfix] Live scrolling log view</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-filled" width="150" valign="top">
        <strong>2.3.3</strong> <em>August-09-2004</em><br />
        <a href="./Cyberduck-2.3.3.dmg">Download</a><br />
        Mac OS X 10.2 or later</td>

        <td colspan="2" class="box-dash">
          <ul>
            <li>[Bugfix] Correctly parsing symbolic links</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-filled" width="150" valign="top">
        <strong>2.3.2</strong> <em>August-05-2004</em><br />
        <a href="./Cyberduck-2.3.2.dmg">Download</a></td>

        <td colspan="2" class="box-dash">
          <ul>
            <li>[Feature] Slovak Localization</li>

            <li>[Feature] Czech Localization</li>

            <li>[Feature] Support for EPFL file listings to support
            servers running "publicfile" (FTP)</li>

            <li>[Bugfix] Improved PASV response parsing (FTP)</li>

            <li>[Feature] Supporting SOCKS proxies (not
            tested)</li>

            <li>[Feature] Change file permissions on multiple
            files</li>

            <li>[Feature] Copy the URL of a remote site</li>

            <li>[Bugfix] Use date formatting rules set in the
            System Preferences</li>

            <li>[Featuer] Preference item to set the action when
            double-clicking files (Download or edit)</li>

            <li>[Bugfix] Remembering the position of the browser
            window</li>

            <li>[Bugfix] Compatibility with servers not supporting
            the SIZE command (FTP)</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-filled" width="150" valign="top">
        <strong>2.3.1</strong> <em>June-15-2004</em><br />
        <a href="./Cyberduck-2.3.1.dmg">Download</a></td>

        <td colspan="2" class="box-dash">
          <ul>
            <li>Chinese (Simplified) Localization</li>

            <li>Rendezvous services in Bookmark menu</li>

            <li>Upper level directories had to be listed first when
            uploading files</li>

            <li>Changes to bookmarks won't be saved</li>

            <li>Preference item to disable the update check</li>

            <li>Toolbar item to open downloaded files with default
            application</li>

            <li>Graceful application termination (Properly ask to
            close all connections and then quit)</li>

            <li>Remembering choosen directories in open and save
            dialogs</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-filled" width="150" valign="top">
        <strong>2.3</strong> <em>May-15-2004</em><br />
        <a href="./Cyberduck-2.3.dmg">Download</a></td>

        <td colspan="2" class="box-dash">
          <ul>
            <li>Supporting Keyboard Interactive (PAM)
            Authentication (SSH)</li>

            <li>Finnish Localization</li>

            <li>Fixed a bug which caused not all available
            Rendezvous services to get listed</li>

            <li>Removed 'Type ahead' feature of the browser
            (responsible for frequent crashes)</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-filled" width="150" valign="top">
        <strong>2.3b2</strong> <em>Apr-27-2004</em><br />
        <a href="./Cyberduck-2.3beta2.dmg">Download</a></td>

        <td colspan="2" class="box-dash">
          <ul>
            <li>Much improved queue management (fewer
            connections)</li>

            <li>Resume downloads (SFTP)</li>

            <li>Resume uploads (SFTP)</li>

            <li>Resume uploads (FTP)</li>

            <li>Move files on remote host by drag and drop</li>

            <li>Drag files onto bookmark to quickly upload</li>

            <li>Bookmarks are shown in the menu</li>

            <li>Menu item 'Download As...'</li>

            <li>Editing multiple files in the external editor with
            the same name</li>

            <li>Warning if a duplicate exists when uploading
            files</li>

            <li>'Apply to all' checkbox in dialog asking for
            replace/resume/skip existing files</li>

            <li>Improved caching of directory listings</li>

            <li>When dropping files onto folders it will upload
            these into the folder</li>

            <li>When typing the first letter of a file it gets
            selected in the browser</li>

            <li>Toolbar button to remove all completed items from
            the queue</li>

            <li>Convert line endings when downloading in ASCII mode
            (FTP)</li>

            <li>Auto transfer mode (FTP)</li>

            <li>Dock menu item to open new browser</li>

            <li>Correctly updating incorrect keychain entries</li>

            <li>Preserve modification date when downloading
            files</li>

            <li>Ignoring .DS_Store files</li>

            <li>Bug fixes</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-filled" width="150" valign="top">
        <strong>2.3b1</strong> <em>Mar-09-2004</em><br />
        <a href="./Cyberduck-2.3beta1.dmg">Download</a></td>

        <td colspan="2" class="box-dash">
          <ul>
            <li>External editor support (SubEthaEdit, BBEdit,
            TextWrangler, Text-Edit Plus)</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-filled" width="150" valign="top">
        <strong>2.2</strong> <em>Mar-06-2004</em><br />
        <a href="./Cyberduck-2.2.dmg">Download</a></td>

        <td colspan="2" class="box-dash">
          <ul>
            <li>Supporting folders with sticky/set-uid/set-gid bits
            (FTP)</li>

            <li>Updated Dutch localization</li>

            <li>Updated French localization</li>

            <li>Minor performance improvements</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-filled" width="150" valign="top">
        <strong>2.2b6</strong> <em>Feb-25-2004</em><br />
        <a href="./Cyberduck-2.2beta6.dmg">Download</a></td>

        <td colspan="2" class="box-dash">
          <ul>
            <li>Preliminary support for Windows, VMS and OS/2 file
            listings (FTP)</li>

            <li>Properly deleting symbolic links (FTP)</li>

            <li>Displaying link icons in browser</li>

            <li>Downloading files from FTP servers not supporting
            the SIZE command (FTP)</li>

            <li>Fixed a bug where overwritten files with SFTP got
            corrupted (Thanks to Jan!)</li>

            <li>Contextual Menu support</li>

            <li>Bug fixes</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-filled" width="150" valign="top">
        <strong>2.2b5</strong> <em>Feb-12-2004</em><br />
        <a href="./Cyberduck-2.2beta5.dmg">Download</a></td>

        <td colspan="2" class="box-dash">
          <ul>
            <li>Chinese (Traditional) Localization</li>

            <li>Korean Localization</li>

            <li>Passphrases for private key files are stored in the
            Keychain (SSH)</li>

            <li>Bookmark editor allows to specify the port
            number</li>

            <li>When a bookmark is edited, the properties are
            updated in the bookmark drawer instantly</li>

            <li>A confirmation dialog is displayed before deleting
            a bookmark</li>

            <li>A confirmation dialog is displayed when connecting
            to a new site in a browser still connected to another
            host</li>

            <li>Transcript messages are only shown in the
            corresponding browser</li>

            <li>Fixed a bug which caused the browser window to be
            'frozen' after an upload</li>

            <li>Option to adjust the 'LIST' command sent (FTP)</li>

            <li>Fixed a bug which caused a crash when not connected
            to a network</li>

            <li>Updated application icon</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-filled" width="150" valign="top">
        <strong>2.2b4</strong> <em>Jan-31-2004</em><br />
        <a href="./Cyberduck-2.2beta4.dmg">Download</a></td>

        <td colspan="2" class="box-dash">
          <ul>
            <li>Fixed a bug that with some servers the permissions
            could not be modified (FTP)</li>

            <li>When addding a transfer to the queue it is
            highlighted</li>

            <li>Improved login process</li>

            <li>Updated Japanese localization</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-filled" width="150" valign="top">
        <strong>2.2b3</strong> <em>Jan-25-2004</em><br />
        <a href="./Cyberduck-2.2beta3.dmg">Download</a></td>

        <td colspan="2" class="box-dash">
          <ul>
            <li>Caching folder listings</li>

            <li>Auto-refresh the folder listing after uploading a
            file</li>

            <li>Sending 'LIST -a' to list directories (FTP)</li>

            <li>Fixed a bug where entries in the queue would be
            deleted too early</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-filled" width="150" valign="top">
        <strong>2.2b2</strong> <em>Jan-24-2004</em><br />
        <a href="./Cyberduck-2.2beta2.dmg">Download</a></td>

        <td colspan="2" class="box-dash">
          <ul>
            <li>Updated Japanese localization</li>

            <li>Updated French localization</li>

            <li>Updated Portuguese localization</li>

            <li>Updated Italian localization</li>

            <li>The log is now written with a fixed-width font</li>

            <li>Various minor improvements</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-filled" width="150" valign="top">
        <strong>2.2b1</strong> <em>Jan-22-2004</em> <a href=
        "./Cyberduck-2.2beta1.dmg">Download</a></td>

        <td colspan="2" class="box-dash">
          <ul>
            <li>Keychain integration</li>

            <li>New file transfer manager</li>

            <li>Full Unicode support</li>

            <li>Support for public key authentication (SSH)</li>

            <li>Live filtering directory listings</li>

            <li>Improved Rendezvous support (jmDNS 0.2)</li>

            <li>Drag files from the browser to the transfer
            manager</li>

            <li>Drag links to the transfer manager to start
            download</li>

            <li>Browser can be customized to show/hide certain
            columns</li>

            <li>Japanese Localization</li>

            <li>Italian Localization</li>

            <li>Portuguese Localization</li>

            <li>Spanish Localization</li>

            <li>French Localization</li>

            <li>Various improvements and bug fixes</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-filled" width="150" valign="top">
        <strong>2.1</strong> <em>Dec-08-2003</em><br />
        <a href="./Cyberduck-2.1.dmg">Download</a></td>

        <td colspan="2" class="box-dash">
          <ul>
            <li>Bookmarks can now be edited.</li>

            <li>Bookmarks can now be saved as a regular file (Drag
            the bookmarks to the Finder).</li>

            <li>Bookmarks saved as files can be imported by
            dropping them on the Bookmarks Drawer.</li>

            <li>Double clicking a Cyberduck bookmark file in the
            Finder will open a new browser and connect to the
            remote site</li>

            <li>Bookmarks can now be modified</li>

            <li>An initial directory upon new connection can now be
            specified (e.g. public_html instead of the default
            home).</li>

            <li>Use keyboard shortcut (commann-up/down) for
            browsing a directory</li>

            <li>Uploaded files now have the same permissions as the
            corresponding local files</li>

            <li>Updated icon set</li>

            <li>The sort order is now remembered while
            browsing</li>

            <li>Toolbar icon to toggle Bookmark drawer</li>

            <li>Updated SSH Core (v0.2.5)</li>

            <li>Dutch Localization</li>

            <li>German Localization</li>

            <li>Smaller changes and bug fixes.</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-filled" width="150" valign="top">
        <strong>2.1b5</strong> <em>Aug-29-2003</em><br />
        <a href="./Cyberduck-2.1beta5.dmg">Download</a></td>

        <td colspan="2" class="box-dash">
          <ul>
            <li>HTTP is now supported again. Files can be
            downloaded from regular web servers.</li>

            <li>Cyberduck can now be configured as the default FTP
            helper application. See <a href=
            "http://www.monkeyfood.com/software/moreInternet/">monkeyfood.com</a>.
            This seems to work with Safari and Internet
            Explorer.</li>

            <li>Dragging files to the Finder is now more
            reliable.</li>

            <li>The transfer panel does now close again if defined
            so in the preferences.</li>

            <li>The buffer size (the size of download chunks to
            keep in memory before writing to disk) is now
            adjustable.</li>

            <li>Login to anonymous FTP servers where no password is
            needed is now supported.</li>

            <li>Smaller bug fixes</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-filled" width="150" valign="top">
        <strong>2.1b4</strong> <em>Aug-22-2003</em><br />
        <a href="./Cyberduck-2.1beta4.dmg">Download</a></td>

        <td colspan="2" class="box-dash">
          <ul>
            <li>Cyberduck now has the official creator code
            'CYCK'.</li>

            <li>Bug fixes</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-filled" width="150" valign="top">
        <strong>2.1b3</strong> <em>Aug-17-2003</em><br />
        <a href="./Cyberduck-2.1beta3.dmg">Download</a></td>

        <td colspan="2" class="box-dash">
          <ul>
            <li>Localization support</li>

            <li>Files and foldes can now be dragged to the Finder
            to download them.</li>

            <li>Windows do now no more stack exactly on the top of
            prior one.</li>

            <li>There are now equivalent menu actions for the
            toolbar items.</li>

            <li>Modification dates and time are now displayed
            correctly.</li>

            <li>The modification date column is now sorted
            correctly.</li>

            <li>Browser columns are now sortable in both
            directions.</li>

            <li>When deleting multiple files and directores, the
            file list will now only get updated at the end because
            of performance.</li>

            <li>If multiples have been selected to transfer,
            Cyberduck now puts them in the same queue and opens
            only one connection to the server.</li>

            <li>There is a new command 'Go to folder' for changing
            the working directory quickly.</li>

            <li>Many bug fixes.</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-filled" width="150" valign="top">
        <strong>2.1b2</strong> <em>Aug-15-2003</em><br />
        <a href="./Cyberduck-2.1beta2.dmg">Download</a></td>

        <td colspan="2" class="box-dash">
          <ul>
            <li>Public beta release using the Cocoa Framework
            (instead of Java Swing) and support for SSH</li>
          </ul>

          <p>Older releases prior to version 2.1 using the Java
          Swing API can be found on <a href="./swing.php">this</a>
          page.</p>
        </td>
      </tr>

      <tr>
        <td colspan="3">
          <div class="c3">
            <a href=
            "http://validator.w3.org/check/referer">Validate</a>,
            $Date$
          </div>
        </td>
      </tr>
    </table>
  </div>
</body>
</html>
