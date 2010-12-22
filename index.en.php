<?php include "lang.php"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	
<?php include "functions.php"; ?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<?php echo(echoheader(".")); ?>
	<title><?php echo(echotitle("FTP, SFTP, WebDAV, Cloud Files, Google Docs &amp; Amazon S3 Browser for Mac &amp; Windows.")); ?></title>
	<meta name="description" content="Cyberduck is an open source FTP, SFTP, WebDAV, Rackspace Cloud Files, Google Docs, Windows Azure &amp; Amazon S3 browser for Mac and Windows. It features an easy to use interface with quickly accessible bookmarks. The browser allows to download, upload and move files using drag and drop with an hierarchical view to browse large folder structures efficiently. Transfers are handled with ease including synchronization of local with remote directories. To edit files, a seamless integration with any external editor application makes it easy to change content quickly. Both Amazon CloudFront and Rackspace Limelight can be easily configured to distribute your files using their content distribution networks (CDN). Bundled with more than 30 localizations including Japanese, Korean, Chinese, Spanish, German and French, the user interface makes you instantly feel at home." />
	<meta name="keywords" content="ftp, sftp, tls, ssl, dav, webdav, amazon, s3, cloudfront, cloudfiles, limelight, google storage, google docs, browser, mac, os x, windows, program, application" />
</head>

<body id="index">
	<div id="header">
		<?php echo(echologo("."));?>
		<?php echo(echocaption("."));?>
		<?php echo(echosubmenu("."));?>
	</div>

	<div id="container">
		<div id="maincolumn">
			<?php echo(echogoogle());?>
			<div id="content">
				<div id="features">
					<img src="http://media.cyberduck.ch/img/connect.png" alt="" class="headline" />
					<div class="description">
						<h2 class="headline">Connecting to every server.</h2>
						<p>With an easy to use interface, connect to <a href="http://trac.cyberduck.ch/wiki/help/en/howto/ftp">FTP (File Transfer Protocol)</a>, <a href="http://trac.cyberduck.ch/wiki/help/en/howto/ftp">FTP/TLS (FTP secured over SSL/TLS)</a>, <a href="http://trac.cyberduck.ch/wiki/help/en/howto/sftp">SFTP (SSH Secure File Transfer)</a>, <a href="http://trac.cyberduck.ch/wiki/help/en/howto/dav" >WebDAV</a> (Web-based Distributed
						Authoring and Versioning), <a href="http://trac.cyberduck.ch/wiki/help/en/howto/s3">Amazon S3</a>, <a href="http://trac.cyberduck.ch/wiki/help/en/howto/googlestorage">Google Storage</a>, <a href="http://trac.cyberduck.ch/wiki/help/en/howto/googledocs/">Google Docs</a>, <a href=
							"http://trac.cyberduck.ch/wiki/help/en/howto/azure">Windows Azure</a> and <a href=
						"http://trac.cyberduck.ch/wiki/help/en/howto/cloudfiles">Rackspace Cloud Files</a>. Works with emerging open cloud software from <a href="http://trac.cyberduck.ch/wiki/help/en/howto/eucalyptus/">Eucalyptus</a> and <a href="http://trac.cyberduck.ch/wiki/help/en/howto/openstack/">OpenStack</a>.</p>
					</div>

					<div id="screenshots">
						<a class="mac" style="display:none;" href="http://media.cyberduck.ch/img/mac/browser.png"><img alt="Cyberduck Bookmarks" src="http://media.cyberduck.ch/img/mac/browser-bookmarks.png" /></a>
						<a class="windows" style="display:none;" href="img/windows/browser.png"><img alt="Cyberduck Browser" src="img/windows/browser-bookmarks.png" /></a>
					</div>
					<script type="text/javascript">
							//<![CDATA[
							$(document).ready(function() {
								if(navigator.userAgent.toLowerCase().indexOf('windows') > -1) {
									$("#screenshots .windows").css('display', 'inline');
								}
								else {
									$("#screenshots .mac").css('display', 'inline');
								}
							});
					//]]>
					</script>

					<img alt="" src="http://media.cyberduck.ch/img/pencil.png" class="headline" />
					<div class="description">
						<h2 class="headline">Edit any file with your preferred editor.</h2>
						<p> To edit files, a seamless integration with any external editor application makes it easy to change content quickly. Edit any text or binary file on the server in your preferred application.</p>
					</div>

					<img alt="" src="http://media.cyberduck.ch/img/cf-disk.png" class="headline" />
					<div class="description">
						<h2 class="headline">Distribute your content in the cloud.</h2>
						<p>Both Amazon <a href="http://trac.cyberduck.ch/wiki/help/en/howto/cloudfront">CloudFront</a> and Rackspace Limelight can be easily configured to distribute your files using their content distribution networks (<a href="http://trac.cyberduck.ch/wiki/help/en/howto/cdn">CDN</a>). Connect to any server using FTP, SFTP or WebDAV and configure it as the origin of a new Amazon <a href="http://trac.cyberduck.ch/wiki/help/en/howto/cloudfront">CloudFront</a> CDN distribution.</p>
						<div class="column">
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/s3.png" class="feature" alt="" /> <strong>Amazon CloudFront</strong><br />
								Manage custom origin, basic and streaming <a href="http://trac.cyberduck.ch/wiki/help/en/howto/cloudfront">CloudFront</a> distributions. Toggle deployment, define CNAMEs, distribution access logging and set the default index file for your distribution.</p>
							</div>
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/google.png" class="feature" alt="" /> <strong>Google Storage for Developers</strong><br />Grant access to files using ACLs with an authenticated URL to share files with securely.</p>
							</div>
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/cf.png" class="feature" alt="" /> <strong>Rackspace Cloud Files</strong><br />
								Manage your Rackspace <a class="ext" href="https://www.rackspacecloud.com/signup/503.html">Cloud Files</a> storage including the configuration of <a href=
								"http://www.rackspacecloud.com/cloud_hosting_products/files/limelight">Limelight Content Distribution</a>.</p>
							</div>
						</div>
					</div>

					<img alt="" src="http://media.cyberduck.ch/img/s3-disk.png" class="headline" />
					<div class="description">
						<h2 class="headline">Amazon S3 for the rest of us.</h2>
						<p>Browse <a href="http://trac.cyberduck.ch/wiki/help/en/howto/s3">Amazon Simple Storage Service</a> like your harddisk. Supporting the latest and greatest additions to the S3 storage options. Define logging options, storage class and geographical location of your content.</p>
						<div class="column">
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/s3.png" class="feature" alt="" /> <strong>Versioning and MFA</strong><br />
									Support for bucket versioning and Multi-Factor Authentication Delete. With versioning enabled, revert to any previous version of a file.</p>
							</div>
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/permissions.png" class="feature" alt="" /> <strong>ACL</strong><br />
								Configure Access Control Lists (ACLs) for fine grained access permissions. Copy a signed URL for temporary access.</p>
							</div>
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/info.png" class="feature" alt="" /> <strong>Metadata</strong><br />
									You can edit standard HTTP headers and add custom HTTP headers to files to store metadata and control cache expire settings. Batch editing included.</p>
							</div>
						</div>
					</div>
				
					<img alt="" src="http://media.cyberduck.ch/img/google-disk.png" class="headline" />
					<div class="description">
						<h2 class="headline">Manage your Google Docs.</h2>
						<p>Convert uploads to Google Docs format and Optical Character Recognition (OCR) for image uploads.</p>
					</div>
				
					<img alt="" src="http://media.cyberduck.ch/img/bookmark.png" class="headline" />
					<div class="description">
						<h2 class="headline">First class bookmarking.</h2>
						<p>Organize your bookmarks with drag and drop and quickly search using the filter field.</p>
						<div class="column">
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/document.png" class="feature" alt="" /> <strong>Files</strong><br />
								Drag and drop bookmarks to the Finder.app and drop files onto bookmarks to upload.</p>
								<p><img src="http://media.cyberduck.ch/img/spotlight.png" class="feature" alt="" /> <strong>Spotlight</strong><br />
								<a href="http://trac.cyberduck.ch/wiki/help/en/howto/spotlight">Spotlight</a> Importer for bookmark files.</p>
							</div>
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/history.png" class="feature" alt="" /> <strong>History</strong><br />
								History of visited servers.</p>
								<p><img src="http://media.cyberduck.ch/img/rendezvous.png" class="feature" alt="" /> <strong>Bonjour</strong><br />
								Auto discovery of FTP &amp; WebDAV services on the local network.</p>
							</div>
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/advanced.png" class="feature" alt="" /> <strong>Import</strong><br />
								<a href="http://trac.cyberduck.ch/wiki/help/en/howto/bookmarks#Fromthird-partyapplications">Import Bookmarks</a> from third-party applications.</p>
							</div>
						</div>
					</div>

					<img alt="" src="http://media.cyberduck.ch/img/browse.png" class="headline" />
					<div class="description">
						<h2 class="headline">Browse with ease.</h2>
						<p>Browse and move your files quickly in the browser with caching enabled for the best performance. Works with any character encoding for the correct display of Umlaute, Japanese and Chinese.</p>

						<div class="column">
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/quicklook.png" class="feature" alt="" /> <strong>Quick Look</strong><br />
								Quickly preview files with Quick Look. Press the space key to preview files like in Finder.app without explicitly downloading.</p>
							</div>
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/outline.png" class="feature" alt="" /> <strong>Accessible</strong><br />
									The outline view of the browser allows to browse large folder structures
									efficiently. Cut &amp; paste or drag &amp; drop files to organize.</p>
							</div>
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/safari.png" class="feature" alt="" /> <strong>Web URL</strong><br />
								Quickly copy or open the corresponding HTTP URLs of a selected file in your web browser.</p>
							</div>
						</div>
					</div>

					<img alt="" src="http://media.cyberduck.ch/img/transfer.png" class="headline" />
					<div class="description">
						<h2 class="headline">Transfer anything.</h2>
						<p>Limit the number of concurrent transfers and filter files using a regular expression. Resume both interrupted download and uploads. Recursively transfer directories.</p>

						<div class="column">
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/download.png" class="feature" alt="" /> <strong>Download and Upload</strong><br />
								Drag and drop to and from the browser to download and upload or copy files between servers. No hassle.</p>
							</div>
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/sync.png" class="feature" alt="" /> <strong>Synchronization</strong><br />
								Synchronize local with remote directories (and vice versa) and get a preview of affected files before any action is taken.</p>
							</div>
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/growl.png" class="feature" alt="" /> <strong>Growl</strong><br />
								Support for Growl, the global notification system for file transfer events. See <a class="ext" href="http://growl.info/">growl.info</a>.</p>
							</div>
						</div>
					</div>
									
					<img alt="" src="http://media.cyberduck.ch/img/sftp-disk.png" class="headline" />
					<div class="description">
						<h2 class="headline">Advanced SSH features.</h2>
						<p>No compromise accessing your <a href="http://trac.cyberduck.ch/wiki/help/en/howto/sftp">SFTP</a> servers with all the bells and whistles.</p>
						<div class="column">
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/protocol.png" class="feature" alt="" /> <strong>Authentication and security</strong><br />
								Supports Public key authentication, Keyboard Interactive (PAM) Authentication and one-time passwords. Support for various encryption ciphers (3DES, Blowfish, Twofish, AES, CAST) and Authentication
								algorithms (MD5, SHA1). Optionally transfer files using Secure Copy (SCP).</p>
							</div>
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/openssh.png" class="feature" alt="" /><strong>Interoperability</strong><br />
									Read settings from your existing <a href="http://www.openssh.org/">OpenSSH</a> configuration options including Host aliases, public key authentication preferences and default login user.
									Integration with Terminal.app to open the current working directory in a shell.
									Works with <a href="http://www.chiark.greenend.org.uk/~sgtatham/putty/">PuTTY</a> private keys.</p>
							</div>
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/archive.png" class="feature" alt="" /><strong>Archives</strong><br />
								Archive and expand TAR and ZIP files remotely over SSH.</p>
							</div>
						</div>
					</div>
				
					<img alt="" src="http://media.cyberduck.ch/img/mac32.png" class="headline" />
					<div class="description">
						<h2 class="headline">Integration with system technologies.</h2>
						<p>A native citizen of Mac OS X and Windows.</p>
						<div class="column">
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/keychain.png" class="feature" alt="" /> <strong>Keychain</strong><br />
							All passwords are stored in the system Keychain as Internet passwords available also to third party applications. Certificates are validated using the trust settings in the Keychain.</p>
							</div>
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/finder.png" class="feature" alt="" /> <strong>Finder</strong><br />
								Use Cyberduck as default system wide protocol handler for FTP and SFTP. Open .inetloc files and .duck bookmark files from the Finder.</p>
							</div>
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/windows32.png" class="feature" alt="" /> <strong>Windows</strong><br />
									Reads your proxy configuration from network settings. Encrypts passwords limiting access to your account.
									</p>
							</div>
						</div>
					</div>

					<img alt="" src="http://media.cyberduck.ch/img/osi.png" class="headline" />
					<div class="description">
						<h2 class="headline">We are open.</h2>
						<p>Come in. You can follow the daily development activity, have a look at the roadmap and grab the source on <a href="http://trac.cyberduck.ch">trac.cyberduck.ch</a> for your own hacking pleasure. Licensed under the <a href="http://www.gnu.org/licenses/gpl.html">GPL</a>.</p>
					</div>
					
					<img alt="" src="http://media.cyberduck.ch/img/language.png" class="headline" />
					<div class="description">
						<h2 class="headline">International.</h2>
						<p>Speaks your language.  English, čeština, Nederlands, Suomi, Français, Deutsch, Italiano, 日本語, 한국어, Norsk, Slovenčina, Español, Português (do Brasil), Português (Europeu), 中文 (简体), 正體中文 (繁體), Русский, Svenska, Dansk, Język Polski, Magyar, Bahasa Indonesia, Català, Cymraeg, ภาษาไทย, Türkçe, Ivrit, Latviešu Valoda, Ελληνικά, Cрпски, ქართული ენა, Slovenščina &amp; Română.</p>
					</div>
				</div>

				<div style="clear:both;"></div>

				<p><small>Copyright (c) 2002-2010 David V. Kocher. All rights reserved. This program is free software; you can redistribute it and/or modify it under the terms of the <a href=
				"http://creativecommons.org/licenses/GPL/2.0/">GNU General Public License</a> as published by the Free Software Foundation; either version 2 of the License, or (at your option) any
				later version.<em>This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
				PARTICULAR PURPOSE. See the GNU General Public License for more details.</em></small></p>

				<p><small>This product includes software developed by 
					<strong>Duncan McGregor et al.</strong> (<a class="ext" href="http://code.google.com/p/rococoa/">Rococoa</a>), 
					<strong>Timothy Wall et al.</strong> (<a class="ext" href="https://jna.dev.java.net/">JNA</a>), 
					<strong>Jeroen Frijters</strong> (<a class="ext" href="http://www.ikvm.net/">IKVM.NET</a>),
					<strong>Christian Plattner</strong> (<a class="ext" href="http://www.ganymed.ethz.ch/ssh2/">Ganymed</a>),
					<strong>Apache Software Foundation</strong> (<a class="ext" href="http://commons.apache.org">Apache Commons</a>), 
					<strong>Apache Software Foundation</strong> (<a class="ext" href="http://jakarta.apache.org/slide/">Jakarta Slide</a>), 
					<strong>James Murty</strong> (<a class="ext" href="http://jets3t.s3.amazonaws.com/index.html">jetS3t</a>), 
					<strong>Lowell Vaughn et al.</strong> (<a class="ext" href="https://github.com/rackspace/java-cloudfiles">Cloud Files API</a>), 
					<strong>Christopher Forsythe et al.</strong> (<a class="ext" href="http://growl.info/">Growl</a>), 
					<strong>M. Uli Kusterer</strong> (<a class="ext" href="http://zathras.de/">UKCrashReporter and UKPrefsPanel</a>), 
					<strong>Kurt Revis</strong> (<a class="ext" href="http://www.snoize.com/">SNDisclosableView</a>), 
					<strong>Shaun Wexler</strong> (<a class="ext" href="http://www.snoize.com/">CTGradient</a>), 
					<strong>Brian Amerige</strong> (<a class="ext" href="http://extendmac.com/EMKeychain/">EMKeychain</a>), 
					<strong>Steve McLeod</strong> (<a class="ext" href="http://code.google.com/p/barbarywatchservice/">barbarywatchservice</a>)
					<strong>Lucas Newman</strong> (<a class="ext" href="http://www.aquaticmac.com/">AquaticPrime</a>), 
					<strong>Andy Matuschak</strong> (<a class="ext" href="http://sparkle.andymatuschak.org/">Sparkle</a>), 
					<strong>wyDay</strong> (<a class="ext" href="http://code.google.com/p/wyupdate/">wyUpdate</a>),
					<strong>Jeremy D. Miller</strong> (<a class="ext" href="http://structuremap.net/structuremap/">StructureMap</a>),
					<strong>Ayende Rahien</strong> (<a class="ext" href="http://www.ayende.com/projects/rhino-mocks.aspx">Rhino Mocks</a>).</small>
				</p>
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
					<div id="mac" class="download">
						<div>
							<strong>Version 3.8.1</strong><br />
							<em>Dec-06-2010</em><br />
							<a href="Cyberduck-3.8.1.zip" onClick="javascript: pageTracker._trackPageview('/Cyberduck-3.8.1.zip');">Cyberduck-3.8.1.zip</a><br />
							<em>Universal Binary. Mac OS X 10.5 or later required.</em>
						</div>
						<img alt="" src="http://media.cyberduck.ch/img/mac32.png" />
					</div>

					<div id="windows" class="download">
						<div>
							<strong>Version 4.0 Public Beta</strong><br />
							<em>Dec-13-2010</em><br />
							<a href="windows/beta/Cyberduck-Installer-4.0b8.8071.exe" onClick="javascript: pageTracker._trackPageview('/Cyberduck-Installer-4.0b8.8071.exe');">Cyberduck-Installer-4.0b8.exe</a><br />
							<em>Windows XP, Windows Vista or
							Windows 7 required.</em><br />
							<small>Downloads hosted by <a href="http://cacheboy.net/">Cacheboy CDN: <i>Open Source Content Delivery</i></a>.</small>
						</div>
						<img alt="" src="http://media.cyberduck.ch/img/windows32.png" />
					</div>
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<fieldset>
							<input type="hidden" name="cmd" value="_s-xclick" />
							<input type="hidden" id="paypal" name="hosted_button_id" value="4914397" />
							<input type="image" src="img/donate" name="submit" alt="Donate to the development of Cyberduck!" />
						</fieldset>
					</form>
					<script type="text/javascript">
							//<![CDATA[
							$(document).ready(function() {
								if(navigator.userAgent.toLowerCase().indexOf('windows') > -1) {
									$("form input#paypal").attr('value', 'NKZSJQTDVF4ZA');
								}
								else {
									$("form input#paypal").attr('value', '4914397');
								}
							});
					//]]>
					</script>
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
		</div>
	</div>
</body>
</html>
