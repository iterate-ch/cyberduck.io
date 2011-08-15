<?php include "../lang.php"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?php include "../../functions.php"; ?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<?php echo(echoheader("..")); ?>
	<title><?php echo(echotitle("Donate")); ?></title>
	<script src="js/jquery.form.js" type="text/javascript">
</script>
</head>

<body id="donate">
	<div id="header">
		<?php echo(echologo("../.."));?>
		<?php echo(echocaption("../.."));?>
		<?php echo(echosubmenu("../.."));?>
	</div>

	<div id="container">
		<div id="maincolumn">
			<div id="content">
				<p class="lead"><strong>Organization Site Keys.</strong> We are providing organization site keys for scenarios like pre-configured installations for site wide deployments inside an organizations where the individual user should not be bothered with a donation prompt request. An organization site key is not limited to a single user. Please contact <a href=
				"mailto:%66%65%65%64%62%61%63%6B%40%63%79%62%65%72%64%75%63%6B%2E%63%68">David Kocher</a> by email to set this up.

				<p>Calculate suggested volume pricing </p>
				<form id="calculate" method="get" action="calculate">
					<p><label for="volume">Number of installations:</label> <input type="text" id="volume" name="volume" /> <input type="submit" id="calculate" value="Calculate" />
					<script charset="utf-8" type="text/javascript">
//<![CDATA[
									$(document).ready(function() {
									var options = {
									target: '#result',
									clearForm: false
									}
									$("form#calculate").ajaxForm(options);
									});
									//]]>
					</script></p>
				</form>

				<p>Price is <strong id="result">0</strong> €.</p>
			</div>

			<div id="footer">
				<a class="swissmade" href="http://www.swissmadesoftware.org"><img src="http://cdn.cyberduck.ch/img/sms-logo-small-footer.png" alt="swiss made software" /></a> <a href=
				"http://validator.w3.org/check/referer">Validate</a>, $Date: 2011-07-14 22:56:02 +0200 (Thu, 14 Jul 2011) $<br />
			</div>
		</div>

		<div id="sidebar">
			<div id="teaser">
				<div class="box-shadow-start"></div>

				<div class="box-shadow">
					<p class="lead"><strong>Cyberduck is <a class="ext" href="http://www.gnu.org/philosophy/free-sw.html">free software</a>, but it still costs money to write, support, and distribute it.</strong> As a contributor to Cyberduck, you receive a donation key that disables the donation prompt. Or buy Cyberduck from the App Store.</p><br />

					<form action="https://www.paypal.com/cgi-bin/webscr" method="post"
							onClick="javascript:_gaq.push(['_trackEvent', 'Paypal', 'VTBUBS29YLYE4']);">
						<fieldset>
							<input type="hidden" name="cmd" value="_s-xclick" />
							<input type="hidden" id="paypal" name="hosted_button_id" value="4914397" />
							<input type="image" src="../../img/donate" name="submit" alt="Donate to the development of Cyberduck!"/>
						</fieldset>
					</form>
					<script type="text/javascript">
							//<![CDATA[
							$(document).ready(function() {
								if(navigator.userAgent.toLowerCase().indexOf('windows') > -1) {
									$("form input#paypal").attr('value', '7TAQE4SM2FH6L');
									$("a#paypal").attr('href', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=7TAQE4SM2FH6L');
								}
								else {
									$("form input#paypal").attr('value', '4914397');
									$("a#paypal").attr('href', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=4914397');
								}
							});
					//]]>
					</script>
					<p>Please do not make a payment of just a few cents. It is not really worth the effort looking at the transaction costs.</p>
				</div>
				<div class="box-shadow-end"></div>
			</div>
		</div>
	</div>
</body>
</html>
