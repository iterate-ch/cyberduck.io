<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
  include "../functions.php";
?>
<html lang="en">
    <?php echo(echoheader("~dkocher | cyberduck", "..")); ?>
  <body bgcolor="#ffffff">
    <div align="center" class="standard">
      <table border="0" cellpadding="5" cellspacing="5" width="700">
                <tr>
                  <td colspan="3" class="alert">
			Support the development of Cyberduck by making a <a href="https://www.paypal.com/xclick/business=dkocher%40cyberduck.ch&amp;item_name=Cyberduck&amp;item_number=1&amp;no_shipping=1&amp;no_note=1&amp;tax=0&amp;currency_code=USD&amp;lc=US" title="Thanks!">donation</a> :)
			     </td>
                </tr>
                <tr>
                  <td width="200" colspan="2" valign="top" class="box-solid">
                    <div align="center">
                      <img src="img/cyberduck.icon.jpg" width="128" height="128" alt="Cyberduck" border="0"></img>
                     </div>
                  </td>
                  <td width="100%" class="box-solid">
                    <div class="underline"><?php echo(echomenu(".."));?></div>
                    	<br />
                    	<h1>Cyberduck</h1>
			             <h3>FTP and SFTP Browser for Mac OS X</h3>
                    <div align="left">
                      <a href="index.php">about</a> | 
                      <a href="index.php#download">download</a> | 
                      <a href="features.php">features</a> | 
                      <a href="source.php">source code</a> | 
                      <a href="changelog.php">changelog</a> | 
                      <a href="license.php">license</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td colspan="2" valign="bottom">
                    <form method="post"
					    action="http://osdir.com/modules.php?op=modload&amp;name=Downloads&amp;file=index">
						<table border="0" cellspacing="0" cellpadding="0">
						  <tr>
						    <td>
						      Vote for Cyberduck on O'Reilly's OSDir.com
						    </td>
						  </tr>
						  <tr>
						    <td>
						      <table border="0" cellspacing="0" cellpadding="0">
						        <tr>
						          <td valign="top">
						            <select name="rating">
						              <option selected="selected">--</option>
						              <option value="10">10</option>
						              <option value="9">9</option>
						              <option value="8">8</option>
						              <option value="7">7</option>
						              <option value="6">6</option>
						              <option value="5">5</option>
						              <option value="4">4</option>
						              <option value="3">3</option>
						              <option value="2">2</option>
						              <option value="1">1</option>
						            </select>
						          </td>
						          <td valign="top">
						            <input type="hidden" name="ratinglid" value="492"></input>
						            <input type="hidden" name="ratinguser" value="outside"></input>
						            <input type="hidden" name="req" value="addrating"></input>
						            <input type="submit" value="Vote!"></input>
						          </td>
						        </tr>
						      </table>
						    </td>
						  </tr>
						</table>
					</form>
                  </td>
                  <td bgcolor="#ffffff" valign="top" class="box-dash">
                      <p>
                        Cyberduck is an <a href="http://opensource.org/docs/definition.php">open source</a> 
            SFTP (SSH Secure File Transfer) and FTP browser licenced under the <a href="http://www.gnu.org/licenses/gpl.html">GPL</a>.
                        </p>
                      <p>
                        This software is written by <a href="mailto:dkocher@cyberduck.ch">David  Kocher</a>, Switzerland.
                        I appreciate any comments, feature suggestions and bug reports. Please send them directly to <a href="mailto:dkocher@cyberduck.ch?subject=Cyberduck Comment">me.</a>
                      </p>
                  </td>
                </tr>

                <!-- ======= Screenshot ======== -->

                <tr>
                  <td colspan="3" valign="top">
			<a href="./img/browser.png"><img align="middle" width="700" height="399" border="0" src="./img/browser.thumb.jpg" alt="Cyberduck Screenshot"></img></a>
                  </td>
                </tr>
                
                <!-- ======= Donate! ======== -->

                <tr>
                  <td colspan="2" valign="top" class="box-solid">
                    <div align="center">
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_xclick"></input>
                            <input type="hidden" name="business" value="dkocher@cyberduck.ch"></input>
                            <input type="hidden" name="item_name" value="cyberduck"></input>
                            <input type="hidden" name="item_number" value="cyberduck"></input>
                            <input type="hidden" name="return" value="http://cyberduck.ch"></input>
                            <input type="image" src="http://images.paypal.com/images/x-click-but04.gif" name="submit" alt="make payments with paypal - it's fast, free and secure!"></input>
                          </form>
			         </div>
			         <!--
			         <div align="center">
			             <p>Go shopping for Cyberduck gadgets in the <a href="http://www.cafeshops.com/cyberduck">Cafepress Cyberduck shop</a>!
			         </div>
			         -->
                  </td>
                  <td bgcolor="#ffffff" valign="top" class="box-dash">
                          <p>
                            <b>This program is <a href="http://www.gnu.org/philosophy/free-sw.html">free</a>. Free software is a matter of the users' freedom to run, copy, distribute, study, change and improve the software. If you find this program useful, please consider making a donation to support future development. It will motivate me to improve the application further!</b>
                          </p>
                  </td>
                </tr>
		
                <tr>
                  <td colspan="3" valign="top" class="alert">
                            <b>Translators needed!</b> If you want Cyberduck to speak your native language, contact <a href="mailto:dkocher@cyberduck.ch?subject=Cyberduck Translation">me</a>. You don't need any programming skills. Already contributed translations are: <i>German, Spanish, Italian, French, Dutch, Portuguese and Japanese</i>.

                 </td>
                </tr>

                <!-- ======= Download! ======== -->
                
                <tr>
                  <td colspan="2"></td>
                  <td class="box-solid">
                      <a name="download">download</a>
                  </td>
                </tr>
                <tr>
                  <td colspan="2" valign="top" class="box-solid">
                    <div align="center">
			             <img src="./img/builtosx.gif" width="128" height"128" alt="Built for Mac OS X" border="0"></img>
                    </div>
                  </td>
                  <td bgcolor="#ffffff" valign="top" class="box-dash">
                  <p>
                    Mac OS X 10.3 recommended.<br />
                </p>
                    <ul>
						<li><b>2.2b1</b> <i>Jan-22-2004</i><br />
                         <a href="./download.php?Cyberduck-2.2beta1.dmg">Cyberduck-2.2beta1.dmg</a>
                         </li>
                        <li><b>2.1</b> <i>Dec-08-2003</i><br />
                         <a href="./download.php?Cyberduck-2.1.dmg">Cyberduck-2.1.dmg</a>
                         </li>
                    </ul>
                  </td>
                </tr>
        		<tr>
                  <td colspan="2"></td>
		          <td>
    			     <div align="right">
            			<?php echo(echofooter(".."));?>
	    			    $Date$
       	 		     </div>
		          </td>
		      </tr>
        </table>
    </div>
  </body>
</html>
