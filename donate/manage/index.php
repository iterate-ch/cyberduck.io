<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include "../../functions.php";
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta name="generator" content="HTML Tidy for Mac OS X (vers 31 October 2006 - Apple Inc. build 15.3), see www.w3.org" /><?php echo(echoheader("../..")); ?>

	<title><?php echo(echotitle("Donate")); ?></title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript">
</script>
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

				<form id="add" method="get" action="add" name="add">
					<label for="email">Email address:</label> <input type="text" id="email" name="email" /> <input type="submit" id="add" value="Add" />
				</form><script charset="utf-8" type="text/javascript">
//<![CDATA[
						$(document).ready(function() {
							var options = {
								target: '#result',
								clearForm: true
							}
							$("form#add").ajaxForm(options);
						 });
				//]]>
				</script>

				<p><strong id="result"></strong></p>
			</div>

			<div id="footer">
				<a class="swissmade" href="http://www.swissmadesoftware.org"><img src="../../img/sms-logo-small-footer.png" alt="swiss made software" /></a> <a href=
				"http://validator.w3.org/check/referer">Validate</a>, $Date: 2009-07-20 23:51:01 +0200 (Mon, 20 Jul 2009) $<br />
			</div>
		</div>

		<div id="sidebar">
			<div id="teaser">
				<div class="box-shadow-start"></div>

				<div class="box-shadow">
					<div align="center">
						<img src="../img/cert.png" alt="Donation Key" border="0" />
					</div>
				</div>

				<div class="box-shadow-end"></div>
			</div>
		</div>
	</div>
</body>
</html>
