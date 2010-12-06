<?php
if (isset($_GET['l'])) { 
	setcookie("language", $_GET['l'], time()+60*60*24*30, "/");// ,".cyberduck.ch"); 
}
?>
