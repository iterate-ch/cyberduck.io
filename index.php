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
						<p>Cyberduck is an <a href="http://opensource.org/docs/definition.php">open source</a> SFTP (SSH Secure File Transfer) and FTP browser licenced under the <a href="http://www.gnu.org/licenses/gpl.html">GPL</a>. It has been built from the ground up with usability in mind, having the same consistent graphical user interface for both SFTP and FTP browsing. Multiple connections are supported. Drag and drop is supported consequently for transferring files between server and client. A transfer queue keeps track of the pending file transfers and supports resuming of both downloads and uploads. Local files can be synchronized with files on the server. System technologies such as the <a href="http://www.apple.com/macosx/features/security/">Keychain</a> and <a href="http://www.apple.com/macosx/features/rendezvous/">Rendezvous</a> are supported. Cyberduck integrates seamlessly with external editors such as <a href="http://www.codingmonkeys.de/subethaedit/">SubEthaEdit</a>, <a href="http://barebones.com">BBEdit</a>, <a href="http://macromates.com/">TextMate</a> and others. Cyberduck has been translated into numerous languages including <em>English, Dutch, German, French, Italian, Japanese, Korean, Chinese (Traditional and Simplified), Portuguese, Spanish, Finnish, Slovak, Czech and Norwegian
							</em>.
						</p>
						<p>This software is written by <a href="mailto:dkocher@cyberduck.ch">David V. Kocher</a>, Switzerland. Please have a look at the credits to see who contributed.<br />
							I appreciate any comments, feature suggestions and bug reports.
						</p>
					</td>
				</tr><!-- ======= Screenshot ======== -->
				<tr>
					<td colspan="3">
						<div align="center" id="image">
							<a href="./img/browser.jpg">
								<img align="middle" width="700" height="454" border="0" src="./img/browser.thumb.jpg" alt="Cyberduck Screenshot" />
							</a>
						</div>
					</td>
				</tr><!-- ======= Donate! ======== -->
		            <?php echo(echoDonation());?>
				<tr>
					<td width="200" colspan="2" valign="middle" class="box-solid">
						<div align="center">
							<p>Make a donation!</p>
							<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
								<input type="hidden" name="cmd" value="_s-xclick" />
								<input type="image" src="https://www.paypal.com/en_US/i/btn/x-click-but04.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!" />
								<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----" />
							</form>
						</div>
					</td>
					<td width="100%" bgcolor="#FF9900" valign="top" class="box-dash">
						<p class="emphasized"><strong>This program is <a href="http://www.gnu.org/philosophy/free-sw.html">free</a>. Free software is a matter of the users' freedom to run, copy, distribute, study, change and improve the software. If you find this program useful, please consider making a donation. A donation would not only demonstrate your appreciation of this software, but also help to advance development in the future. The easiest way to donate is to through PayPal - €”it's fast, free and secure. PayPal accepts all major credit cards and electronic checks.
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
				</tr><!-- ======= Download! ======== -->
				<tr>
					<td width="200" colspan="2"></td>
					<td width="100%" class="box-solid"><strong><a name="download" id="download">download</a></strong></td>
				</tr><!-- ======= 10.3 Alert ======== -->
				<tr>
					<td colspan="3" class="alert">If Cyberduck crashes when launching, make sure you are running Mac OS X 10.3 and try installing the latest Java udpate from <a href="http://www.apple.com/support/downloads/javaupdate142.html">support.apple.com</a>.
					</td>
				</tr>
				<tr>
					<td colspan="3" class="alert">Requirements: As of version 2.4, Cyberduck is not compatible with any OS X version prior to 10.3. Previous versions may run on 10.2 with some limitations; your mileage may vary.
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
	                    <!--
                        <li><strong>2.4b2</strong> <em>January-06-2005</em><br />
	                        <a href="./Cyberduck-2.4b2.dmg">Cyberduck-2.4b2.dmg</a>
	                    </li>
    	                <!--
                        <li><strong>2.3.3</strong> <em>August-08-2004</em><br />
    	                    <a href="./Cyberduck-2.3.3.dmg">Cyberduck-2.3.3.dmg</a>
    	                </li>
                        <li><b>2.3.2</b> <i>August-05-2004</i><br />
                            <a href="./Cyberduck-2.3.2.dmg">Cyberduck-2.3.2.dmg</a>
                        </li>
                        <li><b>2.3.1</b> <i>June-15-2004</i><br />
                            <a href="./Cyberduck-2.3.1.dmg">Cyberduck-2.3.1.dmg</a>
                        </li>
                        <li><b>2.3</b> <i>May-15-2004</i><br />
                            <a href="./Cyberduck-2.3.dmg">Cyberduck-2.3.dmg</a>
                        </li>
                        <li><b>2.3b2</b> <i>Apr-27-2004</i><br />
                            <a href="./Cyberduck-2.3beta2.dmg">Cyberduck-2.3beta2.dmg</a>
                        </li>
                        <li><b>2.3b1</b> <i>Mar-09-2004</i><br />
                            <a href="./Cyberduck-2.3beta1.dmg">Cyberduck-2.3beta1.dmg</a>
                        </li>
                        <li><b>2.2</b> <i>Mar-06-2004</i><br />
                            <a href="./Cyberduck-2.2.dmg">Cyberduck-2.2.dmg</a>
                        </li>
                        -->
						</ul>
					</td>
				</tr><!-- ======= Mailing list ======== -->
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
