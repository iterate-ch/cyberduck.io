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
			Support the development of Cyberduck by making a <a href="https://www.paypal.com/xclick/business=dkocher%40cyberduck.ch&item_name=Cyberduck&item_number=1&no_shipping=1&no_note=1&tax=0&currency_code=USD&lc=US" title="Thanks!">donation</a> :)
			     </td>
                </tr>
                <tr>
                  <td width="128" colspan="2" valign="top" class="box-solid">
                      <img src="img/cyberduck.icon.jpg" align="center" width="128" height="128" alt="Cyberduck" border="0"></img>
                  </td>
                  <td class="box-solid">
                    <div class="underline"><?php echo(echomenu(".."));?></div>
                    	<br />
                    	<h1>Cyberduck</h1>
			<h3>FTP and SFTP Browser for Mac OS X</h3>
                    <div align="left">
                      <a href="index.php">about</a> | 
                      <a href="index.php#download">download</a> | 
                      <a href="features.php">features</a> | 
                      <a href="source.php">source code</a> | 
                      <a href="history.php">history</a> | 
                      <a href="license.php">license</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td colspan="2"></td>
                  <td class="box-solid">
                    <div align="left">
                      <a name="license">license</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td colspan="2" class="box-solid">
                    <div align="center">
                        <img src="./img/gnu.jpg" alt="GNU GPL Software" border="0"></img>
                    </div>
		</td>
		<td bgcolor="#ffffff" valign="top" class="box-dash">
                          <p>
Copyright (c) 2004 David Kocher. All rights reserved.
                          </p>
                          <p>
This program is free software; you can redistribute it and/or modify
it under the terms of the <a href="License.txt">GNU General Public License</a> as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.
                          </p>
                          <p>
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
                          </p>
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
