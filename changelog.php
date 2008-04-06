<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
  include "functions.php";
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta name="generator" content=
  "HTML Tidy for Mac OS X (vers 12 April 2005), see www.w3.org" />
  <?php echo(echoheader(".")); ?>

  <title>Cyberduck | FTP for Mac OS X. | Changelog</title>
</head>

<body id="changelog">
  <div class="header">
    <?php echo(echologo("."));?><?php echo(echotitle("."));?><?php echo(echosubmenu("."));?>
  </div>

  <div class="content">
	<table cellpadding="0" cellspacing="5" width="100%">
      <tr>
        <td width="150"></td>

        <td colspan="2" class="box-filled">(There is also an
        <a href="http://cyberduck.ch/changelog.rss">RSS</a> feed and <a class=
        "ext" href=
        "http://trac.cyberduck.ch/file/trunk/Changelog.txt?format=raw">
        text</a> file.)</td>
      </tr>

      <tr>
        <td class="box-solid" width="150" valign="top">
        <p><strong>3.0b1</strong> <em>Apr-15-2008</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-3.0b1.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
          <ul>
	<li>[Feature] Amazon Simple Storage Service (S3) support (http://aws.amazon.com/s3) [<a href="http://trac.cyberduck.ch/ticket/1725">#1725</a>]</li>
<li>[Feature] WebDAV protocol support [<a href="http://trac.cyberduck.ch/ticket/464">#464</a>]</li>
<li>[Feature] Search bookmarks [<a href="http://trac.cyberduck.ch/ticket/916">#916</a>]</li>
<li>[Feature] Bookmark editor inside browser window instead of drawer</li>
<li>[Feature] Read trust settings for certificates from Keychain</li>
<li>[Feature] Different editors for different file types [<a href="http://trac.cyberduck.ch/ticket/146">#146</a>]
<li>[Feature] PRET (PRE Transfer) command support for distributed FTP (http://www.drftpd.org) [<a href="http://trac.cyberduck.ch/ticket/684">#684</a>]</li>
<li>[Feature] Skip option not available in transfer prompt [<a href="http://trac.cyberduck.ch/ticket/1159">#1159</a>]</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.8.5</strong> <em>Apr-07-2008</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.8.5.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
          <ul>
<li>[Feature] Added ForgEdit to the list of supported editors (http://forgedit.com) [<a href="http://trac.cyberduck.ch/ticket/1779">#1779</a>]</li>
<li>[Bugfix] Downloads no longer keep modified date [<a href="http://trac.cyberduck.ch/ticket/1756">#1756</a>]</li>
<li>[Bugfix] Leap year bug wen parsing date without year [<a href="http://trac.cyberduck.ch/ticket/1813">#1813</a>]</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.8.4</strong> <em>Jan-25-2008</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.8.4.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
          <ul>
			<li>[Bugfix] Crash when dismissing sheet attached to window [<a href="http://trac.cyberduck.ch/ticket/1616">#1616</a>]</li>
			<li>[Bugfix] Resolving Bonjour names blocks user interface [<a href="http://trac.cyberduck.ch/ticket/1657">#1657</a>]</i>
			<li>[Bugfix] Closing browser window during connection attempt blocks user interface</i>
			<li>[Bugfix] Downloading to default download location when dragging folder to Finder [<a href="http://trac.cyberduck.ch/ticket/1611">#1611</a>]</i>

			<li>[Feature] Add group ownership as optional browser column [<a href="http://trac.cyberduck.ch/ticket/1590">#1590</a>]</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.8.3</strong> <em>Jan-14-2008</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.8.3.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
          <ul>
			<li>[Feature] Log Drawer in browser and transfer window</li>
			<li>[Feature] Toolbar button to open Terminal.app SSH session in current working directory (SFTP) [<a href="http://trac.cyberduck.ch/ticket/1508">#1508</a>]</li>
			<li>[Feature] Added MacVim to the list of supported editors (<a href="http://code.google.com/p/macvim/">http://code.google.com/p/macvim/</a>) [<a href="http://trac.cyberduck.ch/ticket/1322">#1322</a>]</li>
			<li>[Feature] Custom icon for executable files [<a href="http://trac.cyberduck.ch/ticket/945">#945</a>]</li>
			<li>[Bugfix] Frequent crashes [<a href="http://trac.cyberduck.ch/ticket/1401">#1401</a>, <a href="http://trac.cyberduck.ch/ticket/1409">#1409</a>]</li>
			<li>[Bugfix] Does not change to correct directory when using a bookmark to the same server [<a href="http://trac.cyberduck.ch/ticket/1411">#1411</a>]</li>
			<li>[Bugfix] Preserve leading and trailing whitespace when parsing filenames (FTP) [<a href="http://trac.cyberduck.ch/ticket/1381">#1381</a>]</li>
			<li>[Bugfix] Directory parser compatibility with Webstar Server (FTP) [<a href="http://trac.cyberduck.ch/ticket/1302">#1302</a>]</li>
			<li>[Bugfix] Directory parser compatibility with Freebox Server (FTP) [<a href="http://trac.cyberduck.ch/ticket/1258">#1258</a>]</li>
			<li>[Bugfix] Directory parser compatibility with Trellix Server (FTP) [<a href="http://trac.cyberduck.ch/ticket/1213">#1213</a>]</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.8.2</strong> <em>Dec-11-2007</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.8.2.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
          <ul>
			<li>[Feature] Show transfer progress when using browser session [<a href="http://trac.cyberduck.ch/ticket/1313">#1313</a>]</li>
			<li>[Feature] Accept relative paths in bookmark setting [<a href="http://trac.cyberduck.ch/ticket/1167">#1167</a>]</li>
			<li>[Feature] Added MacVim to the list of supported editors (http://slashpunt.org/vim/) [<a href="http://trac.cyberduck.ch/ticket/1322">#1322</a>]</li>
			<li>[Feature] Ugly folder icons rendered (10.5)</li>
			<li>[Feature] Back and forward history menu for browser navigation buttons [<a href="http://trac.cyberduck.ch/ticket/1080">#1080</a>]</li>
			<li>[Bugfix] Writing corrupted entries to the Keychain (10.5) [<a href="http://trac.cyberduck.ch/ticket/1354">#1354</a>]<br />
				<strong>Warning! Due to this bug you may have to reenter your passwords the first time connecting to each server</strong></li>
			<li>[Bugfix] Cannot drag files to working directory when there is no space left [<a href="http://trac.cyberduck.ch/ticket/60">#60</a>]</li>
			<li>[Bugfix] Bookmarks drawer remembers width [<a href="http://trac.cyberduck.ch/ticket/371">#371</a>]</li>
			<li>[Bugfix] Crashes after application launch (10.3.9) [<a href="http://trac.cyberduck.ch/ticket/1339">#1339</a>]</li>
			<li>[Bugfix] Downloading multiple files with same name in outline hierarchy [<a href="http://trac.cyberduck.ch/ticket/1400">#1400</a>]</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.8.1</strong> <em>Nov-18-2007</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.8.1.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
          <ul>
			<li>[Feature] Application code is signed (10.5)</li>
			<li>[Bugfix] Saving file in external editor does not cause upload (10.5) [<a href="http://trac.cyberduck.ch/ticket/1244">#1244</a>]</li>
			<li>[Bugfix] Login failure with correct credentials [<a href="http://trac.cyberduck.ch/ticket/1231">#1231</a>]</li>
			<li>[Bugfix] Failure to list directory on some servers (SFTP) [<a href="http://trac.cyberduck.ch/ticket/1170">#1170</a>]</li>
			<li>[Bugfix] Transfers fails with punctuation characters in path (SCP) [<a href="http://trac.cyberduck.ch/ticket/1265">#1265</a>]</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.8</strong> <em>Sept-10-2007</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.8.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
          <ul>
			<li>[Feature] Using Ganymed SSH2 library [<a href="http://trac.cyberduck.ch/ticket/185">#185</a>]</li>
			<li>[Feature] Support for SCP transfers [<a href="http://trac.cyberduck.ch/ticket/1043">#1043]</a></li>
			<li>[Feature] Queuing file transfers [<a href="http://trac.cyberduck.ch/ticket/986">#986</a>]</li>
			<li>[Feature] Automatic retry of failed network operations [<a href="http://trac.cyberduck.ch/ticket/783">#783</a>]</li>
			<li>[Feature] Limit available bandwidth for transfers [<a href="http://trac.cyberduck.ch/ticket/48">#48</a>]</li>
			<li>[Feature] Browse folder hierarchy in overwrite warning dialog [<a href="http://trac.cyberduck.ch/ticket/18">#18</a>]</li>
			<li>[Feature] Browse folder hierarchy in synchronisation dialog [<a href="http://trac.cyberduck.ch/ticket/18">#18</a>]</li>
			<li>[Feature] Use small icons in the bookmark drawer [#--]</li>
			<li>[Feature] Set the default protocol helper application for FTP and SFTP URLs [<a href="http://trac.cyberduck.ch/ticket/1049">#1049</a>]</li>
			<li>[Feature] Setting default permissions for folders [<a href="http://trac.cyberduck.ch/ticket/77">#77</a>]</li>
			<li>[Feature] Notes for bookmarks [<a href="http://trac.cyberduck.ch/ticket/67">#67</a>]</li>
			<li>[Feature] Use system setting for connect mode (FTP)<br />
				<strong>Warning! Make sure your setting in <i>System Preferences &#8594; Network &#8594; Use Passive FTP Mode (PASV)</i> is checked
				to get the same default setting as in previous versions.</strong></li>
			<li>[Feature] Added WriteRoom to the list of supported editors (http://hogbaysoftware.com/projects/writeroom)</li>
			<li>[Feature] Create known hosts file if missing (SFTP)</li>
			<li>[Bugfix] Improvements to the synchronization dialog [<a href="http://trac.cyberduck.ch/ticket/1189">#1189</a>]</li>
			<li>[Bugfix] Don't use SOCKS proxy if hostname is excluded in system preferences</li>
			<li>[Bugfix] Resolve Alias files to upload [<a href="http://trac.cyberduck.ch/ticket/859">#859</a>]</li>
			<li>[Bugfix] Subsequent type-ahead selection misbehaving [<a href="http://trac.cyberduck.ch/ticket/896">#896</a>]</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.7.3</strong> <em>Feb-12-2007</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.7.3.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
          <ul>
			<li>[Bugfix] Problem parsing PASV response from some servers (FTP) <a href="http://trac.cyberduck.ch/ticket/779">#779</a>, <a href="http://trac.cyberduck.ch/ticket/86">#869</a>]</li> 
			<li>[Bugfix] Stalls when connection is interrupted during DNS lookup <a href="http://trac.cyberduck.ch/ticket/960">#960</a>]</li>
			<li>[Bugfix] Improved sorting in 'Kind' browser column <a href="http://trac.cyberduck.ch/ticket/993">#993</a>]</li>
			<li>[Bugfix] Renaming files using Info panel causes repeated renaming <a href="http://trac.cyberduck.ch/ticket/1005">#1005</a>]</li>
			<li>[Bugfix] Uploading folders interrupts file transfer (SFTP) <a href="http://trac.cyberduck.ch/ticket/1001">#1001</a>]</li>
			<li>[Bugfix] Preference for auto-open delay for spring-loaded folders not saved <a href="http://trac.cyberduck.ch/ticket/633">#633</a>]</li>
			<li>[Bugfix] Preference to open new browser window on launch not used <a href="http://trac.cyberduck.ch/ticket/997">#997</a>]</li>
			<li>[Bugfix] Symbolic links on local filesystem not handled properly [<a href="http://trac.cyberduck.ch/ticket/995">#995</a>]</li>
			<li>[Bugfix] Send creation time of file with UTIME [#--]</li>
			<li>[Feature] Clear command in History menu [<a href="http://trac.cyberduck.ch/ticket/648">#648</a>]</li>
			<li>[Feature] Preference to exclude files from transfers using regular expression [<a href="http://trac.cyberduck.ch/ticket/511">#511</a>]</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.7.2</strong> <em>Jan-15-2007</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.7.2.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
          <ul>
			<li>[Feature] Option to use single connection for browser and transfers [<a href="http://trac.cyberduck.ch/ticket/57">#57</a>]</li>
			<li>[Feature] Option to remember open browser windows and reconnect upon relaunching the application [<a href="http://trac.cyberduck.ch/ticket/59">#59</a>]</li>
			<li>[Feature] Delay for spring-loaded folders can be set [<a href="http://trac.cyberduck.ch/ticket/633">#633</a>]</li>
			<li>[Feature] Calculate size of directory [<a href="http://trac.cyberduck.ch/ticket/5">#5</a>]</li>
			<li>[Feature] Duplicate files using option-drag [<a href="http://trac.cyberduck.ch/ticket/150">#150</a>]</li>
			<li>[Feature] Per bookmark setting for download folder [<a href="http://trac.cyberduck.ch/ticket/158">#158</a>]</li>
			<li>[Feature] Per bookmark setting to use single connection for browser and transfers [#--]</li>
			<li>[Feature] Advanced settings in connection and bookmark window in disclosable view</li>
			<li>[Feature] Added PageSpinner to the list of supported editors (http://www.optima-system.com/pagespinner) [#205]</li>
			<li>[Bugfix] Disconnecting in the background not blocking the user interface [#--]</li>
			<li>[Bugfix] Folders marked as inaccessible after timeouts and cannot be opened after reconnecting [<a href="http://trac.cyberduck.ch/ticket/611">#611</a>]</li>
			<li>[Bugfix] Applescript/Dashboard should not use seperate session for transfers [#--]</li>
			<li>[Bugfix] Cannot write to group writable files (SFTP) [<a href="http://trac.cyberduck.ch/ticket/173">#173</a>]</li>
			<li>[Bugfix] File length is set to zero if updating permission fails (SFTP) [<a href="http://trac.cyberduck.ch/ticket/974">#974</a>]</li>
			<li>[Bugfix] Directory listing is not refreshed when upload is completed after "Try Again" [<a href="http://trac.cyberduck.ch/ticket/982">#982</a>]</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.7.1</strong> <em>Nov-29-2006</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.7.1.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
          <ul>
			<li>[Localize] Portuguese Localization</li>
			<li>[Bugfix] Reporting error about failed to set permissions whereas it actually succeeded [#--]</li>
			<li>[Bugfix] Fail gracefully on uploading when server doesn't support changing permissions [#--]</li>
			<li>[Bugfix] Disconnecting from server could crash application shortly thereafter [#--]</li>
			<li>[Bugfix] Outline view not updated after dragged files have been uploaded [#--]</li>
			<li>[Bugfix] Synchronisation not awaiting selection from user [#--]</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.7</strong> <em>Nov-25-2006</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.7.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
          <ul>
			<li>[Feature] Don't block user interface when working in browser. All potentially lengthy operations are now performed in the background [<a href="http://trac.cyberduck.ch/ticket/921">#921</a>]</li>
			<li>[Feature] All (possibly stalled) operations in progress can be interrupted [<a href="http://trac.cyberduck.ch/ticket/943">#943</a>]</li>
			<li>[Feature] Improved error handling [#--]</li>
			<li>[Feature] Failed network operations can be repeated [#--]</li>
			<li>[Feature] A default bookmark can be configured [<a href="http://trac.cyberduck.ch/ticket/915">#915</a>]</li>
			<li>[Feature] Option to disable spring-loaded folders [<a href="http://trac.cyberduck.ch/ticket/98">#98</a>]</li>
			<li>[Feature] Individual settings how to treat duplicate files on uploads and downloads [<a href="http://trac.cyberduck.ch/ticket/500">#500</a>]</li>
			<li>[Feature] Callback to alternate connect mode upon failure (FTP) [<a href="http://trac.cyberduck.ch/ticket/83">#83</a>]</li>
			<li>[Feature] Add 'Download To...' menu option to download multiple files into designated, non-default directory [<a href="http://trac.cyberduck.ch/ticket/909">#909</a>]</li>
			<li>[Feature] The bottom of the browser window shows the security status [<a href="http://trac.cyberduck.ch/ticket/9">#9</a>]</li>
			<li>[Feature] Improvements to the AppleScript dictionary [<a href="http://trac.cyberduck.ch/ticket/737">#737</a>], [<a href="http://trac.cyberduck.ch/ticket/918">#918</a>], [<a href="http://trac.cyberduck.ch/ticket/878">#878</a>], [<a href="http://trac.cyberduck.ch/ticket/922">#922</a>]</li>
			<li>[Feature] When duplicating files, propose a filename containing the current date and time [<a href="http://trac.cyberduck.ch/ticket/912">#912</a>]</li>
			<li>[Feature] Added JarInspector to the list of supported editors (http://www.cgerdes.com) [#--</a>]</li>
			<li>[Bugfix] Honor the existing permissions when replacing files [#--</a>]</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.6.2</strong> <em>Sep-07-2006</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.6.2.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
          <ul>
			<li>[Bugfix] Crash when typing hostname in connection dialog for some users [<a href="http://trac.cyberduck.ch/ticket/711">#711</a>]</li>
			<li>[Bugfix] Type-ahead selection not working for non-alphanumeric characters [<a href="http://trac.cyberduck.ch/ticket/271">#271</a>]</li>
			<li>[Bugfix] Control click discards multiple selection [<a href="http://trac.cyberduck.ch/ticket/649">#649</a>]</li>
			<li>[Bugfix] Timeout too slow giving I/O errors on slow connections [<a href="http://trac.cyberduck.ch/ticket/714">#714</a>]</li>
			<li>[Bugfix] Passwords stored in Keychain not accessible by other applications [<a href="http://trac.cyberduck.ch/ticket/708">#708</a>]</li>
			<li>[Bugfix] FTP URLs passed by another application pointing at folders fail to open [<a href="http://trac.cyberduck.ch/ticket/704">#704</a>]</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.6.1</strong> <em>Aug-11-2006</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.6.1.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
          <ul>
			<li>[Bugfix] Crash or spinning beachball after upload
			[<a href="http://trac.cyberduck.ch/ticket/504">#504</a>]</li>

			<li>[Bugfix] Active mode connections broken (FTP)
			[<a href="http://trac.cyberduck.ch/ticket/450">#450</a></li>

			<li>[Bugfix] Removed graphical error messages for the
			sake of simplicity; displayed in log drawer instead
			[<a href="http://trac.cyberduck.ch/ticket/524">#524</a>, <a href="http://trac.cyberduck.ch/ticket/580">#580</a>]</li>

			<li>[Bugfix] Hostname reachability check slow and
			blocking user interface [<a href="http://trac.cyberduck.ch/ticket/572">#572</a>, <a href="http://trac.cyberduck.ch/ticket/575">#575</a>]</li>

			<li>[Bugfix] Fails to delete folders recursively in
			some cases [<a href="http://trac.cyberduck.ch/ticket/533">#533</a>]</li>

			<li>[Bugfix] Unilingual builds broken [<a href="http://trac.cyberduck.ch/ticket/436">#436</a>]</li>

			<li>[Bugfix] Cannot delete symbolic links [<a href="http://trac.cyberduck.ch/ticket/616">#616</a>]</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.6</strong> <em>Jun-07-2006</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.6.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
          <ul>
			<li>[Localize] Turkish Localization</li>
			<li>[Feature] Automatic software udpate with Sparkle.framework (Thanks to Andy Matuschak!) [<a href="http://trac.cyberduck.ch/ticket/300">#300</a>]</li>
			<li>[Feature] Dashboard Widget included (Thanks to Claudio Procida!)</li>
			<li>[Feature] Marking write-only and non-accessible directories with special icon as in Finder.app</li>
			<li>[Feature] Reintroduced transcript drawer in browser window [<a href="http://trac.cyberduck.ch/ticket/104">#104</a>]</li>
			<li>[Feature] Added transcript drawer to transfer window [<a href="http://trac.cyberduck.ch/ticket/375">#375</a>]</li>
			<li>[Feature] Option to use Network Diagnostics upon failed connections</li>
			<li>[Feature] New 'Download failed' and 'Upload failed' Growl notifications [<a href="http://trac.cyberduck.ch/ticket/362">#362</a>]</li>
			<li>[Feature] Display alert icon in connection dialog if server name cannot be resolved</li>
			<li>[Feature] Indicate estimated remaining time left for transfers [<a href="http://trac.cyberduck.ch/ticket/43">#43</a>]</li>
			<li>[Feature] New non-blocking alert boxes replace modal sheets</li>
			<li>[Bugfix] Stalled connection and file transfer attempts can be interrupted [<a href="http://trac.cyberduck.ch/ticket/55">#55</a>]</li>
			<li>[Bugfix] Cannot delete empty folders [<a href="http://trac.cyberduck.ch/ticket/162">#162</a>]</li>
			<li>[Bugfix] Cannot use login username with colon [<a href="http://trac.cyberduck.ch/ticket/309">#309</a>]</li>
			<li>[Bugfix] Certain operations trigger change of character encoding to default</li>
			<li>[Bugfix] Unable to delete directory from server [<a href="http://trac.cyberduck.ch/ticket/256">#256</a>]</li>
			<li>[Bugfix] Permission errors when downloading files from read-only directories [<a href="http://trac.cyberduck.ch/ticket/264">#264</a>]</li>
			<li>[Bugfix] Change download keyboad shortcut [<a href="http://trac.cyberduck.ch/ticket/277">#277</a>]</li>
			<li>[Bugfix] Character encoding issues [<a href="http://trac.cyberduck.ch/ticket/238">#238</a>, <a href="http://trac.cyberduck.ch/ticket/333">#333</a>, <a href="http://trac.cyberduck.ch/ticket/361">#361</a>, <a href="http://trac.cyberduck.ch/ticket/390">#390</a>]</li>
			<li>[Bugfix] Improved compatibility with certain FTP servers</li>
			<li>[Bugfix] Cannot upload files to drop boxes [<a href="http://trac.cyberduck.ch/ticket/421">#421</a>]</li>
          </ul>
        </td>
      </tr>

		<tr>
			<td colspan="3"><?php echo(echogoogle());?> </td>
		</tr>

      <tr>
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.5.5</strong> <em>Mar-01-2006</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.5.5.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
          <ul>
		<li>[Localize] Hebrew Localization</li>
		<li>[Bugfix] Excape key cancels editing [<a href="http://trac.cyberduck.ch/ticket/190">#190</a>]</li>
		<li>[Bugfix] Adjust permissions on created folders when transfering files [<a href="http://trac.cyberduck.ch/ticket/77">#77</a>]</li>
		<li>[Bugfix] Cannot write to group writable files (SFTP) [<a href="http://trac.cyberduck.ch/ticket/173">#173</a>]</li>
		<li>[Bugfix] Spotlight binary not executable [<a href="http://trac.cyberduck.ch/ticket/212">#212</a>]</li>
		<li>[Feature] Added options to use Cyberduck as a portable application (see http://www.freesmug.org/portableapps/) [<a href="http://trac.cyberduck.ch/ticket/180">#180</a>]</li>
		<li>[Feature] New Crash Reporter (Thanks to M. Uli Kusterer!) [<a href="http://trac.cyberduck.ch/ticket/195">#195</a>]</li>
		<li>[Feature] Added skEdit to the list of supported editors (http://www.skti.org)</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.5.4</strong> <em>Jan-20-2006</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.5.4.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
          <ul>
<li>[Localize] Thai Localization</li>
<li>[Bugfix] Random crashes (<a href="http://trac.cyberduck.ch/ticket/65">#65</a>, 
<a href="http://trac.cyberduck.ch/ticket/94">#94</a>, 
<a href="http://trac.cyberduck.ch/ticket/96">#96</a>, 
<a href="http://trac.cyberduck.ch/ticket/121">#121</a>, 
<a href="http://trac.cyberduck.ch/ticket/122">#122</a>)</li>
<li>[Bugfix] High load while downloading (<a href="http://trac.cyberduck.ch/ticket/12">#12</a>)</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.5.3</strong> <em>Jan-03-2006</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.5.3.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
          <ul>
            <li>[Feature] New and much improved Bonjour
            implementation</li>

            <li>[Feature] Inline rename files in browser (Return
            key invokes editing)</li>

            <li>[Feature] Paste files copied in Finder.app
            (Upload)</li>

            <li>[Feature] Includes Unsanity Crash Reporter</li>

            <li>[Bugfix] Renaming files in expanded tree of outline
            view bogus</li>

            <li>[Bugfix] Change to invalid directories not
            catched</li>

            <li>[Bugfix] Second login attempt always fails
            (SFTP)</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.5.2</strong> <em>Nov-18-2005</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.5.2.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
          <ul>
            <li>[Bugfix] Spinning beachball of death when
            connecting on some systems</li>

            <li>[Bugfix] Better validating drop targets in
            browser</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.5.1</strong> <em>Nov-14-2005</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.5.1.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
          <ul>
            <li>[Feature] Dragging files to application icon will
            upload to frontmost browser</li>

            <li>[Feature] Printing browser view</li>

            <li>[Feature] Universal Binary</li>

            <li>[Bugfix] Child items not refreshed properly in
            outline view</li>

            <li>[Bugfix] Warning before overwrite when moving or
            renaming files</li>

            <li>[Bugfix] Dragging files to the Finder.app places
            them at the dropped position</li>

            <li>[Bugfix] Always selecting parent directory as drop
            target when dragging to outline view</li>

            <li>[Bugfix| Updated application and document icon</li>

            <li>[Bugfix] Number of files in browser window not
            displayed correctly</li>

            <li>[Bugfix] Don't recurse into directories when
            deleting symbolic links</li>

            <li>[Bugfix] Overwriting group writable files</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.5</strong> <em>Aug-29-2005</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.5.dmg">Download</a><br />
        Mac OS X 10.3.9 or later</td>

        <td colspan="2" class="box-solid">
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
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.5b4</strong> <em>Aug-10-2005</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.5b4.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
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
      </tr>

      <tr>
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.5b3</strong> <em>July-18-2005</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.5b3.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
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
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.5b2</strong> <em>May-30-2005</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.5b2.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
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
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.4.6</strong> <em>May-30-2005</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.4.6.dmg">Download</a><br />
        Mac OS X 10.3 or later</td>

        <td colspan="2" class="box-solid">
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
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.5b1</strong> <em>May-04-2005</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.5b1.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
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
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.4.5</strong> <em>May-04-2005</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.4.5.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
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
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.4.4</strong> <em>April-27-2005</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.4.4.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
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
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.4.3</strong> <em>April-11-2005</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.4.3.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
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
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.4</strong> <em>March-28-2005</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.4.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
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
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.4b4</strong> <em>February-03-2005</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.4b4.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
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
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.4b3</strong> <em>January-29-2005</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.4b3.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
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
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.4b2</strong> <em>January-06-2005</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.4b2.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
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
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.4b1</strong> <em>December-28-2004</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.4b1.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
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
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.3.3</strong> <em>August-09-2004</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.3.3.dmg">Download</a><br />
        Mac OS X 10.2 or later</td>

        <td colspan="2" class="box-solid">
          <ul>
            <li>[Bugfix] Correctly parsing symbolic links</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.3.2</strong> <em>August-05-2004</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.3.2.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
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
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.3.1</strong> <em>June-15-2004</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.3.1.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
          <ul>
            <li>[Localize] Chinese (Simplified) Localization</li>

            <li>[Feature] Rendezvous services in Bookmark menu</li>

            <li>[Bugfix] Upper level directories had to be listed
            first when uploading files</li>

            <li>[Bugfix] Changes to bookmarks won't be saved</li>

            <li>[Bugfix] Preference item to disable the update
            check</li>

            <li>[Bugfix] Toolbar item to open downloaded files with
            default application</li>

            <li>[Bugfix] Graceful application termination (Properly
            ask to close all connections and then quit)</li>

            <li>[Bugfix] Remembering choosen directories in open
            and save dialogs</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.3</strong> <em>May-15-2004</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.3.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
          <ul>
            <li>[Feature] Supporting Keyboard Interactive (PAM)
            Authentication (SSH)</li>

            <li>[Localize] Finnish Localization</li>

            <li>[Bugfix] Fixed a bug which caused not all available
            Rendezvous services to get listed</li>

            <li>[Bugfix] Removed 'Type ahead' feature of the
            browser (responsible for frequent crashes)</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.3b2</strong> <em>Apr-27-2004</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.3beta2.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
          <ul>
            <li>[Feature] Much improved queue management (fewer
            connections)</li>

            <li>[Feature] Resume downloads (SFTP)</li>

            <li>[Feature] Resume uploads (SFTP)</li>

            <li>[Feature] Resume uploads (FTP)</li>

            <li>[Feature] Move files on remote host by drag and
            drop</li>

            <li>[Feature] Drag files onto bookmark to quickly
            upload</li>

            <li>[Feature] Bookmarks are shown in the menu</li>

            <li>[Feature] Menu item 'Download As...'</li>

            <li>[Feature] Editing multiple files in the external
            editor with the same name</li>

            <li>[Feature] Warning if a duplicate exists when
            uploading files</li>

            <li>[Feature] 'Apply to all' checkbox in dialog asking
            for replace/resume/skip existing files</li>

            <li>[Feature] Improved caching of directory
            listings</li>

            <li>[Feature] When dropping files onto folders it will
            upload these into the folder</li>

            <li>[Feature] When typing the first letter of a file it
            gets selected in the browser</li>

            <li>[Feature] Toolbar button to remove all completed
            items from the queue</li>

            <li>[Feature] Convert line endings when downloading in
            ASCII mode (FTP)</li>

            <li>[Feature] Auto transfer mode (FTP)</li>

            <li>[Feature] Dock menu item to open new browser</li>

            <li>[Bugfix] Correctly updating incorrect keychain
            entries</li>

            <li>[Bugfix] Preserve modification date when
            downloading files</li>

            <li>[Bugfix] Ignoring .DS_Store files</li>

            <li>[Bugfix] Bug fixes</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.3b1</strong> <em>Mar-09-2004</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.3beta1.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
          <ul>
            <li>[Feature] External editor support (SubEthaEdit,
            BBEdit, TextWrangler, Text-Edit Plus)</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.2</strong> <em>Mar-06-2004</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.2.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
          <ul>
            <li>[Feature] Supporting folders with
            sticky/set-uid/set-gid bits (FTP)</li>

            <li>[Localize] Updated Dutch localization</li>

            <li>[Localize] Updated French localization</li>

            <li>[Bugfix] Minor performance improvements</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.2b6</strong> <em>Feb-25-2004</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.2beta6.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
          <ul>
            <li>[Feature] Preliminary support for Windows, VMS and
            OS/2 file listings (FTP)</li>

            <li>Properly deleting symbolic links (FTP)</li>

            <li>[Feature] Displaying link icons in browser</li>

            <li>[Bugfix] Downloading files from FTP servers not
            supporting the SIZE command (FTP)</li>

            <li>[Bugfix] Fixed a bug where overwritten files with
            SFTP got corrupted (Thanks to Jan!)</li>

            <li>[Feature] Contextual Menu support</li>

            <li>[Bugfix] Bug fixes</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.2b5</strong> <em>Feb-12-2004</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.2beta5.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
          <ul>
            <li>[Localize] Chinese (Traditional) Localization</li>

            <li>[Localize] Korean Localization</li>

            <li>[Feature] Passphrases for private key files are
            stored in the Keychain (SSH)</li>

            <li>[Feature] Bookmark editor allows to specify the
            port number</li>

            <li>[Feature] When a bookmark is edited, the properties
            are updated in the bookmark drawer instantly</li>

            <li>[Feature] A confirmation dialog is displayed before
            deleting a bookmark</li>

            <li>[Feature] A confirmation dialog is displayed when
            connecting to a new site in a browser still connected
            to another host</li>

            <li>[Bugfix] Transcript messages are only shown in the
            corresponding browser</li>

            <li>[Bugfix] Fixed a bug which caused the browser
            window to be 'frozen' after an upload</li>

            <li>[Feature] Option to adjust the 'LIST' command sent
            (FTP)</li>

            <li>[Bugfix] Fixed a bug which caused a crash when not
            connected to a network</li>

            <li>[Feature] Updated application icon</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.2b4</strong> <em>Jan-31-2004</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.2beta4.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
          <ul>
            <li>[Bugfix] Fixed a bug that with some servers the
            permissions could not be modified (FTP)</li>

            <li>[Bugfix] When addding a transfer to the queue it is
            highlighted</li>

            <li>[Bugfix] Improved login process</li>

            <li>[Localize] Updated Japanese localization</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.2b3</strong> <em>Jan-25-2004</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.2beta3.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
          <ul>
            <li>[Feature] Caching folder listings</li>

            <li>[Bugfix] Auto-refresh the folder listing after
            uploading a file</li>

            <li>[Feature] Sending 'LIST -a' to list directories
            (FTP)</li>

            <li>[Bugfix] Fixed a bug where entries in the queue
            would be deleted too early</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.2b2</strong> <em>Jan-24-2004</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.2beta2.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
          <ul>
            <li>[Localize] Updated Japanese localization</li>

            <li>[Localize] Updated French localization</li>

            <li>[Localize] Updated Portuguese localization</li>

            <li>[Localize] Updated Italian localization</li>

            <li>[Bugfix] The log is now written with a fixed-width
            font</li>

            <li>[Bugfix] Various minor improvements</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.2b1</strong> <em>Jan-22-2004</em> <a href=
        "./Cyberduck-2.2beta1.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
          <ul>
            <li>[Feature] Keychain integration</li>

            <li>[Feature] New file transfer manager</li>

            <li>[Feature] Full Unicode support</li>

            <li>[Feature] Support for public key authentication
            (SSH)</li>

            <li>[Feature] Live filtering directory listings</li>

            <li>[Feature] Improved Rendezvous support (jmDNS
            0.2)</li>

            <li>[Feature] Drag files from the browser to the
            transfer manager</li>

            <li>[Feature] Drag links to the transfer manager to
            start download</li>

            <li>[Feature] Browser can be customized to show/hide
            certain columns</li>

            <li>[Localize] Japanese Localization</li>

            <li>[Localize] Italian Localization</li>

            <li>[Localize] Portuguese Localization</li>

            <li>[Localize] Spanish Localization</li>

            <li>[Localize] French Localization</li>

            <li>[Bugfix] Various improvements and bug fixes</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.1</strong> <em>Dec-08-2003</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.1.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
          <ul>
            <li>[Feature] Bookmarks can now be edited.</li>

            <li>[Feature] Bookmarks can now be saved as a regular
            file (Drag the bookmarks to the Finder).</li>

            <li>[Feature] Bookmarks saved as files can be imported
            by dropping them on the Bookmarks Drawer.</li>

            <li>[Feature] Double clicking a Cyberduck bookmark file
            in the Finder will open a new browser and connect to
            the remote site</li>

            <li>[Feature] An initial directory upon new connection
            can now be specified (e.g. public_html instead of the
            default home).</li>

            <li>[Feature] Use keyboard shortcut (commann-up/down)
            for browsing a directory</li>

            <li>[Bugfix] Uploaded files now have the same
            permissions as the corresponding local files</li>

            <li>[Feature] Updated icon set</li>

            <li>[Bugfix] The sort order is now remembered while
            browsing</li>

            <li>[Feature] Toolbar icon to toggle Bookmark
            drawer</li>

            <li>[Feature] Updated SSH Core (v0.2.5)</li>

            <li>[Localize] Dutch Localization</li>

            <li>[Localize] German Localization</li>

            <li>[Bugfix] Smaller changes and bug fixes.</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.1b5</strong> <em>Aug-29-2003</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.1beta5.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
          <ul>
            <li>[Feature] HTTP is now supported again. Files can be
            downloaded from regular web servers.</li>

            <li>[Feature] Cyberduck can now be configured as the
            default FTP helper application. See <a href=
            "http://www.monkeyfood.com/software/moreInternet/">monkeyfood.com</a>.
            This seems to work with Safari and Internet
            Explorer.</li>

            <li>[Bugfix] Dragging files to the Finder is now more
            reliable.</li>

            <li>[Bugfix] The transfer panel does now close again if
            defined so in the preferences.</li>

            <li>[Feature] The buffer size (the size of download
            chunks to keep in memory before writing to disk) is now
            adjustable.</li>

            <li>[Feature] Login to anonymous FTP servers where no
            password is needed is now supported.</li>

            <li>[Bugfix] Smaller bug fixes</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.1b4</strong> <em>Aug-22-2003</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.1beta4.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
          <ul>
            <li>[Feature] Cyberduck now has the official creator
            code 'CYCK'.</li>

            <li>[Bugfix] Bug fixes</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.1b3</strong> <em>Aug-17-2003</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.1beta3.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
          <ul>
            <li>[Localize] Localization support</li>

            <li>[Feature] Files and foldes can now be dragged to
            the Finder to download them.</li>

            <li>[Feature] Windows do now no more stack exactly on
            the top of prior one.</li>

            <li>[Feature] There are now equivalent menu actions for
            the toolbar items.</li>

            <li>[Bugfix] Modification dates and time are now
            displayed correctly.</li>

            <li>[Bugfix] The modification date column is now sorted
            correctly.</li>

            <li>[Bugfix] Browser columns are now sortable in both
            directions.</li>

            <li>[Bugfix] When deleting multiple files and
            directores, the file list will now only get updated at
            the end because of performance.</li>

            <li>[Bugfix] If multiples have been selected to
            transfer, Cyberduck now puts them in the same queue and
            opens only one connection to the server.</li>

            <li>[Feature] There is a new command 'Go to folder' for
            changing the working directory quickly.</li>

            <li>[Bugfix] Many bug fixes.</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-solid" width="150" valign="top">
        <p><strong>2.1b2</strong> <em>Aug-15-2003</em><br />
        <a href="http://update.cyberduck.ch/Cyberduck-2.1beta2.dmg">Download</a></p></td>

        <td colspan="2" class="box-solid">
          <ul>
            <li>[Feature] Public beta release using the Cocoa
            Framework (instead of Java Swing) and support for
            SSH</li>
          </ul>

          <p>Older releases prior to version 2.1 using the Java
          Swing API can be found on <a href="./swing.php">this</a>
          page.</p>
        </td>
      </tr>

      <tr>
        <td colspan="3">
          <div class="footer">
            <a href=
            "http://validator.w3.org/check/referer">Validate</a>,
            $Date$<br />
          </div>
        </td>
      </tr>
    </table>
  </div>
  <?php echo(echoanalytics(".")); ?>
</body>
</html>
