<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
include "../../functions.php";
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta name="generator" content="HTML Tidy for Mac OS X (vers 31 October 2006 - Apple Inc. build 15.3), see www.w3.org" /><?php echo(echoheader("../..")); ?>

	<title><?php echo(echotitle("Donate")); ?></title>
</head>

<body id="donate">
	<div id="header">
		<?php echo(echologo("../.."));?><?php echo(echocaption("../.."));?><?php echo(echosubmenu("../../"));?>
	</div>

	<div id="content">
		<table cellpadding="0" cellspacing="0">
			<tr>
				<td>
					<div id="maincolumn" class="box-filled">
						<p class="lead"><strong>The transaction has been completed.</strong> A receipt from Paypal has been emailed to you. You may log into your account at <a href="https://www.paypal.com/">paypal.com</a> to
						view details of this transaction.</p>

						<p>As a contributor to Cyberduck, you receive a donation key that disables the donation prompt which is displayed after installing or updating Cyberduck. It should be in your
						mailbox by now, too. You can always <a href="http://cyberduck.ch/donate#recover">recover</a> your donation key using the email adress registered with Paypal.</p>
					</div>
				</td>
				<td id="sidebar">
					<div id="teaser">
						<div class="box-shadow-start"></div>

						<div class="box-shadow">
							<p class="lead"><strong>Your donation is very much appreciated.</strong> It will help to advance development and make Cyberduck even better!</strong>
						</div>

						<div class="box-shadow-end"></div>
					</div>
				</td>
			</tr>

			<tr>
				<td colspan="3">
					<div id="footer">
						<a class="swissmade" href="http://www.swissmadesoftware.org"><img src="../../img/sms-logo-small-footer.png" alt="swiss made software" /></a> <a href=
						"http://validator.w3.org/check/referer">Validate</a>, $Date$<br />
					</div>
				</td>
			</tr>
		</table>
	</div><?php echo(echoanalytics("../..")); ?>
</body>
</html>
