<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
  include "../functions.php";
?>
<html lang="en">
    <?php echo(echoheader("~dkocher | cyberduck | source", ".")); ?>
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
			<?php echo(echoSoftwarePatents());?>
        <tr>
          <td colspan="2"></td>
          <td class="box-solid">
              <b><a name="code">source code</a></b>
          </td>
        </tr>
        <tr>
          <td colspan="2" valign="middle" class="box-solid">
            <img src="./img/javafile.png" alt="Java Source" border="0"></img>
          </td>
          <td valign="top" class="box-dash">
                  <p>Source code is available licenced unter the <a href="http://www.gnu.org/licenses/gpl.html">GNU General Public Licence</a>. You need <a href="http://jakarta.apache.org/ant">Ant</a> and <a href="http://developer.apple.com/tools/macosxtools.html">xcodebuild</a> to build.</p>
                  <p>You can browse the CVS repository <a href="http://sudo.ch/cvs/cyberduck-cocoa/">here</a>. (Warning: Slow connection)
                  </p>
                  <p>You can checkout the current unstable version from the CVS repository. When prompted for a password for anonymous, simply press the Enter key.</p>
                  <p><tt>
                    cvs -d:pserver:anonymous@sudo.ch:/home/cvsroot login 
                    <br />
                    cvs -z3 -d:pserver:anonymous@sudo.ch:/home/cvsroot co cyberduck-cocoa 
                  </tt></p>
          </td>
        </tr>
        
        <tr>
          <td colspan="2"></td>
          <td class="box-dash">
              <ul>
                <li><b>2.3.3</b> <i>August-09-2004</i><br />
                <a href="cyberduck-src-2.3.3.tar.gz"> cyberduck-src-2.3.3.tar.gz </a></li>
              </ul>

              <ul>
                <li><b>2.3.2</b> <i>August-05-2004</i><br />
                <a href="cyberduck-src-2.3.2.tar.gz"> cyberduck-src-2.3.2.tar.gz </a></li>
              </ul>

              <ul>
                <li><b>2.3.1</b> <i>June-15-2004</i><br />
                <a href="cyberduck-src-2.3.1.tar.gz"> cyberduck-src-2.3.1.tar.gz </a></li>
              </ul>

              <ul>
                <li><b>2.3</b> <i>May-15-2004</i><br />
                <a href="cyberduck-src-2.3.tar.gz"> cyberduck-src-2.3.tar.gz </a></li>
              </ul>

              <ul>
                <li><b>2.3beta2</b> <i>Apr-27-2004</i><br />
                <a href="cyberduck-src-2.3beta2.tar.gz"> cyberduck-src-2.3beta2.tar.gz </a></li>
              </ul>

              <ul>
                <li><b>2.3beta1</b> <i>Mar-09-2004</i><br />
                <a href="cyberduck-src-2.3beta1.tar.gz"> cyberduck-src-2.3beta1.tar.gz </a></li>
              </ul>
              <ul>
                <li><b>2.2</b> <i>Mar-06-2004</i><br />
                <a href="cyberduck-src-2.2.tar.gz"> cyberduck-src-2.2.tar.gz </a></li>
              </ul>
              <ul>
                <li><b>2.2b6</b> <i>Feb-25-2004</i><br />
                <a href="cyberduck-src-2.2beta6.tar.gz"> cyberduck-src-2.2beta6.tar.gz </a></li>
              </ul>
              <ul>
                <li><b>2.2b5</b> <i>Feb-12-2004</i><br />
                <a href="cyberduck-src-2.2beta5.tar.gz"> cyberduck-src-2.2beta5.tar.gz </a></li>
              </ul>
              <ul>
                <li><b>2.2b4</b> <i>Jan-31-2004</i><br />
                <a href="cyberduck-src-2.2beta4.tar.gz"> cyberduck-src-2.2beta4.tar.gz </a></li>
              </ul>
              <ul>
                <li><b>2.2b3</b> <i>Jan-25-2004</i><br />
                <a href="cyberduck-src-2.2beta3.tar.gz"> cyberduck-src-2.2beta3.tar.gz </a></li>
              </ul>
              <ul>
                <li><b>2.2b2</b> <i>Jan-24-2004</i><br />
                <a href="cyberduck-src-2.2beta2.tar.gz"> cyberduck-src-2.2beta2.tar.gz </a></li>
              </ul>
              <ul>
                <li><b>2.2b1</b> <i>Jan-22-2004</i><br />
                <a href="cyberduck-src-2.2beta1.tar.gz"> cyberduck-src-2.2beta1.tar.gz </a></li>
              </ul>
              <ul>
                <li><b>2.1</b> <i>Dec-08-2003</i><br />
                <a href="cyberduck-src-2.1.tar.gz"> cyberduck-src-2.1.tar.gz </a></li>
              </ul>
              <ul>
                <li><b>2.1b5</b> <i>Aug-15-2003</i><br />
                <a href="cyberduck-src-2.1beta5.tar.gz"> cyberduck-src-2.1beta5.tar.gz </a></li>
              </ul>
              <ul>
                <li><b>2.1b4</b> <i>Aug-17-2003</i><br />
                <a href="cyberduck-src-2.1beta4.tar.gz"> cyberduck-src-2.1beta4.tar.gz </a></li>
              </ul>
              <ul>
                <li><b>2.1b3</b> <i>Aug-22-2003</i><br />
                <a href="cyberduck-src-2.1beta3.tar.gz"> cyberduck-src-2.1beta3.tar.gz </a></li>
              </ul>
              <ul>
                <li><b>2.1b2:</b> <i>Aug-29-2003</i><br />
                <a href="cyberduck-src-2.1beta2.tar.gz"> cyberduck-src-2.1beta2.tar.gz </a></li>
              </ul>
            </td>
          </tr>
          <tr>
            <td colspan="3">
    			<div align="right">
	    			<a href="http://validator.w3.org/check/referer">Validate</a>, $Date$
       	 		</div>
		    </td>
		</tr>
      </table>
    </div>
  </body>
</html>
