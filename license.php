<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
  include "functions.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<?php echo(echoheader("~dkocher | cyberduck | license", ".")); ?>
	<body id="license" bgcolor="#FFFFFF">
		<div align="center" class="standard">
			<table border="0" cellpadding="5" cellspacing="5" width="700">
			<?php echo(echogoogle());?>
				<tr>
	                <td width="150" valign="middle" class="box-solid">
						<div align="center"><img src="img/cyberduck.icon.jpg" width="128" height="128" alt="Cyberduck" border="0" /></div>
					</td>
					<td colspan="2" class="box-solid">
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
					<td width="150"></td>
					<td colspan="2" class="box-solid">
						<div align="left">
							<strong>license</strong>
						</div>
					</td>
				</tr>
				<tr>
					<td width="150" class="box-solid">
						<div align="center">
							<img src="./img/gnu.jpg" alt="GNU GPL Software" border="0" />
						</div>
					</td>
					<td colspan="2" valign="top" class="box-dash">
						<p>Copyright (c) 2004 David Kocher. All rights reserved.</p>
						<p>This program is free software; you can redistribute it and/or modify it under the terms of the <a href="License.txt">GNU General Public License</a> as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.
						</p>
						<p>This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
						</p>
					</td>
				</tr>
				<tr>
					<td width="150"></td>
					<td colspan="2" valign="top" class="box-dash">This products includes software developed by <strong>sshtools.com</strong> (<a href="http://www.sshtools.com">http://www.sshtools.com</a>), <strong>enterprisedt</strong> (<a href="http://www.enterprisedt.com">http://www.enterprisedt.com</a>) and the <strong>Apache Software Foundation</strong> (<a href="http://jakarta.apache.org">http://jakarta.apache.org</a>).
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
