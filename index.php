<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	   "http://www.w3.org/TR/html4/loose.dtd">
<?php
  include "../functions.php";
  include "../graphics.php";
?>
<html lang="en">
    <?php echo(echoheader("~dkocher | cyberduck", "..")); ?>
  <body bgcolor="#ffffff">
    <div align="center" class="standard">
      <table border="0" cellpadding="5" cellspacing="5" width="100%">
                <tr>
                  <td colspan="2"></td>
                  <td class="box-solid">
                    <div class="underline"><?php echo(echomenu(".."));?></div>
                    <br>
                    <h1>cyberduck</h1>
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
                  <td colspan="2" valign="top" class="box-solid">
                    <div align="center">
                      <img src="img/cyberduck.icon.png" width="128" height="128" alt="Cyberduck" border="0">
                    </div>
                  </td>
                  <td bgcolor="#ffcc33" class="box-dash">
                          <p>
                            Cyberduck is an <a href="http://opensource.org/docs/definition.php">open source</a> 
			    SFTP (SSH Secure File Transfer) and FTP browser licenced under the <a href="http://www.gnu.org/licenses/gpl.html">GPL</a> for the <a href="http://www.apple.com/macosx">Mac</a>. It features a intuitive 
			    user interface using the <a href="http://developer.apple.com/cocoa/">Cocoa Framework</a>. As a supplement it is possible to 
			    download files directly using HTTP or FTP, too.
			</p>
                          <p>
                            I appreciate any comments, feature suggestions and bug reports. Please send them directly to <a href="mailto:dkocher@cyberduck.ch?subject=cyberduck comment">me.</a>
                          </p>
                          <p>
                            <b>This program is <a href="http://www.gnu.org/philosophy/free-sw.html">free</a>. Free software is a matter of the users' freedom to run, copy, distribute, study, change and improve the software. If you find this program useful, please consider making a donation to support future development. It will motivate me to improve the application further!</b>
                          </p>
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_xclick">
                            <input type="hidden" name="business" value="dkocher@cyberduck.ch">
                            <input type="hidden" name="item_name" value="cyberduck">
                            <input type="hidden" name="item_number" value="cyberduck">
                            <input type="hidden" name="return" value="http://dewww.epfl.ch/~dkocher/cyberduck/index.html">
                            <input type="image" src="http://images.paypal.com/images/x-click-but04.gif" name="submit" alt="make payments with paypal - it's fast, free and secure!">
                          </form>
                          <p>
                            Software written by <a href="mailto:dkocher@cyberduck.ch">David  Kocher</a>, Switzerland.
                          </p>
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
                          <p>
                            Features of Cyberduck include:
                          </p>
                          <ul>
			    <li>Browsing FTP and SFTP (SSH) servers.</li>
			    <li>SSH core from <a href="http://sshtools.com">sshtools.com</a>
			    <li>FTP core from <a href="http://www.enterprisedt.com"> enterprisedt.com</a>
			    <li>Intuitive and non-bloated interface</li>
			    <li>Document based interface - open multiple browser windows.</li>
			    <li>Download files and directories</li>
			    <li>Upload files and directories (drag and drop from the Finder)</li>
			    <li>Rendezvous for easy lookup of servers on the local network</li>
                            <li>Resume interrupted or failed downloads</li>
                            <li>HTTP download</li>
			    <li>Set file permissions</li>
			    <li>Favorites manager</li>

                          </ul>
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
								<a href="./img/screenshot1.png" target="_blank"><img src="./img/screenshot1-thumb.png"></a>
							</div>
						</td>
						<td>
							<div align="center">
								<a href="./img/screenshot2.png" target="_blank"><img src="./img/screenshot2-thumb.png"></a>
							</div>
						</td>
						</tr>
						
                     	<tr>
						<td>
							<div align="center">
								<a href="./img/screenshot3.png" target="_blank"><img src="./img/screenshot3-thumb.png"></a>
							</div>
						</td>
						<td>
							<div align="center">
								<a href="./img/screenshot4.png" target="_blank"><img src="./img/screenshot4-thumb.png"></a>
							</div>
						</td>
						</tr>
                    </table>
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
<<<<<<< index.php
			<ul>
			<li><b>2.1beta1</b><br>
			<a href="./download.php?Cyberduck-2.1b1.dmg">Cyberduck-2.1beta1.dmg</a>, disk image</li>
			</ul>
		    <p>Older versions of Cyberduck running on any Java plattform are available <a href="./swing.php">here</a>.</p>
=======
					<ul>
						<li><b>2.1b1</b><br>
						<a href="./download.php?Cyberduck-2.1b1.dmg">Cyberduck-2.1b1.dmg</a>, disk image
						</li>
					</ul>
				    <p>Older versions of Cyberduck running on any Java plattform are available <a href="./swing.php">here</a>.</p>
>>>>>>> 1.13
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
                          <p>Source code is available licenced unter the <a href="http://www.gnu.org/licenses/gpl.html">gnu general public licence</a>.</p>
                          Current release:
                          <ul>
                            <li>2.1beta1:<br>
                            <a href="download.php?cyberduck-src-2.1b1.zip"> cyberduck-src-2.1b1.zip </a></li>
                          </ul>
                          Older releases using Java Swing API
                          <ul>
                            <li>2.0beta3:<br>
                            <a href="download.php?cyberduck-src-2.0b3.zip">cyberduck-src-2.0b3.zip</a></li>
                            <li>2.0beta2:<br>
                            <a href="download.php?cyberduck-src-2.0b2.zip">cyberduck-src-2.0b2.zip</a></li>
                            <li>2.0beta1:<br>
                            <a href="download.php?cyberduck-src-2.0b1.zip">cyberduck-src-2.0b1.zip</a></li>
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
                            <b>version 2.1b1</b>:
                          </p>
                          <ul>
							<li>Initial release using the Cocoa Framework (instead of Java Swing) and support for SSH</li>
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
                            copyright (c) 2002 david kocher. all rights reserved.
                          </p>
                          <p>
                            this program is free software; you can redistribute it and/or modify it under the terms of the gnu general public license as published by the free software foundation; either version 2 of the license, or (at your option) any later version.
                          </p>
                          <p>
                            this program is distributed in the hope that it will be useful, but without any warranty; without even the implied warranty of merchantability or fitness for a particular purpose. see the gnu general public license for more details.
                          </p>
                  </td>
                </tr>
      </table>
      <div align="right">
            <?php echo(echofooter(".."));?>
	    $Date$
    </div>
    </div>
  </body>
</html>