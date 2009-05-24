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
			        <p class="lead">
			<strong>Contribution.</strong>
				As a contributor to Cyberduck, you receive a donation key that disables the donation prompt that is displayed after installing or updating Cyberduck.
	
	You can use your credit card or bank account without the need to open a <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=4914397">Paypal</a> account. You will receive a receipt from Paypal when completing the transaction.</p>

	        <p>If you prefer not to use Paypal you can send money by IBAN. You will have to request a donation key from me by email.</p>
		<p>David Kocher, Switzerland<br />
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
			        <p class="lead">
			<strong>Amazon.</strong>
          If you prefer not to to use Paypal, I do also have a <a class="ext" href=
          "http://www.amazon.de/gp/registry/1QIQE5HKOS011/">
          Amazon</a> wishlist.</p>
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
		        	The donation key is sent to you by email automatically after the the Paypal transaction has been completed. To recover a lost registration key, enter your email address below to look it up.
		        </p>
				<p>
					<form id="lookup" method="GET" action="lookup">
						<label for="email">Email address registered with Paypal:</label>
						<input type="text" id="email" name="email" />
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
					<strong id="result"></strong>
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
