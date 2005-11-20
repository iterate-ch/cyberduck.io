<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
  include "functions.php";
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta name="generator" content=
  "HTML Tidy for Mac OS X (vers 12 April 2005), see www.w3.org" />
  <?php echo(echoheader(".")); ?>
<style type="text/css">
/*<![CDATA[*/
 div.c3 {text-align: right}
 div.c2 {text-align: left}
 div.c1 {text-align: center}
/*]]>*/
</style>
<title>Cyberduck | FTP for Mac OS X. | Features</title>
</head>

<body id="features">
<div class="header">
	<?php echo(echologo("."));?>
   <?php echo(echotitle("."));?>
   <?php echo(echosubmenu("."));?>
</div>
<div id="content">
<table border="0" cellpadding="5" cellspacing="5" width="100%">
      <tr>
        <td class="box-solid" valign="top"><strong>Browse SFTP and
        FTP servers</strong></td>

        <td colspan="2" valign="top" class="box-dash">
          <ul>
            <li>User friendly interface!</li>

            <li>Open multiple simultaneous connections</li>

            <li>Document based interface</li>

            <li>Support for various encodings</li>

            <li>Live filtering of directory listings</li>

            <li>Caching folder listings</li>

            <li>Move files</li>

            <li>Cut &amp; Paste files</li>

            <li>Create new files</li>

            <li>Rename files</li>

            <li>Delete files</li>
            <!--<li>SOCKS Proxy support</li>-->

            <li>Show hidden files</li>

            <li>Allow the selection of files in the browser by
            typing the filename</li>
          </ul>
        </td>
      </tr><?php echo(echogoogle());?>

      <tr>
        <td class="box-solid" valign="top">
        <strong>Localizations</strong></td>

        <td valign="top" colspan="2" class="box-dash"><em>English,
        Czech, Dutch, Finnish, French, German, Italian, Japanese,
        Korean, Norwegian, Portuguese, Slovak, Spanish, Chinese
        (Traditional and Simplified), Russian, Swedish, Hungarian,
        Danish, Polish, Indonesian and Catalan.</em> Many thanks to
        all <a href=
        "http://cvs.cyberduck.ch/*checkout*/cyberduck-cocoa/Credits.html?rev=HEAD&amp;content-type=text/html">
        contributors</a>!</td>
      </tr>

      <tr>
        <td class="box-solid" valign="top"><strong>Seamless
        integration with external editors</strong><br /></td>

        <td valign="top" colspan="2" class="box-dash">
          <a href=
          "http://www.codingmonkeys.de/subethaedit/">SubEthaEdit</a>,
          <a href=
          "http://www.barebones.com/products/bbedit/">BBEdit</a>,
          <a href=
          "http://www.barebones.com/products/textwrangler">TextWrangler</a>,
          <a href="http://www.tex-edit.com/">Text-Edit Plus</a>,
          <a href="http://macromates.com/">TextMate</a>, <a href=
          "http://mimikaki.net/">mi</a>, <a href=
          "http://smultron.sourceforge.net/">Smultron</a>, <a href=
          "http://www.artman21.net/product/JeditX/">JeditX</a>,
          <a href="http://macrabbit.com/cssedit/">CSSEdit</a>,
          <a href="http://www.aynimac.com/">CotEditor</a>, <a href=
          "http://www.talacia.com/">Tag</a>

          <div class="c1">
            <img src="./img/subethaedit.png" height="64" alt=
            "Subethaedit" border="0" /> <img src=
            "./img/textmate.png" height="64" alt="TextMate" border=
            "0" /> <img src="./img/bbedit.png" height="64" alt=
            "BBEdit" border="0" /> <img src=
            "./img/textwrangler.png" height="64" alt="Textwrangler"
            border="0" /> <img src="./img/cssedit.png" height="64"
            alt="CSSEdit" border="0" />
          </div>
        </td>
      </tr>

      <tr>
        <td class="box-solid" valign="top">
        <strong>Bookmarking</strong></td>

        <td valign="top" colspan="2" class="box-dash">
          <ul>
            <li>Drag and drop to save bookmark as a file</li>

            <li>Drag proxy icon in the window title bar to the
            Finder</li>

            <li>Drag proxy icon in the window title bar to the
            bookmark drawer</li>

            <li>Drop files onto bookmarks to upload to remote
            host</li>

            <li>Synchronize bookmarks with <a href=
            "http://www.apple.com/macosx/features/dotmacsync/">.Mac
            iDisk</a></li>

            <li><a href=
            "http://www.apple.com/macosx/features/spotlight/">Spotlight</a>
            Importer for bookmark files</li>
          </ul>

          <div class="c1">
            <img src="./img/spotlight.jpg" height="64" alt=
            "Spotlight" border="0" /> <img src="./img/document.jpg"
            height="64" alt="Document" border="0" /> <img src=
            "./img/idisk.jpg" height="64" alt="iDisk" border="0" />
          </div>
        </td>
      </tr>

      <tr>
        <td class="box-solid" valign="top"><strong>Supporting all
        major transfer protocols</strong></td>

        <td colspan="2" valign="top" class="box-dash">
          <ul>
            <li>FTP (File Transfer Protocol</li>

            <li>FTP/TLS (FTP secured over SSL/TLS)</li>

            <li>SFTP (SSH Secure File Transfer</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-solid" valign="top"><strong>Keychain
        support</strong></td>

        <td valign="top" colspan="2" class="box-dash">
          <ul>
            <li>All passwords are stored in the system <a href=
            "http://www.apple.com/macosx/features/security/">Keychain</a>
            as Internet passwords available also to third party
            applications</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-solid" valign="top"><strong>Secure file
        transfers with SFTP</strong></td>

        <td valign="top" colspan="2" class="box-dash">
          <ul>
            <li>Public key authentication</li>

            <li>Keyboard Interactive (PAM) Authentication</li>

            <li>Support for various encryption ciphers (3DES,
            Blowfish, Twofish, AES, CAST)</li>

            <li>Authentication algorithms (md5, sha1)</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-solid" valign="top">
        <strong>Transfers</strong></td>

        <td valign="top" colspan="2" class="box-dash">
          <ul>
            <li>Resume downloads (FTP and SFTP)</li>

            <li>Resume uploads (FTP and SFTP)</li>

            <li>Download folders (also <em>recursive</em>)</li>

            <li>Upload folders (also <em>recursive</em>)</li>

            <li>Drag and drop to transfer files (Finder &harr;
            Cyberduck)</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-solid" valign="top">
        <strong>Synchronize</strong></td>

        <td valign="top" colspan="2" class="box-dash">
          <ul>
            <li>Synchronize local with remote directories (and vice
            versa)</li>

            <li>Choose to download/upload missing files</li>

            <li>Get a preview of affected files before any action
            is taken</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-solid" valign="top"><strong>Modify
        permissions</strong></td>

        <td colspan="2" valign="top" class="box-dash">
          <ul>
            <li>Modify permissions on multiple files</li>

            <li>Modify permissions recursivly</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td class="box-solid" valign="top"><strong>Bonjour
        support</strong></td>

        <td valign="top" class="box-dash">
          <ul>
            <li>Auto discovery of services on the local
            network</li>
          </ul>
        </td>

        <td valign="middle">
          <div class="c1">
            <img src="./img/rendezvous.png" alt="Bonjour support"
            border="0" />
          </div>
        </td>
      </tr>

      <tr>
        <td class="box-solid" valign="top"><strong>AppleScript
        support</strong></td>

        <td valign="top" class="box-dash">
          <ul>
            <li>Full AppleScript integration. See the <a href=
            "http://cvs.cyberduck.ch/cyberduck-cocoa/AppleScript%20Samples/">
            sample scripts</a> (included on the disk image).</li>
          </ul>
        </td>

        <td valign="middle">
          <div class="c1">
            <img src="./img/applescript.jpg" height="64" alt=
            "Applescript" border="0" />
          </div>
        </td>
      </tr>

      <tr>
        <td class="box-solid" valign="top"><strong>Growl
        support</strong></td>

        <td valign="top" class="box-dash">
          <ul>
            <li>Support for growl, the global notification system
            for Mac OS X. See <a href=
            "http://growl.info/">growl.info</a> for more
            information.</li>
          </ul>
        </td>

        <td valign="middle">
          <div class="c1">
            <img src="./img/growl.png" height="64" alt="Growl"
            border="0" />
          </div>
        </td>
      </tr>

      <tr>
        <td class="box-solid" valign="top"><strong>Finder
        integration</strong></td>

        <td valign="top" class="box-dash">
          <ul>
            <li>Use as default system wide protocol handler;
            requires <a href=
            "http://www.rubicode.com/Software/RCDefaultApp">RCDefaultApp</a>.</li>

            <li>Opens .inetloc files from the Finder.</li>

            <li>Opens .duck bookmark files from the Finder.</li>
          </ul>
        </td>

        <td valign="middle">
          <div class="c1">
            <img src="./img/document.jpg" height="64" alt="Growl"
            border="0" />
          </div>
        </td>
      </tr>

      <tr>
        <td class="box-solid" valign="top"><strong>ASCII and
        binary FTP transfers</strong></td>

        <td valign="top" colspan="2" class="box-dash">
          <ul>
            <li>Convert line endings on the fly in ASCII
            transfers</li>

            <li>Choose from Auto, Binary or ASCII</li>
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
