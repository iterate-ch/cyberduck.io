<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	   "http://www.w3.org/TR/html4/loose.dtd">
<?php
  include "../functions.php";
?>
<html lang="en">
    <?php echo(echoheader("~dkocher | cyberduck", "..")); ?>
  <body bgcolor="#ffffff">
    <div align="center" class="standard">
      <table border="0" cellpadding="5" cellspacing="5" width="700">
                <tr>
                  <td colspan="2" valign="top" class="box-solid">
                    <div align="center">
                      <img src="img/cyberduck.icon.png" width="128" height="128" alt="Cyberduck" border="0">
                    </div>
                  </td>
                  <td class="box-solid">
                    <div class="underline"><?php echo(echomenu(".."));?></div>
                    <br>
                    <h1>Cyberduck</h1>
			<h3>FTP and SSH Browser for Mac OS X</h3>
                    <div align="left">
                      <a href="#features">features</a> | 
                      <a href="#look">look and feel</a> | 
                      <a href="#download">download</a> | 
                      <a href="#code">source code</a> | 
                      <a href="#history">history</a> | 
                      <a href="#license">license</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td colspan="2"></td>
                  <td bgcolor="#ffcc33" class="box-dash">
                          <p>
                            Cyberduck is an <a href="http://opensource.org/docs/definition.php">open source</a> 
			    SFTP (SSH Secure File Transfer) and FTP browser licenced under the <a href="http://www.gnu.org/licenses/gpl.html">GPL</a>.
			    			</p>
			<p>
			    Cyberduck features the same intuitive interface for both FTP and SFTP browsing. Cyberduck is now <a href="http://www.apple.com/macosx">Mac</a> only, with a completly rewritten user interface using the <a href="http://developer.apple.com/cocoa/">Cocoa Framework</a>.
			    </p>
			    <p>
			    You can open connections to multiple servers thanks to its document based interface. A simple favorites manager allows you to store freuqently used servers.
			    </p>
			    <p>
			    Files and even directories can be uploaded easily by just dragging them from the Finder.
			    Double clicking a file will initiate a download. Files can be deleted and renamed. A Finder-like Info panel allows the modification of permissions.
			    </p>
			    <p>
			    The SSH core is from <a href="http://sshtools.com/">sshtools.com</a>. FTP core from 
			    <a href="http://www.enterprisedt.com/"> enterprisedt.com</a>.
			    </p>

			<div align="center"><img src="./img/Cyberduck000.png"></div>
                  </td>
                </tr>
                <tr>
                  <td colspan="2" valign="top" class="box-solid">
                    <div align="center">
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_xclick">
                            <input type="hidden" name="business" value="dkocher@cyberduck.ch">
                            <input type="hidden" name="item_name" value="cyberduck">
                            <input type="hidden" name="item_number" value="cyberduck">
                            <input type="hidden" name="return" value="http://cyberduck.ch">
                            <input type="image" src="http://images.paypal.com/images/x-click-but04.gif" name="submit" alt="make payments with paypal - it's fast, free and secure!">
                          </form>
			  </div>
                  </td>
                  <td bgcolor="#ffcc33" class="box-dash">
                          <p>
                            I appreciate any comments, feature suggestions and bug reports. Please send them directly to <a href="mailto:dkocher@cyberduck.ch?subject=cyberduck comment">me.</a>
                          </p>
                          <p>
                            <b>This program is <a href="http://www.gnu.org/philosophy/free-sw.html">free</a>. Free software is a matter of the users' freedom to run, copy, distribute, study, change and improve the software. If you find this program useful, please consider making a donation to support future development. It will motivate me to improve the application further!</b>
                          </p>
                          <p>
                            Software written by <a href="mailto:dkocher@cyberduck.ch">David  Kocher</a>, Switzerland.
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
						<img src="./img/builtosx.gif" width="128" height="128" alt="Built for Mac OS X" border="0">
                    </div>
                  </td>
                  <td bgcolor="#ffcc33" class="box-dash">
			<ul>
			<li><b>2.1beta2</b><br>
			<a href="./download.php?Cyberduck-2.1beta2.dmg.gz">Cyberduck-2.1beta2.dmg.gz</a>, disk image</li>
			</ul>
		    <p>Older versions of Cyberduck running on any Java plattform are available <a href="./swing.php">here</a>.</p>
                  </td>
                </tr>

                <tr>
                  <td colspan="2"></td>
                  <td class="box-solid">
                      <a name="features">features</a>
                  </td>
                </tr>
                <tr>
                  <td colspan="2"></td>
                  <td bgcolor="#ffcc33" class="box-dash">
			  <table width="95%" border="0" align="center"> 
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
				<td class="box-filled">Upload file(s) (Drag and drop from the Finder)</td>
				<td class="box-filled">Yes</td>
				<td class="box-filled">Yes</td>
			    </tr>
			    <tr>
				<td class="box-filled">Upload directory (Drag and drop from the Finder)</td>
				<td class="box-filled">Yes</td>
				<td class="box-filled">Yes</td>
			    </tr>
			    <tr>
				<td class="box-filled">Delete file(s)</td>
				<td class="box-filled">Yes</td>
				<td class="box-filled">Yes</td>
			    </tr>
			    <tr>
				<td class="box-filled">Delete directory</td>
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
			  <table width="95%" border="0" align="center"> 
			    <tr>
				<td class="box-filled">
				    <p>
				    <strong>About SFTP.</strong> SFTP stands for Secure File Transfer Protocol. It is capable of encrypting all data that pass between it and the server using SSH as the encryption method. Whereas regular FTP passes your login and password in plain text and runs the risk of being intercepted, SFTP uses encryption to prevent others from acquiring your password.
				    </p>
				</td>
			    </tr>
			    <tr>
				<td class="box-filled" >
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
                      <a name="look">look and feel</a>
                  </td>
                </tr>
                <tr>
                  <td colspan="2"></td>
                  <td bgcolor="#ffffff" class="box-dash">
		    <table width="100%" border="0" align="center">
                      	<tr>
			    <td>
				    <div align="center">
					    <img src="./img/Cyberduck003.png">
					    <p>Uploading mail attachement with drag and drop to SFTP server</p>
				    </div>
			    </td>
			</tr>
                      	<tr>
			    <td>
				    <div align="center">
					    <img src="./img/Cyberduck002.png">
					    <p>Edit permissions on remote files</p>
				    </div>
			    </td>
			</tr>
			<tr>
			    <td>
				    <div align="center">
					    <img src="./img/Cyberduck004.png"></a>
					    <p>Add Favorites</p>
				    </div>
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
                  <td bgcolor="#ffcc33" class="box-dash">
                    <table border="0" width="100%">
                      <tr>
                        <td>
                          <p>Source code is available licenced unter the <a href="http://www.gnu.org/licenses/gpl.html">GNU general public licence</a>.</p>
                          Current release:
                          <ul>
                            <li>2.1beta2:<br>
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
                  <td bgcolor="#ffcc33" class="box-dash">
                    <table border="0" width="100%">
                      <tr>
                        <td>
                          <p>
			    Older releases prior to version 2.1 using the Java Swing API can be found on <a href="./swing.php">this</a> page.
			    </p>
			    <p>
                            <b>version 2.1b2</b>:
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
                  <td colspan="2"></td>
                  <td bgcolor="#ffcc33" class="box-dash">
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
