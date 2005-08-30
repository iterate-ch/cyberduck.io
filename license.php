<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
  include "functions.php";
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta name="generator" content=
  "HTML Tidy for Mac OS X (vers 12 April 2005), see www.w3.org" />
  <?php echo(echoheader("~dkocher | cyberduck | license", ".")); ?>
<style type="text/css">
/*<![CDATA[*/
 div.c3 {text-align: right}
 div.c2 {text-align: left}
 div.c1 {text-align: center}
/*]]>*/
</style>
</head>

<body id="license">
  <div class="standard" align="center">
    <table border="0" cellpadding="5" cellspacing="5" width="700">
      <tr>
        <td class="box-solid" width="150" valign="middle">
          <div class="c1">
            <img src="img/cyberduck.icon.png" width="128" height=
            "128" alt="Cyberduck" border="0" />
          </div>
        </td>

        <td colspan="2" class="box-solid">
          <div class="underline">
            <?php echo(echomenu(".."));?>
          </div><br />
          <?php echo(echotitle());?>

          <div class="c2">
            <?php echo(echosubmenu("."));?>
          </div>
        </td>
      </tr>

      <tr>
        <td width="150"> </td>

        <td colspan="2" class="box-dash">
          <p>Copyright (c) 2004 David Kocher. All rights
          reserved.</p>

          <p>This program is free software; you can redistribute it
          and/or modify it under the terms of the <a href=
          "License.txt">GNU General Public License</a> as published
          by the Free Software Foundation; either version 2 of the
          License, or (at your option) any later version.</p>

          <p>This program is distributed in the hope that it will
          be useful, but WITHOUT ANY WARRANTY; without even the
          implied warranty of MERCHANTABILITY or FITNESS FOR A
          PARTICULAR PURPOSE. See the GNU General Public License
          for more details.</p>
        </td>
      </tr>

		<?php echo(echogoogle());?>

      <tr>
        <td width="150">
          <div class="c1">
            <img src="./img/gnu.jpg" alt="GNU GPL Software" border=
            "0" />
          </div>
        </td>

        <td colspan="2" valign="top" class="box-dash">This products
        includes software developed by
        <strong>sshtools.com</strong> (<a href=
        "http://www.sshtools.com">http://www.sshtools.com</a>),
        <strong>enterprisedt</strong> (<a href=
        "http://www.enterprisedt.com">http://www.enterprisedt.com</a>)
        and the <strong>Apache Software Foundation</strong>
        (<a href=
        "http://jakarta.apache.org">http://jakarta.apache.org</a>).</td>
      </tr>

      <tr>
        <td colspan="3">
          <div class="c3">
            <a href=
            "http://validator.w3.org/check/referer">Validate</a>,
            $Date$
          </div>
        </td>
      </tr>
    </table>
  </div>
</body>
</html>
