<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php include "../../functions.php"; ?>

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
				<td id="maincolumn" class="box-filled">
						<p class="lead"><strong>Error.</strong> There was an unkown error with this transaction.</p>
				</td>

				<td id="sidebar">
					<div id="teaser">
						<div class="box-shadow-start"></div>

						<div class="box-shadow">
							<p class="lead"><strong>Cyberduck is <a class="ext" href="http://www.gnu.org/philosophy/free-sw.html">free software</a>, but it still costs money to write, support, and
							distribute it.</strong> As a contributor to Cyberduck, you receive a donation key that disables the donation prompt.</p><br />

							<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
								<input type="hidden" name="cmd" value="_s-xclick" /><input type="hidden" name="hosted_button_id" value="4914397" /><input type="image" src=
								"https://www.paypal.com/en_US/CH/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" /><img alt="" border="0" src=
								"https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
							</form>
						</div>

						<div class="box-shadow-end"></div>
					</div>
				</td>
			</tr>

			<tr>
				<td colspan="2">
					<div id="footer">
						<a class="swissmade" href="http://www.swissmadesoftware.org"><img src="../../img/sms-logo-small-footer.png" alt="swiss made software" /></a> <a href=
						"http://validator.w3.org/check/referer">Validate</a>, $Date: 2009-04-22 14:21:54 +0200 (Wed, 22 Apr 2009) $<br />
					</div>
				</td>
			</tr>
		</table>
	</div><?php echo(echoanalytics("../..")); ?>
</body>
</html>
