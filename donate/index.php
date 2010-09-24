<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?php include "../functions.php"; ?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<?php echo(echoheader("..")); ?>
	<title><?php echo(echotitle("Donate")); ?></title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script src="js/jquery.form.js" type="text/javascript">
</script>
</head>

<body id="donate">
	<div id="header">
		<?php echo(echologo(".."));?><?php echo(echocaption(".."));?><?php echo(echosubmenu(".."));?>
	</div>

	<div id="container">
		<div id="maincolumn">
			<div id="content">
				<p class="lead"><strong>Free Software.</strong> <a class="ext" href="http://www.gnu.org/philosophy/free-sw.html">Free software</a> is a matter of the users freedom to run, copy,
				distribute, study, change and improve the software. The continued donations of users is what allows Cyberduck to be available for free today. If you find this program useful, please
				consider making a <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=4914397">donation</a>. It will help to make Cyberduck even better!</p>

				<p class="lead"><strong>Contribution.</strong> As a contributor to Cyberduck, you receive a donation key that disables the donation prompt that is displayed after installing or
				updating Cyberduck. You can use your credit card or bank account without the need to open a Paypal account. You will receive a receipt from Paypal when completing the transaction.</p>

				<p>If you prefer not to use Paypal you can send money by IBAN. You will have to <a href="mailto:feedback@cyberduck.ch">request a donation key</a> after the transaction has been completed.</p>

				<p><tt>David Kocher</tt><br />
				<tt>3013 Bern, Switzerland</tt><br />
				<tt><strong>IBAN</strong> CH19 0900 0000 3030 0229 3</tt><br />
				<tt><strong>BIC</strong> POFICHBEXXX</tt> or <tt>POFICHBE</tt></p>

				<p class="lead"><strong>Amazon.</strong> If you prefer not to to use Paypal, I do also have a <a class="ext" href="http://www.amazon.de/wishlist/1QIQE5HKOS011">Amazon
				Wishlist</a>. You will have to <a href="mailto:feedback@cyberduck.ch">request a donation key</a> after completion of the Amazon order process.</p>

				<form id="lookup" method="get" action="lookup">
					<p class="lead"><strong>Donation Key Recovery.</strong> The donation key is sent to you by email automatically after the Paypal transaction has been completed. To recover a
					lost registration key, enter your email address below to look it up.</p>

					<p><label for="email">Email address registered with Paypal:</label> <input type="text" id="email" name="email" /> <input type="submit" id="lookup" value="Lookup" />
					<script charset="utf-8" type="text/javascript">
//<![CDATA[
									$(document).ready(function() {
									var options = {
									target: '#result',
									clearForm: true
									}
									$("form#lookup").ajaxForm(options);
									});
									//]]>
					</script></p>
				</form>

				<p><strong id="result"></strong></p>
				
				<p>Open the received license key with Cyperduck by double clicking. Make sure the filename of the donation key attached ends with <tt>.cyberducklicense</tt>.</p>
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
					<p class="lead"><strong>Cyberduck is <a class="ext" href="http://www.gnu.org/philosophy/free-sw.html">free software</a>, but it still costs money to write, support, and distribute it.</strong> As a contributor to Cyberduck, you receive a donation key that disables the donation prompt.</p><br />

					<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick" />
						<input type="hidden" id="paypal" name="hosted_button_id" value="4914397" />
						<input type="image" src="https://www.paypal.com/en_US/CH/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="Donate to the development of Cyberduck!" />
						<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
					</form>
					<script type="text/javascript">
							//<![CDATA[
							$(document).ready(function() {
								if(navigator.userAgent.toLowerCase().indexOf('windows') > -1) {
									$("form input#paypal").attr('value', 'NKZSJQTDVF4ZA');
								}
								else {
									$("form input#paypal").attr('value', '4914397');
								}
							});
					//]]>
					</script>
				</div>
				<div class="box-shadow-end"></div>
			</div>
		</div>
	</div><?php echo(echoanalytics("..")); ?>
</body>
</html>
