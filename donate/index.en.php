<?php include "../lang.php"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?php include "../functions.php"; ?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<?php echo(echoheader("..")); ?>
	<title><?php echo(echotitle("Donate")); ?></title>
	<script src="js/jquery.form.js" type="text/javascript">
</script>
</head>

<body id="donate">
	<div id="header">
		<?php echo(echologo(".."));?>
		<?php echo(echocaption(".."));?>
		<?php echo(echosubmenu(".."));?>
	</div>

	<div id="container">
		<div id="maincolumn">
			<div id="content">
				<p class="lead"><strong>Free Software.</strong> <a class="ext" href="http://www.gnu.org/philosophy/free-sw.html">Free software</a> is a matter of the users freedom to run, copy,
				distribute, study, change and improve the software. The continued donations of users is what allows Cyberduck to be available for free today. If you find this program useful, please
				consider making a <a id="paypal" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=4914397">donation</a>. It will help to make Cyberduck even better!</p>

				<p class="lead"><strong>Contribution.</strong> As a contributor to Cyberduck, you receive a donation key that disables the donation prompt that is displayed after installing or updating Cyberduck. The donation key can be used on multiple computers but is personal and is not to be shared.</p>

				<p>To make the payment with Paypal, you can use your credit card or bank account without the need to open an account. You will receive the donation key automatically by email and additionally a receipt from Paypal when the transaction is complete.</p>

				<p>If you prefer not to use Paypal you can send money by IBAN. You will have to <a href="mailto:feedback@cyberduck.ch">request a donation key</a> after the transaction has been completed.</p>

				<p>
					<tt><strong>To</strong> iterate GmbH</tt><br />
					<tt><strong>Bank</strong> Postfinance, 3030 Bern</tt><br />
					<tt><strong>IBAN</strong> CH72 0900 0000 6068 9419 1</tt><br />
					<tt><strong>SWIFT BIC</strong> POFICHBEXXX</tt></p>
				</p>

				<p class="lead"><strong>Organization Site Keys.</strong> We are providing organization site keys for scenarios like pre-configured installations for site wide deployments inside an organizations where the individual user should not be bothered with a donation prompt request. An organization site key is not limited to a single user. Refer to <a href="volume">volume pricing</a>.</p>
				
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
				
				<p>Open the received license key with Cyperduck by double clicking. Make sure the filename of the donation key attached ends with <tt>.cyberducklicense</tt>. Refer to the <a href="http://trac.cyberduck.ch/wiki/help/en/faq#DonationKeys">wiki</a> if you have trouble receiving or opening the key.</p>
				
				<p class="lead"><strong>Amazon.</strong> If you prefer not to to use Paypal, you can send us something from our wishlist (in German).</p>
				<ul>
					<li>
						<a class="ext" href="http://www.amazon.de/wishlist/1QIQE5HKOS011">David Kocher (Project Lead)</a>. 			</li>
					<li>
						<a class="ext" href="http://www.amazon.de/wishlist/15QDR990HLU49">Yves Langisch (Windows Lead Developer)</a>. 
					</li>
				</ul>
<p>You will have to <a href="mailto:feedback@cyberduck.ch">request a donation key</a> after completion of the Amazon order process.</p>


			</div>

			<div id="footer">
				<a class="swissmade" href="http://www.swissmadesoftware.org"><img src="http://media.cyberduck.ch/img/sms-logo-small-footer.png" alt="swiss made software" /></a> <a href=
				"http://validator.w3.org/check/referer">Validate</a>, $Date$<br />
			</div>
		</div>

		<div id="sidebar">
			<div id="teaser">
				

				<div class="box-shadow">
					<p class="lead"><strong>Cyberduck is <a class="ext" href="http://www.gnu.org/philosophy/free-sw.html">free software</a>, but it still costs money to write, support, and distribute it.</strong> As a contributor to Cyberduck, you receive a donation key that disables the donation prompt. Or buy Cyberduck from the App Store.</p><br />

					<form action="https://www.paypal.com/cgi-bin/webscr" method="post"
							onClick="javascript:_gaq.push(['_trackEvent', 'Paypal', 'VTBUBS29YLYE4']);">
						<fieldset>
							<input type="hidden" name="cmd" value="_s-xclick" />
							<input type="hidden" id="paypal" name="hosted_button_id" value="4914397" />
							<input type="image" src="../img/donate" name="submit" alt="Donate to the development of Cyberduck!"/>
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
				
			</div>
		</div>
	</div>
</body>
</html>
