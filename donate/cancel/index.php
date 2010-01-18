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

	<div id="container">
		<div id="maincolumn">
			<div id="content">
				<p class="lead"><strong>Canceled.</strong> If you don't like Paypal you can still support this project by providing me with some good book to read. I have a <a class="ext" href=
				"http://www.amazon.de/exec/obidos/registry/1QIQE5HKOS011/">amazon.de</a> wishlist.</p>
			</div>
			<div id="footer">
				<a class="swissmade" href="http://www.swissmadesoftware.org"><img src="http://media.cyberduck.ch/img/sms-logo-small-footer.png" alt="swiss made software" /></a> <a href=
				"http://validator.w3.org/check/referer">Validate</a>, $Date$<br />
			</div>
		</div>

		<div id="sidebar">
			<div id="teaser">
				<div class="box-shadow-start"></div>

				<div class="box-shadow">
					<p class="lead"><strong>Cyberduck is <a class="ext" href="http://www.gnu.org/philosophy/free-sw.html">free software</a>, but it still costs money to write, support, and distribute
					it.</strong> As a contributor to Cyberduck, you receive a donation key that disables the donation prompt.</p><br />

					<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick" /><input type="hidden" name="hosted_button_id" value="4914397" /><input type="image" src=
						"https://www.paypal.com/en_US/CH/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" /><img alt="" border="0" src=
						"https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
					</form>
				</div>

				<div class="box-shadow-end"></div>
			</div>
		</div>
	</div><?php echo(echoanalytics("../..")); ?>
</body>
</html>
