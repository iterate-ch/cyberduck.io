<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
  include "../functions.php";
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta name="generator" content=
  "HTML Tidy for Mac OS X (vers 12 April 2005), see www.w3.org" />
  <?php echo(echoheader("..")); ?>

  <title>Cyberduck | FTP for Mac OS X. | Donate</title>
</head>

<body id="donate">
  <div class="header">
    <?php echo(echologo(".."));?><?php echo(echotitle(".."));?><?php echo(echosubmenu(".."));?>
  </div>

  <div class="content">
    <table border="0" cellpadding="5" cellspacing="5" width="100%">
      <tr>
        <td colspan="3" class="alert">Thank you very much for your
        support! It will help to make Cyberduck even better!</td>
      </tr>

      <tr>
        <td width="150" valign="middle" class="box-solid">
          <div align="center">
            <?php echo(echodonate(".."));?>
          </div>
        </td>

        <td colspan="2" class="box-solid">
          <p>Paypal accepts all major credit cards. You do not need to open an account.</p>
        </td>
      </tr>

      <tr>
        <td width="150" valign="middle" class="box-solid">
          <div align="center">
            <img src="../img/amazon.png" alt="amazon books" border=
            "0" />
          </div>
        </td>

        <td colspan="2" class="box-solid">
          <p>I have both a <a class="ext-link" href=
          "http://www.amazon.de/exec/obidos/registry/1QIQE5HKOS011/">
          amazon.de</a> and <a class="ext-link" href=
          "http://www.amazon.co.uk/exec/obidos/registry/1RN1NJU8CX7AW/">
          amazon.co.uk</a> wishlist.</p>
        </td>
      </tr>
    </table>
  </div>

  <div class="footer">
    <a href="http://validator.w3.org/check/referer">Validate</a>,
    $Date$<br />
    <?php echo(echomenu());?>
  </div>
</body>
</html>
