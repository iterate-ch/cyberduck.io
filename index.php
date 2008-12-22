<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
  include "functions.php";
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="generator" content="HTML Tidy for Mac OS X (vers 1st December 2004), see www.w3.org" /><?php echo(echoheader(".")); ?>

	<title>Cyberduck | FTP, SFTP, WebDAV &amp; Amazon S3 Browser for Mac OS X.</title>
</head>

<body id="index">
	<div class="header">
		<?php echo(echologo("."));?><?php echo(echotitle("."));?><?php echo(echosubmenu("."));?>
	</div>

	<div class="content">
		<table cellpadding="0" cellspacing="5" width="100%">
			<tr>
				<td class="box-solid" colspan="2"><?php echo(echogoogle());?> </td>
			</tr>

			<tr>
				<td id="maincolumn" valign="top" class="box-solid">
					<p class="lead">
						<strong>
							Cyberduck is an <a class="ext" href="http://opensource.org/docs/definition.php">open source</a> FTP, SFTP, <span class="version3">WebDAV</span><!-->, <a class="ext" href="http://www.mosso.com/cloudfiles.jsp">Mosso Cloud Files</a>--> and <span class="version3"><a class="ext" href="http://aws.amazon.com/s3">Amazon S3</a></span> browser for the Mac.
						
							It features easy to use interface that allows to toggle between bookmarks and the browser outline view.
						
							For editing files, it provides a seamless integration with many supported external editors.
							Many OS X core system technologies such as Spotlight, Bonjour, QuickLook and the Keychain are supported.
						
							Emerging cloud distribution services from <a href="http://aws.amazon.com/cloudfront/">Amazon</a> and <a class="ext" href="http://www.mosso.com/cloudfiles.jsp">Rackspace</a> are easily configurable to replicate your content.
						</strong>
					</p>
					
					<p>Many thanks to all <a class=
				"ext" href="http://trac.cyberduck.ch/file/trunk/Credits.rtf">contributors</a>! If you need help, there is an <a href="./help/en/howto">introduction</a>, a list of
					<a href="./help/en/problems/">common problems</a> and a <a href="./help/en/faq">FAQ</a>. Please post any questions on the <a class="ext" href=
					"http://forum.cyberduck.ch">forum</a>. This software is written by <a class="ext" href="http://sudo.ch/">David V. Kocher</a>. Please have a look at the <a class=
					"ext" href="http://trac.cyberduck.ch/file/trunk/Credits.rtf?format=raw">credits</a> to see who contributed. I appreciate any <a class="ext" href=
					"mailto:%66%65%65%64%62%61%63%6B%40%63%79%62%65%72%64%75%63%6B%2E%63%68">feedback</a> you might have. For bug reports and feature suggestions you should issue a <a class=
					"ext" href="http://trac.cyberduck.ch/newticket">new ticket</a> in the <a class="ext" href=
					"http://trac.cyberduck.ch">issue tracker</a>.</p>
				
					<div id="screenshots">
						<div class="figure">
							<a href="./img/browser-bookmarks.jpg"><img width="350px" src="./img/browser-bookmarks-thumb.jpg"/></a>
							<p>Integrated Bookmarks</p>
						</div>
						<div class="figure">
							<a href="./img/browser.jpg"><img width="350px" src="./img/browser-thumb.jpg"/></a>
							<p>QuickLook Preview in Browser</p>
						</div>
					</div>
					
					<div id="features">
						<div class="feature">
							<p><img src="./img/ftp.png" class="feature" alt="" /> <strong>Protocols</strong><br />
							FTP (File Transfer Protocol), FTP/TLS (FTP secured over SSL/TLS), SFTP (SSH Secure File Transfer), <span class="version3"><a href="http://webdav.org" class="ext">WebDAV</a></span> (Web-based Distributed Authoring and Versioning) and <span class="version3"><a class="ext" href="http://aws.amazon.com/s3">Amazon S3</a></span>.</p>

							<p><img src="./img/column.png" class="feature" alt="" /> <strong>Browser</strong><br />
							Document based, list and outline view, caching, cut &amp; paste, drag &amp; drop and arbitrary character encodings.</p>
						
							<p><img src="./img/quicklook.png" class="feature" alt="" /> <strong class="version3">Quick Look</strong><br />
							Preview files like in Finder.app.</p>

							<p><img src="./img/safari.png" class="feature" alt="" /> <strong class="version3">Web URL</strong><br />
							Quickly open the corresponding Web URL of a selected file in your web browser.</p>

							<p><img src="./img/textmate.png" class="feature" alt="" /> <strong>External editors</strong><br />
							Seamless integration with external editors. <a class="ext" href="http://www.codingmonkeys.de/subethaedit/">SubEthaEdit</a>, <a class="ext" href="http://www.barebones.com/products/bbedit/">BBEdit</a>, <a class="ext" href="http://www.barebones.com/products/textwrangler">TextWrangler</a>, <a class="ext" href="http://www.tex-edit.com/">Text-Edit Plus</a>, <a class="ext" href="http://macromates.com/">TextMate</a>, <a class="ext" href="http://mimikaki.net/">mi</a>, <a class="ext" href="http://smultron.sourceforge.net/">Smultron</a>, <a class="ext" href="http://www.artman21.net/product/JeditX/">JeditX</a>, <a class="ext" href="http://macrabbit.com/cssedit/">CSSEdit</a>, <a class="ext" href="http://www.aynimac.com/">CotEditor</a> and <a class="ext" href="http://www.talacia.com/">Tag</a>, <a class="ext" href="">skEdit</a>, <a class="ext" href="">PageSpinner</a>.</p>

							<p><img src="./img/international16.png" class="feature" alt="" /> <strong>International</strong><br />
							Speaks your language. <!--Available in English, Czech, Dutch, Finnish, French, German, Italian, Japanese, Korean, Norwegian, Portuguese, Slovak, Spanish, Chinese (Traditional &amp; Simplified Han), Russian, Swedish, Hungarian, Danish, Polish, Indonesian, Catalan, Welsh, Thai, Turkish, Hebrew, Latvian and Greek.<br />-->English, čeština, Nederlands, Suomi, Français, Deutsch, Italiano, 日本語, 한국어, Norsk, Slovenčina, Español, Português (do Brasil), Português (Europeu), 中文 (简体), 正體中文 (繁體), Русский, Svenska, Dansk, Język Polski, Magyar, Bahasa Indonesia, Català, Cymraeg, ภาษาไทย, Türkçe, Ivrit, Latviešu Valoda &amp; Ελληνικά</p>

							<p><img src="./img/keychain.png" class="feature" alt="" /> <strong>Keychain</strong><br />
							All passwords are stored in the system <a class="ext" href="http://www.apple.com/macosx/features/security/">Keychain</a> as Internet passwords available also to third party applications.</p>

							<p><img src="./img/gnu.png" class="feature" alt="" /> <strong>Open Source</strong><br />
							Licensed under the GPL.</p>
						</div>

						<div class="feature">
							<p><img src="./img/document.png" class="feature" alt="" /> <strong>Bookmarking</strong><br />
							Powerful bookmarking. Drag and drop bookmarks to the Finder.app and drop files onto bookmarks to upload.</p>

							<p><img src="./img/history.png" class=
							"feature" alt="" />
							<strong>History</strong><br />
							History of visited servers.</p>
							<p><img src="./img/rendezvous.png" class="feature" alt="" /> <strong>Bonjour</strong><br />
							Auto discovery of services on the local network</p>

							<p><img src="./img/spotlight.png" class="feature" alt="" /> <strong>Spotlight</strong><br />
							<a class="ext" href="http://www.apple.com/macosx/features/spotlight/">Spotlight</a> Importer for bookmark files.</p>

							<p><img src="./img/finder.png" class="feature" alt="" /> <strong>Integration</strong><br />
							Use Cyberduck as default system wide protocol handler for FTP and SFTP. Open .inetloc files and .duck bookmark files from the Finder.</p>

							<p><img src="./img/queue.png" class="feature" alt="" /> <strong>Advanced Transfers</strong><br />
							Limit the number of concurrent transfers and filter files using a regular expression. Resume both interrupted download and uploads. Recursively transfer directories.</p>

							<p><img src="./img/sync.png" class="feature" alt="" /> <strong>Synchronization</strong><br />
							Synchronize local with remote directories (and vice versa) and get a preview of affected files before any action is taken.</p>
							<p><img src="./img/applescript.png" class="feature" alt="" /> <strong>AppleScript</strong><br />
							Full AppleScript integration. See the <a class="ext" href="http://svn.cyberduck.ch/trunk/AppleScript%20Samples/">sample scripts</a> (included on the disk image).</p>

							<p><img src="./img/growl.png" class="feature" alt="" /> <strong>Growl</strong><br />
							Support for Growl, the global notification system. See <a class="ext" href="http://growl.info/">growl.info</a>.</p>

							<p><img src="./img/advanced.png" class="feature" alt="" /> <strong class="version3">Activity Window</strong><br />
							Overview over all pending background tasks.</p>
						</div>

						<div class="feature">
							<p><img src="./img/protocol.png" class="feature" alt="" /> <strong>SSH</strong><br />
							Supports Public key authentication, Keyboard Interactive (PAM) Authentication, Support for various encryption ciphers (3DES, Blowfish, Twofish, AES, CAST) and Authentication algorithms (MD5, SHA1).</p>
														
							<p><img src="./img/protocol.png" class="feature" alt="" /> <strong>SCP</strong><br />
							Transfer files using Secure Copy (SCP).</p>

							<p><img src="./img/s3.png" class="feature" alt="" /> <strong class="version3">Amazon S3</strong><br />
							Browse Amazon Simple Storage Service the way you are used to with other file systems.</p>

							<p><img src="./img/s3.png" class="feature" alt="" /> <strong class="version3">Amazon CloudFront</strong><br />
							Manage CloudFront distributions.</p>

							<p><img src="./img/protocol.png" class="feature" alt="" /> <strong class="version3">WebDAV</strong><br />
							With WebDAV you can access your <a class="ext" href="http://www.apple.com/dotmac/idisk.html">iDisk</a>, GMX <a class="ext" href="http://faq.gmx.de/datenverwaltung/mc/index.html">Mediacenter</a> or any other <a href="http://webdav.org" class="ext">WebDAV</a> compliant server.</p>

							<p><img src="./img/cf.png" class="feature" alt="" /> <strong class="version3">Mosso Cloud Files</strong><br />
							Manage your Rackspace <a class="ext" href="http://www.mosso.com/cloudfiles.jsp">Cloud Hosting</a> distributions.</p>

							<p><img src="./img/idisk.png" class="feature" alt="" /> <strong>iDisk</strong><br />
							Synchronize bookmarks with <a class="ext" href="http://www.apple.com/macosx/features/dotmacsync/">.Mac iDisk</a>.</p>

							<p><img src="./img/permissions.png" class="feature" alt="" /> <strong>Permissions</strong><br />
							Modify permissions on multiple files and recursivly.</p>

							<p><img src="./img/archive.png" class="feature" alt="" /><strong>Archives</strong><br />Archive and expand TAR and ZIP files remotely over SSH.</p>
						</div>
					</div>

					<div style="clear:both;"></div>

					<p><small>Copyright (c) 2002-2005 David V. Kocher. All rights reserved. This program is free software; you can redistribute it and/or modify it under the terms of the <a href=
					"http://creativecommons.org/licenses/GPL/2.0/">GNU General Public License</a> as published by the Free Software Foundation; either version 2 of the License, or (at your option)
					any later version.<em>This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
					A PARTICULAR PURPOSE. See the GNU General Public License for more details.</em></small></p>

					<p><small>This product includes software developed by <strong>Christian Plattner</strong> (<a class="ext" href="http://www.ganymed.ethz.ch/ssh2/">Ganymed</a>),
					<strong>enterprisedt</strong> (<a class="ext" href="http://www.enterprisedt.com">enterprisedt.com</a>) and the <strong>Apache Software Foundation</strong> (<a class=
					"ext" href="http://jakarta.apache.org">jakarta.apache.org</a>), <strong>James Murty</strong> (<a class="ext" href="http://jets3t.s3.amazonaws.com/index.html">jetS3t</a>), <strong>Christopher Forsythe et al.</strong> (<a class="ext" href=
					"http://growl.info/">growl.info</a>), <strong>Wade Tregaskis</strong> (<a class="ext" href="http://sf.net/projects/keychain">Keychain Framework</a>),
					<strong>M. Uli Kusterer</strong> (<a class="ext" href="http://zathras.de/">UKCrashReporter and UKPrefsPanel</a>), <strong>Greg Guerin</strong> (<a class="ext" href=
					"http://www.amug.org/~glguerin/sw/#macbinary">MacBinary Toolkit</a>), <strong>Andy Matuschak</strong> (<a class="ext" href=
					"http://www.andymatuschak.org/pages/sparkle">Sparkle</a>), <strong>Kurt Revis</strong> (<a class="ext" href="http://www.snoize.com/">SNDisclosableView</a>), <strong>Shaun
					Wexler</strong> (<a href="http://www.macfoh.com/">SKWSegmentedControl</a>),</small></p>
				</td>

				<td id="sidebar" valign="top">
					<div class="box-solid">
						<table cellpadding="0" cellspacing="0">
							<tr>
								<td id="download" valign="top"><a href="./Cyberduck-3.0.3.dmg"><img style="margin:15px; margin-top:0px" src="./img/arrowdisk.png" align="left" alt="Download" border="0" /></a></td>
								<td valign="top">
									<p><strong>Download</strong><br />
									<strong class="version3">3.0.3</strong> <em>(Oct-20-2008)</em><br />
									<a href="./Cyberduck-3.0.3.dmg">Cyberduck-3.0.3.dmg</a> <a href="./Cyberduck-3.0.3.dmg"></a> (10.3MB, Mac OS X 10.4 or later required.)</p>
								</td>
							</tr>
						</table>
						<p>Release notes and previous releases are available <a href="changelog">here</a>.</p>
						<p>There are also <a href="http://update.cyberduck.ch/nightly/">nightly builds available</a> featuring the latest bugfixes and enhancements.</p>
						<p><small>Thanks to the <a href="http://www.icu.uzh.ch/">ICU (University of Zurich)</a> for hosting the downloads. Mirror provided by <a href="http://mirror.ethz.ch/cyberduck/">VIS (ETH
						Zurich)</a>.</small></p>
					</div>

					<div class="box-filled">
						<p><strong>Donations.</strong> <em><a class="ext" href="http://www.gnu.org/philosophy/free-sw.html">Free software</a> is a matter of the users freedom to run, copy,
						distribute, study, change and improve the software. If you find this program useful, please consider making a <a href="./donate">donation</a>. It will help to make Cyberduck
						even better!</em></p>
					</div>

					<div class="box-filled">
						<p><img class="feature" src="./img/feed-icon-16x16.png" alt="feed" /> <strong>Blog.</strong> <a href="http://sudo.ch/feed/">Subscribe</a> to the the developer's <a class=
						"ext" href="http://sudo.ch/">blog</a>.</p>
					</div>

					<div class="box-filled">
						<p><strong>Mailing List.</strong> You can subscribe to the <a href="http://lists.cyberduck.ch/mailman/listinfo/cyberduck-news">Cyberduck-news</a> mailing list to get a
						notification when a new version is released.</p>

						<form method="post" action="http://lists.cyberduck.ch/mailman/subscribe/cyberduck-news">
							<p><input id="mailinglist" type="text" name="email" value="" /> <input type="submit" name="email-button" value="Subscribe" /></p>
						</form>
					</div>

					<div class="box-filled">
						<p><strong>Forum.</strong> Discuss anything related to Cyberduck in the forum hosted at <a class="ext" href="http://forum.cyberduck.ch">cocoaforge.com</a></p><a href=
						"http://forum.cyberduck.ch"></a>

						<div style="margin-top:-10px; margin-bottom:5px;" align="center">
							<a href="http://forum.cyberduck.ch"><img width="128" src="./img/cocoaforge.png" alt="forum" /></a>
						</div>
					</div>

					<div class="box-solid">
						<p><strong>Widget.</strong> <a href="http://update.cyberduck.ch/Cyberduck.wdgt.zip">Download</a> the <a class="ext" href=
						"http://www.apple.com/macosx/features/dashboard/">dashboard</a> widget (Thanks to <a href="http://www.emeraldion.it/home/" class="ext">Claudio Procida</a>!). <a href=
						"http://cyberduck.ch/help/en/howto/widget.html">Help</a> about using the widget.</p>

						<div style="padding:5px;" align="center">
							<a id="widget" href="http://update.cyberduck.ch/Cyberduck.wdgt.zip" name="widget"></a>
						</div>
					</div>

					<div class="box-filled">
						<p><a href="http://docs.blacktree.com/quicksilver/plug-ins/cyberduck"><img class="sidebar" src="./img/quicksilver.png" height="64" width="64" alt="getquicksilver" /></a>
						<strong>Quicksilver Module.</strong> Access Cyberduck bookmarks from within <a class="ext" href=
						"http://docs.blacktree.com/quicksilver/plug-ins/cyberduck/">Quicksilver</a>.</p>

						<p><a href="http://growl.info"><img height="64" class="sidebar" src="./img/growlicon.png" alt="getgrowl" /></a> <strong>Growl.</strong> You may also want to install <a class=
						"ext" href="http://growl.info">Growl</a>, a global notification system Cyberduck supports.</p>
					</div>

					<div class="box-solid">
						<p><strong>Reviews.</strong> Cyberduck has been reviewed by many sites and got tremendous feedback over the last years.</p>

						<blockquote>
							“All the other FTP clients I've used have been hard to learn and are confusing, but I've never had to look at the help file for Cyberduck”<br />
							— <a href="http://www.boingboing.net/2005/01/07/cyberduck_ftp_browse.html">boingboing.net</a>
						</blockquote>
						<!--
						<blockquote>
							“[Cyberduck] is one of those apps that just does what it’s supposed to, no more, no less. - check it out today, and I bet you will switch too.”<br />
							— <a href="http://www.macsoftreview.com/2006/01/29/david-kochers-cyberduck/?p=13">macsoftreview.com</a>
						</blockquote>

						<blockquote>
							“Ce logiciel rend l’opération vraiment plus simple!”<br />
							— <a href="./reviews/vvmac_review.pdf">vvmac.com</a>
						</blockquote>

						<blockquote>
							“With a user-friendly interface, funky name, and loads of great features, Cyberduck leads the pack among free FTP clients.”<br />
							— <a href="http://www.spymac.com/news/article.php?contentid=2875">spymac.com</a>
						</blockquote>

						<blockquote>
							“Forget the rest, this is the best! (...) I will never use another FTP client again.”<br />
							— <a href="http://www.macfanatic.com/node/19">macfanatic.com</a>
						</blockquote>

						<blockquote>
							“Cyberduck is getting some great acclaim, and deservedly so.”<br />
							— <a href="http://www.osxguide.com/modules.php?op=modload&amp;name=News&amp;file=article&amp;sid=189&amp;mode=thread&amp;order=0&amp;thold=0">osxguide.com</a>
						</blockquote>
						-->
						<p>Read more <a href="./reviews.php">testimonials</a>!</p>
					</div>
<!--
                                        <div class="box-solid">
                                                <div style="padding:5px;" align="center">
<script type="text/javascript" src="http://osx.iusethis.com/app/include/cyberduck/1"></script>
<noscript>
<a href="http://osx.iusethis.com/app/">Support Cyberduck on iusethis</a>
</noscript>                                                </div>
                                        </div>
-->
                                        <div style="margin-bottom:0px;" class="box-solid">
                                                <div style="padding:5px;" align="center">
                                                        <a href="http://apple.com/universal/"><img src="./img/macosxuniversal20060109.png" alt="universal" /></a>
                                                </div>
                                        </div>
				</td>
			</tr>

			<tr>
				<td colspan="2">
					<div class="footer">
						<a class="swissmade" href="http://www.swissmadesoftware.org"><img src="img/sms-logo-small-footer.png" alt="swiss made software"></a><br />
						<a href="http://validator.w3.org/check/referer">Validate</a>, $Date$<br />
					</div>
				</td>
			</tr>
		</table>
	</div>
  <?php echo(echoanalytics(".")); ?>
</body>
</html>
