<?php
    function echoheader($title, $dir) {
        return "
        <head>
        <link rel=\"Shortcut Icon\" href=\"".$dir."/favicon.ico\"></link>
        <link rel=\"Stylesheet\" type=\"text/css\" href=\"".$dir."/stylesheet.css\"></link>
        <meta http-equiv=\"content-type\" content=\"text/html; charset=iso-8859-1\"></meta>
        <title>".$title."</title>
        </head>
        ";
    }
    
    function echogoogle() {
            return "<tr>
                <td colspan=\"3\" width=\"100%\" bgcolor=\"#FFFFFF\" class=\"box-dash\">
        <script type=\"text/javascript\"><!--
google_ad_client = \"pub-9176652804694766\";
google_ad_width = 728;
google_ad_height = 90;
google_ad_format = \"728x90_as\";
google_ad_channel =\"\";
google_ad_type = \"text\";
google_color_border = \"B4D0DC\";
google_color_bg = \"ECF8FF\";
google_color_link = \"0000CC\";
google_color_url = \"008000\";
google_color_text = \"6F6F6F\";
//--></script>
<script type=\"text/javascript\"
  src=\"http://pagead2.googlesyndication.com/pagead/show_ads.js\">
</script>
                </td>
            </tr>";
	}
    
    function echotitle() {
        return "
        <div class=\"emphasized\"><h1>Cyberduck</h1>
        <h3>FTP and SFTP Browser for Mac OS X</h3></div>
        ";
    }

    function echosubmenu() {
    	return "
              <a id=\"index\" href=\"index.php\">about</a> | 
              <a id=\"index\" href=\"index.php#download\">download</a> | 
              <a id=\"features\" href=\"features.php\">features</a> | 
              <a id=\"changelog\" href=\"changelog.php\">changelog</a> | 
              <a id=\"forum\" href=\"http://forums.cocoaforge.com/viewforum.php?f=9\">forum</a> | 
              <a id=\"source\" href=\"source.php\">source code</a> | 
              <a id=\"todo\" href=\"todo.php\">todo</a> | 
              <a id=\"license\" href=\"license.php\">license</a> |
              <a id=\"donate\" href=\"./donate/index.php\"><strong>donate</strong></a>";
    }
    
    function echomenu($dir) {
   		return "<div class=\"emphasized\"><a href=\"http://sudo.ch/\">sudo.ch</a> | <a href=\"http://cyberduck.ch/\">cyberduck.ch</a></div>";
    }

    function echofooter($dir) {
//        return "<tr>
//			<td class=\"box-dash\" colspan=\"3\">
//				<div align=\"right\">
//        		<img src=\"img/made_with_cocoa.png\" width=\"150\" height=\"60\" alt=\"Made with Cocoa\" border=\"0\"></img>
//        		</div>
//      	</td>
//        </tr>";
//		return "<a  href=\"http://sourceforge.net\"><img  src=\"http://sourceforge.net/sflogo.php?group_id=106337&amp;type=4\" width=\"125\" height=\"37\" border=\"0\" alt=\"SourceForge.net Logo\"  /></a>";
    }
    
    function echoDonation() {
        return "<tr>
                  <td colspan=\"3\" class=\"alert\">
                    Support the development of Cyberduck by making a donation :)
			     </td>
                </tr>";
    }
    
    function echoSoftwarePatents() {
/*        return "<tr>
                  <td colspan=\"3\" class=\"sp\">
		<div align=\"right\">
			<a href=\"http://petition.eurolinux.org\"><img src=\"http://aful.org/images/patent_button.png\" alt=\"Help us to Fight For a Software Patent Free Europe\" border=\"0\"></img></a>
   		</div>
			     </td>
                </tr>";
*/
    }

    function counter() {
            $aprif = fopen("counter.txt","r+");
            $hits = fgets($aprif, 16);
            $hits += 1;
                rewind($aprif);
                fputs($aprif,$hits);
                fputs($aprif,"\n");
                fclose($aprif);
            return "&lt;$hits&gt;";	
    } 
    
    function listdir($dirname, $extension) {
        $d = dir($dirname);
        $cards;
        $i = 0;
        while($entry = $d->read()) {
            if ($entry != "." && $entry != "..") {
                if (is_dir($dirname."/".$entry)) {
                        next;//getDirList($dirName."/".$entry);
                } 
                else {
                    if(strstr($entry, $extension)) {
                        $cards[$i] = $entry;
                        $i++;
                    }
                }
            }
        }
        $d->close();
        return $cards;
    }
?>
