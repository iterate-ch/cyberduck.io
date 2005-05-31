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
                        <?php echo(echosubmenu("."));?>
						</div>
					</td>
				</tr>


				<tr>
					<td colspan="3">
						<!-- ======= Screenshot ======== -->
						<div align="center" id="image">
							<a href="./img/browser.jpg">
								<img align="middle" border="0" src="./img/browser.thumb.jpg" alt="Cyberduck Screenshot" />
							</a>
						</div>
					</td>
				</tr>

				<!-- ======= Donate! ======== -->
				<tr>
					<td width="150" class="box-solid">
						<div align="center">
							<a href="./donate"><img border="0" src="http://www.paypal.com/en_US/i/btn/x-click-but04.gif" alt="Make payments with PayPal - it's fast, free and secure!"></img></a>
						</div>
					</td>
					<td colspan="2" class="alert">
						Support the development of Cyberduck by making a <a href="./donate">donation</a> :)
					</td>
                </tr>

				<tr>
					<td width="150" valign="top" class="box-solid">
						<p><em>"There are a few free FTP clients for the Mac, but none is as polished or as easy to use as Cyberduck." </em>(<a href="http://www.macworld.com/2004/10/features/bargainsweb/index.php">macworld.com</a>)
						</p>
						<div align="center">
							<a href="http://www.macworld.com/2004/10/features/bargainsweb/index.php"><img src="./img/MW_4mouselogo_blu.png" width="90" height="67" alt="Macworld Rating" border="0" /></a>
						</div>
						<p>
							<em>"All the other FTP clients I've used have been hard to learn and are confusing, but I've never had to look at the help file for Cyberduck."</em> (<a href="http://www.boingboing.net/2005/01/07/cyberduck_ftp_browse.html">boingboing.net</a>)
						</p>
						<p>
							<em>"What else can I say? Its the best FTP program I've ever used. Its fast, stable, feature-filled, and free."</em> (<a href="http://www.versiontracker.com/php/feedback/article.php?story=20050203103831290">User comment</a>)
						</p>
						<!--
						<p>
							<em>"Cyberduck is the most elegant, fast and simple to use FTP client I have been waiting for on the Mac."</em> (User feedback)
						</p>
						-->
						<p>
							<em>"[Cyberduck] is a top FTP client that drops neatly into your Mac environment. If you have [...] not yet sampled this Swiss delight I recommend you pick it up as soon as possible."</em> (<a href="http://www.richardallan.org.uk/?p=339">Richard Allan</a>)
						</p>
						<!--
						<p>
							<em>"[...] Cyberduck es una maravilla. Sencillo, potente y elegante."</em> (<a href="http://www.minid.net/archivos/categorias/macintosh/os_x_qtigerq_el_29_de_abril.php">Comment by Charlie</a>)
						</p>
						-->
						<!--
						<p>
							<em>"It appears the SFTP client-du-jour is Cyberduck [...]"</em> (<a href="http://terrychay.com/blog/article/cyberduck.shtml">terrychay.com</a>)
						</p>
						-->
					</td>

					<td valign="top" class="box-dash">
						<div class="underline">
						<p><strong>About.</strong> Cyberduck is an <a href="http://opensource.org/docs/definition.php">open source</a> SFTP (SSH Secure File Transfer) and FTP browser licenced under the <a href="http://www.gnu.org/licenses/gpl.html">GPL</a>. It has been built from the ground up with usability in mind, having the same consistent graphical user interface for both SFTP and FTP browsing. Multiple connections are supported. Drag and drop is supported consequently for transferring files between server and client. A transfer queue keeps track of the pending file transfers and supports resuming of both downloads and uploads. Local files can be synchronized with files on the server. System technologies such as the <a href="http://www.apple.com/macosx/features/security/">Keychain</a>, <a href="http://www.apple.com/macosx/features/rendezvous/">Rendezvous</a> and <a href="http://apple.com/applescript/">AppleScript</a> are supported. Cyberduck integrates seamlessly with external editors such as <a href="http://www.codingmonkeys.de/subethaedit/">SubEthaEdit</a>, <a href="http://barebones.com">BBEdit</a>, <a href="http://macromates.com/">TextMate</a> and others.
						</p>
						</div>
						<div class="underline">
						<p>This software is <a href="./img/hacking.jpg">written</a> by <a href="mailto:dkocher@cyberduck.ch">David V. Kocher</a>, Switzerland. Please have a look at the credits to see who contributed.<br />
							I appreciate any comments, feature suggestions and bug reports.
						</p>
						</div>
						<div class="underline">
						<p class="emphasized"><strong>This program is <a href="http://www.gnu.org/philosophy/free-sw.html">free</a>. Free software is a matter of the users' freedom to run, copy, distribute, study, change and improve the software. If you find this program useful, please consider making a <a href="./donate">donation</a>. A donation would not only demonstrate your appreciation of this software, but also help to advance development in the future. The easiest way to donate is to through PayPal - it's fast, free and secure. PayPal accepts all major credit cards and electronic checks.</strong></p>
						</div>
						
						<p class="alert"><strong>if you have problems starting Cyberduck after updating to 10.3.9, please read <a href="http://docs.info.apple.com/article.html?artnum=301380">this article</a>.</strong></p>
						
						<!-- ======= 10.3 Alert ======== -->
						<p class="emphasized"><strong>Requirements.</strong> As of version 2.4, Cyberduck is not compatible with any OS X version prior to 10.3. <a href="./changelog.php">Previous versions</a> may run on 10.2 with some limitations; your mileage may vary.</p>
						
						<p><strong>Localizations.</strong> Cyberduck comes in the following languages: <em>English, Dutch, German, French, Italian, Japanese, Korean, Chinese (Traditional and Simplified), Portuguese, Spanish, Finnish, Slovak, Czech, Norwegian, Russian, Hungarian, Swedish, Danish and Polish</em>. Many thanks to all <a href="http://cvs.cyberduck.ch/*checkout*/cyberduck-cocoa/Credits.html?rev=HEAD&content-type=text/html">contributors</a>!

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

				<tr>
					<td width="150"></td>
					<td colspan="2" class="box-solid"><strong><a name="download" id="download">Download</a></strong></td>
				</tr>
				<tr>
					<td width="150" valign="middle" class="box-solid">
						<div align="center">
							<img src="img/x.gif" alt="Built for Mac OS X" border="0" />
							<img src="img/macos.gif" alt="Built for Mac OS X" border="0" />
						</div>
					</td>
					<td class="box-dash">
						<ul class="emphasized">
							<li>
								<i>Latest <strong>stable</strong> version.</i>
								<table border="0" cellpadding="0" cellspacing="0">
									<tr>
										<td valign="top">
											<img src="img/arrowDown.png" alt="Download" border="0" />
										</td>
										<td valign="top">
											<strong>2.4.6</strong> <em>(May-30-2005)</em><br />
											<a href="./Cyberduck-2.4.6.dmg">Cyberduck-2.4.6.dmg</a> <a href="./Cyberduck-2.4.6.dmg"></a>
										</td>
									</tr>
								</table>
							</li>
							<br />
							<li>
								<i>Latest <strong>development (beta)</strong> version.</i>
								<table border="0" cellpadding="0" cellspacing="0">
									<tr>
										<td valign="top">
											<img src="img/arrowDown.png" alt="Download" border="0" />
										</td>
										<td valign="top">
											<strong>2.5b2</strong> <em>(May-30-2005)</em><br />
											<a href="./Cyberduck-2.5b2.dmg">Cyberduck-2.5b2.dmg</a> <a href="./Cyberduck. 2.5b2.dmg"></a><br />
											<i>(Please do <strong>not</strong> post this version on software update sites!)</i>
										</td>
									</tr>
								</table>
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
