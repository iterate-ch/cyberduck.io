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
                  <td colspan="2"></td>
                  <td class="box-solid">
                      <a name="code">source code</a>
                  </td>
                </tr>
                <tr>
                  <td colspan="2" class="box-solid">
                    <div align="center">
                        <img src="./img/javafile.png" alt="Java Source" border="0"></img>
                    </div>
                </td>
                  <td bgcolor="#ffffff" valign="top" class="box-dash">
                    <table  width="100%" border="0">
                      <tr>
                        <td>
                          <p>Source code is available licenced unter the <a href="http://www.gnu.org/licenses/gpl.html">GNU General Public Licence</a>. You need <a href="http://jakarta.apache.org/ant">Ant</a> to build .</p>
                          <p>You can browse the CVS repository <a href="http://sudo.ch/cgi-bin/viewcvs.cgi/cyberduck-cocoa/">here</a>. (Warning: Slow connection)
                          </p>
                          <p>You can checkout the current unstable version from the CVS repository. When prompted for a password for anonymous, simply press the Enter key.</p>
                          <p><tt>
                            cvs -d:pserver:anonymous@cvs.sourceforge.net:/home/cvsroot login 
                            <br />
                            cvs -z3 -d:pserver:anonymous@cvs.sourceforge.net:/home/cvsroot checkout cyberduck-cocoa 
                          </tt></p>
                          <ul>
                            <li><b>2.2b1</b> <i></i><br />
                            <a href="download.php?cyberduck-src-2.2beta1.tgz"> cyberduck-src-2.2beta1.tgz </a></li>
                          </ul>
                          <ul>
                            <li><b>2.1</b> <i>Dec-08-2003</i><br />
                            <a href="download.php?cyberduck-src-2.1.tgz"> cyberduck-src-2.1.tgz </a></li>
                          </ul>
                          <ul>
                            <li><b>2.1b5</b> <i>Aug-15-2003</i><br />
                            <a href="download.php?cyberduck-src-2.1beta5.tgz"> cyberduck-src-2.1beta5.tgz </a></li>
                          </ul>
                          <ul>
                            <li><b>2.1b4</b> <i>Aug-17-2003</i><br />
                            <a href="download.php?cyberduck-src-2.1beta4.tgz"> cyberduck-src-2.1beta4.tgz </a></li>
                          </ul>
                          <ul>
                            <li><b>2.1b3</b> <i>Aug-22-2003</i><br />
                            <a href="download.php?cyberduck-src-2.1beta3.tgz"> cyberduck-src-2.1beta3.tgz </a></li>
                          </ul>
                          <ul>
                            <li><b>2.1b2:</b> <i>Aug-29-2003</i><br />
                            <a href="download.php?cyberduck-src-2.1beta2.tgz"> cyberduck-src-2.1beta2.tgz </a></li>
                          </ul>
                        </td>
                      </tr>
                    </table>
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
