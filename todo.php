<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
  include "../functions.php";
?>
<html lang="en">
    <?php echo(echoheader("~dkocher | cyberduck | todo", ".")); ?>
  <body bgcolor="#ffffff">
    <div align="center" class="standard">
      <table border="0" cellpadding="5" cellspacing="5" width="700">
                <tr>
                  <td width="200" colspan="2" valign="top" class="box-solid">
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
                      <b><a name="todo">todo</a></b>
                  </td>
                </tr>

                <tr>
                  <td colspan="2"></td>
                  <td class="alert">
                    Contributors needed! Anyone willing to work on a subject listed below or another part of the project is welcome.
                  </td>
                </tr>

                <tr>
                  <td colspan="2"></td>
                  <td class="box-dash">
                      <ul>
                            <li>Defining an AppleScript dictionary</li>
                            <li>FTP-SSL Support</li>
                            <li>Kerberos (GSSAPI) Authentication</li>
                      </ul>
                  </td>
                </tr>
                
                <tr>
                    <td colspan="2"></td>
                    <td>
                        <div align="right">
                            <a href="http://validator.w3.org/check/referer">Validate</a>, $Date$
                        </div>
		    </td>
		</tr>
      </table>
    </div>
  </body>
</html>
