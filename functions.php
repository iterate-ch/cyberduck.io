<?php
    function echoheader($title, $dir) {
        return "
		<link rel=\"Stylesheet\" type=\"text/css\" href=\"".$dir."/stylesheet.css\"></link>
		<link rel=\"alternate\" type=\"application/rss+xml\" title=\"RSS 2.0\" href=\"http://cyberduck.ch/changelog.rss\"/>
      <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\"></meta>
      <title>".$title."</title>
";
    }

  function echogoogle() {
  		return "";
	}
	
	
	function echologo($dir) {
		return "	    <div id=\"logo\"><img id=\"icon\" src=
		\"$dir/img/cyberduck.icon.png\" width=\"128\" height=\"128\" alt=
		\"Cyberduck\" border=\"0\" /></div>
		";
	}
    function echotitle() {
        return "<h1 id=\"title\">Cyberduck</h1><h3 id=\"subtitle\">FTP and SFTP Browser for Mac OS X. <b class=\"light\">Universal.</b></h3>";
    }
    
    function echosubmenu($dir) {
    	return "
		<div id=\"navigation\">
			<ul>
              <li><a id=\"navigation-index\" href=\"".$dir."/index.php\">about</a></li>
              <li><a id=\"navigation-features\" href=\"".$dir."/features.php\">features</a></li>
              <li><a id=\"navigation-changelog\" href=\"".$dir."/changelog.php\">changelog</a></li>
              <li><a id=\"navigation-forum\" href=\"".$dir."/forum/\">forum</a></li>
              <li><a id=\"navigation-source\" href=\"".$dir."/source.php\">source</a></li>
              <li><a id=\"navigation-reviews\" href=\"".$dir."/reviews.php\">reviews</a></li>
              <li><a id=\"navigation-license\" href=\"".$dir."/license.php\">license</a></li>
              <li><a id=\"navigation-donate\" href=\"".$dir."/donate/\"><strong>donate</strong></a></li>
			</ul>
		</div>";
    }

   function echomenu($dir) {
              return "<a href=\"http://sudo.ch/\">sudo.ch</a> | <a href=\"http://cyberduck.ch/\">cyberduck.ch</a>";
     }

?>
