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
                <tr>
                  <td colspan="2"></td>
                  <td class="box-solid">
                      <a name="code">features</a>
                  </td>
                </tr>
                <tr>
                  <td colspan="2" valign="top">
                  <!--
                    <div align="center">
                        <img src="./img/rendezvous.png" width="70" alt="Rendezvous support" border="0"></img>
                     </div>
                    <div align="center">
                        <img src="./img/keychain.png" width="70" alt="Keychain Integration" border="0"></img>
                     </div>
                    -->
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
                    <?php echo(echofooter(".."));?>
                    </td>
                <td bgcolor="#ffffff" valign="top" class="box-dash">
                    <table width="100%" border="0" align="center"> 
                        <tr>
                            <td class="box-filled">Browse SFTP and FTP servers
                                <ul>
                                    <li>Open multiple simultaneous connections</li>
                                    <li>Document based interface</li>
                                    <li>Support for various encodings <a href="./img/encoding.png">(Screenshot)</a></li>
                                    <li>Live filtering of directory listings</li>
                                    <li>Caching folder listings</li>
                                    <li>Move files</li>
                                    <li>Rename files</li>
                                    <li>Delete files</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="box-filled">Available localizations: <i>English, Dutch, French, German, Italian, Japanese, Portuguese, Spanish, Korean, Traditional Chinese</td>
                        </tr>
                        <tr>
                            <td class="box-filled">
                                Seamless integration with external editors
                                <ul>
                                <li><a href="http://www.codingmonkeys.de/subethaedit/">SubEthaEdit</a></li>
                                <li><a href="http://www.barebones.com/products/bbedit/">BBEdit</a></li>
                                <li><a href="http://www.barebones.com/products/textwrangler">TextWrangler</a></li>
                                <li>Text-Edit Plus</td>
                        </tr>
                        <tr>
                            <td class="box-filled">Manage bookmarks
                                <ul>
                                    <li>Drag and drop to save bookmark as a file</li>
                                    <li>Drop files onto bookmarks to upload to remote host</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="box-filled">Keychain support</td>
                        </tr>
                        <tr>
                            <td class="box-filled">Public key authentication (SSH)</td>
                        </tr>
                        <tr>
                            <td class="box-filled">
                                Transfer Queue <a href="./img/transfer.png">(Screenshot)</a>
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
                            <td class="box-filled">
                            Modify permissions <a href="./img/info.png">(Screenshot)</a></td>
                        </tr>
                        <tr>
                            <td class="box-filled">Rendezvous support</td>
                        </tr>
                        <tr>
                            <td class="box-filled">Passive and active FTP mode</td>
                        </tr>
                        <tr>
                            <td class="box-filled">ASCII and binary FTP transfers</td>
                        </tr>
                        <tr>
                            <td class="box-filled">Transcript</td>
                        </tr>
                    </table>
                </td>
            </tr>
		<tr>
            <td colspan="3">
    			<div align="right">
	    			<a href="http://validator.w3.org/check/referer">Validate</a>, $Date$
       	 		</div>
		    </td>
		</tr>
      </table>
    </div>
  </body>
</html>
