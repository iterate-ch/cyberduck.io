<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
  include "../functions.php";
?>
<html lang="en">
    <?php echo(echoheader("~dkocher | cyberduck | changelog", ".")); ?>
  <body bgcolor="#ffffff">
    <div align="center" class="standard">
      <table border="0" cellpadding="5" cellspacing="5" width="700">
                <tr>
                  <td width="200" colspan="2" valign="top" class="box-solid">
                    <div align="center">
                      <img src="img/cyberduck.icon.jpg" width="128" height="128" alt="Cyberduck" border="0"></img>
                     </div>
                  </td>
                  <td width="100%" class="box-solid">
                    <div class="underline">
                        <?php echo(echomenu(".."));?>
                    </div>
                    <br />
                    <?php echo(echotitle());?>
                    <div align="left">
                        <?php echo(echosubmenu());?>
                    </div>
                  </td>
                </tr>
                <?php echo(echoSoftwarePatents());?>
                <tr>
                  <td colspan="2"></td>
                  <td class="box-solid">
                      <b><a name="history">changelog</a></b>
                  </td>
                </tr>

                <tr>
                  <td colspan="2" valign="top">
							<b>2.3.2</b> <i>August-05-2004</i> <a href="./Cyberduck-2.3.2.dmg">Download</a>
                  </td>
                  <td class="box-dash">
                      <ul>
                      </ul>
                  </td>
                </tr>

                <tr>
                  <td colspan="2" valign="top">
							<b>2.3.1</b> <i>June-15-2004</i> <a href="./Cyberduck-2.3.1.dmg">Download</a>
                  </td>
                  <td class="box-dash">
                      <ul>
<li>Chinese (Simplified) Localization</li>
<li>Rendezvous services in Bookmark menu</li>
<li>Upper level directories had to be listed first when uploading files</li>
<li>Changes to bookmarks won't be saved</li>
<li>Preference item to disable the update check</li>
<li>Toolbar item to open downloaded files with default application</li>
<li>Graceful application termination (Properly ask to close all connections and then quit)</li>
<li>Remembering choosen directories in open and save dialogs</li>
                      </ul>
                  </td>
                </tr>

                <tr>
                  <td colspan="2" valign="top">
							<b>2.3</b> <i>May-15-2004</i> <a href="./Cyberduck-2.3.dmg">Download</a>
                  </td>
                  <td class="box-dash">
                      <ul>
						<li>Supporting Keyboard Interactive (PAM) Authentication (SSH)</li>
                        <li>Finnish Localization</li>
                        <li>Fixed a bug which caused not all available Rendezvous services to get listed</li>
                        <li>Removed 'Type ahead' feature of the browser (responsible for frequent crashes)</li>
                      </ul>
                  </td>
                </tr>

                <tr>
                  <td colspan="2" valign="top">
							<b>2.3b2</b> <i>Apr-27-2004</i> <a href="./Cyberduck-2.3beta2.dmg">Download</a>
                  </td>
                  <td class="box-dash">
                      <ul>
                            <li>Much improved queue management (fewer connections)</li>
                            <li>Resume downloads (SFTP)</li>
                            <li>Resume uploads (SFTP)</li>
                            <li>Resume uploads (FTP)</li>
                            <li>Move files on remote host by drag and drop</li>
                            <li>Drag files onto bookmark to quickly upload</li>
                            <li>Bookmarks are shown in the menu</li>
                            <li>Menu item 'Download As...'</li>
                            <li>Editing multiple files in the external editor with the same name</li>
                            <li>Warning if a duplicate exists when uploading files</li>
                            <li>'Apply to all' checkbox in dialog asking for replace/resume/skip existing files</li>
                            <li>Improved caching of directory listings</li>
                            <li>When dropping files onto folders it will upload these into the folder</li>
                            <li>When typing the first letter of a file it gets selected in the browser</li>
                            <li>Toolbar button to remove all completed items from the queue</li>
                            <li>Convert line endings when downloading in ASCII mode (FTP)</li>
                            <li>Auto transfer mode (FTP)</li>
                            <li>Dock menu item to open new browser</li>
                            <li>Correctly updating incorrect keychain entries</li>
                            <li>Preserve modification date when downloading files</li>
                            <li>Ignoring .DS_Store files</li>
                            <li>Bug fixes</li>
                      </ul>
                  </td>
                </tr>

                <tr>
                  <td colspan="2" valign="top">
							<b>2.3b1</b> <i>Mar-09-2004</i> <a href="./Cyberduck-2.3beta1.dmg">Download</a>
                  </td>
                  <td class="box-dash">
                          <ul>
<li>External editor support (SubEthaEdit, BBEdit, TextWrangler, Text-Edit Plus)</li>
                          </ul>
                  </td>
                </tr>
                
                <tr>
                  <td colspan="2" valign="top">
							<b>2.2</b> <i>Mar-06-2004</i> <a href="./Cyberduck-2.2.dmg">Download</a>
                  </td>
                  <td class="box-dash">
                          <ul>
<li>Supporting folders with sticky/set-uid/set-gid bits (FTP)</li>
<li>Updated Dutch localization</li>
<li>Updated French localization</li>
<li>Minor performance improvements</li>
                          </ul>
                  </td>
                </tr>
                
                <tr>
                  <td colspan="2" valign="top">
							<b>2.2b6</b> <i>Feb-25-2004</i> <a href="./Cyberduck-2.2beta6.dmg">Download</a>
                  </td>
                  <td class="box-dash">
                          <ul>
<li>Preliminary support for Windows, VMS and OS/2 file listings (FTP)</li>
<li>Properly deleting symbolic links (FTP)</li>
<li>Displaying link icons in browser</li>
<li>Downloading files from FTP servers not supporting the SIZE command (FTP)</li>
<li>Fixed a bug where overwritten files with SFTP got corrupted (Thanks to Jan!)</li>
<li>Contextual Menu support</li>
<li>Bug fixes</li>
                          </ul>

                  </td>
                </tr>
                
                <tr>
                  <td colspan="2" valign="top">
							<b>2.2b5</b> <i>Feb-12-2004</i> <a href="./Cyberduck-2.2beta5.dmg">Download</a>
                  </td>
                  <td class="box-dash">
                          <ul>
<li>Chinese (Traditional) Localization</li>
<li>Korean Localization</li>
<li>Passphrases for private key files are stored in the Keychain (SSH)</li>
<li>Bookmark editor allows to specify the port number</li>
<li>When a bookmark is edited, the properties are updated in the bookmark drawer instantly</li>
<li>A confirmation dialog is displayed before deleting a bookmark</li>
<li>A confirmation dialog is displayed when connecting to a new site in a browser still connected to another host</li>
<li>Transcript messages are only shown in the corresponding browser</li>
<li>Fixed a bug which caused the browser window to be 'frozen' after an upload</li>
<li>Option to adjust the 'LIST' command sent (FTP)</li>
<li>Fixed a bug which caused a crash when not connected to a network</li>
<li>Updated application icon</li>
                          </ul>

                  </td>
                </tr>
                
                <tr>
                  <td colspan="2" valign="top">
							<b>2.2b4</b> <i>Jan-31-2004</i> <a href="./Cyberduck-2.2beta4.dmg">Download</a>
                  </td>
                  <td class="box-dash">
                          <ul>
<li>Fixed a bug that with some servers the permissions could not be modified (FTP)</li>
<li>When addding a transfer to the queue it is highlighted</li>
<li>Improved login process</li>
<li>Updated Japanese localization</li>
                          </ul>

                  </td>
                </tr>
                
                <tr>
                  <td colspan="2" valign="top">
							<b>2.2b3</b> <i>Jan-25-2004</i> <a href="./Cyberduck-2.2beta3.dmg">Download</a>
                  </td>
                  <td class="box-dash">
                          <ul>
<li>Caching folder listings</li>
<li>Auto-refresh the folder listing after uploading a file</li>
<li>Sending 'LIST -a' to list directories (FTP)</li>
<li>Fixed a bug where entries in the queue would be deleted too early</li>
                          </ul>

                  </td>
                </tr>
                
                <tr>
                  <td colspan="2" valign="top">
							<b>2.2b2</b> <i>Jan-24-2004</i> <a href="./Cyberduck-2.2beta2.dmg">Download</a>
                  </td>
                  <td class="box-dash">
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
                  <td colspan="2" valign="top">
							<b>2.2b1</b> <i>Jan-22-2004</i> <a href="./Cyberduck-2.2beta1.dmg">Download</a>
                  </td>
                  <td class="box-dash">
                          <ul>
<li>Keychain integration</li>
<li>New file transfer manager</li>
<li>Full Unicode support</li>
<li>Support for public key authentication (SSH)</li>
<li>Live filtering directory listings</li>
<li>Improved Rendezvous support (jmDNS 0.2)</li>
<li>Drag files from the browser to the transfer manager</li>
<li>Drag links to the transfer manager to start download</li>
<li>Browser can be customized to show/hide certain columns</li>
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
                  <td colspan="2" valign="top">
							<b>2.1</b> <i>Dec-08-2003</i> <a href="./Cyberduck-2.1.dmg">Download</a>
                  </td>
                  <td class="box-dash">
                          <ul>
<li>Bookmarks can now be edited.</li>
<li>Bookmarks can now be saved as a regular file (Drag the bookmarks to the Finder).</li>
<li>Bookmarks saved as files can be imported by dropping them on the Bookmarks Drawer.</li>
<li>Double clicking a Cyberduck bookmark file in the Finder will open a new browser and connect to the remote site</li>
<li>Bookmarks can now be modified</li>
<li>An initial directory upon new connection can now be specified (e.g. public_html instead of the default home).</li>
<li>Use keyboard shortcut (commann-up/down) for browsing a directory</li>
<li>Uploaded files now have the same permissions as the corresponding local files</li>
<li>Updated icon set</li>
<li>The sort order is now remembered while browsing</li>
<li>Toolbar icon to toggle Bookmark drawer</li>
<li>Updated SSH Core (v0.2.5)</li>
<li>Dutch Localization</li>
<li>German Localization</li>
<li>Smaller changes and bug fixes.</li>
                          </ul>
                  </td>
                </tr>
                
                <tr>
                  <td colspan="2" valign="top">
							<b>2.1b5</b> <i>Aug-29-2003</i> <a href="./Cyberduck-2.1beta5.dmg">Download</a>
                  </td>
                  <td class="box-dash">
                          <ul>
<li>HTTP is now supported again. Files can be downloaded from regular web servers.</li>
<li>Cyberduck can now be configured as the default FTP helper application. See <a href="http://www.monkeyfood.com/software/moreInternet/">monkeyfood.com</a>. This seems to work with Safari and Internet Explorer.</li>
<li>Dragging files to the Finder is now more reliable.</li>
<li>The transfer panel does now close again if defined so in the preferences.</li>
<li>The buffer size (the size of download chunks to keep in memory before writing to disk) is now adjustable.</li>
<li>Login to anonymous FTP servers where no password is needed is now supported.</li>
<li>Smaller bug fixes</li>
                          </ul> 
                                                   
                  </td>
                </tr>
                
                <tr>
                  <td colspan="2" valign="top">
							<b>2.1b4</b> <i>Aug-22-2003</i> <a href="./Cyberduck-2.1beta4.dmg">Download</a>
                  </td>
                  <td class="box-dash">
                          <ul>
<li>Cyberduck now has the official creator code 'CYCK'.</li>
<li>Bug fixes</li>
                          </ul>
                          
                  </td>
                </tr>
                
                <tr>
                  <td colspan="2" valign="top">
                            <b>2.1b3</b> <i>Aug-17-2003</i> <a href="./Cyberduck-2.1beta3.dmg">Download</a>
                  </td>
                  <td class="box-dash">
                          <ul>
<li>Localization support</li>
<li>Files and foldes can now be dragged to the Finder to download them.</li>
<li>Windows do now no more stack exactly on the top of prior one.</li>
<li>There are now equivalent menu actions for the toolbar items.</li>
<li>Modification dates and time are now displayed correctly.</li>
<li>The modification date column is now sorted correctly.</li>
<li>Browser columns are now sortable in both directions.</li>
<li>When deleting multiple files and directores, the file list will now only get updated at the end because of performance.</li>
<li>If multiples have been selected to transfer, Cyberduck now puts them in the same queue and opens only one connection to the server.</li>
<li>There is a new command 'Go to folder' for changing the working directory quickly.</li>
<li>Many bug fixes.</li>
                          </ul>
                          
                  </td>
                </tr>
                
                <tr>
                  <td colspan="2" valign="top">
                            <b>2.1b2</b> <i>Aug-15-2003</i> <a href="./Cyberduck-2.1beta2.dmg">Download</a>
                  </td>
                  <td class="box-dash">
                          <ul>
<li>Public beta release using the Cocoa Framework (instead of Java Swing) and support for SSH</li>
                          </ul>

                          <p>Older releases prior to version 2.1 using the Java Swing API can be found on <a href="./swing.php">this</a> page.</p>
                  </td>
                </tr>
                
                <tr>
                  <td colspan="2"></td>
                  <td>
                        <div align="right">
                            <a href="http://validator.w3.org/check/referer">Validate</a>, $Date$
                    </div>
                  </td>
                </tr>
      </table>
    </div>
  </body>
</html>
