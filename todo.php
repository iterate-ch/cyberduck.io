<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
  include "functions.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<?php echo(echoheader("~dkocher | cyberduck | todo", ".")); ?>
	<body id="todo">
		<div align="center" class="standard">
			<table border="0" cellpadding="5" cellspacing="5" width="700">

				<tr>
	                <td bgcolor="#000000" width="150" valign="middle" class="box-solid">
						<div align="center"><img src="img/cyberduck.icon.black.jpg" width="128" height="128" alt="Cyberduck" border="0" /></div>
					</td>
					<td colspan="2" class="box-solid">
						<div class="underline">
                        <?php echo(echomenu(".."));?>
						</div><br />
                    <?php echo(echotitle());?>
						<div align="left">
                        <?php echo(echosubmenu("."));?>
						</div>
					</td>
				</tr>
				<tr>
					<td width="150"></td>
					<td colspan="2" class="box-solid"><strong>todo</strong></td>
				</tr>
				<tr>
					<td width="150"></td>
					<td colspan="2" class="alert">Contributors needed! Anyone willing to work on a subject listed below or another part of the project is welcome.
					</td>
				</tr>
				<tr>
					<td width="150"></td>
					<td colspan="2" class="box-dash">
						<p>See <a href="http://cvs.cyberduck.ch/cyberduck-cocoa/TODO?rev=HEAD&content-type=text/vnd.viewcvs-markup">http://cvs.cyberduck.ch/cyberduck-cocoa/TODO</a></p>
					</td>
				</tr>
				<tr>
					<td width="150"></td>
					<td colspan="2">
						<div align="right">
							<a href="http://validator.w3.org/check/referer">Validate</a>, $Date$
						</div>
					</td>
				</tr>
			</table>
		</div>
	</body>
</html>
