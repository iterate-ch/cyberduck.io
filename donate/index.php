<?php
  include "../../functions.php";
?>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<?php echo(echoheader("~dkocher | cyberduck | donate!", "..")); ?>
<body bgcolor="#FFFFFF" title="Donate for Cyberduck!" onload="document.paypal.submit();">
    <div align="center">
        <table border="0" cellpadding="5" cellspacing="5" width="700">
            <tr>
                <td class="box-dash">
                    <div align="center">
                        <form name="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" id="paypal">
                            <input type="hidden" name="cmd" value="_s-xclick" /><input type="image" src="https://www.paypal.com/en_US/i/btn/x-click-but04.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!" /><input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----" />
                        </form>
                    </div>
                    <div align="center">
                        <p class="emphasized">Redirecting. Please wait...</p>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
