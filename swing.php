<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
  include "../functions.php";
  include "../graphics.php";
?>
<html lang="en">
    <?php echo(echoheader("~dkocher | cyberduck", "..")); ?>
  <body bgcolor="#ffffff">
    <div align="center" class="standard">
      <table border="0" cellpadding="5" cellspacing="5" width="700">
                <tr>
                  <td colspan="2" valign="top" class="box-solid">
                    <div align="center">
                      <img src="img/cyberduck.icon.png" width="128" height="128" alt="Cyberduck" border="0"></img>
                    </div>
                  </td>
                  <td class="box-solid">
                    <div class="underline"><?php echo(echomenu(".."));?></div>
                    <br />
                    <h1>cyberduck</h1 >
		    <h3>Java FTP Client</h3>
                    <div align="left">
                      <a href="#features">features</a> | 
                      <a href="#requirements">requirements</a> | 
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
			<b>This version of Cyberduck is outdated. Please have a look at the <a href="./index.php">new version</a> written with the Cocoa Framework and with support for SSH.</b>
                          <p>
                            cyberduck is an <a href="http://opensource.org/docs/definition.php">open source</a> download manager
                             and http/ftp client. you can store urls as bookmarks, manage your 
                             downloads and use the ftp capabilities to browse the contents of a 
                             ftp server or i.e. upload your website to the remote ftp server. 
                             cyberduck is written in <a href="http://java.sun.com/">Java</a>. 
                             and runs on any java 2 runtime environment. there is a version built for 
                             mac os x, packaged as a double clickable application bundle.
                          </p>
                          <p>
                            i appreciate any comments, feature suggestions and bug reports. please send them directly to <a href="mailto:dkocher@icu.unizh.ch?subject=cyberduck comment">me.</a>
                          </p>
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
		                  </td>
	                  <td bgcolor="#ffcc33" class="box-dash">
                          <p>
                            <b>This program is <a href="http://www.GNU.org/philosophy/free-sw.html">free</a>. Free software is a matter of the users' freedom to run, copy, distribute, study, change and improve the software. If you find this program useful, please consider making a donation to support future development: </b>
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
                    <table border="0" width="100%">
                      <tr>
                        <td>
                          <p>
                            features of cyberduck include:
                          </p>
                          <ul>
                            <li>bookmark manager</li>
                            <li>unlimited simultaneous transfers (multithreaded)</li>
                            <li>resume interrupted or failed downloads (both http and ftp)</li>
                            <li>http download (get)</li>
                            <li>ftp uploads and downloads (also recursive)</li>
                            <li>ftp directory listing and browsing (list)</li>
                            <li>ftp make directory/rename/delete (mkdir, rnfr, del)</li>
                            <li>ftp set file permissions (chmod)</li>
                            <li>single or multiple window mode</li>
                            <li>drag and drop</li>
                            <li>preferences</li>
                            <li>transcript</li>
                          </ul>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td colspan="2"></td>
                  <td class="box-solid">
                      <a name="requirements">requirements</a>
                  </td>
                </tr>
                <tr>
                  <td colspan="2"></td>
                  <td bgcolor="#ffcc33" class="box-dash">
                    <table border="0" width="100%">
                      <tr>
                        <td>
                          <p>
                            you need a java 2 runtime environment probably already installed on your system, otherwise available from sun microsystems at <a href="http://java.sun.com/">java.sun.com</a>.<br />
                            cyberduck has not been tested with jdk 1.4.<br />
                          </p>
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
						<img src="img/duke.gif" alt="Built for Java" border="0"></img>
                    </div>
                  </td>
                  <td bgcolor="#ffcc33" class="box-dash">
                    <table border="0" width="100%">
                      <tr>
                        <td>
                          <p>
                            <b>version 2.0b3</b>
                          </p>
                          <ul>
                            <li><b>cyberduck for any java platform:</b> <br />
                            <a href="download.php?Cyberduck-2.0beta3.zip">Cyberduck-2.0beta3.zip </a>, <b>or</b>
                            <a href="download.php?Cyberduck-2.0beta3.tar.gz">Cyberduck-2.0beta3.tar.gz </a>
							</li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                            <p>
                              on any unix flavor, <code>cd</code> to the downloaded file and unpack
                              the archive with <code>tar xzvf cyberduck.tar.gz</code>. do not unpack the
                              jar file. to launch cyberduck <code>cd</code> to the directory where you
                              moved cyberduck.jar to and type into the shell
                              <code>
                                java -jar cyberduck.jar
                              </code>
                              . if you are running windows, you can probably just double click the 
                              downloaded jar file to launch the application. if this doesn't work, 
                              open a console and launch cyberduck as described above with <code>java -jar cyberduck.jar</code>.
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
                  <td bgcolor="#ffcc33" class="box-dash">
                    <table border="0" width="100%">
                      <tr>
                        <td>
                          <p>source code is available licenced unter the <a href="http://www.GNU.org/licenses/gpl.html">GNU general public licence</a>.</p>
                          <ul>
                            <li>2.0beta3:<br />
                            <a href="download.php?cyberduck-src-2.0beta3.zip">cyberduck-src-2.0beta3.zip</a></li>
                          </ul>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td colspan="2"></td>
                  <td class="box-solid">
                      <a name="history">version history</a>
                  </td>
                </tr>
                <tr>
                  <td colspan="2"></td>
                  <td bgcolor="#ffcc33" class="box-dash">
                    <table border="0" width="100%">
                      <tr>
                        <td>
                          <p>
                            <b>version 1.0</b>:
                          </p>
                          <ul>
                            <li>experimental; never released to public</li>
                            <li>not yet based on the <a href="http://jakarta.apache.org/">jakarta</a>
                             http library</li>
                            <li>no ftp cababilities</li>
                          </ul>
                          <p>
                            <b>version 2.0b1</b>:
                          </p>
                          <ul>
                            <li>initial public release (april 2002)</li>
                            <li>ftp support</li>
                            <li>enhanced interface</li>
                          </ul>
                          <p>
                            <b>version 2.0b2</b>:
                          </p>
                          <ul>
                            <li>set unix permissions over ftp</li>
                            <li>recursive ftp downloads and uploads</li>
                            <li>ftp directory browsing more convenient</li>
                            <li>multiple window interface option</li>
                            <li>bug fixes</li>
                          </ul>
                          <p>
                            <b>version 2.0b3</b>:
                          </p>
                          <ul>
                            <li>better status indication</li>
                            <li>improved graphical interface</li>
                            <li>bug fixes</li>
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
                  <td bgcolor="#ffcc33" class="box-dash">
                    <table border="0" width="100%">
                      <tr>
                        <td>
                          <p>
                            copyright (c) 2002 david kocher. all rights reserved.
                          </p>
                          <p>
                            this program is free software; you can redistribute it and/or modify it under the terms of the GNU general public license as published by the free software foundation; either version 2 of the license, or (at your option) any later version.
                          </p>
                          <p>
                            this program is distributed in the hope that it will be useful, but without any warranty; without even the implied warranty of merchantability or fitness for a particular purpose. see the GNU general public license for more details.
                          </p>
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
