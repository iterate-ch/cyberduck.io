<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
  include "../functions.php";
?>
<html lang="en">
    <?php echo(echoheader("~dkocher | cyberduck | features", "..")); ?>
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
                  <td width="100%" class="box-solid">
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
                    </td>
                <td bgcolor="#ffffff" valign="top" class="box-dash">
                    <table width="100%" border="0" align="center"> 
                        <tr>
                            <td class="box-filled">Browse SFTP/FTP servers</td>
                        </tr>
                        <tr>
                            <td class="box-filled">Open multiple simultaneous connections</td>
                        </tr>
                        <tr>
                            <td class="box-filled">Document based interface</td>
                        </tr>
                        <tr>
                            <td class="box-filled">Manage bookmarks</td>
                        </tr>
                        <tr>
                            <td class="box-filled">Keychain support</td>
                        </tr>
                        <tr>
                            <td class="box-filled">Public key authentication (SSH)</td>
                        </tr>
                        <tr>
                            <td class="box-filled"><a href="./img/transfer.png">Transfer manager</a></td>
                        </tr>
                        <tr>
                            <td class="box-filled"><a href="./img/encoding.png">Support for various encodings</a></td>
                        </tr>
                        <tr>
                            <td class="box-filled">Live filtering of directory listings</td>
                        </tr>
                        <tr>
                            <td class="box-filled">Drag and drop to save bookmark as a file</td>
                        </tr>
                        <tr>
                            <td class="box-filled">Resume interrupted or failed downloads (FTP)</td>
                        </tr>
                        <tr>
                            <td class="box-filled">Drag and drop to transfer files (Finder &lt;--&gt; Cyberduck)</td>
                        </tr>
                        <tr>
                            <td class="box-filled">Rename files</td>
                        </tr>
                        <tr>
                            <td class="box-filled">Delete files</td>
                        </tr>
                        <tr>
                            <td class="box-filled"><a href="./img/info.png">Modify permissions</a></td>
                        </tr>
                        <tr>
                            <td class="box-filled">History of connected hosts</td>
                        </tr>
                        <tr>
                            <td class="box-filled">Caching folder listings</td>
                        </tr>
                        <tr>
                            <td class="box-filled">Rendezvous support</td>
                        </tr>
                        <tr>
                            <td class="box-filled">Passive and active FTP mode</td>
                        </tr>
                        <tr>
                            <td class="box-filled">ASII and binary FTP transfers</td>
                        </tr>
                        <tr>
                            <td class="box-filled">Transcript</td>
                        </tr>
                        <tr>
                            <td class="box-filled">Available localizations: <i>English, Dutch, French, German, Italian, Japanese, Portuguese, Spanish, Korean, Traditional Chinese</td>
                        </tr>
                    </table>
                </td>
            </tr>
		<tr>
            <td colspan="2"></td>
		    <td>
    			<div align="right">
            			<?php echo(echofooter(".."));?>
	    			<a href="http://validator.w3.org/check/referer">Validate</a>, $Date$
       	 		</div>
		    </td>
		</tr>
      </table>
    </div>
  </body>
</html>
