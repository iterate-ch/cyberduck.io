<?php
    function echoheader($dir) {
        return "
		<link rel=\"Stylesheet\" type=\"text/css\" href=\"".$dir."/stylesheet.css\"></link>
		<link rel=\"alternate\" type=\"application/rss+xml\" title=\"RSS 2.0\" href=\"http://cyberduck.ch/changelog.rss\" />
		<link rel=\"shortcut icon\" href=\"".$dir."/favicon.ico\" type=\"image/vnd.microsoft.icon\" />
		<meta http-equiv=\"content-type\" content=\"application/xhtml; charset=utf-8\"></meta>
		<meta name=\"verify-v1\" content=\"Hc7e/v4mfc4jwCrvdWUfI+jYYf0SUlL5PNBtrfbx9Wc=\" />
";
    }

function echodonate($dir) {
	return "
            <form action=\"https://www.paypal.com/cgi-bin/webscr\"
            method=\"post\">
<input type=\"hidden\" name=\"lc\" value=\"US\" />
              <input type=\"hidden\" name=\"cmd\" value=
              \"_s-xclick\" /><input type=\"image\" id=\"paypal\" src=
              \"".$dir."/img/paypal.gif\" name=\"submit\" alt=
              \"Make payments with PayPal - it's fast, free and secure!\" /><input type=\"hidden\"
              name=\"encrypted\" value=
              \"-----BEGIN PKCS7-----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-----END PKCS7----- \" />
";
</form>
}

	  function echogoogle() {
	  		return "<div align=\"center\" class=\"alert\">
	  		<script type=\"text/javascript\"><!--
	  		google_ad_client = \"pub-9176652804694766\";
	  		google_ad_width = 728;
	  		google_ad_height = 90;
	  		google_ad_format = \"728x90_as\";
	  		google_ad_type = \"text\";
			//2007-04-04: Leaderboard
			google_ad_channel = \"5576259439\";
	  		google_color_border = \"0066CC\";
	  		google_color_bg = \"0066CC\";
	  		google_color_link = \"FFFFFF\";
	  		google_color_url = \"FFCC33\";
	  		google_color_text = \"FFFFFF\";
	  		//--></script>
	  		<script type=\"text/javascript\"
	  		  src=\"http://pagead2.googlesyndication.com/pagead/show_ads.js\">
	  		</script></div>";
		}
	
	function echologo($dir) {
		return "	    <div id=\"logo\"><img id=\"icon\" src=
		\"$dir/img/cyberduck.icon.png\" width=\"128\" height=\"128\" alt=
		\"Cyberduck\"  /></div>
		";
	}
    function echotitle($dir) {
        return "<div id=\"title\"><h1 id=\"maintitle\">Cyberduck</h1><h3 id=\"subtitle\">FTP/SFTP/WebDAV/S3 Browser for Mac OS X.</h3></div>
<div id=\"donate-absolute\">
	<a href=\"$dir/donate\"><img id=\"amazon\" src=\"$dir/img/amazon.png\" alt=\"Amazon\"></img></a>
".echodonate($dir)."
		</div>";
    }
    
    function echosubmenu($dir) {
    	return "
		<div id=\"navigation\">
			<ul>
              <li><a accesskey=\"a\" id=\"navigation-index\" href=\"".$dir."/\"><u>a</u>bout</a></li>
              <li><a accesskey=\"c\" id=\"navigation-changelog\" href=\"".$dir."/changelog.php\"><u>c</u>hangelog</a></li>
              <li><a accesskey=\"d\" id=\"navigation-trac\" href=\"http://trac.cyberduck.ch/\"><u>d</u>evelopment</a></li>
              <li><a accesskey=\"s\" id=\"navigation-source\" href=\"".$dir."/source.php\"><u>s</u>ource</a></li>
              <li><a accesskey=\"o\"class=\"ext\" id=\"navigation-forum\" href=\"http://forum.cyberduck.ch/\">f<u>o</u>rum</a></li>
              <li><a accesskey=\"h\"class=\"ext\" id=\"navigation-help\" href=\"http://help.cyberduck.ch/\"><u>h</u>elp</a></li>
              <li><a id=\"navigation-donate\" href=\"".$dir."/donate\">donations</a></li>
			</ul>
		</div>";
    }

	function echoanalytics() {
		return "<script type=\"text/javascript\">
var gaJsHost = ((\"https:\" == document.location.protocol) ? \"https://ssl.\" : \"http://www.\");
document.write(unescape(\"%3Cscript src='\" + gaJsHost + \"google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E\"));
</script>
<script type=\"text/javascript\">
var pageTracker = _gat._getTracker(\"UA-3203018-1\");
pageTracker._initData();
pageTracker._trackPageview();
</script>";
	}
?>
