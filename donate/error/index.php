<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?php include "../../functions.php"; ?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<?php echo(echoheader("../..")); ?>
	<title><?php echo(echotitle("Donate")); ?></title>
</head>

<body id="donate">
	<div id="header">
		<?php echo(echologo("../.."));?><?php echo(echocaption("../.."));?><?php echo(echosubmenu("../../"));?>
	</div>

	<div id="container">
		<div id="maincolumn">
			<div id="content">
				<p class="lead"><strong>Error.</strong> There was an unkown error with this transaction.
				If there was an issue with the Paypal website, please <a href="mailto:feedback@cyberduck.ch">let me know</a>.</p>

				<p class="lead"><strong>Contribution.</strong> As a contributor to Cyberduck, you receive a donation key that disables the donation prompt that is displayed after installing or
				updating Cyberduck. You can use your credit card or bank account without the need to open a Paypal account. You will receive a receipt from Paypal when completing the transaction.</p>
			</div>
			<div id="footer">
				<a class="swissmade" href="http://www.swissmadesoftware.org"><img src="http://media.cyberduck.ch/img/sms-logo-small-footer.png" alt="swiss made software" /></a> <a href=
				"http://validator.w3.org/check/referer">Validate</a>, $Date: 2009-04-22 14:21:54 +0200 (Wed, 22 Apr 2009) $<br />
			</div>
		</div>

		<div id="sidebar">
			<div id="teaser">
				<div class="box-shadow-start"></div>

				<div class="box-shadow">
					<p class="lead"><strong>Cyberduck is <a class="ext" href="http://www.gnu.org/philosophy/free-sw.html">free software</a>, but it still costs money to write, support, and distribute
					it.</strong> As a contributor to Cyberduck, you receive a donation key that disables the donation prompt.</p><br />

					<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick" /><input type="hidden" name="hosted_button_id" value="4914397" /><input type="image" src="../../img/donate" name="submit" alt="PayPal - The safer, easier way to pay online!" /><img alt="" src=
						"https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
					</form>
				</div>

				<div class="box-shadow-end"></div>
			</div>
		</div>
	</div>
</body>
</html>
