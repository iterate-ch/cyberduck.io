<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	
<?php include "functions.php"; ?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<?php echo(echoheader(".")); ?>
	<title><?php echo(echotitle("About")); ?></title>
</head>

<body id="index">
	<div id="header">
		<?php echo(echologo("."));?><?php echo(echocaption("."));?><?php echo(echosubmenu("."));?>
	</div>

	<div id="container">
		<div id="maincolumn">
			<?php echo(echogoogle());?>

			<div id="content">
				<p class="lead"><strong>Cyberduck is a <a class="ext" href="http://www.gnu.org/philosophy/free-sw.html">libre, open source</a> FTP, SFTP, <span class="version3">WebDAV</span>, <a class="ext"
				href="https://www.rackspacecloud.com/signup/503.html">Cloud Files</a>, <a href="http://docs.google.com/">Google Docs</a> and <span class="version3"><a class="ext" href="http://aws.amazon.com/s3">Amazon S3</a></span>
				browser for the Mac.</strong> It features an easy to use interface with quickly accessible bookmarks. The outline view of the browser allows to browse large folder structures
				efficiently and you can quickly preview files with Quick Look. To edit files, a seamless integration with any external editor application makes it easy to change content quickly. Both Amazon
				CloudFront and Cloud Files from Rackspace can be easily configured to distribute your content in the cloud. Many OS X core system technologies such as Spotlight, Bonjour and the
				Keychain are supported and 30 translations make you feel at home.</p>

				<div id="screenshots">
					<div class="figure">
						<a href="./img/browser-bookmarks.png"><img alt="Cyberduck Bookmarks" width="400px" src="http://media.cyberduck.ch/img/browser-bookmarks-thumb.png" /></a>

						<p>Integrated Bookmarks</p>
					</div>

					<div class="figure">
						<a href="./img/browser.png"><img alt="Cyberduck Browser" width="400px" src="http://media.cyberduck.ch/img/browser-thumb.png" /></a>

						<p>QuickLook Preview in Browser</p>
					</div>
				</div>

				<div id="features">
					<div class="feature">
						<p><img src="http://media.cyberduck.ch/img/ftp.png" class="feature" alt="" /> <strong>Protocols</strong><br />
						FTP (File Transfer Protocol), FTP/TLS (FTP secured over SSL/TLS), SFTP (SSH Secure File Transfer), <span class="version3"><a href="http://webdav.org" class=
						"ext">WebDAV</a></span> (Web-based Distributed Authoring and Versioning), <span class="version3"><a class="ext" href="http://aws.amazon.com/s3">Amazon S3</a></span>, <a href="http://docs.google.com/">Google Docs</a> and
						<a class="ext" href="https://www.rackspacecloud.com/signup/503.html">Rackspace Cloud Files</a>.</p>

						<p><img src="http://media.cyberduck.ch/img/column.png" class="feature" alt="" /> <strong>Browser</strong><br />
						Document based, list and outline view, caching, cut &amp; paste, drag &amp; drop and arbitrary character encodings.</p>

						<p><img src="http://media.cyberduck.ch/img/quicklook.png" class="feature" alt="" /> <strong class="version3">Quick Look</strong><br />
						Preview files like in Finder.app.</p>

						<p><img src="http://media.cyberduck.ch/img/safari.png" class="feature" alt="" /> <strong class="version3">Web URL</strong><br />
						Quickly open the corresponding Web URL of a selected file in your web browser.</p>

						<p><img src="http://media.cyberduck.ch/img/textmate.png" class="feature" alt="" /> <strong>External editors</strong><br />
						Seamless integration with external editors. Edit any file on the server in your preferred application.</p>

						<p><img src="http://media.cyberduck.ch/img/international16.png" class="feature" alt="" /> <strong>International</strong><br />
						Speaks your language. 
						<!--Available in English, Czech, Dutch, Finnish, French, German, Italian, Japanese, Korean, Norwegian, Portuguese, Slovak, Spanish, Chinese (Traditional &amp; Simplified Han), Russian, Swedish, Hungarian, Danish, Polish, Indonesian, Catalan, Welsh, Thai, Turkish, Hebrew, Latvian, Greek, Serbian, Gergian, Slovenian, Romanian.<br />-->
						 English, čeština, Nederlands, Suomi, Français, Deutsch, Italiano, 日本語, 한국어, Norsk, Slovenčina, Español, Português (do Brasil), Português (Europeu), 中文 (简体), 正體中文 (繁體),
						Русский, Svenska, Dansk, Język Polski, Magyar, Bahasa Indonesia, Català, Cymraeg, ภาษาไทย, Türkçe, Ivrit, Latviešu Valoda, Ελληνικά, Cрпски, ქართული ენა, Slovenščina &amp; Română</p>

						<p><img src="http://media.cyberduck.ch/img/keychain.png" class="feature" alt="" /> <strong>Keychain</strong><br />
						All passwords are stored in the system Keychain as Internet passwords available also to third party applications.</p>
					</div>

					<div class="feature">
						<p><img src="http://media.cyberduck.ch/img/document.png" class="feature" alt="" /> <strong>Bookmarking</strong><br />
						Powerful bookmarking. Drag and drop bookmarks to the Finder.app and drop files onto bookmarks to upload.</p>

						<p><img src="http://media.cyberduck.ch/img/history.png" class="feature" alt="" /> <strong>History</strong><br />
						History of visited servers.</p>

						<p><img src="http://media.cyberduck.ch/img/rendezvous.png" class="feature" alt="" /> <strong>Bonjour</strong><br />
						Auto discovery of services on the local network</p>

						<p><img src="http://media.cyberduck.ch/img/spotlight.png" class="feature" alt="" /> <strong>Spotlight</strong><br />
						<a class="ext" href="http://www.apple.com/macosx/features/spotlight/">Spotlight</a> Importer for bookmark files.</p>

						<p><img src="http://media.cyberduck.ch/img/finder.png" class="feature" alt="" /> <strong>Integration</strong><br />
						Use Cyberduck as default system wide protocol handler for FTP and SFTP. Open .inetloc files and .duck bookmark files from the Finder.</p>

						<p><img src="http://media.cyberduck.ch/img/queue.png" class="feature" alt="" /> <strong>Advanced Transfers</strong><br />
						Limit the number of concurrent transfers and filter files using a regular expression. Resume both interrupted download and uploads. Recursively transfer directories.</p>

						<p><img src="http://media.cyberduck.ch/img/sync.png" class="feature" alt="" /> <strong>Synchronization</strong><br />
						Synchronize local with remote directories (and vice versa) and get a preview of affected files before any action is taken.</p>

						<p><img src="http://media.cyberduck.ch/img/growl.png" class="feature" alt="" /> <strong>Growl</strong><br />
						Support for Growl, the global notification system. See <a class="ext" href="http://growl.info/">growl.info</a>.</p>

						<p><img src="http://media.cyberduck.ch/img/advanced.png" class="feature" alt="" /> <strong class="version3">Activity Window</strong><br />
						Overview over all pending background tasks.</p>
					</div>

					<div class="feature">
						<p><img src="http://media.cyberduck.ch/img/protocol.png" class="feature" alt="" /> <strong>SSH</strong><br />
						Supports Public key authentication, Keyboard Interactive (PAM) Authentication, Support for various encryption ciphers (3DES, Blowfish, Twofish, AES, CAST) and Authentication
						algorithms (MD5, SHA1).</p>

						<p><img src="http://media.cyberduck.ch/img/protocol.png" class="feature" alt="" /> <strong>SCP</strong><br />
						Transfer files using Secure Copy (SCP).</p>

						<p><img src="http://media.cyberduck.ch/img/s3.png" class="feature" alt="" /> <strong class="version3">Amazon S3</strong><br />
						Browse <a class="ext" href="http://aws.amazon.com/s3">Amazon Simple Storage Service</a> the way you are used to with other file systems.</p>

						<p><img src="http://media.cyberduck.ch/img/s3.png" class="feature" alt="" /> <strong class="version3">Amazon CloudFront</strong><br />
						Manage basic and streaming <a href="http://aws.amazon.com/cloudfront/" class="ext">CloudFront</a> distributions.</p>

						<p><img src="http://media.cyberduck.ch/img/protocol.png" class="feature" alt="" /> <strong class="version3">WebDAV</strong><br />
						With WebDAV you can access your <a class="ext" href="http://www.apple.com/mobileme/features/idisk.html">iDisk</a>, GMX <a class="ext" href=
						"http://faq.gmx.de/datenverwaltung/mc/index.html">Mediacenter</a>, Microsoft SharePoint or any other <a href="http://webdav.org" class="ext">WebDAV</a> compliant server.
						Supports Basic, Digest and NTLM Authentication.</p>

						<p><img src="http://media.cyberduck.ch/img/cf.png" class="feature" alt="" /> <strong class="version3">Rackspace Cloud Files</strong><br />
						Manage your Rackspace <a class="ext" href="https://www.rackspacecloud.com/signup/503.html">Cloud Files</a> storage including the configuration of your <a href=
						"http://www.rackspacecloud.com/cloud_hosting_products/files/limelight">Limelight Content Distribution</a>.</p>

						<p><img src="http://media.cyberduck.ch/img/google.png" class="feature" alt="" /> <strong>Google Docs</strong><br />
						Convert uploads to Google Docs format and Optical Character Recognition (OCR) for image uploads.</p>

						<p><img src="http://media.cyberduck.ch/img/permissions.png" class="feature" alt="" /> <strong>Permissions</strong><br />
						Modify permissions on multiple files and recursivly.</p>

						<p><img src="http://media.cyberduck.ch/img/archive.png" class="feature" alt="" /><strong>Archives</strong><br />
						Archive and expand TAR and ZIP files remotely over SSH.</p>

						<p><img src="http://media.cyberduck.ch/img/gnu.png" class="feature" alt="" /> <strong>Open Source</strong><br />
						Licensed under the GPL.</p>
					</div>
				</div>

				<div style="clear:both;"></div>

				<p><small>Copyright (c) 2002-2009 David V. Kocher. All rights reserved. This program is free software; you can redistribute it and/or modify it under the terms of the <a href=
				"http://creativecommons.org/licenses/GPL/2.0/">GNU General Public License</a> as published by the Free Software Foundation; either version 2 of the License, or (at your option) any
				later version.<em>This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
				PARTICULAR PURPOSE. See the GNU General Public License for more details.</em></small></p>

				<p><small>This product includes software developed by <strong>Duncan McGregor et al.</strong> (<a class="ext" href="https://rococoa.dev.java.net/">Rococoa</a>), <strong>Timothy Wall
				et al.</strong> (<a class="ext" href="https://jna.dev.java.net/">JNA</a>), <strong>Christian Plattner</strong> (<a class="ext" href="http://www.ganymed.ethz.ch/ssh2/">Ganymed</a>),
				<strong>enterprisedt</strong> (<a class="ext" href="http://www.enterprisedt.com">enterprisedt.com</a>) and the <strong>Apache Software Foundation</strong> (<a class="ext" href=
				"http://jakarta.apache.org">jakarta.apache.org</a>), <strong>James Murty</strong> (<a class="ext" href="http://jets3t.s3.amazonaws.com/index.html">jetS3t</a>), <strong>Christopher
				Forsythe et al.</strong> (<a class="ext" href="http://growl.info/">growl.info</a>), <strong>M. Uli Kusterer</strong> (<a class="ext" href="http://zathras.de/">UKCrashReporter and
				UKPrefsPanel</a>), <strong>Greg Guerin</strong> (<a class="ext" href="http://www.amug.org/~glguerin/sw/#macbinary">MacBinary Toolkit</a>), <strong>Andy Matuschak</strong> (<a class=
				"ext" href="http://www.andymatuschak.org/pages/sparkle">Sparkle</a>), <strong>Kurt Revis</strong> (<a class="ext" href="http://www.snoize.com/">SNDisclosableView</a>), <strong>Shaun
				Wexler</strong> (<a class="ext" href="http://www.macfoh.com/">SKWSegmentedControl</a>), <strong>Brian Amerige</strong> (<a class="ext" href=
				"http://extendmac.com/EMKeychain/">EMKeychain</a>), <strong>Lucas Newman</strong> (<a class="ext" href="http://www.aquaticmac.com/">AquaticPrime</a>), <strong>Steve McLeod</strong> (<a class="ext" href="http://code.google.com/p/barbarywatchservice/">barbarywatchservice</a>)</small></p>
			</div>

			<div id="footer">
				<a class="swissmade" href="http://www.swissmadesoftware.org"><img src="http://media.cyberduck.ch/img/sms-logo-small-footer.png" alt="swiss made software" /></a> <a href=
				"http://validator.w3.org/check/referer">Validate</a>, $Date$<br />
			</div>
		</div>

		<div id="sidebar">
			<div id="teaser">
				<div class="box-shadow-start"></div>

				<div class="box-shadow">
					<div id="download">
						<div style="float:left">
							<strong>Version 3.6</strong><br />
							<em>Sep-06-2010</em><br />
							<a href="Cyberduck-3.6.zip">Cyberduck-3.6.zip</a><br />
							<em>Universal Binary<br />
							Mac OS X 10.5<br />
							or later required.</em>
						</div>

						<div style="float:right">
							<a href="Cyberduck-3.6.zip"><img src="http://media.cyberduck.ch/img/zip.png" alt="Download" border="0" width="128px" /></a>
						</div>
					</div>

					<p><small>Downloads hosted by<br />
					<a href="http://cacheboy.net/">Cacheboy CDN: <i>Open Source Content Delivery</i></a>.</small></p><br />

					<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick" /><input type="hidden" name="hosted_button_id" value="4914397" /><input type="image" src=
						"https://www.paypal.com/en_US/CH/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" /><img alt="" border="0" src=
						"https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
					</form>
				</div>

				<div class="box-shadow-end"></div>
			</div>

			<div class="box-solid">
				<p class="lead"><strong>News &amp; Feedback.</strong> This software is written by <a class="ext" href="http://sudo.ch/">David V. Kocher</a>. I appreciate any <a class="ext" href=
				"mailto:%66%65%65%64%62%61%63%6B%40%63%79%62%65%72%64%75%63%6B%2E%63%68">feedback</a> you might have. For bug reports and feature suggestions you should issue a <a class="ext" href=
				"http://trac.cyberduck.ch/newticket">new ticket</a> in the <a class="ext" href="http://trac.cyberduck.ch">issue tracker</a>.</p>

				<p><img class="feature" src="http://media.cyberduck.ch/img/feed-icon-16x16.png" alt="feed" /><strong>Blog.</strong> <a class="ext" href="http://cyberduck.ch/changelog.rss">Subscribe</a> to the the development <a class="ext" href="news">blog</a>.</p>
				<p><img class="feature" src="http://media.cyberduck.ch/img/twitter.png" alt="twitter" /> <strong>Twitter.</strong> <a class="ext" href="http://twitter.com/davidkocher">Follow @davidkocher</a>.</p>
				<p><strong>Mailing List.</strong> You can subscribe to the <a href="http://lists.cyberduck.ch/mailman/listinfo/cyberduck-news">Cyberduck-news</a> mailing list to get a notification
				when a new version is released.</p>
				<form method="post" action="http://lists.cyberduck.ch/mailman/subscribe/cyberduck-news">
					<p><input id="mailinglist" type="text" name="email" value="" /> <input type="submit" name="email-button" value="Subscribe" /></p>
				</form>
			</div>
		</div><?php echo(echoanalytics(".")); ?>
	</div>
</body>
</html>
