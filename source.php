<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
  include "functions.php";
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta name="generator" content=
  "HTML Tidy for Mac OS X (vers 12 April 2005), see www.w3.org" />
  <?php echo(echoheader("~dkocher | cyberduck | source", ".")); ?>
<style type="text/css">
/*<![CDATA[*/
 div.c3 {text-align: right}
 div.c2 {text-align: left}
 div.c1 {text-align: center}
/*]]>*/
</style>
</head>

<body id="source">
  <div class="standard" align="center">
    <table border="0" cellpadding="5" cellspacing="5" width="700">
      <tr>
        <td class="box-solid" width="150" valign="middle">
          <div class="c1">
            <img src="img/cyberduck.icon.png" width="128" height=
            "128" alt="Cyberduck" border="0" />
          </div>
        </td>

        <td valign="bottom" colspan="2" class="box-solid">
			 <br />
			 <br />
          <?php echo(echotitle());?>
          <?php echo(echosubmenu("."));?>
        </td>
      </tr>

      <tr>
        <td width="150" valign="middle" class="box-filled">
          <div class="c1">
            <img src="./img/javafile.png" alt="Java Source" border=
            "0" /><br />
            <a href="http://intellij.com"><img src="./img/idea.gif"
            alt="intellij" border="0" /></a>
          </div>
        </td>

        <td colspan="2" valign="top" class="box-dash">
          <p>Source code is available licenced unter the <a href=
          "http://www.gnu.org/licenses/gpl.html">GNU General Public
          Licence</a>. You need <a href=
          "http://jakarta.apache.org/ant">Ant</a> and <a href=
          "http://developer.apple.com/tools/macosxtools.html">xcodebuild</a>
          to build.</p>

          <p>You can browse the CVS repository <a href=
          "http://cvs.cyberduck.ch/cyberduck-cocoa/">here</a>. (Warning: Slow
          connection)</p>

          <p>You can checkout the current unstable version from the
          CVS repository. When prompted for a password for
          anonymous, simply press <i>Enter</i>.</p>

          <p><tt>cvs
          -d:pserver:anonymous@cvs.cyberduck.ch:/srv/cvsroot
          login<br />
          cvs -z3
          -d:pserver:anonymous@cvs.cyberduck.ch:/srv/cvsroot co
          cyberduck-cocoa</tt></p>

          <p>To compile everything, type <tt>make</tt>. You&apos;ll find
          the application in the <i>build</i> folder. For more
          details, see the <a href=
          "http://cvs.cyberduck.ch/*checkout*/cyberduck-cocoa/build/BUILD?rev=HEAD&amp;content-type=text/plain">
          build instructions</a>.</p>

          <p>Dependencies:</p>

          <ul>
            <li>Growl.framework, <a href=
            "http://growl.info">growl.info</a></li>

            <li>Keychain.framework, <a href=
            "http://sf.net/projects/keychain">sf.net/projects/keychain</a></li>

            <li>DotMacKit.framework, <a href=
            "http://developer.apple.com/internet/dotmackit.html">developer.apple.com/internet/dotmackit.html</a></li>
          </ul>
        </td>
      </tr>

      <?php echo(echogoogle());?>

      <tr>
        <td class="box-filled" valign="top" width="150">
          <p><strong>Version 2.5</strong><br />
          (CVS Tag: release-2-5)</p>
        </td>

        <td colspan="2" class="box-dash">
	        <ul>
	          <li><strong>2.5.2</strong> <em>Nov-18-2005</em><br />
	          <a href=
	          "cyberduck-src-2.5.2.tar.gz">cyberduck-src-2.5.2.tar.gz</a></li>
	        </ul>

	        <ul>
	          <li><strong>2.5.1</strong> <em>Nov-14-2005</em><br />
	          <a href=
	          "cyberduck-src-2.5.1.tar.gz">cyberduck-src-2.5.1.tar.gz</a></li>
	        </ul>

          <ul>
            <li><strong>2.5</strong> <em>Aug-29-2005</em><br />
            <a href=
            "cyberduck-src-2.5.tar.gz">cyberduck-src-2.5.tar.gz</a></li>
          </ul>

          <ul>
            <li><strong>2.5b4</strong> <em>Aug-10-2005</em><br />
            <a href=
            "cyberduck-src-2.5beta4.tar.gz">cyberduck-src-2.5beta4.tar.gz</a></li>
          </ul>

          <ul>
            <li><strong>2.5b3</strong> <em>July-18-2005</em><br />
            <a href=
            "cyberduck-src-2.5beta3.tar.gz">cyberduck-src-2.5beta3.tar.gz</a></li>
          </ul>

          <ul>
            <li><strong>2.5b2</strong> <em>May-30-2005</em><br />
            <a href=
            "cyberduck-src-2.5beta2.tar.gz">cyberduck-src-2.5beta2.tar.gz</a></li>
          </ul>

          <ul>
            <li><strong>2.5b1</strong> <em>May-04-2005</em><br />
            <a href=
            "cyberduck-src-2.5beta1.tar.gz">cyberduck-src-2.5beta1.tar.gz</a></li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-filled" valign="top" width="150">
          <p><strong>Version 2.4</strong><br />
          (CVS Tag: release-2-4)</p>
        </td>

        <td colspan="2" class="box-dash">
          <ul>
            <li><strong>2.4.6</strong> <em>May-30-2005</em><br />
            <a href=
            "cyberduck-src-2.4.6.tar.gz">cyberduck-src-2.4.6.tar.gz</a></li>
          </ul>

          <ul>
            <li><strong>2.4.5</strong> <em>May-04-2005</em><br />
            <a href=
            "cyberduck-src-2.4.5.tar.gz">cyberduck-src-2.4.5.tar.gz</a></li>
          </ul>

          <ul>
            <li><strong>2.4.4</strong> <em>April-27-2005</em><br />
            <a href=
            "cyberduck-src-2.4.4.tar.gz">cyberduck-src-2.4.4.tar.gz</a></li>
          </ul>

          <ul>
            <li><strong>2.4.3</strong> <em>April-11-2005</em><br />
            <a href=
            "cyberduck-src-2.4.3.tar.gz">cyberduck-src-2.4.3.tar.gz</a></li>
          </ul>

          <ul>
            <li><strong>2.4</strong> <em>March-28-2005</em><br />
            <a href=
            "cyberduck-src-2.4.tar.gz">cyberduck-src-2.4.tar.gz</a></li>
          </ul>

          <ul>
            <li><strong>2.4b4</strong>
            <em>February-03-2005</em><br />
            <a href=
            "cyberduck-src-2.4beta4.tar.gz">cyberduck-src-2.4b4.tar.gz</a></li>
          </ul>

          <ul>
            <li><strong>2.4b3</strong>
            <em>January-29-2005</em><br />
            <a href=
            "cyberduck-src-2.4beta3.tar.gz">cyberduck-src-2.4b3.tar.gz</a></li>
          </ul>

          <ul>
            <li><strong>2.4b2</strong>
            <em>January-06-2005</em><br />
            <a href=
            "cyberduck-src-2.4beta2.tar.gz">cyberduck-src-2.4b2.tar.gz</a></li>
          </ul>

          <ul>
            <li><strong>2.4b1</strong>
            <em>December-28-2004</em><br />
            <a href=
            "cyberduck-src-2.4beta1.tar.gz">cyberduck-src-2.4beta1.tar.gz</a></li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-filled" valign="top" width="150">
          <p><strong>Version 2.3</strong><br />
          (CVS Tag: release-2-3)</p>
        </td>

        <td colspan="2" class="box-dash">
          <ul>
            <li><strong>2.3.3</strong>
            <em>August-09-2004</em><br />
            <a href=
            "cyberduck-src-2.3.3.tar.gz">cyberduck-src-2.3.3.tar.gz</a></li>
          </ul>

          <ul>
            <li><strong>2.3.2</strong>
            <em>August-05-2004</em><br />
            <a href=
            "cyberduck-src-2.3.2.tar.gz">cyberduck-src-2.3.2.tar.gz</a></li>
          </ul>

          <ul>
            <li><strong>2.3.1</strong> <em>June-15-2004</em><br />
            <a href=
            "cyberduck-src-2.3.1.tar.gz">cyberduck-src-2.3.1.tar.gz</a></li>
          </ul>

          <ul>
            <li><strong>2.3</strong> <em>May-15-2004</em><br />
            <a href=
            "cyberduck-src-2.3.tar.gz">cyberduck-src-2.3.tar.gz</a></li>
          </ul>

          <ul>
            <li><strong>2.3beta2</strong>
            <em>Apr-27-2004</em><br />
            <a href=
            "cyberduck-src-2.3beta2.tar.gz">cyberduck-src-2.3beta2.tar.gz</a></li>
          </ul>

          <ul>
            <li><strong>2.3beta1</strong>
            <em>Mar-09-2004</em><br />
            <a href=
            "cyberduck-src-2.3beta1.tar.gz">cyberduck-src-2.3beta1.tar.gz</a></li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-filled" valign="top" width="150">
          <p><strong>Version 2.2</strong><br />
          (CVS Tag: release-2-2)</p>
        </td>

        <td colspan="2" class="box-dash">
          <ul>
            <li><strong>2.2</strong> <em>Mar-06-2004</em><br />
            <a href=
            "cyberduck-src-2.2.tar.gz">cyberduck-src-2.2.tar.gz</a></li>
          </ul>

          <ul>
            <li><strong>2.2b6</strong> <em>Feb-25-2004</em><br />
            <a href=
            "cyberduck-src-2.2beta6.tar.gz">cyberduck-src-2.2beta6.tar.gz</a></li>
          </ul>

          <ul>
            <li><strong>2.2b5</strong> <em>Feb-12-2004</em><br />
            <a href=
            "cyberduck-src-2.2beta5.tar.gz">cyberduck-src-2.2beta5.tar.gz</a></li>
          </ul>

          <ul>
            <li><strong>2.2b4</strong> <em>Jan-31-2004</em><br />
            <a href=
            "cyberduck-src-2.2beta4.tar.gz">cyberduck-src-2.2beta4.tar.gz</a></li>
          </ul>

          <ul>
            <li><strong>2.2b3</strong> <em>Jan-25-2004</em><br />
            <a href=
            "cyberduck-src-2.2beta3.tar.gz">cyberduck-src-2.2beta3.tar.gz</a></li>
          </ul>

          <ul>
            <li><strong>2.2b2</strong> <em>Jan-24-2004</em><br />
            <a href=
            "cyberduck-src-2.2beta2.tar.gz">cyberduck-src-2.2beta2.tar.gz</a></li>
          </ul>

          <ul>
            <li><strong>2.2b1</strong> <em>Jan-22-2004</em><br />
            <a href=
            "cyberduck-src-2.2beta1.tar.gz">cyberduck-src-2.2beta1.tar.gz</a></li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-filled" valign="top" width="150">
          <p><strong>Version 2.1</strong><br />
          (CVS Tag: release-2-1)</p>
        </td>

        <td colspan="2" class="box-dash">
          <ul>
            <li><strong>2.1</strong> <em>Dec-08-2003</em><br />
            <a href=
            "cyberduck-src-2.1.tar.gz">cyberduck-src-2.1.tar.gz</a></li>
          </ul>

          <ul>
            <li><strong>2.1b5</strong> <em>Aug-15-2003</em><br />
            <a href=
            "cyberduck-src-2.1beta5.tar.gz">cyberduck-src-2.1beta5.tar.gz</a></li>
          </ul>

          <ul>
            <li><strong>2.1b4</strong> <em>Aug-17-2003</em><br />
            <a href=
            "cyberduck-src-2.1beta4.tar.gz">cyberduck-src-2.1beta4.tar.gz</a></li>
          </ul>

          <ul>
            <li><strong>2.1b3</strong> <em>Aug-22-2003</em><br />
            <a href=
            "cyberduck-src-2.1beta3.tar.gz">cyberduck-src-2.1beta3.tar.gz</a></li>
          </ul>

          <ul>
            <li><strong>2.1b2:</strong> <em>Aug-29-2003</em><br />
            <a href=
            "cyberduck-src-2.1beta2.tar.gz">cyberduck-src-2.1beta2.tar.gz</a></li>
          </ul>
        </td>
      </tr>

      <tr>
        <td colspan="3">
          <div class="c3">
            <a href=
            "http://validator.w3.org/check/referer">Validate</a>,
            $Date$
          </div>
          <div class="c3">
            <?php echo(echomenu(".."));?>
          </div>
        </td>
      </tr>
    </table>
  </div>
</body>
</html>
