<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
  include "../functions.php";
?>
<html lang="en">
    <?php echo(echoheader("~dkocher | cyberduck | source", "..")); ?>
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
                            cvs -d:pserver:anonymous@sudo.ch:/home/cvsroot login 
                            <br />
                            cvs -z3 -d:pserver:anonymous@sudo.ch:/home/cvsroot checkout cyberduck-cocoa 
                          </tt></p>

                          <ul>
                            <li><b>2.2b6</b> <i>Feb-25-2004</i><br />
                            <a href="cyberduck-src-2.2beta6.tar"> cyberduck-src-2.2beta6.tar </a></li>
                          </ul>
                          <!--
                          <ul>
                            <li><b>2.2b5</b> <i>Feb-12-2004</i><br />
                            <a href="cyberduck-src-2.2beta5.tgz"> cyberduck-src-2.2beta5.tgz </a></li>
                          </ul>
                          <ul>
                            <li><b>2.2b4</b> <i>Jan-31-2004</i><br />
                            <a href="cyberduck-src-2.2beta4.tgz"> cyberduck-src-2.2beta4.tgz </a></li>
                          </ul>
                          <ul>
                            <li><b>2.2b3</b> <i>Jan-25-2004</i><br />
                            <a href="cyberduck-src-2.2beta3.tgz"> cyberduck-src-2.2beta3.tgz </a></li>
                          </ul>
                          <ul>
                            <li><b>2.2b2</b> <i>Jan-24-2004</i><br />
                            <a href="cyberduck-src-2.2beta2.tgz"> cyberduck-src-2.2beta2.tgz </a></li>
                          </ul>
                          <ul>
                            <li><b>2.2b1</b> <i>>Jan-22-2004</i><br />
                            <a href="cyberduck-src-2.2beta1.tgz"> cyberduck-src-2.2beta1.tgz </a></li>
                          </ul>
                          -->
                          <ul>
                            <li><b>2.1</b> <i>Dec-08-2003</i><br />
                            <a href="cyberduck-src-2.1.tgz"> cyberduck-src-2.1.tgz </a></li>
                          </ul>
                          <!--
                          <ul>
                            <li><b>2.1b5</b> <i>Aug-15-2003</i><br />
                            <a href="cyberduck-src-2.1beta5.tgz"> cyberduck-src-2.1beta5.tgz </a></li>
                          </ul>
                          <ul>
                            <li><b>2.1b4</b> <i>Aug-17-2003</i><br />
                            <a href="cyberduck-src-2.1beta4.tgz"> cyberduck-src-2.1beta4.tgz </a></li>
                          </ul>
                          <ul>
                            <li><b>2.1b3</b> <i>Aug-22-2003</i><br />
                            <a href="cyberduck-src-2.1beta3.tgz"> cyberduck-src-2.1beta3.tgz </a></li>
                          </ul>
                          <ul>
                            <li><b>2.1b2:</b> <i>Aug-29-2003</i><br />
                            <a href="cyberduck-src-2.1beta2.tgz"> cyberduck-src-2.1beta2.tgz </a></li>
                          </ul>
                          -->
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
	    			<a href="http://validator.w3.org/check/referer">Validate</a>, $Date$
       	 		</div>
		    </td>
		</tr>
      </table>
    </div>
  </body>
</html>
