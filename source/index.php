<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
  include "../functions.php";
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta name="generator" content="HTML Tidy for Mac OS X (vers 1st December 2004), see www.w3.org" /><?php echo(echoheader("..")); ?>

	<title><?php echo(echotitle("Source Code")); ?></title>
</head>

<body id="source">
	<div class="header">
		<?php echo(echologo(".."));?><?php echo(echocaption(".."));?><?php echo(echosubmenu(".."));?>
	</div>

	<div class="content">
		<table cellpadding="0" cellspacing="5" width="100%">
			<tr>
				<td width="150" valign="middle" class="box-solid">
					<div align="center">
						<img src="../img/gnu.png" alt="Java Source" border="0" /><br />
					</div>
				</td>

				<td colspan="2" valign="top" class="box-solid">
					<p>Source code is available licenced unter the <a class="ext" href="http://creativecommons.org/licenses/GPL/2.0/">GNU General Public Licence</a>. You can browse the SVN Repository <a class="ext" href="http://trac.cyberduck.ch/browser/">here</a>. The current unstable version can be checked out from the SVN repository <i>(You can get Subversion for Mac OS X e.g. from <a href="http://www.codingmonkeys.de/mbo/">Martin Ott's page</a>.)</i> with:</p>

					<p><tt>svn co http://svn.cyberduck.ch/trunk cyberduck</tt></p>
					<p>To compile everything, type <tt>make</tt> but make sure to install <a class="ext" href="http://jakarta.apache.org/ant">Ant</a> and <a class="ext" href="http://developer.apple.com/tools/macosxtools.html">xcodebuild</a> first. For more details, see the <a class="ext" href="http://svn.cyberduck.ch/trunk/build/BUILD">build instructions</a>.</p>
					<p><small>This product includes software developed by <strong>Christian Plattner</strong> (<a class="ext" href="http://www.ganymed.ethz.ch/ssh2/">Ganymed</a>),
					<strong>enterprisedt</strong> (<a class="ext" href="http://www.enterprisedt.com">enterprisedt.com</a>) and the <strong>Apache Software Foundation</strong> (<a class=
					"ext" href="http://jakarta.apache.org">jakarta.apache.org</a>), <strong>James Murty</strong> (<a class="ext" href="http://jets3t.s3.amazonaws.com/index.html">jetS3t</a>), <strong>Christopher Forsythe et al.</strong> (<a class="ext" href=
					"http://growl.info/">growl.info</a>), <strong>Wade Tregaskis</strong> (<a class="ext" href="http://sf.net/projects/keychain">Keychain Framework</a>),
					<strong>M. Uli Kusterer</strong> (<a class="ext" href="http://zathras.de/">UKCrashReporter and UKPrefsPanel</a>), <strong>Greg Guerin</strong> (<a class="ext" href=
					"http://www.amug.org/~glguerin/sw/#macbinary">MacBinary Toolkit</a>), <strong>Andy Matuschak</strong> (<a class="ext" href=
					"http://www.andymatuschak.org/pages/sparkle">Sparkle</a>), <strong>Kurt Revis</strong> (<a class="ext" href="http://www.snoize.com/">SNDisclosableView</a>), <strong>Shaun
					Wexler</strong> (<a href="http://www.macfoh.com/">SKWSegmentedControl</a>),</small></p>
					<p><a class="ext" href="http://www.jetbrains.com/">Jetbrains</a> contributed a free license
					of their great <a class="ext" href="http://www.jetbrains.com/idea">IDE</a> to this project.</p>
					<p><a href="http://www.jetbrains.com/idea/">

<a href="http://www.jetbrains.com/idea/features/other.html" style="display:block; background:#fff url(http://www.jetbrains.com/idea/opensource/img/banners/idea468x60_white.gif) no-repeat 10px 50%; border:solid 1px #0D3A9E; margin:0;padding:0;text-decoration:none;text-indent:0;letter-spacing:-0.001em; width:466px; height:58px" alt="Professional Java IDE with advanced. Ant script editing &amp; build running" title="Professional Java IDE with advanced. Ant script editing &amp; build running"><span style="margin:0 0 0 205px;padding:18px 0 2px 0; line-height:13px;font-size:13px; cursor:pointer; background-image:none;border:0;display:block; width:255px; color:#0D3A9E; font-family:trebuchet ms,arial,sans-serif;">Professional Java IDE with advanced.<br/>Ant script editing &amp; build running</span></a>
				</td>
			</tr>

			<tr>
				<td class="box-solid" valign="top" width="150">
					<p><strong>Version 3</strong><br />
				</td>
				<td colspan="2" class="box-solid">
					<ul>
						<li><strong><a href="http://svn.cyberduck.ch/branches/release-3-2/">3.2</a> ()</strong> <em>Apr-24-2009</em><br />
						<a href="http://update.cyberduck.ch/src/cyberduck-src-3.2.tar.gz">cyberduck-src-3.2.tar.gz</a></li>
					</ul>
					<ul>
						<li><strong><a href="http://svn.cyberduck.ch/branches/release-3-1-2/">3.1.2</a> (4500)</strong> <em>Feb-01-2009</em><br />
						<a href="http://update.cyberduck.ch/src/cyberduck-src-3.1.2.tar.gz">cyberduck-src-3.1.2.tar.gz</a></li>
					</ul>
					<ul>
						<li><strong><a href="http://svn.cyberduck.ch/branches/release-3-1-1/">3.1.1</a> (4457)</strong> <em>Jan-10-2009</em><br />
						<a href="http://update.cyberduck.ch/src/cyberduck-src-3.1.1.tar.gz">cyberduck-src-3.1.1.tar.gz</a></li>
					</ul>
					<ul>
						<li><strong><a href="http://svn.cyberduck.ch/branches/release-3-1/">3.1</a> (4448)</strong> <em>Jan-08-2009</em><br />
						<a href="http://update.cyberduck.ch/src/cyberduck-src-3.1.tar.gz">cyberduck-src-3.1.tar.gz</a></li>
					</ul>

					<ul>
						<li><strong><a href="http://svn.cyberduck.ch/branches/release-3-0-3/">3.0.3</a> (4205)</strong> <em>Okt-20-2008</em><br />
						<a href="http://update.cyberduck.ch/src/cyberduck-src-3.0.3.tar.gz">cyberduck-src-3.0.3.tar.gz</a></li>
					</ul>

					<ul>
						<li><strong><a href="http://svn.cyberduck.ch/branches/release-3-0-2/">3.0.2</a> (4160)</strong> <em>Aug-10-2008</em><br />
						<a href="http://update.cyberduck.ch/src/cyberduck-src-3.0.2.tar.gz">cyberduck-src-3.0.2.tar.gz</a></li>
					</ul>

					<ul>
						<li><strong><a href="http://svn.cyberduck.ch/branches/release-3-0-1/">3.0.1</a> (3999)</strong> <em>May-18-2008</em><br />
						<a href="http://update.cyberduck.ch/src/cyberduck-src-3.0.1.tar.gz">cyberduck-src-3.0.1.tar.gz</a></li>
					</ul>

					<ul>
						<li><strong><a href="http://svn.cyberduck.ch/branches/release-3-0/">3.0</a> (3966)</strong> <em>May-14-2008</em><br />
						<a href="http://update.cyberduck.ch/src/cyberduck-src-3.0.tar.gz">cyberduck-src-3.0.tar.gz</a></li>
					</ul>
				</td>
			</tr>

			<tr>
				<td class="box-solid" valign="top" width="150">
					<p><strong>Version 2.8</strong><br />
				</td>
				<td colspan="2" class="box-solid">
					<ul>
						<li><strong><a href="http://svn.cyberduck.ch/branches/release-2-8-5/">2.8.5</a> (3611)</strong> <em>Apr-07-2008</em><br />
						<a href="http://update.cyberduck.ch/src/cyberduck-src-2.8.5.tar.gz">cyberduck-src-2.8.5.tar.gz</a></li>
					</ul>

					<ul>
						<li><strong><a href="http://svn.cyberduck.ch/branches/release-2-8-4/">2.8.4</a> (3470)</strong> <em>Jan-25-2008</em><br />
						<a href="http://update.cyberduck.ch/src/cyberduck-src-2.8.4.tar.gz">cyberduck-src-2.8.4.tar.gz</a></li>
					</ul>

					<ul>
						<li><strong><a href="http://svn.cyberduck.ch/branches/release-2-8-2/">2.8.3</a> (3430)</strong> <em>Jan-14-2008</em><br />
						<a href="http://update.cyberduck.ch/src/cyberduck-src-2.8.3.tar.gz">cyberduck-src-2.8.3.tar.gz</a></li>
					</ul>

					<ul>
						<li><strong><a href="http://svn.cyberduck.ch/branches/release-2-8-2/">2.8.2</a> (3346)</strong> <em>Dec-11-2007</em><br />
						<a href="http://update.cyberduck.ch/src/cyberduck-src-2.8.2.tar.gz">cyberduck-src-2.8.2.tar.gz</a></li>
					</ul>

					<ul>
						<li><strong><a href="http://svn.cyberduck.ch/branches/release-2-8-1/">2.8.1</a> (3290)</strong> <em>Nov-17-2007</em><br />
						<a href="http://update.cyberduck.ch/src/cyberduck-src-2.8.1.tar.gz">cyberduck-src-2.8.1.tar.gz</a></li>
					</ul>

					<ul>
						<li><strong><a href="http://svn.cyberduck.ch/branches/release-2-8/">2.8</a> (3257)</strong> <em>Sep-10-2007</em><br />
						<a href="http://update.cyberduck.ch/src/cyberduck-src-2.8.tar.gz">cyberduck-src-2.8.tar.gz</a></li>
					</ul>
				</td>
			</tr>

			<tr>
				<td class="box-solid" valign="top" width="150">
					<p><strong>Version 2.7</strong><br />
				</td>

				<td colspan="2" class="box-solid">
					<ul>
						<li><strong><a href="http://svn.cyberduck.ch/branches/release-2-7-3/">2.7.3</a> (2838)</strong> <em>Feb-12-2007</em><br />
						<a href="http://update.cyberduck.ch/src/cyberduck-src-2.7.3.tar.gz">cyberduck-src-2.7.3.tar.gz</a></li>
					</ul>

					<ul>
						<li><strong><a href="http://svn.cyberduck.ch/branches/release-2-7-2/">2.7.2</a> (2750)</strong> <em>Jan-15-2007</em><br />
						<a href="http://update.cyberduck.ch/src/cyberduck-src-2.7.2.tar.gz">cyberduck-src-2.7.2.tar.gz</a></li>
					</ul>

					<ul>
						<li><strong><a href="http://svn.cyberduck.ch/branches/release-2-7-1/">2.7.1</a> (2608)</strong> <em>Nov-29-2006</em><br />
						<a href="http://update.cyberduck.ch/src/cyberduck-src-2.7.1.tar.gz">cyberduck-src-2.7.1.tar.gz</a></li>
					</ul>

					<ul>
						<li><strong><a href="http://svn.cyberduck.ch/branches/release-2-7/">2.7</a> (2600)</strong> <em>Nov-25-2006</em><br />
						<a href="http://update.cyberduck.ch/src/cyberduck-src-2.7.tar.gz">cyberduck-src-2.7.tar.gz</a></li>
					</ul>
				</td>
			</tr>

			<tr>
				<td class="box-solid" valign="top" width="150">
					<p><strong>Version 2.6</strong><br />
				</td>

				<td colspan="2" class="box-solid">
					<ul>
						<li><strong><a href="http://svn.cyberduck.ch/branches/release-2-6-2/">2.6.2</a> (2396)</strong> <em>Sep-10-2006</em><br />
						<a href="http://update.cyberduck.ch/src/cyberduck-src-2.6.2.tar.gz">cyberduck-src-2.6.2.tar.gz</a></li>
					</ul>

					<ul>
						<li><strong><a href="http://svn.cyberduck.ch/branches/release-2-6-1/">2.6.1</a> (2376)</strong> <em>Aug-11-2006</em><br />
						<a href="http://update.cyberduck.ch/src/cyberduck-src-2.6.1.tar.gz">cyberduck-src-2.6.1.tar.gz</a></li>
					</ul>

					<ul>
						<li><strong><a href="http://svn.cyberduck.ch/branches/release-2-6/">2.6</a> (2315)</strong> <em>Jun-07-2006</em><br />
						<a href="http://update.cyberduck.ch/src/cyberduck-src-2.6.tar.gz">cyberduck-src-2.6.tar.gz</a></li>
					</ul>
				</td>
			</tr>

			<tr>
				<td class="box-solid" valign="top" width="150">
					<p><strong>Version 2.5</strong><br />
				</td>

				<td colspan="2" class="box-solid">
					<ul>
						<li><strong>2.5.5 (1976)</strong> <em>Mar-01-2006</em><br />
						<a href="http://update.cyberduck.ch/src/cyberduck-src-2.5.5.tar.gz">cyberduck-src-2.5.5.tar.gz</a></li>
					</ul>

					<ul>
						<li><strong>2.5.4</strong> <em>Jan-20-2006</em><br />
						<a href="http://update.cyberduck.ch/src/cyberduck-src-2.5.4.tar.gz">cyberduck-src-2.5.4.tar.gz</a></li>
					</ul>

					<ul>
						<li><strong>2.5.3 (1844)</strong> <em>Jan-03-2006</em><br />
						<a href="http://update.cyberduck.ch/src/cyberduck-src-2.5.3.tar.gz">cyberduck-src-2.5.3.tar.gz</a></li>
					</ul>

					<ul>
						<li><strong>2.5.2</strong> <em>Nov-18-2005</em><br />
						<a href="http://update.cyberduck.ch/src/cyberduck-src-2.5.2.tar.gz">cyberduck-src-2.5.2.tar.gz</a></li>
					</ul>

					<ul>
						<li><strong>2.5.1</strong> <em>Nov-14-2005</em><br />
						<a href="http://update.cyberduck.ch/src/cyberduck-src-2.5.1.tar.gz">cyberduck-src-2.5.1.tar.gz</a></li>
					</ul>

					<ul>
						<li><strong>2.5</strong> <em>Aug-29-2005</em><br />
						<a href="http://update.cyberduck.ch/src/cyberduck-src-2.5.tar.gz">cyberduck-src-2.5.tar.gz</a></li>
					</ul>
				</td>
			</tr>

			<tr>
				<td class="box-solid" valign="top" width="150">
					<p><strong>Version 2.4</strong><br />
				</td>

				<td colspan="2" class="box-solid">
					<ul>
						<li><strong>2.4.6</strong> <em>May-30-2005</em><br />
						<a href="http://update.cyberduck.ch/src/cyberduck-src-2.4.6.tar.gz">cyberduck-src-2.4.6.tar.gz</a></li>
					</ul>

					<ul>
						<li><strong>2.4.5</strong> <em>May-04-2005</em><br />
						<a href="http://update.cyberduck.ch/src/cyberduck-src-2.4.5.tar.gz">cyberduck-src-2.4.5.tar.gz</a></li>
					</ul>

					<ul>
						<li><strong>2.4.4</strong> <em>April-27-2005</em><br />
						<a href="http://update.cyberduck.ch/src/cyberduck-src-2.4.4.tar.gz">cyberduck-src-2.4.4.tar.gz</a></li>
					</ul>

					<ul>
						<li><strong>2.4.3</strong> <em>April-11-2005</em><br />
						<a href="http://update.cyberduck.ch/src/cyberduck-src-2.4.3.tar.gz">cyberduck-src-2.4.3.tar.gz</a></li>
					</ul>

					<ul>
						<li><strong>2.4</strong> <em>March-28-2005</em><br />
						<a href="http://update.cyberduck.ch/src/cyberduck-src-2.4.tar.gz">cyberduck-src-2.4.tar.gz</a></li>
					</ul>
				</td>
			</tr>

			<tr>
				<td class="box-solid" valign="top" width="150">
					<p><strong>Version 2.3</strong><br />
				</td>

				<td colspan="2" class="box-solid">
					<ul>
						<li><strong>2.3.3</strong> <em>August-09-2004</em><br />
						<a href="http://update.cyberduck.ch/src/cyberduck-src-2.3.3.tar.gz">cyberduck-src-2.3.3.tar.gz</a></li>
					</ul>

					<ul>
						<li><strong>2.3.2</strong> <em>August-05-2004</em><br />
						<a href="http://update.cyberduck.ch/src/cyberduck-src-2.3.2.tar.gz">cyberduck-src-2.3.2.tar.gz</a></li>
					</ul>

					<ul>
						<li><strong>2.3.1</strong> <em>June-15-2004</em><br />
						<a href="http://update.cyberduck.ch/src/cyberduck-src-2.3.1.tar.gz">cyberduck-src-2.3.1.tar.gz</a></li>
					</ul>

					<ul>
						<li><strong>2.3</strong> <em>May-15-2004</em><br />
						<a href="http://update.cyberduck.ch/src/cyberduck-src-2.3.tar.gz">cyberduck-src-2.3.tar.gz</a></li>
					</ul>
				</td>
			</tr>

			<tr>
				<td class="box-solid" valign="top" width="150">
					<p><strong>Version 2.2</strong><br />
				</td>

				<td colspan="2" class="box-solid">
					<ul>
						<li><strong>2.2</strong> <em>Mar-06-2004</em><br />
						<a href="http://update.cyberduck.ch/src/cyberduck-src-2.2.tar.gz">cyberduck-src-2.2.tar.gz</a></li>
					</ul>
				</td>
			</tr>

			<tr>
				<td class="box-solid" valign="top" width="150">
					<p><strong>Version 2.1</strong><br />
				</td>

				<td colspan="2" class="box-solid">
					<ul>
						<li><strong>2.1</strong> <em>Dec-08-2003</em><br />
						<a href="http://update.cyberduck.ch/src/cyberduck-src-2.1.tar.gz">cyberduck-src-2.1.tar.gz</a></li>
					</ul>
				</td>
			</tr>

			<tr>
				<td colspan="3">
					<div class="footer">
						<a class="swissmade" href="http://www.swissmadesoftware.org"><img src="../img/sms-logo-small-footer.png" alt="swiss made software"></a><br />
						<a href="http://validator.w3.org/check/referer">Validate</a>, $Date$<br />
					</div>
				</td>
			</tr>
		</table>
	</div>
  <?php echo(echoanalytics("..")); ?>
</body>
</html>
