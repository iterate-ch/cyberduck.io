<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
  include "functions.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<?php echo(echoheader("~dkocher | cyberduck | features", ".")); ?>
	<body id="features">
		<div align="center" class="standard">
			<table border="0" cellpadding="5" cellspacing="5" width="700">
				<?php echo(echogoogle());?>
				<tr>
	                <td width="150" valign="middle" class="box-solid">
						<div align="center"><img src="img/cyberduck.icon.jpg" width="128" height="128" alt="Cyberduck" border="0" /></div>
					</td>
					<td colspan="2" class="box-solid">
						<div class="underline">
                        <?php echo(echomenu(".."));?>
						</div><br />
						<?php echo(echotitle());?>
						<div align="left">
                        <?php echo(echosubmenu());?>
						</div>
					</td>
				</tr>
				<tr>
					<td width="150"></td>
					<td colspan="2" class="box-solid"><strong>features</strong></td>
				</tr>
				<tr>
					<td width="150" valign="top"><strong>Browse SFTP and FTP servers</strong></td>
					<td valign="top" colspan="2" class="box-dash">
						<ul>
							<li>User friendly interface!</li>
							<li>Open multiple simultaneous connections</li>
							<li>Document based interface</li>
							<li>Support for various encodings <a href="./img/encoding.png">(Screenshot)</a></li>
							<li>Live filtering of directory listings</li>
							<li>Caching folder listings</li>
							<li>Move files <a href="./img/move.png">(Screenshot)</a></li>
							<li>Copy &amp; paste files</li>
							<li>Create new files</li>
							<li>Rename files</li>
							<li>Delete files</li>
							<!--<li>SOCKS Proxy support</li>-->
							<li>Show hidden files</li>
							<li>Allow the selection of files in the browser by typing the filename</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td width="150" valign="top"><strong>Localizations</strong></td>
					<td valign="top" colspan="2" class="box-dash"><em>English, Dutch, German, French, Italian, Japanese, Korean, Chinese (Traditional and Simplified), Portuguese, Spanish, Finnish, Slovak, Czech, Norwegian and Swedish.</em> Many thanks to all <a href="http://cvs.cyberduck.ch/*checkout*/cyberduck-cocoa/Credits.html?rev=HEAD&content-type=text/html">contributors</a>!
					</td>
				</tr>
				<tr>
					<td width="150" valign="top"><strong>Seamless integration with external editors</strong></td>
					<td valign="top" colspan="2" class="box-dash">
						<table>
							<tr>
								<td>
									<ul>
										<li><a href="http://www.codingmonkeys.de/subethaedit/">SubEthaEdit</a></li>
										<li><a href="http://www.barebones.com/products/bbedit/">BBEdit</a></li>
										<li><a href="http://www.barebones.com/products/textwrangler">TextWrangler</a></li>
										<li>Text-Edit Plus</li>
										<li><a href="http://macromates.com/">TextMate</a></li>
										<li><a href="http://mimikaki.net/">mi</a></li>
										<li><a href="http://smultron.sourceforge.net/">Smultron</a></li>
										<li><a href="http://www.artman21.net/product/JeditX/">JeditX</a></li>
									</ul>
								</td>
								<td>
									<div align="right">
										<img src="./img/editor.png" alt="External editor support" border="0" />
									</div>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td width="150" valign="top"><strong>Bookmarking</strong></td>
					<td valign="top" colspan="2" class="box-dash">
						<ul>
							<li>Drag and drop to save bookmark as a file</li>
							<li>Drag proxy icon in the window title bar to the Finder</li>
							<li>Drag proxy icon in the window title bar to the bookmark drawer</li>
							<li>Drop files onto bookmarks to upload to remote host</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td width="150" valign="top"><strong>Keychain support</strong></td>
					<td valign="top" colspan="2" class="box-dash">
						<ul>
							<li>All passwords are stored in the system keychain as Internet passwords available also to third party applications</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td valign="top"><strong>Secure file transfers with SFTP</strong></td>
					<td valign="top" colspan="2" class="box-dash">
						<ul>
							<li>Public key authentication</li>
							<li>Keyboard Interactive (PAM) Authentication</li>
							<li>Support for various encryption ciphers (3DES, Blowfish, Twofish, AES, CAST)</li>
							<li>Authentication algorithms (md5, sha1)</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td width="150" valign="top" ><strong>Transfers <a href="./img/transfer.png">(Screenshot)</a></strong></td>
					<td valign="top" colspan="2" class="box-dash">
						<ul>
							<li>Resume downloads (FTP and SFTP)</li>
							<li>Resume uploads (FTP and SFTP)</li>
							<li>Download folders (also <i>recursive</i>)</li>
							<li>Upload folders (also <i>recursive</i>)</li>
							<li>Drag and drop to transfer files (Finder &harr; Cyberduck)</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td width="150" valign="top" ><strong>Synchronize <a href="./img/sync.png">(Screenshot)</a></strong></td>
					<td valign="top" colspan="2" class="box-dash">
						<ul>
							<li>Synchronize local with remote directories (and vice versa)</li>
							<li>Choose to download/upload missing files</li>
							<li>Get a preview of affected files before any action is taken</li>
							<li>Adjust remote timezone</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td width="150" valign="top"><strong>Modify permissions <a href="./img/info.png">(Screenshot)</a></strong></td>
					<td valign="top" colspan="2" class="box-dash">
						<ul>
							<li>Modify permissions on multiple files</li>
							<li>Modify permissions recursivly</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td width="150" valign="top"><strong>Rendezvous support</strong></td>
					<td valign="top" colspan="2" class="box-dash">
						<div align="left">
							<img src="./img/rendezvous2.png" alt="Rendezvous support" border="0" />
						</div>
					</td>
				</tr>
				<tr>
					<td width="150" valign="top"><strong>AppleScript support</strong></td>
					<td valign="top" colspan="2" class="box-dash">
						<ul>
							<li>Full AppleScript integration. See the <a href="http://cvs.cyberduck.ch/cyberduck-cocoa/AppleScript%20Samples/"> sample scripts</a> (included on the disk image).</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td width="150" valign="top"><strong>Growl support</strong></td>
					<td valign="top" colspan="2" class="box-dash">
						<ul>
							<li>Support for growl, the global notification system for Mac OS X. See <a href="http://growl.info/">growl.info</a> for more information.</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td valign="top"><strong>Cyberduck Finder integration</strong></td>
					<td valign="top" colspan="2" class="box-dash">
						<ul>
							<li>Use as default system wide protocol handler; requires <a href="http://www.rubicode.com/Software/RCDefaultApp">RCDefaultApp</a>.
							</li>
							<li>Opens .inetloc files from the Finder.</li>
							<li>Opens .duck bookmark files from the Finder.</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td width="150" valign="top"><strong>ASCII and binary FTP transfers</strong></td>
					<td valign="top" colspan="2" class="box-dash">
						<ul>
							<li>Convert line endings on the fly in ASCII transfers</li>
							<li>Choose from Auto, Binary or ASCII</li>
						</ul>
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
