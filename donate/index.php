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
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript"></script>
   <script src="js/jquery.form.js" type="text/javascript"></script>
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
<a href="http://www.amazon.de/gp/redirect.html?ie=UTF8&location=http%3A%2F%2Fwww.amazon.de%2Fgp%2Fregistry%2Fwishlist%2F1QIQE5HKOS011%3Fie%3DUTF8%26%252AVersion%252A%3D1%26%252Aentries%252A%3D0&site-redirect=de&tag=httpcybech-21&linkCode=ur2&camp=1638&creative=19454"><img src="img/amazon.png" alt="amazon books" border="0" /></a>
          </div>
        </td>

        <td colspan="2" class="box-solid">
          <p>If you prefer not to to use Paypal, I do also have a <a class="ext" href=
          "http://www.amazon.de/gp/registry/1QIQE5HKOS011/">
          amazon.de</a> wishlist.</p>
        </td>
      </tr>

	      <tr>
		        <td width="150" valign="top" class="box-filled">
			<br />
					          <div align="center">
<img src="img/cert.png" alt="Donation Key" border="0" />
					          </div>
		        </td>

		        <td colspan="2" class="box-solid">
					        <p class="lead">
					<strong>Donation Key Recovery.</strong>
		        	As a contributor to Cyberduck, you receive a donation key that disables the donation prompt that is displayed after installing or updating Cyberduck. The donation key is sent to you by email automatically after the the Paypal transaction has been completed. To recover a lost registration key, enter your email address below to look it up.
		        </p>
				<p>
					<form id="lookup" method="GET" action="lookup">
						<label for="email">Email address registered with Paypal:</label>
						<input type="text" id="email" name="email" value="me@example.net"/>
						<input type="submit" id="lookup" value="Lookup"/>
					</form>
					<script charset="utf-8" type="text/javascript">
						$(document).ready(function() {
						    var options = {
								target: '#result',
								clearForm: true
							}
							$("form#lookup").ajaxForm(options);
						 });
					</script>
				<p>
					<strong id="result">No invocation yet.</strong>
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
