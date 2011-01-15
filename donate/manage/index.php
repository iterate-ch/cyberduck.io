<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?php include "../../functions.php";?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<?php echo(echoheader("../..")); ?>
	<title><?php echo(echotitle("Donate")); ?></title>
	<script src="../js/jquery.form.js" type="text/javascript">
</script>
</head>

<body id="donate">
	<div id="header">
		<?php echo(echologo("../.."));?><?php echo(echocaption("../.."));?><?php echo(echosubmenu("../.."));?>
	</div>

	<div id="container">
		<div id="maincolumn">
			<div id="content">
				<p class="lead"><strong>Donation Key Registry.</strong> Add donation key manually for a given email address.</p>

				<h2>Add</h2>
				<form id="add" method="get" action="add" name="add">
					<label for="email">Email address:</label> <input style="width: 250px;" type="text" id="email" name="email" /> <input type="submit" id="add" value="Add" />
				</form><script charset="utf-8" type="text/javascript">
//<![CDATA[
						$(document).ready(function() {
							var options = {
								target: '#result-add',
								clearForm: true
							}
							$("form#add").ajaxForm(options);
						 });
				//]]>
				</script>
				<p><strong id="result-add"></strong></p>

				<h2>Find</h2>
				<form id="find" method="get" action="find" name="find">
					<label for="email">Email address:</label> <input style="width: 250px;" type="text" id="email" name="email" /> <input type="submit" id="add" value="Add" />
				</form><script charset="utf-8" type="text/javascript">
//<![CDATA[
						$(document).ready(function() {
							var options = {
								target: '#result-find',
								clearForm: true
							}
							$("form#find").ajaxForm(options);
						 });
				//]]>
				</script>

				<p><strong id="result-find"></strong></p>
			</div>

			<div id="footer">
				<a class="swissmade" href="http://www.swissmadesoftware.org"><img src="http://media.cyberduck.ch/img/sms-logo-small-footer.png" alt="swiss made software" /></a> <a href=
				"http://validator.w3.org/check/referer">Validate</a>, $Date: 2009-07-20 23:51:01 +0200 (Mon, 20 Jul 2009) $<br />
			</div>
		</div>

		<div id="sidebar">
			<div id="teaser">
				<div class="box-shadow-start"></div>

				<div class="box-shadow">
					<div align="center">
						<img src="../img/cert.png" alt="Donation Key" />
					</div>
				</div>

				<div class="box-shadow-end"></div>
			</div>
		</div>
	</div>
</body>
</html>
