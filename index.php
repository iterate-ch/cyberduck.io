<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
  include "../functions.php";
?>
<html lang="en">
    <?php echo(echoheader("~dkocher | cyberduck", ".")); ?>
  <body bgcolor="#ffffff">
    <div align="center" class="standard">
      <table border="0" cellpadding="5" cellspacing="5" width="700">
                <tr>
                  <td width="200" colspan="2" valign="middle" class="box-solid">
                    <div align="center">
                      <img src="img/cyberduck.icon.jpg" width="128" height="128" alt="Cyberduck" border="0"></img>
                     </div>
                  </td>
                  <td width="100%" class="box-solid">
                    <div class="underline">
                        <?php echo(echomenu(".."));?>
                    </div>
                    <br />
                    <?php echo(echotitle());?>
                    <div align="left">
                        <?php echo(echosubmenu());?>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td colspan="3" width="100%" bgcolor="#ffffff" valign="top" class="box-dash">
                      <p>
                        Cyberduck is an <a href="http://opensource.org/docs/definition.php">open source</a> 
            SFTP (SSH Secure File Transfer) and FTP browser licenced under the <a href="http://www.gnu.org/licenses/gpl.html">GPL</a>. It has been built from the ground up with usability in mind, having the same consistent graphical user interface for both SFTP and FTP browsing. Multiple connections are supported. Drag and drop is supported consequently for transferring files between server and client. A transfer queue keeps track of the pending file transfers. A simple bookmark manager ensures manageability. Core system technologies such as the <a href="http://www.apple.com/macosx/features/security/">Keychain</a> and <a href="http://www.apple.com/macosx/features/rendezvous/">Rendezvous</a> are supported. Cyberduck integrates seamlessly with external editors such as <a href="http://www.codingmonkeys.de/subethaedit/">SubEthaEdit</a> and BBEdit.
Cyberduck has been translated into numerous languages including <i>Japanese, Chinese, Korean, French, German, Italian, Portuguese, Spanish and Dutch</i>.
                        </p>
                      <p>
                        This software is written by <a href="mailto:dkocher@cyberduck.ch">David  Kocher</a>, Switzerland.
                        I appreciate any comments, feature suggestions and bug reports.
                      </p>
                  </td>
                </tr>

                <!-- ======= Screenshot ======== -->

                <tr>
                  <td colspan="3">
                    <div align="center" id="image">
			<a href="./img/browser.jpg"><img align="middle" width="700" height="437" border="0" src="./img/browser.thumb.jpg" alt="Cyberduck Screenshot"></img></a>
                    </div>
                  </td>
                </tr>
                
                <!-- ======= Donate! ======== -->

                <?php echo(echoDonation());?>
                <tr>
                  <td width="200" colspan="2" valign="middle" class="box-solid">
                    <div align="center">
			             <p>Make a donation!</p>
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_xclick"></input>
                            <input type="hidden" name="business" value="dkocher@cyberduck.ch"></input>
                            <input type="hidden" name="item_name" value="cyberduck"></input>
                            <input type="hidden" name="item_number" value="cyberduck"></input>
                            <input type="hidden" name="return" value="http://cyberduck.ch"></input>
                            <input type="image" src="http://images.paypal.com/images/x-click-but04.gif" name="submit" alt="make payments with paypal - it's fast, free and secure!"></input>
                          </form>
			         </div>
                  </td>
                  <td width="100%" bgcolor="#ff9900" valign="top" class="box-dash">
                        <p class="emphasized">
                            <b>This program is <a href="http://www.gnu.org/philosophy/free-sw.html">free</a>. Free software is a matter of the users' freedom to run, copy, distribute, study, change and improve the software. If you find this program useful, please consider making a donation. A donation would not only demonstrate your appreciation of this software, but also help to advance development in the future. The easiest way to donate is to through PayPal—it's fast, free and secure. PayPal accepts all major credit cards and electronic checks.</b>
                        </p>
                  </td>
                </tr>

                <tr>
                  <td width="200" colspan="2" valign="middle" class="box-solid">
                    <div align="center" id="image">
                        <a href="http://www.cafeshops.com/cyberduck"><img src="img/store.jpg" width="128" height="128" align="middle" alt="Shop Cyberduck Gadgets" border="0"></img></a>
                    </div>
                  </td>
                  <td width="100%" bgcolor="#ffffff" valign="top" class="box-dash">
			             <p>Go shopping for Cyberduck gadgets in the <a href="http://www.cafeshops.com/cyberduck">Cafepress Cyberduck shop</a>!</p>
                  </td>
                </tr>
                
		
                <!-- ======= Download! ======== -->
                
                <tr>
                  <td width="200" colspan="2"></td>
                  <td width="100%" class="box-solid">
                      <b><a name="download">download</a></b>
                  </td>
                </tr>

                <!-- ======= 10.3 Alert ======== -->
		
                <tr>
                  <td colspan="3" class="alert">
                    Cyberduck has never been tested on any OS X version prior to 10.3. Your mileage may vary.
                  </td>
                </tr>

                <tr>
                  <td width="200" colspan="2" valign="middle" class="box-solid">
                    <div align="center">
                        <img src="img/x.gif" alt="Built for Mac OS X" border="0"></img>
                        <img src="img/macos.gif" alt="Built for Mac OS X" border="0"></img>
                    </div>
                  </td>
                  <td bgcolor="#ffffff" valign="top" class="box-dash">
                    <ul class="emphasized">
			             <li><b>2.3b2</b> <i>Apr-27-2004</i><br />
                        <a href="./download.php?Cyberduck-2.3beta2.dmg">Cyberduck-2.3beta2.dmg</a>
                        </li>
                        <!--
			             <li><b>2.3b1</b> <i>Mar-09-2004</i><br />
                        <a href="./download.php?Cyberduck-2.3beta1.dmg">Cyberduck-2.3beta1.dmg</a>
                        </li>
			             <li><b>2.2</b> <i>Mar-06-2004</i><br />
                        <a href="./download.php?Cyberduck-2.2.dmg">Cyberduck-2.2.dmg</a>
                        </li>
                        -->
                    </ul>
                    <p>While downloading, you can check out <a href="http://rothen.sudo.ch/3Danimation/duckstale.jsp">this cute 3D animation</a> about a <a href="http://rothen.sudo.ch/3Danimation/duckstaleabout.jsp">rubber duck</a> (although completely unrelated to Cyberduck) created by Norbert Kottmann and <a href="http://rothen.sudo.ch">Jan Rothen</a>. Enjoy!</p>
                  </td>
                </tr>
        	   
                <!-- ======= Mailing list ======== -->
                
                <tr>
                  <td width="200" colspan="2"></td>
                  <td class="box-solid">
                      <b><a name="lists">mailing list</a></b>
                  </td>
                </tr>
                <tr>
                  <td width="200" colspan="2" valign="middle" class="box-solid">
                      <div align="center">
                        <img src="img/mailman.jpg" alt="Mailing list" border="0"></img>
                    </div>
                  </td>
                  <td width="100%" bgcolor="#ffffff" valign="top" class="box-dash">
                  <p>
                    You can subscribe to the <a href="http://lists.cyberduck.ch/mailman/listinfo/cyberduck-news">Cyberduck-news</a> mailing list to get a notification when a new version is released.
                    </p>
                    <form Method=POST ACTION="http://lists.cyberduck.ch/mailman/subscribe/cyberduck-news">
                        <p>Your email address:
                            <input type="Text" name="email" size="30" value=""></input>
                            <input type="Submit" name="email-button" value="Subscribe"></input>
                        </p>
                    </form>
                  </td>
                </tr>
        	   
        	   <tr>
		          <td colspan="3" width="100%">
    			     <div align="right">
	    			<a href="http://validator.w3.org/check/referer">Validate</a>, $Date$
       	 		     </div>
		          </td>
		      </tr>
        </table>
    </div>
  </body>
</html>
