<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
  include "functions.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<?php echo(echoheader("~dkocher | cyberduck", ".")); ?>
	<body id="index">
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
					<td width="150" valign="top" class="box-solid">
						<p><em>"There are a few free FTP clients for the Mac, but none is as polished or as easy to use as Cyberduck." </em>(<a href="http://www.macworld.com/2004/10/features/bargainsweb/index.php">macworld.com</a>)
						</p>
						<div align="center">
							<a href="http://www.macworld.com/subject"><img src="./img/MW_4mouselogo_blu.png" width="90" height="67" alt="Macworld Rating" border="0" /></a>
						</div>
						<p>
							<em>"All the other FTP clients I've used have been hard to learn and are confusing, but I've never had to look at the help file for Cyberduck."</em> (<a href="http://www.boingboing.net/2005/01/07/cyberduck_ftp_browse.html">boingboing.net</a>)
						</p>
						<p>
							<em>"What else can I say? Its the best FTP program I've ever used. Its fast, stable, feature-filled, and free."</em> (<a href="http://www.versiontracker.com/php/feedback/article.php?story=20050203103831290">user comment</a>)
						</p>
					</td>
					<td valign="top" class="box-dash">
						<div class="underline">
						<p>Cyberduck is an <a href="http://opensource.org/docs/definition.php">open source</a> SFTP (SSH Secure File Transfer) and FTP browser licenced under the <a href="http://www.gnu.org/licenses/gpl.html">GPL</a>. It has been built from the ground up with usability in mind, having the same consistent graphical user interface for both SFTP and FTP browsing. Multiple connections are supported. Drag and drop is supported consequently for transferring files between server and client. A transfer queue keeps track of the pending file transfers and supports resuming of both downloads and uploads. Local files can be synchronized with files on the server. System technologies such as the <a href="http://www.apple.com/macosx/features/security/">Keychain</a>, <a href="http://www.apple.com/macosx/features/rendezvous/">Rendezvous</a> and <a href="http://apple.com/applescript/">AppleScript</a> are supported. Cyberduck integrates seamlessly with external editors such as <a href="http://www.codingmonkeys.de/subethaedit/">SubEthaEdit</a>, <a href="http://barebones.com">BBEdit</a>, <a href="http://macromates.com/">TextMate</a> and others. Cyberduck has been translated into numerous languages including <em>English, Dutch, German, French, Italian, Japanese, Korean, Chinese (Traditional and Simplified), Portuguese, Spanish, Finnish, Slovak, Czech, Norwegian, Russian and Swedish</em>.
						</p>
						</div>
						<div class="underline">
						<p>This software is <a href="./img/hacking.jpg">written</a> by <a href="mailto:dkocher@cyberduck.ch">David V. Kocher</a>, Switzerland. Please have a look at the credits to see who contributed.<br />
							I appreciate any comments, feature suggestions and bug reports.
						</p>
						</div>
						<p class="emphasized"><strong>This program is <a href="http://www.gnu.org/philosophy/free-sw.html">free</a>. Free software is a matter of the users' freedom to run, copy, distribute, study, change and improve the software. If you find this program useful, please consider making a <a href="./donate">donation</a>. A donation would not only demonstrate your appreciation of this software, but also help to advance development in the future. The easiest way to donate is to through PayPal - it's fast, free and secure. PayPal accepts all major credit cards and electronic checks.</strong></p>
					</td>
					<td width="150" valign="top" class="box-dash">
						<div class="underline">
						<p><strong>Mailing List.</strong> You can subscribe to the <a href="http://lists.cyberduck.ch/mailman/listinfo/cyberduck-news">Cyberduck-news</a> mailing list to get a notification when a new version is released.
						</p>
						<form method="post" action="http://lists.cyberduck.ch/mailman/subscribe/cyberduck-news">
							<p>Your email address:
								<input type="text" name="email" value="" />
								<input type="submit" name="email-button" value="Subscribe" />
							</p>
						</form>
						</div>
						<div class="underline">
						<p><strong>Forum.</strong> Discuss anything related to Cyberduck in the forum hosted at <a href="./forum">cocoaforge.com</a></p>
						<div align="center"><a href="./forum"><img width="150" border="0" alt="cocoaforge.com" src="./img/cocoaforge.gif"></img></a></div>
						</div>
						<p><strong>T-Shirts and Mugs.</strong></p>
						<div align="center" id="image">
							<a href="http://www.cafeshops.com/cyberduck">
								<img src="img/store.jpg" width="128" height="128" align="middle" alt="Shop Cyberduck Gadgets" border="0" />
							</a>
						</div>
						<p>Go shopping for Cyberduck gadgets in the <a href="http://www.cafeshops.com/cyberduck">Cafepress Cyberduck shop</a>!
						</p>
					</td>
				</tr>
				
				<!-- ======= Screenshot ======== -->
				<tr>
					<td colspan="3">
						<div align="center" id="image">
							<a href="./img/browser.jpg">
								<img align="middle" border="0" src="./img/browser.thumb.jpg" alt="Cyberduck Screenshot" />
							</a>
						</div>
					</td>
				</tr>
				
				<!-- ======= Download! ======== -->
				<tr>
					<td colspan="3" class="box-solid"><strong>download</strong></td>
				</tr>
				<!-- ======= Donate! ======== -->
				<tr>
					<td width="150" class="box-solid">
						<div align="center">
							<a href="./donate"><img src="http://www.paypal.com/en_US/i/btn/x-click-but04.gif" alt="Make payments with PayPal - it's fast, free and secure!"></img></a>
						</div>
					</td>
					<td colspan="2" class="alert">
						Support the development of Cyberduck by making a <a href="./donate">donation</a> :)
					</td>
                </tr>
				<tr>
					<td width="150" valign="middle" class="box-solid">
						<div align="center">
							<img src="img/x.gif" alt="Built for Mac OS X" border="0" />
							<img src="img/macos.gif" alt="Built for Mac OS X" border="0" />
						</div>
					</td>
					<td valign="top" class="box-dash">
						<a name="download"></a>
						<!-- ======= 10.3 Alert ======== -->
						<p class="emphasized"><strong>Java Update.</strong> If Cyberduck crashes when launching, make sure you are running Mac OS X 10.3 and try installing the latest Java udpate from <a href="http://www.apple.com/support/downloads/javaupdate142.html">support.apple.com</a>.</p>
						<p class="emphasized"><strong>Requirements.</strong> As of version 2.4, Cyberduck is not compatible with any OS X version prior to 10.3. <a href="./changelog.php">Previous versions</a> may run on 10.2 with some limitations; your mileage may vary.</p>
						<p>Please have a look at the <a href="./changelog.php">changelog</a>.</p>
						<ul class="emphasized">
							<li><strong>2.4</strong> <em>March-25-2005 </em><br />
								<a href="./Cyberduck-2.4.dmg">Cyberduck-2.4.dmg</a> <a href="./Cyberduck-2.4.dmg"><i>(Download)</i></a>
							</li>
						</ul>
					</td>
					<td width="150" valign="top" class="box-dash">
						<p>
							You may also want to install <a href="http://growl.info">Growl</a>, a global notification system Cyberduck supports:
						</p>
						<div align="center"><a href="http://growl.info"><img src="./img/getgrowl.png" alt="getgrowl" border="0" /></a></div>
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
