<?php
/** 
  * AquaticPrime PHP Config
  * Configuration for web server license generation
  * @author Lucas Newman, Aquatic
  * @copyright Copyright &copy; 2005 Lucas Newman
  * @license http://www.opensource.org/licenses/bsd-license.php BSD License
  */

// ----CONFIG----

// When pasting keys here, don't include the leading "0x" that AquaticPrime Developer adds.
$key = "AF026CFCF552C3D09A051124A596CEF7BBB26B15629504CD163B09675BE507C9C526ED3DBFCB91B78F718E0886A18400B56BC00E9213228CD6D6E9C84D8B6099AA3DE6E6F46F6CC7970982DE93A2A7318351FDFA25AE75B403996E50BB40643384214234E84EDA3E518772A4FF57FE29DD7C77A5EEB14C9023CA18FEC63236EF";
$privateKey = "74AC48A8A38C828B1158B6186E6489FA7D219CB8EC635888B97CB0EF9298AFDBD8C49E292A87B67A5FA1095B046BAD55CE47D55F0C0CC1B339E49BDADE5CEB1000FC981456010242F6B128F880EC2B3F4480B6525AD744945845CBB987C2D534F396C551A1C28FB0B29949CB1A46C4421649E5145CA1FA9D3FCBAC0188D3783B";

$domain = "cyberduck.ch";
$product = "Cyberduck";

// These fields below should be customized for your application.  You can use ##NAME## in place of the customer's name and ##EMAIL## in place of his/her email
$from = "feedback@$domain";
$subject = "$product License Key for ##NAME##";
$message =
"Dear ##NAME##,

Thank you very much for your support! Your donation is very much appreciated and will help to make Cyberduck even better!

As a contributor to Cyberduck, you receive a license key that disables the donations prompt that is displayed after installing or updating Cyberduck. Double click the attached file to register your license key.


Best Regards,
David Kocher

---
Post bug reports and feature requests at http://trac.cyberduck.ch/
---
Help Wiki at http://help.cyberduck.ch
";

// It's a good idea to BCC your own email here so you can have an order history
$bcc = "license@$domain";

// This is the name of the license file that will be attached to the email
$licenseName = "##NAME##.cyberducklicense";

// ---PAYPAL ONLY CONFIG----

// Your PDT authorization token
$auth_token = "3vOf-GLS3uLfp1fOAbwof4APV5r5FuvUBE0gQBULHzxIQA1HrENs4XNlORS";
// Put in a URL here to redirect back to after the transaction
$redirect_url = "http://$domain/donate/thanks.php";
$error_url = "http://$domain/donate/error.php";

?>
