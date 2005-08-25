<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
  include "functions.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <?php echo(echoheader("~dkocher | cyberduck", ".")); ?>
	<body id="index">
		<div align="center" class="standard">
			<table border="0" cellpadding="5" cellspacing="5" width="700">
				<tr>
					<td class="box-solid" width="150" valign="middle">
						<div align="center">
							<img src="img/cyberduck.icon.jpg" width="128" height="128" alt="Cyberduck" border="0" />
						</div>
					</td>
					<td colspan="2" class="box-solid">
						<div class="underline">
							<?php echo(echomenu(".."));?>
						</div>
						<br />
						<?php echo(echotitle());?>
						<?php echo(echosubmenu("."));?>
					</td>
				</tr>
				<tr>
					<td width="150" valign="top" class="box-filled">
						<p>
							<em>
								"All the other FTP clients I've used have been hard to learn and are confusing, but I've never had to look at the help file for Cyberduck."
							</em>
							(<a href="http://www.boingboing.net/2005/01/07/cyberduck_ftp_browse.html">boingboing.net</a>)
						</p>
						<p>
							<em>
								"What else can I say? Its the best FTP program I've ever used. Its fast, stable, feature-filled, and free."
							</em>
							(<a href="http://www.versiontracker.com/php/feedback/article.php?story=20050203103831290">User comment</a>)
						</p>
						<p>
							<em>
								"[Cyberduck] is a top FTP client that drops neatly into your Mac environment. If you have [...] not yet sampled this Swiss delight I recommend you pick it up as soon as possible."
							</em>
							(<a href="http://www.richardallan.org.uk/?p=339">Richard Allan</a>)
						</p>
						<!--
						<p>
							<em>
								"[...] Cyberduck es una maravilla. Sencillo, potente y elegante."
							</em>
							(<a href="http://www.minid.net/archivos/categorias/macintosh/os_x_qtigerq_el_29_de_abril.php">Comment by Charlie</a>)
						</p>
						<p>
							<em>
								"It appears the SFTP client-du-jour is Cyberduck [...]"
							</em>
							(<a href="http://terrychay.com/blog/article/cyberduck.shtml">terrychay.com</a>)
						</p>
						<p>
							<em>
								"Cyberduck: Neat application alert!"
							</em>
							(<a href="http://www.ureader.co.uk/message/94165.aspx">ureader.co.uk</a>)
						</p>
						-->
					</td>
					<td valign="top" class="box-dash">
						<div>
							<p>
								<strong>About.</strong> Cyberduck is a <a href="http://opensource.org/docs/definition.php">open source</a> FTP and SFTP (SSH Secure File Transfer) browser licenced under the <a href="http://www.gnu.org/licenses/gpl.html">GPL</a> with an easy to use interface, integration with external editors and support for many Mac OS X system technologies such as Spotlight, Bonjour, the Keychain and AppleScript.
							</p>
						</div>
						<div>
							<p>
								<strong>Free.</strong> <em><a href="http://www.gnu.org/philosophy/free-sw.html">Free software</a> is a matter of the users' freedom to run, copy, distribute, study, change and improve the software. If you find this program useful, please consider making a <a href="./donate">donation</a>. A donation would not only demonstrate your appreciation of this software, but also help to advance development in the future. The easiest way to donate is to through Paypal accepting all major credit cards and electronic checks.</em>
							</p>
						</div>
						<p>
							<strong>Localizations.</strong> <em>English, Czech, Dutch, Finnish, French, German, Italian, Japanese, Korean, Norwegian, Portuguese, Slovak, Spanish, Chinese (Traditional and Simplified), Russian, Swedish, Hungarian, Danish, Polish, Indonesian and Catalan</em>. Many thanks to all <a href="http://cvs.cyberduck.ch/*checkout*/cyberduck-cocoa/Credits.html?rev=HEAD&amp;content-type=text/html">contributors</a>!
						</p>
						<div>
							<p>
								<strong>Feedback.</strong> This software is <a href="./img/hacking.jpg">written</a> by <a href="mailto:dkocher@cyberduck.ch"> David V. Kocher</a>, Switzerland. Please have a look at the credits to see who contributed. I appreciate any comments, feature suggestions and bug reports.
							</p>
						</div>
					</td>
					<td width="150" valign="top" class="box-dash">
						<div class="underline">
							<p>
								<strong>Mailing List.</strong> You can subscribe to the <a href="http://lists.cyberduck.ch/mailman/listinfo/cyberduck-news"> Cyberduck-news</a> mailing list to get a notification when a new version is released.
							</p>
							<form method="post" action="http://lists.cyberduck.ch/mailman/subscribe/cyberduck-news">
								<p>
									Your email address: 
									<input type="text" name="email" value="" />
									<input type="submit" name="email-button" value="Subscribe" />
								</p>
							</form>
						</div>
						<div>
							<p>
								<strong>Forum.</strong> Discuss anything related to Cyberduck in the forum hosted at <a href="./forum">cocoaforge.com</a>
							</p>
							<div align="center">
								<a href="./forum"><img width="150" border="0" alt="cocoaforge.com" src="./img/cocoaforge.gif" /></a>
							</div>
						</div>
					</td>
				</tr>
				<!-- ======= Macworld ======== -->
				<tr>
					<td valign="middle" width="150" class="box-solid">
						<div align="center">
							<a href="http://www.macworld.com/2004/10/features/bargainsweb/index.php">
								<img src="./img/MW_4mouselogo_blu.png" width="90" height="67" alt="Macworld Rating" border="0" />
							</a>
						</div>
					</td>
					<td colspan="2" class="box-solid">
						<p>
							<em>"There are a few free FTP clients for the Mac, but none is as polished or as easy to use as Cyberduck. Making a connection is as 
							easy as typing the name of the server in the address bar. Save bookmarks to a bookmark drawer, or drag them to your desktop. Cyberduck 
							supports multiple connections and can resume interrupted transfers. It also supports SFTP, Keychain, and Rendezvous (so connecting with
							your local network is a breeze). When you select a file for editing, Cyberduck opens the document in your chosen editor and uploads
							the changes automatically when you save."</em> (<a href="http://www.macworld.com/2004/10/features/bargainsweb/index.php">macworld.com</a>)
						</p>
					</td>
				</tr>
				<!-- ======= Screenshot ======== -->
				<tr>
					<td colspan="3">
						<div align="center" id="image">
							<a href="./img/browser.jpg">
								<img align="middle" border="0" src="./img/browser.jpg" alt="Cyberduck Screenshot" />
							</a>
						</div>
					</td>
				</tr>
				<!-- ======= Donate! ======== -->
				<tr>
					<td width="150" class="box-filled">
						<div align="center">
							<a href="./donate">
								<img border="0" src="http://www.paypal.com/en_US/i/btn/x-click-but04.gif" 
								alt="Make payments with PayPal - it's fast, free and secure!" />
							</a>
						</div>
					</td>
					<td colspan="2" class="alert">
						Support the development of Cyberduck by making a <a href="./donate">donation</a> :)
					</td>
				</tr>
				
				<?php echo(echogoogle());?>
				
				<tr>
					<td width="150" valign="middle" class="box-solid">
						<p>
							<strong>T-Shirts and Mugs.</strong>
						</p>
						<div align="center" id="image">
							<a href="http://www.cafeshops.com/cyberduck">
								<img src="img/store.jpg" width="128" height="128" align="middle" alt="Shop Cyberduck Gadgets" border="0" />
							</a>
						</div>
						<p>Go shopping for Cyberduck gadgets in the <a href="http://www.cafeshops.com/cyberduck"> Cafepress Cyberduck shop</a>!</p>
					</td>
					<td valign="top" class="box-dash">
						<p>
							<strong>Download.</strong> See the <a href="./changelog.php">changelog</a> for differences between the versions released.
						</p>
						<p class="box-filled">
							<em>Mac OS X 10.3.9 or later required.</em>
							<br />
							Universal binary (PPC/Intel)
							<br />
						</p>
						<p>
							<table border="0" cellpadding="0" cellspacing="0">
								<tr>
									<td valign="top">
										<img src="img/arrowDown.png" alt="Download" border="0" />
									</td>
									<td valign="top">
										<strong>2.5</strong> <em>(Aug-24-2005)</em>
										<br />
										<a href="./Cyberduck-2.5.dmg">Cyberduck-2.5.dmg</a><a href="./Cyberduck-2.5.dmg"></a>
										<br /><br />
									</td>
								</tr>
							</table>
						</p>
					</td>
					<td width="150" valign="top" class="box-dash">
						<p>
							You may also want to install 
							<a href="http://growl.info">
								Growl</a>, a global notification system Cyberduck supports:
						</p>
						<div align="center">
							<a href="http://growl.info">
								<img src="./img/getgrowl.png" alt="getgrowl" border="0" />
							</a>
						</div>

					</td>
				</tr>
				<tr>
					<td colspan="3">
						<div align="right">
							<a href="http://validator.w3.org/check/referer">
								Validate</a>, $Date$ 
						</div>
					</td>
				</tr>
			</table>
		</div>
	</body>
</html>
