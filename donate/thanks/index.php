<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
  include "../../functions.php";
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta name="generator" content=
  "HTML Tidy for Mac OS X (vers 12 April 2005), see www.w3.org" />
  <?php echo(echoheader("../..")); ?>

	<title><?php echo(echotitle("Donate")); ?></title>
</head>

<body id="donate">
  <div class="header">
    <?php echo(echologo("../.."));?><?php echo(echocaption("../.."));?><?php echo(echosubmenu("../../"));?>
  </div>

  <div class="content">
	<table cellpadding="0" cellspacing="5" width="100%">
      <tr>
        <td colspan="3" class="box-solid">
<p><strong>Your donation is very much appreciated and will help to advance development and
			 make Cyberduck even better.</strong></p>

<p>
	The transaction has been completed, and a receipt from Paypal has been emailed to you. You may log into your account at <a href="https://www.paypal.com/">paypal.com</a> to view details of this transaction.</p>
	
<p>As a contributor to Cyberduck, you receive a donation key that disables the donation prompt which is displayed after installing or updating Cyberduck. It should be in your mailbox by now, too.
	
 You can always <a href="http://cyberduck.ch/donate#recover">recover</a> your donation key using the email adress registered with Paypal.</p>
</td>
      </tr>
      <tr>
        <td colspan="3">
          <div class="footer">
			<a class="swissmade" href="http://www.swissmadesoftware.org"><img src="../../img/sms-logo-small-footer.png" alt="swiss made software"></a><br />
            <a href=
            "http://validator.w3.org/check/referer">Validate</a>,
            $Date$<br />
          </div>
        </td>
      </tr>
    </table>
  </div>
  <?php echo(echoanalytics("../..")); ?>
</body>
</html>
