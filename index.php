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
                  <td colspan="3" width="100%" class="box-dash">
			Support the development of Cyberduck by making a <a href="https://www.paypal.com/xclick/business=dkocher%40cyberduck.ch&amp;item_name=Cyberduck&amp;item_number=1&amp;no_shipping=1&amp;no_note=1&amp;tax=0&amp;currency_code=USD&amp;lc=US" title="Thanks!">donation</a> :)
			     </td>
                </tr>
                <tr>
                  <td width="128" colspan="2" valign="top" class="box-solid">
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
                      <a href="#features">features</a> | 
                      <a href="#download">download</a> | 
                      <a href="#code">source code</a> | 
                      <a href="#history">history</a> | 
                      <a href="#license">license</a>
                    </div>
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
                  	<form method="post"
					    action="http://osdir.com/modules.php?op=modload&amp;name=Downloads&amp;file=index">
						<table border="0" width="175" cellspacing="0" cellpadding="0">
						  <tr>
						    <td>
						      Vote for Cyberduck on O'Reilly's OSDir.com
						    </td>
						  </tr>
						  <tr>
						    <td>
						      <table border="0" cellspacing="0" cellpadding="0">
						        <tr>
						          <td valign="top">
						            <select name="rating">
						              <option selected="selected">--</option>
						              <option value="10">10</option>
						              <option value="9">9</option>
						              <option value="8">8</option>
						              <option value="7">7</option>
						              <option value="6">6</option>
						              <option value="5">5</option>
						              <option value="4">4</option>
						              <option value="3">3</option>
						              <option value="2">2</option>
						              <option value="1">1</option>
						            </select>
						          </td>
						          <td valign="top">
						            <input type="hidden" name="ratinglid" value="492"></input>
						            <input type="hidden" name="ratinguser" value="outside"></input>
						            <input type="hidden" name="req" value="addrating"></input>
						            <input type="submit" value="Vote!"></input>
						          </td>
						        </tr>
						      </table>
						    </td>
						  </tr>
						</table>
					</form>
                  </td>
                  <td width="100%" bgcolor="#ffcc33" valign="top" class="box-dash">
                          <p>
                            Cyberduck is an <a href="http://opensource.org/docs/definition.php">open source</a> 
			    SFTP (SSH Secure File Transfer) and FTP browser licenced under the <a href="http://www.gnu.org/licenses/gpl.html">GPL</a>.
			    			</p>
			<p>
			    Cyberduck features the same intuitive interface for both FTP and SFTP browsing. Cyberduck is now <a href="http://www.apple.com/macosx">Mac</a> only, with a completly rewritten user interface using the <a href="http://developer.apple.com/cocoa/">Cocoa Framework</a>.
				<br />
			    You can open connections to multiple servers thanks to its document based interface.
			    <br />
                A bookmark manager allows you to store frequently-used servers. Bookmarks can be exported as a regular file by dragging them to the Finder.
                <br />
			    Drag and drop is supported for both downloading and uploading files. Just drag the file(s) or folder from the Finder to the browser window or vice versa to start the transfer. 
				<br />
			    	File deletion and renaming, checking and changing of permissions is possible with a Finder-like info panel.
				<br />
					<a href="http://www.apple.com/macosx/rendezvous.html">Rendezvous</a> is supported.
				<br />
			    The SSH core is from <a href="http://sshtools.com/">sshtools.com</a>. FTP core from 
			    <a href="http://www.enterprisedt.com/"> enterprisedt.com</a>.
			    </p>
                          <p>
                            I appreciate any comments, feature suggestions and bug reports. Please send them directly to <a href="mailto:dkocher@cyberduck.ch?subject=Cyberduck Comment">me.</a>
				<br />
                            Software written by <a href="mailto:dkocher@cyberduck.ch">David  Kocher</a>, Switzerland.
                          </p>
                  </td>
                </tr>
                <tr>
                  <td colspan="3" valign="top" class="alert">
                            <b>Beta testers needed!</b> You want Cyberduck to get better? I am looking for beta testers for the next release which will feature a download queue, keychain integration and more. Contact <a href="mailto:dkocher@cyberduck.ch?subject=Cyberduck Beta Testing">me</a> if you are interested.
                  </td>
                </tr>
                <tr>
                <td colspan="3" valign="top" class="alert">
                            <b>Translators needed!</b> If you want Cyberduck to speak your native language, contact <a href="mailto:dkocher@cyberduck.ch?subject=Cyberduck Translation">me</a>. You don't need any programming skills.
                 </td>
                </tr>
               <tr>
                  <td colspan="3" valign="top">
			<a href="./img/Cyberduck000.png"><img align="middle" width="700" height="425" border="0" src="./img/Cyberduck000.thumb.jpg" alt="Cyberduck Screenshot"></img></a>
                  </td>
                </tr>
                <tr>
                  <td colspan="2" valign="top" class="box-solid">
                    <div align="center">
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_xclick"></input>
                            <input type="hidden" name="business" value="dkocher@cyberduck.ch"></input>
                            <input type="hidden" name="item_name" value="cyberduck"></input>
                            <input type="hidden" name="item_number" value="cyberduck"></input>
                            <input type="hidden" name="return" value="http://cyberduck.ch"></input>
                            <input type="image" src="http://images.paypal.com/images/x-click-but04.gif" name="submit" alt="make payments with paypal - it's fast, free and secure!"></input>
                          </form>
			         </div>
			         <!--
			         <div align="center">
			             <p>Go shopping for Cyberduck gadgets in the <a href="http://www.cafeshops.com/cyberduck">Cafepress Cyberduck shop</a>!
			         </div>
			         -->
                  </td>
                  <td bgcolor="#ffcc33" valign="top" class="box-dash">
                          <p>
                            <b>This program is <a href="http://www.gnu.org/philosophy/free-sw.html">free</a>. Free software is a matter of the users' freedom to run, copy, distribute, study, change and improve the software. If you find this program useful, please consider making a donation to support future development. It will motivate me to improve the application further!</b>
                          </p>
                  </td>
                </tr>
		
                <tr>
                  <td colspan="2"></td>
                  <td class="box-solid">
                      <a name="download">download</a>
                  </td>
                </tr>
                <tr>
                  <td colspan="2" valign="top" class="box-solid">
                    <div align="center">
			<img src="./img/builtosx.gif" alt="Built for Mac OS X" border="0"></img>
                    </div>
                  </td>
                  <td bgcolor="#ffcc33" valign="top" class="box-dash">
                  <p>
                    Mac OS X 10.3 recommended (Minimum requirement is Mac OS X 10.2)<br />
                    <!--Latest <a href="http://www.apple.com/downloads/macosx/apple/java.html">Java Update</a> recommended-->
                </p>
			<ul>
			<li><b>2.1</b> <i>Dec-08-2003</i><br />
			 <a href="./download.php?Cyberduck-2.1.dmg">Cyberduck-2.1.dmg</a></li>
                        <li><b>2.1beta5</b> <i>Aug-29-2003</i><br />
                         <a href="./download.php?Cyberduck-2.1beta5.dmg">Cyberduck-2.1beta5.dmg</a></li>
			</ul>
                  </td>
                </tr>

                <tr>
                  <td colspan="2"></td>
                  <td class="box-solid">
                      <a name="features">features</a>
                  </td>
                </tr>
                <tr>
                  <td colspan="2" valign="top">
                  	<p>
                  	 <i>Very nice app, very nice indeed. I love it! Better than Transmit, Fugu,
RBrowser, and all the rest. Keep at it!</i> --Nic Waller
                  	</p>
                  	<p>
                  	<i>Cyberduck is a really useful and well done. My only complaint is that
it badly needs a profesionnal looking icon!</i> --FB eye
                  	</p>
                  	<p>
                  	<i>This works great and is very complete, yet simple enough for anyone to use. The name and icon are cute too</i> --sugrxsweet
                  	</p>
                  	<p>
                  	<i>Anyway, Cyberduck seems to do the trick!</i> --griffeymac
                  	</p>
                  	<p>
                  	<i>Have been looking for a free FTP client for a while. This is the first that did the job quickly and painlessly. Thumbs up!</i> --Anonymous
                  	</p>
                  </td>
                  <td bgcolor="#ffcc33" valign="top" class="box-dash">
			  <table width="100%" border="0" align="center"> 
			    <tr>
				<td>&nbsp;</td>
				<td class="box-filled">FTP</td>
				<td class="box-filled">SFTP</td>
			    </tr>
			    <tr>
				<td class="box-filled">Browse server directories</td>
				<td class="box-filled">Yes</td>
				<td class="box-filled">Yes</td>
			    </tr>
			    <tr>
				<td class="box-filled">History of connected hosts</td>
				<td class="box-filled">Yes</td>
				<td class="box-filled">Yes</td>
			    </tr>
			    <tr>
				<td class="box-filled">Save bookmark</td>
				<td class="box-filled">Yes</td>
				<td class="box-filled">Yes</td>
			    </tr>
			    <tr>
				<td class="box-filled">Export bookmark as regular file (drag and drop)</td>
				<td class="box-filled">Yes</td>
				<td class="box-filled">Yes</td>
			    </tr>
			    <tr>
				<td class="box-filled">Double click bookmark file to connect</td>
				<td class="box-filled">Yes</td>
				<td class="box-filled">Yes</td>
			    </tr>
			    <tr>
				<td class="box-filled">Drag downloads to the Finder</td>
				<td class="box-filled">Yes</td>
				<td class="box-filled">Yes</td>
			    </tr>
			    <tr>
				<td class="box-filled">Download file(s)</td>
				<td class="box-filled">Yes</td>
				<td class="box-filled">Yes</td>
			    </tr>
			    <tr>
				<td class="box-filled">Download directory</td>
				<td class="box-filled">Yes</td>
				<td class="box-filled">Yes</td>
			    </tr>
			    <tr>
				<td class="box-filled">Drag uploads to a browser</td>
				<td class="box-filled">Yes</td>
				<td class="box-filled">Yes</td>
			    </tr>
			    <tr>
				<td class="box-filled">Upload file(s)</td>
				<td class="box-filled">Yes</td>
				<td class="box-filled">Yes</td>
			    </tr>
			    <tr>
				<td class="box-filled">Upload directory</td>
				<td class="box-filled">Yes</td>
				<td class="box-filled">Yes</td>
			    </tr>
			    <tr>
				<td class="box-filled">File deletion</td>
				<td class="box-filled">Yes</td>
				<td class="box-filled">Yes</td>
			    </tr>
			    <tr>
				<td class="box-filled">Directory deletion</td>
				<td class="box-filled">Yes</td>
				<td class="box-filled">Yes</td>
			    </tr>
			    <tr>
				<td class="box-filled">Rendezvous for easy lookup of servers on the local network</td>
				<td class="box-filled">Yes</td>
				<td class="box-filled">Yes</td>
			    </tr>
			    <tr>
				<td class="box-filled">Resume interrupted or failed downloads</td>
				<td class="box-filled">Yes</td>
				<td class="box-filled">No</td>
			    </tr>
			    <tr>
				<td class="box-filled">Permissions modification</td>
				<td class="box-filled">Yes</td>
				<td class="box-filled">Yes</td>
			    </tr>
			    <tr>
				<td class="box-filled">Passive mode</td>
				<td class="box-filled">Yes</td>
				<td class="box-filled">No</td>
			    </tr>
			    <tr>
				<td class="box-filled">ASII and binary transfer mode</td>
				<td class="box-filled">Yes</td>
				<td class="box-filled">No</td>
			    </tr>
			    <tr>
				<td class="box-filled">Keychain support</td>
				<td class="box-filled">Not yet</td>
				<td class="box-filled">Not yet</td>
			    </tr>
                          </table>
			  <table width="100%" border="0" align="center"> 
			    <tr>
				<td bgcolor="#ffcc33" class="box-filled">
				    <p>
				    <strong>About SFTP.</strong> SFTP stands for Secure File Transfer Protocol. It is capable of encrypting all data that pass between it and the server using SSH as the encryption method. Whereas regular FTP passes your login and password in plain text and runs the risk of being intercepted, SFTP uses encryption to prevent others from acquiring your password.
				    </p>
				</td>
			    </tr>
			    <tr>
				<td bgcolor="#ffcc33" class="box-filled" >
				    <p>
				    <strong>About FTP.</strong> FTP stands for File Transfer Protocol. All data and passwords are transfered clear text.
				    </p>
				</td>
			    </tr>
			  </table>
                  </td>
                </tr>
                <tr>
                  <td colspan="2"></td>
                  <td class="box-solid">
                      <a name="code">source code</a>
                  </td>
                </tr>
                <tr>
                  <td colspan="2"></td>
                  <td bgcolor="#ffcc33" valign="top" class="box-dash">
                    <table border="0" width="100%">
                      <tr>
                        <td>
                          <p>Source code is available licenced unter the <a href="http://www.gnu.org/licenses/gpl.html">GNU general public licence</a>. You need <a href="http://jakarta.apache.org/ant">Ant</a> to build .</p>
                          <p>You can browse the CVS repository <a href="http://sudo.ch/cgi-bin/viewcvs.cgi/cyberduck-cocoa/">here</a>. (Warning: Slow connection)
                          </p>
                          <ul>
                            <li><b>2.1</b> <i>Dec-08-2003</i><br />
                            <a href="download.php?cyberduck-src-2.1.tgz"> cyberduck-src-2.1.tgz </a></li>
                          </ul>
                          <ul>
                            <li><b>2.1beta5</b> <i>Aug-15-2003</i><br />
                            <a href="download.php?cyberduck-src-2.1beta5.tgz"> cyberduck-src-2.1beta5.tgz </a></li>
                          </ul>
                          <ul>
                            <li><b>2.1beta4</b> <i>Aug-17-2003</i><br />
                            <a href="download.php?cyberduck-src-2.1beta4.tgz"> cyberduck-src-2.1beta4.tgz </a></li>
                          </ul>
                          <ul>
                            <li><b>2.1beta3</b> <i>Aug-22-2003</i><br />
                            <a href="download.php?cyberduck-src-2.1beta3.tgz"> cyberduck-src-2.1beta3.tgz </a></li>
                          </ul>
                          <ul>
                            <li><b>2.1beta2:</b> <i>Aug-29-2003</i><br />
                            <a href="download.php?cyberduck-src-2.1beta2.tgz"> cyberduck-src-2.1beta2.tgz </a></li>
                          </ul>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td colspan="2"></td>
                  <td class="box-solid">
                      <a name="history">changelog</a>
                  </td>
                </tr>
                <tr>
                  <td colspan="2"></td>
                  <td bgcolor="#ffcc33" valign="top" class="box-dash">
                    <table border="0" width="100%">
                      <tr>
                        <td>
                          <p>Older releases prior to version 2.1 using the Java Swing API can be found on <a href="./swing.php">this</a> page.</p>
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
                  <td class="box-solid">
                    <div align="left">
                      <a name="license">license</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td colspan="2" class="box-solid">
                    <div align="center">
                        <img src="./img/gnu.jpg" alt="GNU GPL Software" border="0"></img>
                    </div>
		</td>
		<td bgcolor="#ffcc33" valign="top" class="box-dash">
                          <p>
                            copyright (c) 2003 david kocher. all rights reserved.
                          </p>
                          <p>
                            this program is free software; you can redistribute it and/or modify it under the terms of the gnu general public license as published by the free software foundation; either version 2 of the license, or (at your option) any later version.
                          </p>
                          <p>
                            this program is distributed in the hope that it will be useful, but without any warranty; without even the implied warranty of merchantability or fitness for a particular purpose. see the gnu general public license for more details.
                          </p>
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
