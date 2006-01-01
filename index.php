<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
  include "functions.php";
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="generator" content="HTML Tidy for Mac OS X (vers 1st December 2004), see www.w3.org" /><?php echo(echoheader(".")); ?>

	<title>Cyberduck | FTP for Mac OS X.</title>
</head>

<body id="index">
	<div class="header">
		<?php echo(echologo("."));?><?php echo(echotitle("."));?><?php echo(echosubmenu("."));?>
	</div>

	<div class="content">
		<div style="margin:10px; margin-bottom:5px;">
			<?php echo(echogoogle());?>
		</div>

		<table cellpadding="0" cellspacing="5">
			<tr>
				<td id="maincolumn" valign="top" class="box-solid">
					<p><strong style="color:#4e4e4e;">Cyberduck is a <a class="ext-link" href="http://opensource.org/docs/definition.php">open source</a> FTP and SFTP (SSH Secure File Transfer) browser licenced under the GPL with an easy to use interface, integration with external editors and support for many Mac OS X system technologies such as Spotlight, Bonjour, the Keychain and AppleScript.</strong> For a more detailed list of available <strong>features</strong> see <a href="./features.php">here</a>. <strong>Localizations</strong> are available in <em>English, Czech, Dutch, Finnish, French, German, Italian, Japanese, Korean, Norwegian, Portuguese, Slovak, Spanish, Chinese (Traditional and Simplified), Russian, Swedish, Hungarian, Danish, Polish, Indonesian, Catalan and Welsh</em>. Many thanks to all <a class="ext-link" href="http://trac.cyberduck.ch/file/trunk/Credits.html?format=raw">contributors</a>! If you need <strong>help</strong>, there is an <a href="./help/en/howto">introduction</a>, a list of <a href="./help/en/problems/">common problems</a> and a <a href="./help/en/faq">FAQ</a>. Please post any questions on the <strong><a class="ext-link" href="./forum">forum</a></strong>. This software is written by <a class="ext-link" href="http://sudo.ch/">David V. Kocher</a>. Please have a look at the <a class="ext-link" href="http://trac.cyberduck.ch/file/trunk/Credits.html?format=raw">credits</a> to see who contributed. I appreciate any <strong><a class="ext-link" href="mailto:%66%65%65%64%62%61%63%6B%40%63%79%62%65%72%64%75%63%6B%2E%63%68">feedback</a></strong> you might have. For bug reports and feature suggestions you should issue a <a class="ext-link" href="http://trac.cyberduck.ch/newticket">new ticket</a> in the <a class="ext-link" href="http://trac.cyberduck.ch">tracker</a>.</p>

					<div style="margin-left:10px; margin-bottom:30px; margin-right:5px" align="center" id="screenshot">
						<a href="./img/browser-ja.jpg"><img align="middle" border="0" src="./img/browser-thumb.jpg" alt="Cyberduck Screenshot" /></a>
					</div>

					<p><small>Copyright (c) 2002-2005 David V. Kocher. All rights reserved. This program is free software; you can redistribute it and/or modify it under the terms of the <a href="License.txt">GNU General Public License</a> as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.<em>This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.</em></small></p>

					<p>This product includes software developed by <strong>sshtools.com</strong> (<a class="ext-link" href="http://www.sshtools.com">http://www.sshtools.com</a>), <strong>enterprisedt</strong> (<a class="ext-link" href="http://www.enterprisedt.com">http://www.enterprisedt.com</a>), the <strong>Apache Software Foundation</strong> (<a class="ext-link" href="http://jakarta.apache.org">http://jakarta.apache.org/</a>) and <strong>Apple Computer</strong> (<a class="ext-link" href="http://apple.com/">http://apple.com</a>).</p>
				</td>

				<td id="sidebar" valign="top">
					<div class="box-solid">
						<p><em>"All the other FTP clients I've used have been hard to learn and are confusing, but I've never had to look at the help file for Cyberduck."</em> <a href="http://www.boingboing.net/2005/01/07/cyberduck_ftp_browse.html">(boingboing.net)</a>. Read more <a href="./reviews.php">reviews.</a></p>

						<div style="margin:5px;" align="center">
							<a href="http://www.macworld.com/2004/10/features/bargainsweb/index.php"><img src="./img/macworld.png" width="90" height="67" alt="Macworld Rating" /></a>
						</div>
					</div>

					<div class="box-solid">
						<table cellpadding="0" cellspacing="0">
							<tr>
								<td valign="top"><img width="64" height="90" style="margin:10px; margin-top:0px" src="./img/arrowdisk.png" align="left" alt="Download" border="0" /></td>

								<td valign="top">
									<p><strong><u>D</u>ownload</strong><br /><strong>2.5.3</strong> <em>(Jan-03-2006)</em><br />
									<a href="./Cyberduck-2.5.3.dmg">Cyberduck-2.5.3.dmg</a> <a href="./Cyberduck-2.5.3.dmg"></a><br />
									<em>Mac OS X 10.3.9 or later required!</em></p>
								</td>
							</tr>
						</table>
					</div>

					<div class="box-filled">
						<p><strong>Donations.</strong> <em><a class="ext-link" href="http://www.gnu.org/philosophy/free-sw.html">Free software</a> is a matter of the users freedom to run, copy, distribute, study, change and improve the software. If you find this program useful, please consider making a <a href="./donate">donation</a>. It will help to make Cyberduck even better!</em></p>
					</div>

					<div class="box-filled">
						<p><strong>Mailing List.</strong> You can subscribe to the <a href="http://lists.cyberduck.ch/mailman/listinfo/cyberduck-news">Cyberduck-news</a> mailing list to get a notification when a new version is released.</p>

						<form method="post" action="http://lists.cyberduck.ch/mailman/subscribe/cyberduck-news">
							<p>Email: <input id="mailinglist" type="text" name="email" value="" /> <input type="submit" name="email-button" value="Subscribe" /></p>
						</form>
					</div>

					<div class="box-filled">
						<p><strong>Forum.</strong> Discuss anything related to Cyberduck in the forum hosted at <a class="ext-link" href="http://forum.cyberduck.ch">cocoaforge.com</a></p><a href="http://forum.cyberduck.ch"></a>

						<div style="margin-top:-10px; margin-bottom:5px;" align="center">
							<a href="http://forum.cyberduck.ch"><img width="128" src="./img/cocoaforge.png" alt="forum" /></a>
						</div>
					</div>

					<div class="box-filled">
						<p><img class="feature" src="./img/feed-icon-16x16.png" alt="feed" /> <strong>Blog.</strong> <a href="http://sudo.ch/~dkocher/feed/">Subscribe</a> to the the developer's <a class="ext-link" href="http://sudo.ch/~dkocher/">blog</a>.</p>
					</div>

					<div style="margin-bottom:0px;" class="box-filled">
						<p><a href="http://docs.blacktree.com/quicksilver/plug-ins/cyberduck"><img class="sidebar" src="./img/quicksilver.png" height="64" width="64" alt="getquicksilver" /></a> <strong>Quicksilver Module.</strong> Access Cyberduck bookmarks from within <a class="ext-link" href="http://docs.blacktree.com/quicksilver/plug-ins/cyberduck/">Quicksilver</a>.</p>

						<p><a href="http://growl.info"><img height="64" class="sidebar" src="./img/growlicon.png" alt="getgrowl" /></a> <strong>Growl.</strong> You may also want to install <a class="ext-link" href="http://growl.info">Growl</a>, a global notification system Cyberduck supports.</p>

						<p><strong>RCDefaultApp.</strong> Set Cyberduck as the default application for all FTP URLs with <a class="ext-link" href="http://www.rubicode.com/Software/RCDefaultApp">RCDefaultApp</a>.</p>
					</div>
				</td>
			</tr>
		</table>
	</div>
</body>
</html>
