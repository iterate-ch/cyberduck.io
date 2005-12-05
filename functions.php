<?php
    function echoheader($dir) {
        return "
		<link rel=\"Stylesheet\" type=\"text/css\" href=\"".$dir."/stylesheet.css\"></link>
		<link rel=\"alternate\" type=\"application/rss+xml\" title=\"RSS 2.0\" href=\"http://cyberduck.ch/changelog.rss\"/>
      <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\"></meta>
		<script src=\"http://www.google-analytics.com/urchin.js\" type=\"text/javascript\">
		</script>
		<script type=\"text/javascript\">
		_uacct = \"UA-55660-1\";
		urchinTracker();
		</script>
";
    }

	  function echogoogle($colspan) {
	  		return "
	<tr>
	  		<td class=\"alert\" colspan=\"".$colspan."\">
	  		<script type=\"text/javascript\"><!--
	  		google_ad_client = \"pub-9176652804694766\";
	  		google_ad_width = 728;
	  		google_ad_height = 90;
	  		google_ad_format = \"728x90_as\";
	  		google_ad_type = \"text\";
	  		google_ad_channel =\"\";
	  		google_color_border = \"0066CC\";
	  		google_color_bg = \"0066CC\";
	  		google_color_link = \"FFFFFF\";
	  		google_color_url = \"FFCC33\";
	  		google_color_text = \"FFFFFF\";
	  		//--></script>
	  		<script type=\"text/javascript\"
	  		  src=\"http://pagead2.googlesyndication.com/pagead/show_ads.js\">
	  		</script>			</td>
	  	</tr>";
		}
	
	function echologo($dir) {
		return "	    <div id=\"logo\"><img id=\"icon\" src=
		\"$dir/img/cyberduck.icon.png\" width=\"128\" height=\"128\" alt=
		\"Cyberduck\"  /></div>
		";
	}
    function echotitle($dir) {
        return "<div id=\"title\"><h1 id=\"maintitle\">Cyberduck</h1><h3 id=\"subtitle\">FTP and SFTP Browser for Mac OS X. <b class=\"light\">Universal.</b></h3></div>
<div id=\"donate\"><a href=\"$dir/donate\"><img id=\"amazon\" src=\"$dir/img/amazon.png\"
	 alt=\"Amazon\"></img></a>
		<a href=\"$dir/donate\"><img id=\"paypal\" src=\"$dir/img/paypal.gif\"
		 alt=\"Paypal\"></img></a></div>";
    }
    
    function echosubmenu($dir) {
    	return "
		<div id=\"navigation\">
			<ul>
              <li><a id=\"navigation-index\" href=\"".$dir."/index.php\">about</a></li>
              <li><a id=\"navigation-features\" href=\"".$dir."/features.php\">features</a></li>
              <li><a id=\"navigation-changelog\" href=\"".$dir."/changelog.php\">changelog</a></li>
              <li><a class=\"ext-link\" id=\"navigation-forum\" href=\"http://forum.cyberduck.ch/\">forum</a></li>
              <li><a class=\"ext-link\" id=\"navigation-trac\" href=\"http://trac.cyberduck.ch/\">development</a></li>
              <li><a id=\"navigation-source\" href=\"".$dir."/source.php\">source</a></li>
<li><a id=\"navigation-help\" href=\"".$dir."/help\">help</a></li>
			</ul>
		</div>";
    }

   function echomenu() {
              return "<a href=\"http://sudo.ch/\">sudo.ch</a> | <a href=\"http://cyberduck.ch/\">cyberduck.ch</a>";
     }

?>
