<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
  include "../functions.php";
?>
<html lang="en">
    <?php echo(echoheader("~dkocher | cyberduck", "..")); ?>
  <body bgcolor="#ffffff">
    <div align="center" class="standard">
      <table border="0" cellpadding="5" cellspacing="5" width="700">
                <tr>
                  <td colspan="3" class="alert">
			Support the development of Cyberduck by making a <a href="https://www.paypal.com/xclick/business=dkocher%40cyberduck.ch&amp;item_name=Cyberduck&amp;item_number=1&amp;no_shipping=1&amp;no_note=1&amp;tax=0&amp;currency_code=USD&amp;lc=US" title="Thanks!">donation</a> :)
			     </td>
                </tr>
                <tr>
                  <td width="200" colspan="2" valign="top" class="box-solid">
                    <div align="center">
                      <img src="img/cyberduck.icon.jpg" width="128" height="128" alt="Cyberduck" border="0"></img>
                     </div>
                  </td>
                  <td class="box-solid">
                    <div class="underline"><?php echo(echomenu(".."));?></div>
                    	<br />
                    	<h1>Cyberduck</h1>
			<h3>FTP and SFTP Browser for Mac OS X</h3>
                    <div align="left">
                      <a href="index.php">about</a> | 
                      <a href="index.php#download">download</a> | 
                      <a href="features.php">features</a> | 
                      <a href="source.php">source code</a> | 
                      <a href="changelog.php">changelog</a> | 
                      <a href="license.php">license</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td colspan="2"></td>
                  <td class="box-solid">
                      <a name="history">changelog</a>
                  </td>
                </tr>
                <tr>
                  <td colspan="2" valign="top">
                  	<p>
                  	 <i>I just checked out Cyberduck. Tres' cool!</i> --Steve Mallett
                  	</p>
                  	<p>
                    <i>Cyberduck is a real nugget of gold</i> --Bob G-H
                  	</p>
                  	<p>
                  	 <i>Cyberduck is indeed ace</i> --Richard Whitelock
                  	</p>
                  	<p>
                  	 <i>Awesome job with the new beta!</i> --Jeff Nouwen
                  	</p>
                  	<p>
                  	 <i>Thanks for providing such a nice little application!</i> --Stephen
                  	</p>
                  	<p>
                  	 <i>Nice small and fast application</i> --Claudius Sailer
                  	</p>
                  </td>
                  <td bgcolor="#ffffff" valign="top" class="box-dash">
                    <table  width="100%" border="0">
                      <tr>
                        <td>
                          <p>Older releases prior to version 2.1 using the Java Swing API can be found on <a href="./swing.php">this</a> page.</p>
						   <p>
							<b>2.2b1</b> <i></i>
                          </p>
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
						   <p>
							<b>2.1</b> <i>Dec-08-2003</i>
                          </p>
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
						   <p>
							<b>2.1beta5</b> <i>Aug-29-2003</i>
                          </p>
                          <ul>
<li>HTTP is now supported again. Files can be downloaded from regular web servers.</li>
<li>Cyberduck can now be configured as the default FTP helper application. See <a href="http://www.monkeyfood.com/software/moreInternet/">monkeyfood.com</a>. This seems to work with Safari and Internet Explorer.</li>
<li>Dragging files to the Finder is now more reliable.</li>
<li>The transfer panel does now close again if defined so in the preferences.</li>
<li>The buffer size (the size of download chunks to keep in memory before writing to disk) is now adjustable.</li>
<li>Login to anonymous FTP servers where no password is needed is now supported.</li>
<li>Smaller bug fixes</li>
                          </ul>                          
						   <p>
							<b>2.1beta4</b> <i>Aug-22-2003</i>
                          </p>
                          <ul>
						    <li>Cyberduck now has the official creator code 'CYCK'.<!-- and can handle URL events from other applications. See "http://www.monkeyfood.com/software/moreInternet/" to configure Cyberduck as the default FTP helper application.--></li>
						    <li>Bug fixes</li>
                          </ul>
                          
						   <p>
                            <b>2.1beta3</b> <i>Aug-17-2003</i>
                          </p>
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
                          
						   <p>
                            <b>2.1beta2</b> <i>Aug-15-2003</i>
                          </p>
                          <ul>
			    <li>Public beta release using the Cocoa Framework (instead of Java Swing) and support for SSH</li>
                          </ul>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
		<tr>
                  <td colspan="2"></td>
		    <td>
    			<div align="right">
            			<?php echo(echofooter(".."));?>
	    			$Date$
       	 		</div>
		    </td>
		</tr>
      </table>
    </div>
  </body>
</html>