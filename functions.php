<?php
    function echoheader($dir) {
        return "
		<link rel=\"Stylesheet\" type=\"text/css\" href=\"".$dir."/stylesheet.css\" />
		<link rel=\"alternate\" type=\"application/rss+xml\" title=\"RSS 2.0\" href=\"http://cyberduck.ch/changelog.rss\" />
		<link rel=\"shortcut icon\" href=\"".$dir."/favicon.ico\" type=\"image/vnd.microsoft.icon\" />
		<meta http-equiv=\"content-type\" content=\"application/xhtml; charset=utf-8\" />
		<meta name=\"verify-v1\" content=\"oRWGrJdrdxdw/s7np84vtm1fMFPyoTGsh7vhwiKJK4U=\" />
";
    }

function echodonate($dir) {
	return "
		        <form action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\">
		<input type=\"hidden\" name=\"cmd\" value=\"_xclick\">
		<input type=\"hidden\" name=\"business\" value=\"dkocher@cyberduck.ch\">
		<input type=\"hidden\" name=\"item_name\" value=\"Cyberduck\">
		<input type=\"hidden\" name=\"item_number\" value=\"Cyberduck\">
		<input type=\"hidden\" name=\"no_shipping\" value=\"2\">
		<input type=\"hidden\" name=\"no_note\" value=\"1\">
		<input type=\"hidden\" name=\"currency_code\" value=\"EUR\">
		<input type=\"hidden\" name=\"tax\" value=\"0\">
		<input type=\"hidden\" name=\"bn\" value=\"PP-DonationsBF\">
		<input type=\"hidden\" name=\"lc\" value=\"en\">
		<input type=\"image\" src=\"https://www.paypal.com/en_US/i/btn/x-click-butcc-donate.gif\" border=\"0\" name=\"submit\" alt=\"Make payments with PayPal - it's fast, free and secure!\">
		<img alt=\"\" border=\"0\" src=\"https://www.paypal.com/en_US/i/scr/pixel.gif\" width=\"1\" height=\"1\">
		</form>

";
}

	  function echogoogle() {
	  		return "<div align=\"center\" class=\"alert\">
	  		<script type=\"text/javascript\"><!--
	  		google_ad_client = \"pub-9176652804694766\";
			google_ad_width = 728;
 	  		google_ad_height = 90;
			google_ad_slot = \"8890551797\";
	  		google_ad_type = \"text\";
	  		//--></script>
	  		<script type=\"text/javascript\"
	  		  src=\"http://pagead2.googlesyndication.com/pagead/show_ads.js\">
	  		</script></div>";
		}

    function echoamazon() {
					return "<script type=\"text/javascript\"><!--
					amazon_ad_tag = \"httpcybech-21\"; amazon_ad_width = \"728\"; amazon_ad_height = \"90\"; amazon_ad_price = \"retail\"; amazon_ad_border = \"hide\";//--></script>
					<script type=\"text/javascript\" src=\"http://www.assoc-amazon.de/s/ads.js\"></script>
		";
	}
	
	function echologo($dir) {
		return "	    <div id=\"logo\"><img id=\"icon\" src=
		\"$dir/img/cyberduck.icon.png\" width=\"128\" height=\"128\" alt=
		\"Cyberduck\"  /></div>
		";
	}
    function echocaption($dir) {
        return "<div id=\"title\"><h1 id=\"maintitle\">Cyberduck</h1><h3 id=\"subtitle\">FTP, SFTP, WebDAV, Cloud Files &amp; Amazon S3 Browser for Mac OS X.</h3></div>";
    }

	function echotitle($page) {
		return "Cyberduck | FTP, SFTP, WebDAV, Rackspace Cloud Files &amp; Amazon S3 Browser for Mac OS X | $page";
	}
    
    function echosubmenu($dir) {
    	return "
		<div id=\"navigation\">
			<ul>
              <li><a accesskey=\"a\" id=\"navigation-index\" href=\"".$dir."/\"><u>a</u>bout</a></li>
              <li><a accesskey=\"c\" id=\"navigation-changelog\" href=\"".$dir."/changelog/\"><u>c</u>hangelog</a></li>
<li><a class=\"ext\" href=\"http://sudo.ch/category/cyberduck/\">blog</a></li>
              <li><a accesskey=\"d\" id=\"navigation-trac\" href=\"http://trac.cyberduck.ch/\"><u>d</u>evelopment</a></li>
              <li><a accesskey=\"s\" id=\"navigation-source\" href=\"".$dir."/source/\"><u>s</u>ource</a></li>
              <li><a accesskey=\"o\" class=\"ext\" id=\"navigation-forum\" href=\"http://forum.cyberduck.ch/\">f<u>o</u>rum</a></li>
              <li><a accesskey=\"h\" id=\"navigation-help\" href=\"http://help.cyberduck.ch/\"><u>h</u>elp</a></li>
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
