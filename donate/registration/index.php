<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
  include "../../functions.php";
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta name="generator" content=
  "HTML Tidy for Mac OS X (vers 12 April 2005), see www.w3.org" />
  <?php echo(echoheader("../..")); ?>

	<title><?php echo(echotitle("Donate")); ?></title>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript"></script>
</head>

<body id="donate">
  <div class="header">
    <?php echo(echologo("../.."));?><?php echo(echocaption("../.."));?><?php echo(echosubmenu("../.."));?>
  </div>

  <div class="content">
	<table cellpadding="0" cellspacing="5" width="100%">
      <tr>
        <td colspan="3" class="box-solid">
	        <p class="lead">
				<strong>Donation Key Recovery.</strong>
	        	As a contributor to Cyberduck, you receive a donation key that disables the donation prompt that is displayed after installing or updating Cyberduck. The donation key is sent to you by email automatically after the the Paypal transaction has been completed. To recover a lost registration key, enter your email address below to look it up.
	        </p>
			<p>
				<label for="email">Email address registred with Paypal:</label>
				<input type="text" id="email" name="Email" value="me@example.net"/>
				<input type="button" id="lookup" value="Lookup"/>
		    </p>
			<script charset="utf-8" type="text/javascript">
			$(document).ready(function(){
			   $("input#lookup").click(function(event) {
					$("#result").empty();
				 	jQuery.ajax(
						{
							url: "http://reg.cyberduck.ch/lookup", 
							cache: false,
							type: "POST",
							data: ({email : $("input#email").attr("value")}),
							success: function(data) {
								$("#result").empty();
								$("#result").append(data);
							}
						}
					);
			   });
			 });
			</script>
			<p>
				<strong id="result"/>
			</p>
		</td>
	  </tr>

      <tr>
        <td colspan="3">
          <div class="footer">
			<a class="swissmade" href="http://www.swissmadesoftware.org"><img src="../../img/sms-logo-small-footer.png" alt="swiss made software"></a><br />
            <a href=
            "http://validator.w3.org/check/referer">Validate</a>,
            $Date: 2009-04-24 21:41:54 +0200 (Fri, 24 Apr 2009) $<br />
          </div>
        </td>
      </tr>
    </table>
  </div>
  <?php echo(echoanalytics("..")); ?>
</body>
</html>
