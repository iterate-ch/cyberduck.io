<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
  include "functions.php";
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="generator" content=
	"HTML Tidy for Mac OS X (vers 1st December 2004), see www.w3.org" />
	<?php echo(echoheader(".")); ?>

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
					<p><strong style="color:#4e4e4e;">Cyberduck is
					a <a class="ext" href=
					"http://opensource.org/docs/definition.php">open
					source</a> FTP and SFTP (SSH Secure File
					Transfer) browser licenced under the GPL with
					an easy to use interface, integration with
					external editors and support for many Mac OS X
					system technologies such as Spotlight, Bonjour,
					the Keychain and AppleScript.</strong> For a
					more detailed list of available
					<strong>features</strong> see <a href=
					"./features.php">here</a>.
					<strong>Localizations</strong> are available in
					<em>English, Czech, Dutch, Finnish, French,
					German, Italian, Japanese, Korean, Norwegian,
					Slovak, Spanish, Chinese
					(Traditional and Simplified), Russian, Swedish,
					Danish, Polish, Indonesian, Catalan,
					Welsh, Thai and Hebrew</em>. Many thanks to all
					<a class="ext" href=
					"http://trac.cyberduck.ch/file/trunk/Credits.html?format=raw">
					contributors</a>! If you need
					<strong>help</strong>, there is an <a href=
					"./help/en/howto">introduction</a>, a list of
					<a href="./help/en/problems/">common
					problems</a> and a <a href=
					"./help/en/faq">FAQ</a>. Please post any
					questions on the <strong><a class="ext"
					href="./forum">forum</a></strong>. This
					software is written by <a class="ext"
					href="http://sudo.ch/">David V. Kocher</a>.
					Please have a look at the <a class="ext"
					href=
					"http://trac.cyberduck.ch/file/trunk/Credits.html?format=raw">
					credits</a> to see who contributed. I
					appreciate any <strong><a class="ext"
					href="mailto:%66%65%65%64%62%61%63%6B%40%63%79%62%65%72%64%75%63%6B%2E%63%68">
					feedback</a></strong> you might have. For bug
					reports and feature suggestions you should
					issue a <a class="ext" href=
					"http://trac.cyberduck.ch/newticket">new
					ticket</a> in the <strong><a class="ext" href=
					"http://trac.cyberduck.ch">issue tracker</a></strong>.</p>

					<div style=
					"margin-left:10px; margin-bottom:30px; margin-right:5px"
					align="center" id="screenshot">
						<a href="./img/browser-ja.jpg"><img align=
						"middle" border="0" src=
						"./img/browser-thumb.jpg" alt=
						"Cyberduck Screenshot" /></a>
					</div>

					<div class="feature">
						<p><img src="./img/ftp.png" class="feature"
						alt="" /> <strong>Protocols</strong><br />
						FTP (File Transfer Protocol), FTP/TLS (FTP
						secured over SSL/TLS) and SFTP (SSH Secure
						File Transfer).</p>

						<p><img src="./img/column.png" class=
						"feature" alt="" />
						<strong>Browser</strong><br />
						Document based, list and outline view,
						caching, cut &amp; paste, drag &amp; drop
						and arbitrary character encodings.</p>

						<p><img src="./img/international16.png"
						class="feature" alt="" />
						<strong>International</strong><br />
						Available in <em>English, Czech, Dutch,
						Finnish, French, German, Italian, Japanese,
						Korean, Norwegian, Slovak,
						Spanish, Chinese (Traditional and
						Simplified), Russian, Swedish,
						Danish, Polish, Indonesian, Catalan,
						Welsh, Thai and Hebrew</em>.</p>

						<p><img src="./img/textmate.png" class=
						"feature" alt="" /> <strong>External
						editors</strong><br />
						Seamless integration with external editors.
						<a class="ext" href=
						"http://www.codingmonkeys.de/subethaedit/">SubEthaEdit</a>,
						<a class="ext" href=
						"http://www.barebones.com/products/bbedit/">
						BBEdit</a>, <a class="ext" href=
						"http://www.barebones.com/products/textwrangler">
						TextWrangler</a>, <a class="ext" href=
						"http://www.tex-edit.com/">Text-Edit
						Plus</a>, <a class="ext" href=
						"http://macromates.com/">TextMate</a>,
						<a class="ext" href=
						"http://mimikaki.net/">mi</a>, <a class=
						"ext" href=
						"http://smultron.sourceforge.net/">Smultron</a>,
						<a class="ext" href=
						"http://www.artman21.net/product/JeditX/">JeditX</a>,
						<a class="ext" href=
						"http://macrabbit.com/cssedit/">CSSEdit</a>,
						<a class="ext" href=
						"http://www.aynimac.com/">CotEditor</a> and
						<a class="ext" href=
						"http://www.talacia.com/">Tag</a>.</p>

						<p><img src="./img/gnu.png" class="feature"
						alt="" /> <strong>Open
						Source</strong><br />
						Licensed under the GPL.</p>

					</div>

					<div class="feature">
						<p><img src="./img/spotlight.png" class=
						"feature" alt="" />
						<strong>Spotlight</strong><br />
						<a class="ext" href=
						"http://www.apple.com/macosx/features/spotlight/">
						Spotlight</a> Importer for bookmark
						files.</p>

						<p><img src="./img/document.png" class=
						"feature" alt="" />
						<strong>Bookmarking</strong><br />
						Powerful bookmarking in a the browser
						drawer. Drag and drop bookmarks to the
						Finder.app and drop files onto bookmarks to
						upload.</p>

						<p><img src="./img/rendezvous.png" class=
						"feature" alt="" />
						<strong>Bonjour</strong><br />
						Auto discovery of services on the local
						network</p>

						<p><img src="./img/finder.png" class=
						"feature" alt="" />
						<strong>Integration</strong><br />
						Use Cyberduck as default system wide
						protocol handler for FTP (Requires
						<a class="ext" href=
						"http://www.rubicode.com/Software/RCDefaultApp">
						RCDefaultApp</a>). Open .inetloc files and
						.duck bookmark files from the Finder.</p>

						<p><img src="./img/advanced.png" class=
						"feature" alt="" /> <strong>Resumable
						Transfers</strong><br />
						Both download and upload.</p>

						<p><img src="./img/advanced.png" class=
						"feature" alt="" /> <strong>Recursive
						Transfers.</strong><br />
						Both download and upload.</p>

						<p><img src="./img/applescript.png" class=
						"feature" alt="" />
						<strong>AppleScript</strong><br />
						Full AppleScript integration. See the
						<a class="ext" href=
						"http://svn.cyberduck.ch/trunk/AppleScript%20Samples/">
						sample scripts</a> (included on the disk
						image).</p>
					</div>

					<div class="feature">
						<p><img src="./img/keychain.png" class=
						"feature" alt="" />
						<strong>Keychain</strong><br />
						All passwords are stored in the system
						<a class="ext" href=
						"http://www.apple.com/macosx/features/security/">
						Keychain</a> as Internet passwords
						available also to third party
						applications.</p>

						<p><img src="./img/idisk.png" class=
						"feature" alt="" />
						<strong>iDisk</strong><br />
						Synchronize bookmarks with <a class=
						"ext" href=
						"http://www.apple.com/macosx/features/dotmacsync/">
						.Mac iDisk</a>.</p>

						<p><img src="./img/advanced.png" class=
						"feature" alt="" />
						<strong>Synchronization</strong><br />
						Synchronize local with remote directories
						(and vice versa) and get a preview of
						affected files before any action is
						taken.</p>

						<p><img src="./img/advanced.png" class=
						"feature" alt="" />
						<strong>Permissions</strong><br />
						Modify permissions on multiple files and
						recursivly.</p>

						<p><img src="./img/advanced.png" class=
						"feature" alt="" />
						<strong>ASCII</strong><br />
						Convert line endings on the fly in ASCII
						transfers.</p>

						<p><img src="./img/sftp.png" class=
						"feature" alt="" />
						<strong>SSH</strong><br />
						Supports Public key authentication,
						Keyboard Interactive (PAM) Authentication,
						Support for various encryption ciphers
						(3DES, Blowfish, Twofish, AES, CAST) and
						Authentication algorithms (MD5, SHA1).</p>
						
					</div>

					<div style="clear:both;"></div>

					<p><small>Copyright (c) 2002-2005 David V.
					Kocher. All rights reserved. This program is
					free software; you can redistribute it and/or
					modify it under the terms of the <a href=
					"License.txt">GNU General Public License</a> as
					published by the Free Software Foundation;
					either version 2 of the License, or (at your
					option) any later version.<em>This program is
					distributed in the hope that it will be useful,
					but WITHOUT ANY WARRANTY; without even the
					implied warranty of MERCHANTABILITY or FITNESS
					FOR A PARTICULAR PURPOSE. See the GNU General
					Public License for more
					details.</em></small></p>

					<p><small>This product includes software
					developed by <strong>sshtools.com</strong>
					(<a class="ext" href=
					"http://www.sshtools.com">http://www.sshtools.com</a>),
					<strong>enterprisedt</strong> (<a class=
					"ext" href=
					"http://www.enterprisedt.com">http://www.enterprisedt.com</a>)
					and the <strong>Apache Software Foundation</strong>
					(<a class="ext" href=
					"http://jakarta.apache.org">http://jakarta.apache.org/</a>).</small></p>
				</td>

				<td id="sidebar" valign="top">
					<div class="box-solid">
						<p><q cite="boingboing.net"><a href="http://www.boingboing.net/2005/01/07/cyberduck_ftp_browse.html">All the other FTP clients I've used
						have been hard to learn and are confusing,
						but I've never had to look at the help file
						for Cyberduck</a></q></p>

						<div style="margin:5px;" align="center">
							<a href=
							"http://www.macworld.com/2004/10/features/bargainsweb/index.php">
							<img src="./img/macworld.png" width=
							"90" height="67" alt=
							"Macworld Rating" /></a>
						</div>
					</div>

					<div class="box-solid">
						<table cellpadding="0" cellspacing="0">
							<tr>
								<td valign="top"><a href=
								"./Cyberduck-2.5.5.dmg"><img width=
								"64" height="90" style=
								"margin:10px; margin-top:0px" src=
								"./img/arrowdisk.png" align="left"
								alt="Download" border=
								"0" /></a></td>

								<td valign="top">
									<p>
									<strong>Download</strong><br />

									<strong>2.5.5</strong>
									<em>(Mar-01-2006)</em><br />
									<a href=
									"./Cyberduck-2.5.5.dmg">Cyberduck-2.5.5.dmg</a>
									<a href=
									"./Cyberduck-2.5.5.dmg"></a>
									(7.9MB)<br />
									<em>Mac OS X 10.3.9 or later
									required!</em></p>
								</td>
							</tr>
						</table>
						<p>You can also download a <a href="http://update.cyberduck.ch/localizations/">
						unilingual build</a> with one particular localization only (4.2MB):
						
						<script type="text/javascript">
						<!--
						function setVisible(obj) {
							for(i = 0; i < obj.options.length; i++) {
								document.getElementById(obj.options[i].value).style.display = 'none';
							}
							document.getElementById(obj.options[obj.selectedIndex].value).style.display = 'inline';
						}
						//-->
						</script>
						
						<form>
							<p><select style="width:100px;" name="localizations" onchange="javascript:setVisible(this)">
								<option value="en">English</option>
								<option value="ca">Català</option>
								<option value="cs">Čeština</option>
								<option value="cy">Cymraeg</option>
								<option value="da">Dansk</option>
								<option value="de">Deutsch</option>
								<option value="es">Español</option>
								<option value="fi">Suomi</option>
								<option value="fr">Français</option>
								<option value="he">עִבְרִית</option>
								<option value="id">Bahasa Indonesia</option>
								<option value="it">Italiano</option>
								<option value="ja" selected>日本語</option>
								<option value="ko">한국어</option>
								<option value="nl">Nederlands</option>
								<option value="no">Nynorsk</option>
								<option value="pl">Polszczyzna</option>
								<option value="ru">Pусский язык</option>
								<option value="sk">Slovenčina</option>
								<option value="sv">Svenska</option>
								<option value="th">ภาษาไทย</option>
								<option value="zh_CN">简体字</option>
								<option value="zh_TW">簡體字</option>
							</select>
							<a id="en" style="display:none" href="http://update.cyberduck.ch/localizations/Cyberduck-2.5.5-en.dmg">Cyberduck-2.5.5-en.dmg</a>
							<a id="ca" style="display:none" href="http://update.cyberduck.ch/localizations/Cyberduck-2.5.5-ca.dmg">Cyberduck-2.5.5-ca.dmg</a>
							<a id="cs" style="display:none" href="http://update.cyberduck.ch/localizations/Cyberduck-2.5.5-cs.dmg">Cyberduck-2.5.5-cs.dmg</a>
							<a id="cy" style="display:none" href="http://update.cyberduck.ch/localizations/Cyberduck-2.5.5-cy.dmg">Cyberduck-2.5.5-cy.dmg</a>
							<a id="da" style="display:none" href="http://update.cyberduck.ch/localizations/Cyberduck-2.5.5-da.dmg">Cyberduck-2.5.5-da.dmg</a>
							<a id="de" style="display:none" href="http://update.cyberduck.ch/localizations/Cyberduck-2.5.5-de.dmg">Cyberduck-2.5.5-de.dmg</a>
							<a id="es" style="display:none" href="http://update.cyberduck.ch/localizations/Cyberduck-2.5.5-es.dmg">Cyberduck-2.5.5-es.dmg</a>
							<a id="fi" style="display:none" href="http://update.cyberduck.ch/localizations/Cyberduck-2.5.5-fi.dmg">Cyberduck-2.5.5-fi.dmg</a>
							<a id="fr" style="display:none" href="http://update.cyberduck.ch/localizations/Cyberduck-2.5.5-fr.dmg">Cyberduck-2.5.5-fr.dmg</a>
							<a id="he" style="display:none" href="http://update.cyberduck.ch/localizations/Cyberduck-2.5.5-he.dmg">Cyberduck-2.5.5-he.dmg</a>
							<a id="hu" style="display:none" href="http://update.cyberduck.ch/localizations/Cyberduck-2.5.5-hu.dmg">Cyberduck-2.5.5-hu.dmg</a>
							<a id="id" style="display:none" href="http://update.cyberduck.ch/localizations/Cyberduck-2.5.5-id.dmg">Cyberduck-2.5.5-id.dmg</a>
							<a id="it" style="display:none" href="http://update.cyberduck.ch/localizations/Cyberduck-2.5.5-it.dmg">Cyberduck-2.5.5-it.dmg</a>
							<a id="ja" style="display:inline" href="http://update.cyberduck.ch/localizations/Cyberduck-2.5.5-ja.dmg">Cyberduck-2.5.5-ja.dmg</a>
							<a id="ko" style="display:none" href="http://update.cyberduck.ch/localizations/Cyberduck-2.5.5-ko.dmg">Cyberduck-2.5.5-ko.dmg</a>
							<a id="nl" style="display:none" href="http://update.cyberduck.ch/localizations/Cyberduck-2.5.5-nl.dmg">Cyberduck-2.5.5-nl.dmg</a>
							<a id="no" style="display:none" href="http://update.cyberduck.ch/localizations/Cyberduck-2.5.5-no.dmg">Cyberduck-2.5.5-no.dmg</a>
							<a id="pl" style="display:none" href="http://update.cyberduck.ch/localizations/Cyberduck-2.5.5-pl.dmg">Cyberduck-2.5.5-pl.dmg</a>
							<a id="ru" style="display:none" href="http://update.cyberduck.ch/localizations/Cyberduck-2.5.5-ru.dmg">Cyberduck-2.5.5-ru.dmg</a>
							<a id="sk" style="display:none" href="http://update.cyberduck.ch/localizations/Cyberduck-2.5.5-sk.dmg">Cyberduck-2.5.5-sk.dmg</a>
							<a id="sv" style="display:none" href="http://update.cyberduck.ch/localizations/Cyberduck-2.5.5-sv.dmg">Cyberduck-2.5.5-sv.dmg</a>
							<a id="th" style="display:none" href="http://update.cyberduck.ch/localizations/Cyberduck-2.5.5-th.dmg">Cyberduck-2.5.5-th.dmg</a>
							<a id="zh_CN" style="display:none" href="http://update.cyberduck.ch/localizations/Cyberduck-2.5.5-zh_CN.dmg">Cyberduck-2.5.5-zh_CN.dmg</a>
							<a id="zh_TW" style="display:none" href="http://update.cyberduck.ch/localizations/Cyberduck-2.5.5-zh_TW.dmg">Cyberduck-2.5.5-zh_TW.dmg</a>
							</p>
						</form>
					</div>

					<div class="box-filled">
						<p><strong>Donations.</strong>
						<em><a class="ext" href=
						"http://www.gnu.org/philosophy/free-sw.html">
						Free software</a> is a matter of the users
						freedom to run, copy, distribute, study,
						change and improve the software. If you
						find this program useful, please consider
						making a <a href="./donate">donation</a>.
						It will help to make Cyberduck even
						better!</em></p>
					</div>

					<div class="box-solid">
						<div style="padding:5px;" align="center">
							<a href=
							"http://apple.com/universal/"><img src=
							"./img/macosxuniversal20060109.png"
							alt="universal" /></a>
						</div>
					</div>

					<div class="box-filled">
						<p><strong>Mailing List.</strong> You can
						subscribe to the <a href=
						"http://lists.cyberduck.ch/mailman/listinfo/cyberduck-news">
						Cyberduck-news</a> mailing list to get a
						notification when a new version is
						released.</p>

						<form method="post" action=
						"http://lists.cyberduck.ch/mailman/subscribe/cyberduck-news">
						<p>Email: <input id="mailinglist" type=
						"text" name="email" value="" />
							<input type="submit" name=
							"email-button" value="Subscribe" /></p>
						</form>
					</div>

					<div class="box-filled">
						<p><strong>Forum.</strong> Discuss anything
						related to Cyberduck in the forum hosted at
						<a class="ext" href=
						"http://forum.cyberduck.ch">cocoaforge.com</a></p><a href="http://forum.cyberduck.ch">
						</a>

						<div style=
						"margin-top:-10px; margin-bottom:5px;"
						align="center">
							<a href=
							"http://forum.cyberduck.ch"><img width=
							"128" src="./img/cocoaforge.png" alt=
							"forum" /></a>
						</div>
					</div>

					<div class="box-filled">
						<p><img class="feature" src=
						"./img/feed-icon-16x16.png" alt="feed" />
						<strong>Blog.</strong> <a href=
						"http://sudo.ch/~dkocher/feed/">Subscribe</a>
						to the the developer&apos;s <a class="ext"
						href=
						"http://sudo.ch/~dkocher/">blog</a>.</p>
					</div>

					<div class="box-filled">
						<p><a href=
						"http://docs.blacktree.com/quicksilver/plug-ins/cyberduck">
						<img class="sidebar" src=
						"./img/quicksilver.png" height="64" width=
						"64" alt="getquicksilver" /></a>
						<strong>Quicksilver Module.</strong> Access
						Cyberduck bookmarks from within <a class=
						"ext" href=
						"http://docs.blacktree.com/quicksilver/plug-ins/cyberduck/">
						Quicksilver</a>.</p>

						<p><a href="http://growl.info"><img height=
						"64" class="sidebar" src=
						"./img/growlicon.png" alt="getgrowl" /></a>
						<strong>Growl.</strong> You may also want
						to install <a class="ext" href=
						"http://growl.info">Growl</a>, a global
						notification system Cyberduck supports.</p>

						<p><strong>RCDefaultApp.</strong> Set
						Cyberduck as the default application for
						all FTP URLs with <a class="ext" href=
						"http://www.rubicode.com/Software/RCDefaultApp">
						RCDefaultApp</a>.</p>
					</div>

					<div style="margin-bottom:0px;" class="box-solid">
						<p><strong>Reviews.</strong> Cyberduck has been reviewed by many
						sites and got tremendous feedback over the last year. Read the full reviews
						by clicking on the citations.</p> 
		
						<p><q cite="macsoftreview.com"><a href="http://www.macsoftreview.com/2006/01/29/david-kochers-cyberduck/?p=13">[Cyberduck] is one of those apps that just does what it’s supposed to, no more, no less. - check it out today, and I bet you will switch too.</a></q></p>
		
						<p><q cite="spymac.com"><a href="http://www.spymac.com/news/article.php?contentid=2875">With a user-friendly interface, funky name, and loads of great features, Cyberduck leads the pack among free FTP clients.
						</a></q></p>

						<p><q cite="macfanatic.com"><a href="http://www.macfanatic.com/node/19">Forget the
						rest, this is the best! (...) I will never
						use another FTP client again.</a></q></p>
						
						<p><q cite="osxguide.com"><a href="http://www.osxguide.com/modules.php?op=modload&amp;name=News&amp;file=article&amp;sid=189&amp;mode=thread&amp;order=0&amp;thold=0">Cyberduck is getting some great acclaim, and deservedly so.
						</a></q></p>

						<p>Read more <a href=
						"./reviews.php">reviews here.</a></p>
					</div>
				</td>
			</tr>
		</table>
	</div>
</body>
</html>
§