<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
  include "functions.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<?php echo(echoheader("~dkocher | cyberduck | todo", ".")); ?>
	<body id="todo" bgcolor="#FFFFFF">
		<div align="center" class="standard">
			<table border="0" cellpadding="5" cellspacing="5" width="700">
			<?php echo(echogoogle());?>
				<tr>
					<td width="200" colspan="2" valign="top" class="box-solid">
						<div align="center">
							<img src="img/cyberduck.icon.jpg" width="128" height="128" alt="Cyberduck" border="0" />
						</div>
					</td>
					<td width="100%" class="box-solid">
						<div class="underline">
                        <?php echo(echomenu(".."));?>
						</div><br />
                    <?php echo(echotitle());?>
						<div align="left">
                        <?php echo(echosubmenu());?>
						</div>
					</td>
				</tr>
				<tr>
					<td colspan="2"></td>
					<td class="box-solid"><strong>todo</strong></td>
				</tr>
				<tr>
					<td colspan="2"></td>
					<td class="alert">Contributors needed! Anyone willing to work on a subject listed below or another part of the project is welcome.
					</td>
				</tr>
				<tr>
					<td colspan="2"></td>
					<td class="box-dash">
						<ul>
							<li>Column View</li>
							<li>Outline View</li>
							<li><strike>AppleScript Support</strike> [v2.4b3]</li>
							<li>FTP-SSL Support</li>
<!--                        <li>Supporting ssh-agent Authentication</li>-->
<!--                        <li>Kerberos (GSSAPI) Authentication</li>-->
							<li><strike>Apply permissions recursively</strike> [v2.4]</li>
							<li><strike>Support for Novell Netware file listings (FTP)</strike> [v2.4]</li>
							<li><strike>Synchronization</strike> [v2.4]</li>
							<li><strike>Select a file in the browser by typing its first character</strike> [v2.4]</li>
							<li><strike>Limit number of open simultanous connections to a remote host</strike> [v2.4]</li>
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
