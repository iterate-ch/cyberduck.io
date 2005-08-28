<?php
    function echoheader($title, $dir) {
        return "
        <link rel=\"Shortcut Icon\" href=\"".$dir."/favicon.ico\"></link>
        <link rel=\"Stylesheet\" type=\"text/css\" href=\"".$dir."/stylesheet.css\"></link>
		<link rel=\"alternate\" type=\"application/rss+xml\" title=\"RSS 2.0\" href=\"http://cyberduck.ch/changelog.rss\"/>
        <meta http-equiv=\"content-type\" content=\"text/html; charset=iso-8859-1\"></meta>
        <title>".$title."</title>
        ";
    }

	function echogoogle() {
   	return "<tr>                <td colspan=\"3\" bgcolor=\"#FFFFFF\" class=\"box-dash\">        <script type=\"text/javascript\"><!--google_ad_client = \"pub-9176652804694766\";google_ad_width = 728;google_ad_height = 90;google_ad_format = \"728x90_as\";google_ad_channel =\"\";google_ad_type = \"text\";google_color_border = \"B4D0DC\";google_color_bg = \"ECF8FF\";google_color_link = \"0000CC\";google_color_url = \"008000\";google_color_text = \"6F6F6F\";//--></script><script type=\"text/javascript\"  src=\"http://pagead2.googlesyndication.com/pagead/show_ads.js\"></script>                </td>            </tr>";
	}
    
    function echotitle() {
        return "
        <h1>Cyberduck</h1>
        <h3>FTP and SFTP Browser for Mac OS X. <!--<b class=\"light\">Universal.</b>--></h3>
        ";
    }
    
    function echosubmenu($dir) {
    	return "
		<div id=\"navigation\">
			<ul>
              <li><a id=\"index\" href=\"".$dir."/index.php\">about</a></li>
              <li><a id=\"features\" href=\"".$dir."/features.php\">features</a></li>
              <li><a id=\"changelog\" href=\"".$dir."/changelog.php\">changelog</a></li>
              <li><a id=\"forum\" href=\"".$dir."/forum/\">forum</a></li>
              <li><a id=\"source\" href=\"".$dir."/source.php\">source code</a></li>
              <li><a id=\"license\" href=\"".$dir."/license.php\">license</a></li>
              <li><a id=\"donate\" href=\"".$dir."/donate/index.php\"><strong>donate</strong></a></li>
			</ul>
		</div>";
    }
    
    function echomenu($dir) {
   		return "<a href=\"http://sudo.ch/\">sudo.ch</a> | <a href=\"http://cyberduck.ch/\">cyberduck.ch</a>";
    }
?>
