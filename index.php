<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
  include "functions.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<?php echo(echoheader("~dkocher | cyberduck", ".")); ?>
	<body id="index" bgcolor="#FFFFFF">
		<div align="center" class="standard">
			<table border="0" cellpadding="5" cellspacing="5" width="700">
				<?php echo(echogoogle());?>
				<tr>
					<td width="200" colspan="2" valign="middle" class="box-solid">
						<div align="center">
							<img src="img/cyberduck.icon.jpg" width="128" height="128" alt="Cyberduck" border="0" />
						</div>
					</td>
					<td width="100%" class="box-solid">
						<div class="underline">
                        <?php echo(echomenu(".."));?>
						</div><?php echo(echotitle());?>
						<div align="left">
                        <?php echo(echosubmenu());?>
						</div>
					</td>
				</tr>
				<tr>
					<td width="200" colspan="2" valign="middle" class="box-solid">
						<p><em>"There are a few free FTP clients for the Mac, but none is as polished or as easy to use as Cyberduck."
							</em>(<a href="http://www.macworld.com/2004/10/features/bargainsweb/index.php">macworld.com</a>)
						</p>
						<div align="center">
							<a href="http://www.macworld.com/subject"><img src="./img/MW_4mouselogo_blu.png" width="90" height="67" alt="Macworld Rating" border="0" /></a>
						</div>
					</td>
					<td width="100%" bgcolor="#FFFFFF" valign="top" class="box-dash">
						<p>Cyberduck is an <a href="http://opensource.org/docs/definition.php">open source</a> SFTP (SSH Secure File Transfer) and FTP browser licenced under the <a href="http://www.gnu.org/licenses/gpl.html">GPL</a>. It has been built from the ground up with usability in mind, having the same consistent graphical user interface for both SFTP and FTP browsing. Multiple connections are supported. Drag and drop is supported consequently for transferring files between server and client. A transfer queue keeps track of the pending file transfers and supports resuming of both downloads and uploads. Local files can be synchronized with files on the server. System technologies such as the <a href="http://www.apple.com/macosx/features/security/">Keychain</a>, <a href="http://www.apple.com/macosx/features/rendezvous/">Rendezvous</a> and <a href="http://apple.com/applescript/">AppleScript</a> are supported. Cyberduck integrates seamlessly with external editors such as <a href="http://www.codingmonkeys.de/subethaedit/">SubEthaEdit</a>, <a href="http://barebones.com">BBEdit</a>, <a href="http://macromates.com/">TextMate</a> and others. Cyberduck has been translated into numerous languages including <em>English, Dutch, German, French, Italian, Japanese, Korean, Chinese (Traditional and Simplified), Portuguese, Spanish, Finnish, Slovak, Czech, Norwegian and Russian</em>.
						</p>
						<p>This software is written by <a href="mailto:dkocher@cyberduck.ch">David V. Kocher</a>, Switzerland. Please have a look at the credits to see who contributed.<br />
							I appreciate any comments, feature suggestions and bug reports.
						</p>
					</td>
				</tr>
				<!-- ======= Screenshot ======== -->
				<tr>
					<td colspan="3">
						<div align="center" id="image">
							<a href="./img/browser.jpg">
								<img align="middle" width="700" height="454" border="0" src="./img/browser.thumb.jpg" alt="Cyberduck Screenshot" />
							</a>
						</div>
					</td>
				</tr>
				<!-- ======= Donate! ======== -->
		            <?php echo(echoDonation());?>
				<tr>
					<td width="200" colspan="2" valign="middle" class="box-solid">
						<div align="center">
							<p>Make a donation!</p>
							<a href="./donate"><img src="https://www.paypal.com/en_US/i/btn/x-click-but04.gif" alt="Make payments with PayPal - it's fast, free and secure!"></img></a>
						</div>
					</td>
					<td width="100%" bgcolor="#FF9900" valign="top" class="box-dash">
						<p class="emphasized"><strong>This program is <a href="http://www.gnu.org/philosophy/free-sw.html">free</a>. Free software is a matter of the users' freedom to run, copy, distribute, study, change and improve the software. If you find this program useful, please consider making a donation. A donation would not only demonstrate your appreciation of this software, but also help to advance development in the future. The easiest way to donate is to through PayPal - it's fast, free and secure. PayPal accepts all major credit cards and electronic checks.
							</strong>
						</p>
					</td>
				</tr>
				<tr>
					<td width="200" colspan="2" valign="middle" class="box-solid">
						<div align="center" id="image">
							<a href="http://www.cafeshops.com/cyberduck">
								<img src="img/store.jpg" width="128" height="128" align="middle" alt="Shop Cyberduck Gadgets" border="0" />
							</a>
						</div>
					</td>
					<td width="100%" bgcolor="#FFFFFF" valign="top" class="box-dash">
						<p>Go shopping for Cyberduck gadgets in the <a href="http://www.cafeshops.com/cyberduck">Cafepress Cyberduck shop</a>!
						</p>
					</td>
				</tr>
				<!-- ======= Download! ======== -->
				<tr>
					<td width="200" colspan="2"></td>
					<td width="100%" class="box-solid"><strong><a name="download" id="download">download</a></strong></td>
				</tr>
				<!-- ======= 10.3 Alert ======== -->
				<tr>
					<td colspan="3" class="alert">If Cyberduck crashes when launching, make sure you are running Mac OS X 10.3 and try installing the latest Java udpate from <a href="http://www.apple.com/support/downloads/javaupdate142.html">support.apple.com</a>.
					</td>
				</tr>
				<tr>
					<td colspan="3" class="alert"><strong>Requirements</strong>: As of version 2.4, Cyberduck is not compatible with any OS X version prior to 10.3. <a href="./changelog.php">Previous versions</a> may run on 10.2 with some limitations; your mileage may vary.
					</td>
				</tr>
				<tr>
					<td width="200" colspan="2" valign="middle" class="box-solid">
						<div align="center">
							<img src="img/x.gif" alt="Built for Mac OS X" border="0" />
							<img src="img/macos.gif" alt="Built for Mac OS X" border="0" />
						</div>
					</td>
					<td bgcolor="#FFFFFF" valign="top" class="box-dash">
						<p>Please have a look at the <a href="./changelog.php">changelog</a>.</p>
						<ul class="emphasized">
							<li><strong>2.4b3</strong> <em>January-29-2005</em><br />
								<a href="./Cyberduck-2.4b3.dmg">Cyberduck-2.4b3.dmg</a>
							</li>
						</ul>
					</td>
				</tr>
				<!-- ======= Mailing list ======== -->
				<tr>
					<td width="200" colspan="2"></td>
					<td class="box-solid"><strong><a name="lists" id="lists">mailing list</a></strong></td>
				</tr>
				<tr>
					<td width="200" colspan="2" valign="middle" class="box-solid">
						<div align="center">
							<img src="img/mailman.jpg" alt="Mailing list" border="0" />
						</div>
					</td>
					<td width="100%" bgcolor="#FFFFFF" valign="top" class="box-dash">
						<p>You can subscribe to the <a href="http://lists.cyberduck.ch/mailman/listinfo/cyberduck-news">Cyberduck-news</a> mailing list to get a notification when a new version is released.
						</p>
						<form method="post" action="http://lists.cyberduck.ch/mailman/subscribe/cyberduck-news">
							<p>Your email address:
								<input type="text" name="email" size="30" value="" />
								<input type="submit" name="email-button" value="Subscribe" />
							</p>
						</form>
					</td>
				</tr>
				<tr>
					<td colspan="3" width="100%">
						<div align="right">
							<a href="http://validator.w3.org/check/referer">Validate</a>, $Date$
						</div>
					</td>
				</tr>
			</table>
		</div>
	</body>
</html>
