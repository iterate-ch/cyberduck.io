<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
  include "../functions.php";
?>
<html lang="en">
    <?php echo(echoheader("~dkocher | cyberduck | features", ".")); ?>
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
                      <b><a name="code">features</a></b>
                  </td>
                </tr>
                <tr>
                  <td valign="top" colspan="2">
                    <b>Browse SFTP and FTP servers</b>
                  </td>
                  <td valign="top" class="box-dash">
                                <ul>
                                    <li>Open multiple simultaneous connections</li>
                                    <li>Document based interface</li>
                                    <li>Support for various encodings <a href="./img/encoding.png">(Screenshot)</a></li>
                                    <li>Live filtering of directory listings</li>
                                    <li>Caching folder listings</li>
                                    <li>Move files  <a href="./img/move.png">(Screenshot)</a></li>
                                    <li>Copy &amp; paste files</li>
                                    <li>Rename files</li>
                                    <li>Delete files</li>
                                    <!--<li>SOCKS Proxy support</li>-->
                                </ul>
                    </td>
                </tr>
                
                <tr>
                  <td valign="top" colspan="2">
                        <b>Localizations</b>
                  </td>
                  <td valign="top" class="box-dash">
                        <i>English, Dutch, German, French, Italian, Japanese, Korean, Chinese (Traditional and Simplified), Portuguese, Spanish, Finnish, Slovak, Czech and Norwegian</i>
                    </td>
                </tr>
                
                <tr>
                  <td valign="top" colspan="2">
                        <b>Seamless integration with external editors</b>
                  </td>
                  <td valign="top" class="box-dash">    
                    <table>
                        <tr>
                            <td>
                                <ul>
                                    <li><a href="http://www.codingmonkeys.de/subethaedit/">SubEthaEdit</a></li>
                                    <li><a href="http://www.barebones.com/products/bbedit/">BBEdit</a></li>
                                    <li>BBEdit Lite</li>
                                    <li><a href="http://www.barebones.com/products/textwrangler">TextWrangler</a></li>
                                    <li>Text-Edit Plus</li>
                                    <li><a href="http://macromates.com/">TextMate</a></li>
                                </ul>
                            </td>
                            <td>
                                <div align="right">
                                    <img src="./img/editor.png" alt="External editor support" border="0"></img>
                                </div>
                            </td>
                        </tr>
                    </table>
                  </td>
                </tr>
                
                <tr>
                  <td valign="top" colspan="2">
                            <b>Manage bookmarks</b>
                  </td>
                  <td valign="top" class="box-dash">
                                <ul>
                                    <li>Drag and drop to save bookmark as a file</li>
                                    <li>Drag proxy icon in the window title bar to the Finder</li>
                                    <li>Drag proxy icon in the window title bar to the bookmark drawer</li>
                                    <li>Drop files onto bookmarks to upload to remote host</li>
                                </ul>
                    </td>
                </tr>
                
                <tr>
                  <td valign="top" colspan="2">
                        <b>Keychain support</b>
                    </td>
                  <td valign="top" class="box-dash">
                    <div align="left">
                        <img src="./img/keychain.png" width="70" alt="Keychain Integration" border="0"></img>
                     </div>
                    </td>
                </tr>

                <tr>
                  <td valign="top" colspan="2">
                        <b>Public key authentication (SSH)</b>
                    </td>
                  <td valign="top" class="box-dash"></td>
                </tr>
                
                <tr>
                  <td valign="top" colspan="2">
                                <b>Transfers <a href="./img/transfer.png">(Screenshot)</a></b>
                    </td>
                  <td valign="top" class="box-dash">
                                <ul>
                                    <li>Resume downloads (FTP and SFTP)</li>
                                    <li>Resume uploads (FTP and SFTP)</li>
                                    <li>Download folders (recursive)</li>
                                    <li>Upload folders (recursive)</li>
                                    <li>Drag and drop to transfer files (Finder &lt;--&gt; Cyberduck)</li>
                                </ul>
                    </td>
                </tr>

                <tr>
                  <td valign="top" colspan="2">
                                <b>Synchronize <a href="./img/sync.png">(Screenshot)</a></b>
                    </td>
                  <td valign="top" class="box-dash">
                                <ul>
                                	<li>Synchronize local with remote directories (and vice versa)</li>
                                	<li>Choose to download/upload missing files>
                                </ul>
                    </td>
                </tr>

                <tr>
                  <td valign="top" colspan="2">
                            <b>Modify permissions <a href="./img/info.png">(Screenshot)</a></b>
                    </td>
                  <td valign="top" class="box-dash">
                                <ul>
                                    <li>Modify permissions on multiple files</li>
                                    <li>Modify permissions recursivly</li>
                                </ul>
                  </td>
                </tr>
                <tr>
                  <td valign="top" colspan="2">
                        <b>Rendezvous support</b>
                    </td>
                  <td valign="top" class="box-dash">
                        <div align="left">
                            <!--<img src="./img/rendezvous.png" width="70" alt="Rendezvous support" border="0"></img>-->
                            <img src="./img/rendezvous2.png" alt="Rendezvous support" border="0"></img>
                        </div>
                    </td>
                </tr>
                <tr>
                  <td valign="top" colspan="2">
                       <b>Passive and active FTP mode</b>
                    </td>
                  <td valign="top" class="box-dash"></td>
                </tr>
                <tr>
                  <td valign="top" colspan="2">
                            <b>ASCII and binary FTP transfers</b>
                    </td>
                  <td valign="top" class="box-dash">
                                <ul>
                                    <li>Convert line endings on the fly in ASCII transfers</li>
                                </ul>
                  </td>
                </tr>
                <tr>
                  <td valign="top" colspan="2">
                            <b>Transcript</b>
                    </td>
                  <td valign="top" class="box-dash"></td>
                </tr>

            <tr>
                <td colspan="3">
                    <div align="right">
	    			<a href="http://validator.w3.org/check/referer">Validate</a>, $Date$
                    </div>
                </td>
            </tr>
			<?php echo(echofooter());?>
      </table>
    </div>
  </body>
</html>
