<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
        include "functions.php";
        ?>

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo(echoheader(".")); ?>

        <title><?php echo(echotitle("")); ?></title>
    </head>

    <body id="index">
        <div class="header">
            <?php echo(echologo("."));?><?php echo(echocaption("."));?><?php echo(echosubmenu("."));?>
        </div>

        <div class="content">
        <table cellpadding="0" cellspacing="5" width="100%">
        <tr>
            <td class="box-solid" colspan="2"><?php echo(echogoogle());?> </td>
        </tr>

        <tr>
        <td id="maincolumn" valign="top" class="box-solid">
            <p class="lead">
                <strong>Cyberduck is an <a class="ext" href="http://opensource.org/docs/definition.php">open
                    source</a> FTP, SFTP, <span class="version3">WebDAV</span>,
                    <a class="ext" href="http://www.rackspacecloud.com/cloud_hosting_products/files">Cloud Files</a>
                    and <span class="version3"><a class="ext" href="http://aws.amazon.com/s3">Amazon S3</a></span>
                    browser for the Mac.</strong>

                It features an easy to use interface with quickly accessible bookmarks. The
                outline view of the browser allows to browse large folder structures efficiently
                and you can quickly preview files with Quick Look. To edit files, a seamless integration
                with several external editors makes it easy to change content quickly. Both Amazon CloudFront
                and Cloud Files from Rackspace can be easily configured to distribute your content in the
                cloud. Many OS X core system technologies such as Spotlight, Bonjour and the Keychain
                are supported and a large number of translations makes you feel at home.
            </p>

            <p>
                If you need help, there is an <a href="./help/en/howto">introduction</a>, a list
                of <a href="./help/en/problems/">common problems</a> and a <a href="./help/en/faq">FAQ</a>.
                Please post any questions on the <a class="ext" href="http://forum.cyberduck.ch">forum</a>.

                This software is written by <a class="ext" href="http://sudo.ch/">David V. Kocher</a>.
                I appreciate any <a class="ext" href="mailto:%66%65%65%64%62%61%63%6B%40%63%79%62%65%72%64%75%63%6B%2E%63%68">feedback</a>
                you might have.

                For bug reports and feature suggestions you should issue
                a <a class="ext" href="http://trac.cyberduck.ch/newticket">new ticket</a> in
                the <a class="ext" href="http://trac.cyberduck.ch">issue tracker</a>.</p>

            <div id="screenshots">
                <div class="figure">
                    <a href="./img/browser-bookmarks.jpg"><img alt="Cyberduck Bookmarks" width="350px"
                                                               src="./img/browser-bookmarks-thumb.jpg"/></a>

                    <p>Integrated Bookmarks</p>
                </div>
                <div class="figure">
                    <a href="./img/browser.jpg"><img alt="Cyberduck Browser" width="350px" src="./img/browser-thumb.jpg"/></a>

                    <p>QuickLook Preview in Browser</p>
                </div>
            </div>

            <div id="features">
                <div class="feature">
                    <p><img src="./img/ftp.png" class="feature" alt=""/> <strong>Protocols</strong><br/>
                        FTP (File Transfer Protocol), FTP/TLS (FTP secured over SSL/TLS), SFTP (SSH Secure File Transfer), <span
                                class="version3"><a href="http://webdav.org" class="ext">WebDAV</a></span> (Web-based
                        Distributed Authoring and Versioning), <span class="version3"><a class="ext"
                                                                                         href="http://aws.amazon.com/s3">Amazon
                            S3</a></span> and <a class="ext" href="http://www.rackspacecloud.com/cloud_hosting_products/files">Rackspace Cloud Files</a>.
                    </p>

                    <p><img src="./img/column.png" class="feature" alt=""/> <strong>Browser</strong><br/>
                        Document based, list and outline view, caching, cut &amp; paste, drag &amp; drop and arbitrary character
                        encodings.</p>

                    <p><img src="./img/quicklook.png" class="feature" alt=""/> <strong class="version3">Quick Look</strong><br/>
                        Preview files like in Finder.app.</p>

                    <p><img src="./img/safari.png" class="feature" alt=""/> <strong class="version3">Web URL</strong><br/>
                        Quickly open the corresponding Web URL of a selected file in your web browser.</p>

                    <p><img src="./img/textmate.png" class="feature" alt=""/> <strong>External editors</strong><br/>
                        Seamless integration with external editors.
                        <a class="ext" href="http://www.codingmonkeys.de/subethaedit/">SubEthaEdit</a>,
                        <a class="ext" href="http://www.barebones.com/products/bbedit/">BBEdit</a>,
                        <a class="ext" href="http://www.barebones.com/products/textwrangler">TextWrangler</a>,
                        <a class="ext" href="http://macromates.com/">TextMate</a>,
                        <a class="ext" href="http://www.tex-edit.com/">Text-Edit Plus</a>,
                        <a class="ext" href="http://mimikaki.net/">mi</a>,
                        <a class="ext" href="http://smultron.sourceforge.net/">Smultron</a>,
                        <a class="ext" href="http://macrabbit.com/cssedit/">CSSEdit</a>,
                        <a class="ext" href="http://www.aynimac.com/">CotEditor</a>,
                        <a class="ext" href="http://www.talacia.com/">Tag</a>,
                        <a class="ext" href="http://skti.org/skedit/">skEdit</a> and
                        <a class="ext" href="http://www.hogbaysoftware.com/products/writeroom">WriteRoom</a> and
                        <a class="ext" href="http://code.google.com/p/macvim/">MacVim</a> and
                        <a class="ext" href="http://forgedit.com/">ForgEdit</a> and
                        <a class="ext" href="http://www.artman21.net/product/JeditX/">JeditX</a>,
                        <a class="ext" href="http://www.optima-system.com/pagespinner/">PageSpinner</a>.</p>

                    <p><img src="./img/international16.png" class="feature" alt=""/> <strong>International</strong><br/>
                        Speaks your
                        language. <!--Available in English, Czech, Dutch, Finnish, French, German, Italian, Japanese, Korean, Norwegian, Portuguese, Slovak, Spanish, Chinese (Traditional &amp; Simplified Han), Russian, Swedish, Hungarian, Danish, Polish, Indonesian, Catalan, Welsh, Thai, Turkish, Hebrew, Latvian and Greek.<br />-->
                        English, čeština, Nederlands, Suomi, Français, Deutsch, Italiano, 日本語, 한국어, Norsk, Slovenčina, Español,
                        Português (do Brasil), Português (Europeu), 中文 (简体), 正體中文 (繁體), Русский, Svenska, Dansk, Język Polski,
                        Magyar, Bahasa Indonesia, Català, Cymraeg, ภาษาไทย, Türkçe, Ivrit, Latviešu Valoda &amp; Ελληνικά</p>

                    <p><img src="./img/keychain.png" class="feature" alt=""/> <strong>Keychain</strong><br/>
                        All passwords are stored in the system <a class="ext"
                                                                  href="http://www.apple.com/macosx/features/security/">Keychain</a>
                        as Internet passwords available also to third party applications.</p>

                    <p><img src="./img/gnu.png" class="feature" alt=""/> <strong>Open Source</strong><br/>
                        Licensed under the GPL.</p>
                </div>

                <div class="feature">
                    <p><img src="./img/document.png" class="feature" alt=""/> <strong>Bookmarking</strong><br/>
                        Powerful bookmarking. Drag and drop bookmarks to the Finder.app and drop files onto bookmarks to upload.
                    </p>

                    <p><img src="./img/history.png" class=
                            "feature" alt=""/>
                        <strong>History</strong><br/>
                        History of visited servers.</p>

                    <p><img src="./img/rendezvous.png" class="feature" alt=""/> <strong>Bonjour</strong><br/>
                        Auto discovery of services on the local network</p>

                    <p><img src="./img/spotlight.png" class="feature" alt=""/> <strong>Spotlight</strong><br/>
                        <a class="ext" href="http://www.apple.com/macosx/features/spotlight/">Spotlight</a> Importer for
                        bookmark files.</p>

                    <p><img src="./img/finder.png" class="feature" alt=""/> <strong>Integration</strong><br/>
                        Use Cyberduck as default system wide protocol handler for FTP and SFTP. Open .inetloc files and .duck
                        bookmark files from the Finder.</p>

                    <p><img src="./img/queue.png" class="feature" alt=""/> <strong>Advanced Transfers</strong><br/>
                        Limit the number of concurrent transfers and filter files using a regular expression. Resume both
                        interrupted download and uploads. Recursively transfer directories.</p>

                    <p><img src="./img/sync.png" class="feature" alt=""/> <strong>Synchronization</strong><br/>
                        Synchronize local with remote directories (and vice versa) and get a preview of affected files before
                        any action is taken.</p>

                    <p><img src="./img/applescript.png" class="feature" alt=""/> <strong>AppleScript</strong><br/>
                        Full AppleScript integration. See the <a class="ext"
                                                                 href="http://svn.cyberduck.ch/trunk/AppleScript%20Samples/">sample
                            scripts</a> (included on the disk image).</p>

                    <p><img src="./img/growl.png" class="feature" alt=""/> <strong>Growl</strong><br/>
                        Support for Growl, the global notification system. See <a class="ext" href="http://growl.info/">growl.info</a>.
                    </p>

                    <p><img src="./img/advanced.png" class="feature" alt=""/> <strong class="version3">Activity
                        Window</strong><br/>
                        Overview over all pending background tasks.</p>
                </div>

                <div class="feature">
                    <p><img src="./img/protocol.png" class="feature" alt=""/> <strong>SSH</strong><br/>
                        Supports Public key authentication, Keyboard Interactive (PAM) Authentication, Support for various
                        encryption ciphers (3DES, Blowfish, Twofish, AES, CAST) and Authentication algorithms (MD5, SHA1).</p>

                    <p><img src="./img/protocol.png" class="feature" alt=""/> <strong>SCP</strong><br/>
                        Transfer files using Secure Copy (SCP).</p>

                    <p><img src="./img/s3.png" class="feature" alt=""/> <strong class="version3">Amazon S3</strong><br/>
                        Browse <a class="ext" href="http://aws.amazon.com/s3">Amazon Simple Storage Service</a> the way you are
                        used to with other file systems.</p>

                    <p><img src="./img/s3.png" class="feature" alt=""/> <strong class="version3">Amazon CloudFront</strong><br/>
                        Manage <a href="http://aws.amazon.com/cloudfront/" class="ext">CloudFront</a> distributions.</p>

                    <p><img src="./img/protocol.png" class="feature" alt=""/> <strong class="version3">WebDAV</strong><br/>
                        With WebDAV you can access your <a class="ext" href="http://www.apple.com/mobileme/features/idisk.html">iDisk</a>,
                        GMX <a class="ext" href="http://faq.gmx.de/datenverwaltung/mc/index.html">Mediacenter</a>, Microsoft
                        SharePoint or any other <a href="http://webdav.org" class="ext">WebDAV</a> compliant server. Supports
                        Basic, Digest and NTLM Authentication.</p>

                    <p><img src="./img/cf.png" class="feature" alt=""/> <strong class="version3">Rackspace Cloud Files</strong><br/>
                        Manage your Rackspace <a class="ext" href="http://www.rackspacecloud.com/cloud_hosting_products/files">Cloud Files</a>
                        storage including the configuration of your <a href="http://www.rackspacecloud.com/cloud_hosting_products/files/limelight">Limelight Content Distribution</a>.</p>

                    <p><img src="./img/permissions.png" class="feature" alt=""/> <strong>Permissions</strong><br/>
                        Modify permissions on multiple files and recursivly.</p>

                    <p><img src="./img/archive.png" class="feature" alt=""/><strong>Archives</strong><br/>Archive and expand TAR
                        and ZIP files remotely over SSH.</p>
                </div>
            </div>

            <div style="clear:both;"></div>

            <p>
                <small>Copyright (c) 2002-2009 David V. Kocher. All rights reserved. This program is free software; you can
                    redistribute it and/or modify it under the terms of the <a href=
                            "http://creativecommons.org/licenses/GPL/2.0/">GNU General Public License</a> as published by the
                    Free Software Foundation; either version 2 of the License, or (at your option)
                    any later version.<em>This program is distributed in the hope that it will be useful, but WITHOUT ANY
                        WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
                        A PARTICULAR PURPOSE. See the GNU General Public License for more details.</em></small>
            </p>

            <p>
                <small>This product includes software developed by
					<strong>Duncan McGregor et al.</strong> (<a class="ext" href="https://rococoa.dev.java.net/">Rococoa</a>),
					<strong>Timothy Wall et al.</strong> (<a class="ext" href="https://jna.dev.java.net/">JNA</a>),
					<strong>Christian Plattner</strong> (<a class="ext" href="http://www.ganymed.ethz.ch/ssh2/">Ganymed</a>),
                    <strong>enterprisedt</strong> (<a class="ext" href="http://www.enterprisedt.com">enterprisedt.com</a>) and
                    the <strong>Apache Software Foundation</strong> (<a class=
                            "ext" href="http://jakarta.apache.org">jakarta.apache.org</a>), <strong>James Murty</strong> (<a
                            class="ext" href="http://jets3t.s3.amazonaws.com/index.html">jetS3t</a>), <strong>Christopher
                        Forsythe et al.</strong> (<a class="ext" href=
                            "http://growl.info/">growl.info</a>), <strong>M. Uli Kusterer</strong> (<a class="ext" href="http://zathras.de/">UKCrashReporter and
                        UKPrefsPanel</a>), <strong>Greg Guerin</strong> (<a class="ext" href=
                            "http://www.amug.org/~glguerin/sw/#macbinary">MacBinary Toolkit</a>), <strong>Andy
                        Matuschak</strong> (<a class="ext" href=
                            "http://www.andymatuschak.org/pages/sparkle">Sparkle</a>), <strong>Kurt Revis</strong> (<a class="ext" href="http://www.snoize.com/">SNDisclosableView</a>), <strong>Shaun Wexler</strong> (<a class="ext" href="http://www.macfoh.com/">SKWSegmentedControl</a>), <strong>Brian Amerige</strong> (<a class="ext" href="http://extendmac.com/EMKeychain/">EMKeychain</a>), <strong>Lucas Newman</strong> (<a class="ext" href="http://www.aquaticmac.com/">AquaticPrime</a>)
                </small>
            </p>
        </td>

        <td id="sidebar" valign="top">
            <div class="box-solid">
                <table cellpadding="0" cellspacing="0">
                    <tr>
                        <td valign="top" class="box-filled">
                            <p>
                                <strong>3.2.1</strong> <em>(Jul-14-2009)</em><br/>
                                <a href="./Cyberduck-3.2.1.dmg">Cyberduck-3.2.1.dmg</a><br/>(<i>Intel/PPC Mac OS X 10.4 or later
                                required</i>.)
                            </p>
							<p>
								<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
								<input type="hidden" name="cmd" value="_s-xclick">
								<input type="hidden" name="hosted_button_id" value="4914397">
								<input type="image" src="https://www.paypal.com/en_US/CH/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
								<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
								</form>
							</p>
                            <p>
                                <strong>3.3b4</strong> <em>(Oct-05-2009)</em><br/>
                                <a href="http://update.cyberduck.ch/beta/Cyberduck-3.3b4.zip">Cyberduck-3.3b4.zip</a>
								<br/>(<i>Mac OS X 10.6 Snow Leopard compatible beta. Mac OS X 10.5 or later required</i>.)<br />
                            </p>
                        </td>
                    </tr>
                </table>
                <p>Release notes and previous releases are available <a href="changelog">here</a>.</p>

                <p>
                    <small>There are also <a href="http://update.cyberduck.ch/nightly/">nightly builds available</a> featuring
                        the latest bugfixes and enhancements.
                    </small>
                </p>
                <p>
                    <small>Downloads hosted by the <a href="http://cacheboy.net/">Cacheboy CDN: <i>Open Source Content
                        Delivery</i></a>.
                        Additional mirrors provided by <a href="http://www.icu.uzh.ch/">ICU (University of
                            Zurich)</a> and <a href="http://mirror.ethz.ch/cyberduck/">VIS (ETH
                            Zurich)</a>. Thanks to everyone involved!
                    </small>
                </p>
            </div>

            <div class="box-filled">
                <p><strong>Donations.</strong> <em><a class="ext" href="http://www.gnu.org/philosophy/free-sw.html">Free
                    software</a> is a matter of the users freedom to run, copy,
                    distribute, study, change and improve the software. If you find this program useful, please consider making
                    a <a href="./donate">donation</a>. It will help to make Cyberduck
                    even better!</em></p>
            </div>

            <div class="box-filled">
                <p><img class="feature" src="./img/feed-icon-16x16.png" alt="feed"/> <strong>Blog.</strong> <a
                        href="http://sudo.ch/feed/">Subscribe</a> to the the developer's <a class=
                        "ext" href="http://sudo.ch/">blog</a> or follow <a href="http://twitter.com/davidkocher">me on twitter</a>.</p>
            </div>

            <div class="box-filled">
                <p><strong>Mailing List.</strong> You can subscribe to the <a
                        href="http://lists.cyberduck.ch/mailman/listinfo/cyberduck-news">Cyberduck-news</a> mailing list to get
                    a
                    notification when a new version is released.</p>

                <form method="post" action="http://lists.cyberduck.ch/mailman/subscribe/cyberduck-news">
                    <p><input id="mailinglist" type="text" name="email" value=""/> <input type="submit" name="email-button"
                                                                                          value="Subscribe"/></p>
                </form>
            </div>

            <div class="box-filled">
                <p><strong>Forum.</strong> Discuss anything related to Cyberduck in the forum hosted at <a class="ext"
                                                                                                           href="http://forum.cyberduck.ch">cocoaforge.com</a>
                </p>

                <div style="margin-top:-10px; margin-bottom:5px;" align="center">
                    <a href="http://forum.cyberduck.ch"><img width="128" src="./img/cocoaforge.png" alt="forum"/></a>
                </div>
            </div>

            <div class="box-filled">
                <p><a href="http://docs.blacktree.com/quicksilver/plug-ins/cyberduck"><img class="sidebar"
                                                                                           src="./img/quicksilver.png"
                                                                                           height="64" width="64"
                                                                                           alt="getquicksilver"/></a>
                    <strong>Quicksilver Module.</strong> Access Cyberduck bookmarks from within <a class="ext" href=
                            "http://docs.blacktree.com/quicksilver/plug-ins/cyberduck/">Quicksilver</a>.</p>

                <p><a href="http://growl.info"><img height="64" class="sidebar" src="./img/growlicon.png" alt="getgrowl"/></a>
                    <strong>Growl.</strong> You may also want to install <a class=
                            "ext" href="http://growl.info">Growl</a>, a global notification system Cyberduck supports.</p>
            </div>

            <div class="box-solid">
                <p><strong>Reviews.</strong> Cyberduck has been reviewed by many sites and got tremendous feedback over the last
                    years.</p>

                <blockquote>
                    “All the other FTP clients I've used have been hard to learn and are confusing, but I've never had to look
                    at the help file for Cyberduck”<br/>
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
                <p>Read more <a href="reviews">testimonials</a>!</p>
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
                    <a href="http://apple.com/universal/"><img src="./img/macosxuniversal20060109.png" alt="universal"/></a>
                </div>
            </div>
        </td>
        </tr>

        <tr>
            <td colspan="2">
                <div class="footer">
                    <a class="swissmade" href="http://www.swissmadesoftware.org"><img src="img/sms-logo-small-footer.png"
                                                                                      alt="swiss made software"></a><br/>
                    <a href="http://validator.w3.org/check/referer">Validate</a>, $Date: 2009-03-26 19:30:35 +0100 (Thu, 26 Mar
                    2009) $<br/>
                </div>
            </td>
        </tr>
        </table>
        </div>
        <?php echo(echoanalytics(".")); ?>
    </body>
</html>
