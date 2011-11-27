<?php
	function echoheader($dir) {
		return "
			<link rel='Stylesheet' type='text/css' href='".$dir."/stylesheet.css' />
			<link rel='alternate' type='application/rss+xml' title='RSS 2.0' href='http://cyberduck.ch/changelog.rss' />
			<link rel='shortcut icon' href='http://media.cyberduck.ch/favicon.ico' type='image/vnd.microsoft.icon' />

			<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js' type='text/javascript'></script>

			<meta http-equiv='content-type' content='application/xhtml; charset=utf-8' />
			<meta name='verify-v1' content='oRWGrJdrdxdw/s7np84vtm1fMFPyoTGsh7vhwiKJK4U=' />

			<script type=\"text/javascript\">
				var _gaq = _gaq || [];
				_gaq.push(['_setAccount', 'UA-3203018-1']);
				_gaq.push(['_trackPageview']);

				(function() {
					var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
					ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
					var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
				})();
			</script>
		";
	}

	  function echogoogle() {
		return "
			<div class='google-banner'>
				<script type='text/javascript'>
					<!--
					google_ad_client = 'ca-pub-9176652804694766';
					google_ad_slot = '8890551797';
					google_ad_width = 728;
					google_ad_height = 90;
					//-->
				</script>
				<script type='text/javascript'
					src='http://pagead2.googlesyndication.com/pagead/show_ads.js'>
				</script>
			</div>";
		}

	function echoamazon() {
		return "<script type='text/javascript'><!--
		amazon_ad_tag = 'httpcybech-21'; amazon_ad_width = '728'; amazon_ad_height = '90'; amazon_ad_price = 'retail'; amazon_ad_border = 'hide';//--></script>
		<script type='text/javascript' src='http://www.assoc-amazon.de/s/ads.js'></script>";
	}
	
	function echologo($dir) {
		return "
			<div id='metanav'>
					<ul id='lang'>
							<li><a href='?l=en'>English</a></li>
							<li><a href='?l=ja'>日本語</a></li>
					</ul>
					<script charset='utf-8' type='text/javascript'>
					//<![CDATA[
							$(document).ready(function() {
									$('#metanav #lang a').click(function() {
											var l = this.href.match(/\?l=(\w{2})$/);
											document.cookie='language='+l[1]+';path=/;domain=.cyberduck.ch';
									});
							});
					//]]>
					</script>
					<a href='http://cyberduck.ch/appstore'><img width='128px' alt='Mac App Store' src='".$dir."/img/mas' /></a>	
			</div>
			<div id='logo'><a href='http://cyberduck.ch'><img id='icon' src='http://media.cyberduck.ch/img/cyberduck.icon.png' width='192' height='192' alt='Cyberduck'/></a></div>";
	}
	
	function echocaption($dir) {
		return "<div id='title'><h1 id='maintitle'>Cyberduck</h1><h3 id='subtitle'><a href='http://www.gnu.org/philosophy/free-sw.html'>Open source</a> FTP, SFTP, WebDAV, Cloud Files, <br />Google Docs &amp; Amazon S3 Browser for Mac &amp; Windows.</h3></div>";
	}

	function echotitle($page) {
		return "Cyberduck – $page";
	}
	
	function echosubmenu($dir) {
		return "
			<div id='navigation'>
				<ul>
					<li><a accesskey='a' id='navigation-index' href='".$dir."/'>about</a></li>
					<li><a id='navigation-news' href='http://blog.cyberduck.ch/'>news</a></li>
					<li><a accesskey='c' id='navigation-changelog' href='".$dir."/changelog/'>changelog</a></li>
					<li><a accesskey='d' id='navigation-trac' href='http://trac.cyberduck.ch/'>development</a></li>
					<li><a accesskey='h' id='navigation-help' href='http://help.cyberduck.ch/en'>help</a></li>
					<li><a id='navigation-donate' href='".$dir."/donate'>donations</a></li>
				</ul>
			</div>";
	}
?>
