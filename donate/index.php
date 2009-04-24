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
        <td colspan="3" class="box-solid">
        <blockquote>Cyberduck is <a class="ext" href="http://www.gnu.org/philosophy/free-sw.html">free software</a>, but it still costs money to write, support, and distribute it. The continued donations of users is what allows Cyberduck to be available for free today.

<strong>Thank you very much for your support! It will help to make Cyberduck even better!</strong>
						</blockquote>
</td>
      </tr>

      <tr>
        <td width="150" valign="middle" class="box-filled">
          <div align="center">
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="4914397">
			<input type="image" src="https://www.paypal.com/en_US/CH/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
			<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
			</form>
          </div>
        </td>

        <td colspan="2" class="box-solid">
          <p>Paypal accepts all major credit cards. You do not need to open an account.</p>
<p><img src="http://www.paypal.com/en_US/i/icon/icon_visa.gif" alt="Visa" /> <img src="http://www.paypal.com/en_US/i/icon/icon_mastercard.gif" alt="MasterCard" /> <img src="http://www.paypal.com/en_US/i/icon/icon_discover.gif" alt="Discover" /> <img src="http://www.paypal.com/en_US/i/logo/icon_amex.gif" alt="American Express" /> <img src="http://www.paypal.com/en_US/i/icon/icon_echeck.gif" alt="eCheck" /></p>
        
</td>
      </tr>

      <tr>
        <td width="150" valign="top" class="box-filled">
	<p style="text-align:center;"><strong>Bank Account</strong></p>
        </td>

        <td colspan="2" class="box-solid">
          	<p>
				David Kocher, Switzerland<br />
				<tt>
					Postfinance<br />
					<strong>IBAN</strong> CH19 0900 0000 3030 0229 3<br />
					<strong>BIC</strong> POFICHBEXXX
				</tt>
			</p>
        </td>
      </tr>

      <tr>
        <td width="150" valign="middle" class="box-filled">
          <div align="center">
<!--
            <a href="http://www.amazon.de/gp/registry/1QIQE5HKOS011/"><img src="../img/amazon.png" alt="amazon books" border="0" /></a>
-->
<a href="http://www.amazon.de/gp/redirect.html?ie=UTF8&location=http%3A%2F%2Fwww.amazon.de%2Fgp%2Fregistry%2Fwishlist%2F1QIQE5HKOS011%3Fie%3DUTF8%26%252AVersion%252A%3D1%26%252Aentries%252A%3D0&site-redirect=de&tag=httpcybech-21&linkCode=ur2&camp=1638&creative=19454"><img src="../img/amazon.png" alt="amazon books" border="0" /></a>
          </div>
        </td>

        <td colspan="2" class="box-solid">
          <p>If you prefer not to to use Paypal, I do also have a <a class="ext" href=
          "http://www.amazon.de/gp/registry/1QIQE5HKOS011/">
          amazon.de</a> wishlist.</p>
<!--
		<script charset="utf-8" type="text/javascript" src="http://ws.amazon.de/widgets/q?ServiceVersion=20070822&MarketPlace=DE&ID=V20070822/DE/httpcybech-21/8004/3ed7239d-88ef-47f6-a09c-83c0eeeba434"> </script>
		<noscript>
			<a href="http://ws.amazon.de/widgets/q?ServiceVersion=20070822&MarketPlace=DE&ID=V20070822%2FDE%2Fhttpcybech-21%2F8004%2F3ed7239d-88ef-47f6-a09c-83c0eeeba434&Operation=NoScript">Amazon.de Widgets</a>
		</noscript>
-->
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
