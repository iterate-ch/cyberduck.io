<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<?php
  include "../functions.php";
  include "../ecard/graphics.php";
?>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
    <title>
      ~/dkocher | Cyberduck
    </title>
    <link rel="Stylesheet" href="../global.css" type="text/css">
  </head>
  <body bgcolor="#CCCCCC" text="#000000" link="#FFFFFF" alink="#FFFFFF" vlink="#FFFFFF">
    <div align="center">
      <table border="0" cellpadding="0" cellspacing="0" width="600" bgcolor="#CCCCCC">
        <tr>
          <td bgcolor="#FFFFFF">
            <div align="center">
              <table border="0" cellpadding="5" cellspacing="0" width="700" bgcolor="#CCCCCC">
                <tr>
                  <td bgcolor="#525D76">
                    &nbsp;
                  </td>
                  <td>
                    &nbsp;
                  </td>
                  <td bgcolor="#525D76">
                    <div><?php echo(generateheader(".."));?></div>
                    <div>
                      &nbsp;
                    </div>
                    <div align="left">
                      <img src="img/title.gif" width="136" height="27" alt="" border="0">
                    </div>
                    <div align="left">
                      <font><a href="#features">Features</a> | 
                      <a href="#look">Look and Feel</a> | 
                      <a href="#requirements">Requirements</a> | 
                      <a href="#download">Download</a> | 
                      <a href="#code">Source Code</a> | 
                      <a href="#history">History</a> | 
                      <a href="#future">Future</a> | 
                      <a href="#license">License</a></font>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td bgcolor="#525D76" valign="top">
                    <div align="center">
                      <img src="img/cyberduck.icon.gif" width="128" height="128" alt="" border="0">
                    </div>
                  </td>
                  <td>
                    &nbsp;
                  </td>
                  <td bgcolor="#FFCC33">
                    <table border="0" width="100%">
                      <tr>
                        <td>
                          <p>
                            Cyberduck is an <a href="http://opensource.org/docs/definition.php">open source</a> download manager
                             and Http/Ftp client. You can store URLs as bookmarks, manage your 
                             downloads and use the Ftp capabilities to browse the contents of a 
                             Ftp server or i.e. upload your website to the remote Ftp server. 
                             Cyberduck is written in <a href="http://java.sun.com/">Java&#153</a>. 
                             and runs on any Java 2 runtime environment. There is a version built for 
                             Mac OS X, packaged as a double clickable application bundle.
                          </p>
                          <p>
                            I appreciate any comments, feature suggestions and bug reports. Please send them directly to <a href="mailto:dkocher@icu.unizh.ch?subject=Cyberduck Comment">me.</a>
                          </p>
                          <p>
                            <b> If you find this program useful, please consider making a donation to support future development: </b>
                          </p>
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_xclick">
                            <input type="hidden" name="business" value="dkocher@icu.unizh.ch">
                            <input type="hidden" name="item_name" value="Cyberduck">
                            <input type="hidden" name="item_number" value="Cyberduck">
                            <input type="hidden" name="return" value="http://dewww.epfl.ch/~dkocher/cyberduck/index.html">
                            <input type="image" src="http://images.paypal.com/images/x-click-but04.gif" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
                          </form>
                          <p>
                            Software written by <a href="mailto:dkocher@icu.unizh.ch">David Kocher</a>, Switzerland.<br>
                            <br>
                          </p>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td bgcolor="#525D76">
                  </td>
                  <td>
                    &nbsp;
                  </td>
                  <td bgcolor="#525D76">
                    <div align="left">
                      <b><font><a name="features">Features</a></font></b>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td bgcolor="#525D76">
                  </td>
                  <td>
                    &nbsp;
                  </td>
                  <td bgcolor="#FFCC33">
                    <table border="0" width="100%">
                      <tr>
                        <td>
                          <p>
                            Features of Cyberduck include:
                          </p>
                          <ul>
                            <li>Bookmark manager</li>
                            <li>Unlimited simultaneous transfers (Multithreaded)</li>
                            <li>Resume interrupted or failed downloads (both http and ftp)</li>
                            <li>HTTP download (GET)</li>
                            <li>FTP Uploads and downloads (also recursive)</li>
                            <li>FTP Directory listing and browsing (LIST)</li>
                            <li>FTP Make directory/rename/delete (MKDIR, RNFR, DEL)</li>
                            <li>FTP Set file permissions (CHMOD)</li>
                            <li>Single or multiple window mode</li>
                            <li>Drag and drop</li>
                            <li>Preferences</li>
                            <li>Transcript</li>
                          </ul>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td bgcolor="#525D76">
                  </td>
                  <td>
                    &nbsp;
                  </td>
                  <td bgcolor="#525D76">
                    <div align="left">
                      <b><font><a name="look">Look and Feel</a></font></b>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td bgcolor="#525D76">
                  </td>
                  <td>
                    &nbsp;
                  </td>
                  <td bgcolor="#FFCC33">
                    <table width="100%" border="0" cellspacing="0" cellpadding="5" align="center">
                      <tr>
                        <td>
                          <p>
                            This is what Cyberduck looks like:
                          </p>
                        <td>
                      </tr>
                      <tr>
                        <?php   $img_dir = "./img/screenshots";
                            $thumb_dir = "./img/screenshots/thumbnails";
                            $thumb_width = 180;
                            $cards_per_row = 2;
                            $images = listdir($img_dir, "png");
                            $n = 0;
                            $k = 0; 
                            for($i = 0; $i < count($images); $i++) { 
                              $n++; 
                              thumbnail($img_dir, $thumb_dir, $images[$i], $thumb_width); 
                              $thumb_size = getImageSize($thumb_dir."/".$images[$i]);
                              echo(" 
                                <td>
                                  <div align=\"center\">
                                    <a href=\"$img_dir/$images[$i]\" target=\"_blank\"><img src=\"$thumb_dir/$images[$i]\" $thumb_size[3] border=\"0\"></a>
                                  </div>
                                </td>"
                              ); 
                              if($n >= $cards_per_row || $i == count($images)-1) { 
                                echo("
                                  </tr>
                                  <tr>"
                                ); 
                                $n = 0; 
                              } 
                            } 
                          ?>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td bgcolor="#525D76">
                  </td>
                  <td>
                    &nbsp;
                  </td>
                  <td bgcolor="#525D76">
                    <div align="left">
                      <b><font><a name="requirements">Requirements</a></font></b>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td bgcolor="#525D76">
                  </td>
                  <td>
                    &nbsp;
                  </td>
                  <td bgcolor="#FFCC33">
                    <table border="0" width="100%">
                      <tr>
                        <td>
                          <p>
                            You need a Java 2 Runtime Environment probably already installed on your system, otherwise available from Sun Microsystems at <a href="http://java.sun.com/">java.sun.com</a>.<br>
                            Cyberduck has not been tested with JDK 1.4.<br>
                            Mac OS X users should download the <b>Java 1.3.1 Update 1</b> via Software Update for better performance.
                          </p>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td bgcolor="#525D76">
                  </td>
                  <td>
                    &nbsp;
                  </td>
                  <td bgcolor="#525D76">
                    <div align="left">
                      <b><font><a name="download">Download</a></font></b>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td bgcolor="#525D76">
                  </td>
                  <td>
                    &nbsp;
                  </td>
                  <td bgcolor="#FFCC33">
                    <table border="0" width="100%">
                      <tr>
                        <td>
                          <p>
                            <b>Version 2.0b3</b>
                          </p>
                          <ul>
                            <li><b>Cyberduck for Mac OS X: </b><br>
                            <a href="./download.php?Cyberduck-beta3.dmg.gz">Cyberduck-beta3.dmg.gz</a>, gzipped disk image
                            <p>
                              Double click cyberduck.dmg. A disk image will load on your desktop. Drag the Cyberduck application to your preffered location on your hard disk (eg. /Applications).
                            </p>
                            </li>
                          </ul>
                          <ul>
                            <li><b>Cyberduck for any Java platform:</b> <br>
                            <a href="download.php?Cyberduck-beta3.zip"> Cyberduck-beta3.zip </a>, zipped file suitable for Windows <br>
                            <b>or</b> <br>
                            <a href="download.php?Cyberduck-beta3.tar.gz"> Cyberduck-beta3.tar.gz </a>, tar, gzipped file suitable for UNIXes
                            </li>
                          </ul>
                        </td>                        <td>
                          <p>
                            <b>Version 2.0b2</b>
                          </p>
                          <ul>
                            <li><b>Cyberduck for Mac OS X: </b><br>
                            <a href="./download.php?Cyberduck-beta2.dmg.gz">Cyberduck-beta2.dmg.gz</a>, gzipped disk image
                            <p>
                              Double click cyberduck.dmg. A disk image will load on your desktop. Drag the Cyberduck application to your preffered location on your hard disk (eg. /Applications).
                            </p>
                            </li>
                          </ul>
                          <ul>
                            <li><b>Cyberduck for any Java platform:</b> <br>
                            <a href="download.php?Cyberduck-beta2.zip"> Cyberduck-beta2.zip </a>, zipped file suitable for Windows <br>
                            <b>or</b> <br>
                            <a href="download.php?Cyberduck-beta2.tar.gz"> Cyberduck-beta2.tar.gz </a>, tar, gzipped file suitable for UNIXes
                            </li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                            <p>
                              On any UNIX flavor, <code>cd</code> to the downloaded file and unpack
                              the archive with <code>tar xzvf Cyberduck.tar.gz</code>. Do NOT unpack the
                              jar file. To launch Cyberduck <code>cd</code> to the directory where you
                              moved Cyberduck.jar to and type into the shell
                              <code>
                                java -jar Cyberduck.jar
                              </code>
                              . If you are running Windows, you can probably just double click the 
                              downloaded jar file to launch the application. If this doesn't work, 
                              open a console and launch Cyberduck as described above with <code>java -jar Cyberduck.jar</code>.
                            </p>
                         </td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td bgcolor="#525D76">
                  </td>
                  <td>
                    &nbsp;
                  </td>
                  <td bgcolor="#525D76">
                    <div align="left">
                      <b><font><a name="code">Source code</a></font></b>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td bgcolor="#525D76">
                  </td>
                  <td>
                    &nbsp;
                  </td>
                  <td bgcolor="#FFCC33">
                    <table border="0" width="100%">
                      <tr>
                        <td>
                          <p>
                            Source code is available licenced unter the <a href="http://www.gnu.org/licenses/gpl.html">GNU General Public Licence</a>.
                          </p>
                          <ul>
                            <li>v2.0beta3:<br>
                            <a href="download.php?cyberduck-src-2.0b3.zip">cyberduck-src-2.0b3.zip</a></li>
                            <li>v2.0beta2:<br>
                            <a href="download.php?cyberduck-src-2.0b2.zip">cyberduck-src-2.0b2.zip</a></li>
                            <li>v2.0beta1:<br>
                            <a href="download.php?cyberduck-src-2.0b1.zip">cyberduck-src-2.0b1.zip</a></li>
                          </ul>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td bgcolor="#525D76">
                  </td>
                  <td>
                    &nbsp;
                  </td>
                  <td bgcolor="#525D76">
                    <div align="left">
                      <b><font><a name="history">Version history</a></font></b>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td bgcolor="#525D76">
                  </td>
                  <td>
                    &nbsp;
                  </td>
                  <td bgcolor="#FFCC33">
                    <table border="0" width="100%">
                      <tr>
                        <td>
                          <p>
                            <b>Version 1.0</b>:
                          </p>
                          <ul>
                            <li>Experimental; never released to public</li>
                            <li>Not yet based on the <a href="http://jakarta.apache.org/">Jakarta</a>
                             http library</li>
                            <li>No ftp cababilities</li>
                          </ul>
                          <p>
                            <b>Version 2.0b1</b>:
                          </p>
                          <ul>
                            <li>Initial public release (april 2002)</li>
                            <li>FTP support</li>
                            <li>Enhanced interface</li>
                          </ul>
                          <p>
                            <b>Version 2.0b2</b>:
                          </p>
                          <ul>
                            <li>Set Unix permissions over Ftp</li>
                            <li>Recursive ftp downloads and uploads</li>
                            <li>Ftp directory browsing more convenient</li>
                            <li>Multiple window interface option</li>
                            <li>Bug fixes</li>
                          </ul>
                          <p>
                            <b>Version 2.0b3</b>:
                          </p>
                          <ul>
                            <li>Better status indication</li>
                            <li>Improved graphical interface</li>
                            <li>Bug fixes</li>
                          </ul>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td bgcolor="#525D76">
                  </td>
                  <td>
                    &nbsp;
                  </td>
                  <td bgcolor="#525D76">
                    <div align="left">
                      <b><font><a name="future">Future</a></font></b>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td bgcolor="#525D76">
                  </td>
                  <td>
                    &nbsp;
                  </td>
                  <td bgcolor="#FFCC33">
                    <table border="0" width="100%">
                      <tr>
                        <td>
                          <p>
							If I might have too much time, I will try to implement the secure Ftp protocol
							(<a href="http://www.openssh.org/txt/draft-ietf-secsh-filexfer-02.txt"
							>SFTP</a>)
							on top of <a href="http://www.pitman.co.za/">Rob Pitmans's</a> 
							secure shell (<a href="http://www.snailbook.com/docs/protocol-1.5.txt">
							SSH</a>) Java implementation 
							<a href="http://www.pitman.co.za/projects/jssh/">jssh</a>. 

                          </p>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td bgcolor="#525D76">
                  </td>
                  <td>
                    &nbsp;
                  </td>
                  <td bgcolor="#525D76">
                    <div align="left">
                      <b><font><a name="license">License</a></font></b>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td bgcolor="#525D76">
                  </td>
                  <td>
                    &nbsp;
                  </td>
                  <td bgcolor="#FFCC33">
                    <table border="0" width="100%">
                      <tr>
                        <td>
                          <p>
                            Copyright (c) 2002 David Kocher. All rights reserved.
                          </p>
                          <p>
                            This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.
                          </p>
                          <p>
                            This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
                          </p>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <?php echo(generatefooter(".."));?>
          </td>
        </tr>
      </table>
    </div>
  </body>
</html>