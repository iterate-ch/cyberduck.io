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

	<title><?php echo(echotitle("Donate")); ?></title>
</head>

<body id="donate">
  <div class="header">
    <?php echo(echologo(".."));?><?php echo(echocaption(".."));?><?php echo(echosubmenu(".."));?>
  </div>

  <div class="content">
	<table cellpadding="0" cellspacing="5" width="100%">
      <tr>
        <td width="150" valign="middle" class="box-solid">
          <div align="center">
            <img src="../img/amazon.png" alt="amazon books" border=
            "0" />
          </div>
        </td>

        <td colspan="2" class="box-solid">
          <p>
            If you don't like Paypal you can still support this
            project by providing me with some good book to read. I
            have a <a class="ext" href=
            "http://www.amazon.de/exec/obidos/registry/1QIQE5HKOS011/">
            amazon.de</a> wishlist.
          </p>
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <div class="footer">
			<a class="swissmade" href="http://www.swissmadesoftware.org"><img src="../img/sms-logo-small-footer.png" alt="swiss made software"></a><br />
            <a href=
            "http://validator.w3.org/check/referer">Validate</a>,
            $Date$<br />
          </div>
        </td>
      </tr>
    </table>
  </div>
  <?php echo(echoanalytics("..")); ?>
</body>
</html>
