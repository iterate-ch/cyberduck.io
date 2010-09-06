<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php include "../functions.php"; ?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<?php echo(echoheader("..")); ?>
	<?php
		define('MAGPIE_DIR',  './magpierss-0.72/');
		// access magpie libraries
		require_once(MAGPIE_DIR.'rss_fetch.inc');
		require_once(MAGPIE_DIR.'rss_utils.inc');
		
		define('MAGPIE_INPUT_ENCODING', 'UTF-8');
		define('MAGPIE_OUTPUT_ENCODING', 'UTF-8');

		define('MAGPIE_CACHE_ON', true);
	?>

	<title><?php echo(echotitle("News")); ?></title>
</head>

<body id="news">
	<div id="header">
		<?php echo(echologo(".."));?><?php echo(echocaption(".."));?><?php echo(echosubmenu(".."));?>
		<style type="text/css"  media="all">
		/* begin styles for RSS Feed */
			#content #feed {
				padding-bottom: 10px;
				border-right: 1px solid #E5E5DB;
			}
			
			#content #feed small {
				padding-left: 10px;
			}

			#content #feed h2 {
				background-color: #E5E5DB;
				padding: 2px;
				padding-left: 10px;
				margin-bottom: 0;
				padding-top:10px;
				padding-bottom:5px;
			}
			
			#content #feed .entry {
				background-color: white;
				border-bottom: 1px solid white;
			}

			#content #feed .entry li {
				margin: 7px 0px 8px 10px;
				display:list-item;
			}

			#content #feed .entry p, .entry ul {
				padding-left:10px;
			}

.entry ul {
        list-style: none;
	text-indent: -12px;
}

.entry ul li:before {
        content: "\00BB \0020";
}

		</style>
	</div>

	<div id="container">
		<div id="maincolumn">
			<div id="content">
				<div id="feed">
					<?php
						//$rss = fetch_rss("http://cyberduck.ch/changelog.rss");
						$rss = fetch_rss("http://sudo.ch/category/cyberduck/feed/atom");
						foreach ($rss->items as $item) {
							echo "<div class=\"entry\">";
							echo "<h2><a href=\"".$item['link']."\">".$item['title']."</a></h2>";
							echo "<small>".date('D, d M Y H:i:s', strtotime($item['published']))."</small>";
							echo $item['atom_content'];
							echo "</div>";
						}
					?>
				</div>
			</div>

			<div id="footer">
				<a class="swissmade" href="http://www.swissmadesoftware.org"><img src="../img/sms-logo-small-footer.png" alt="swiss made software" /></a> <a href=
				"http://validator.w3.org/check/referer">Validate</a>, $Date: 2009-12-18 14:50:55 +0100 (Fri, 18 Dec 2009) $<br />
			</div>
		</div>

		<div id="sidebar">
			<div id="teaser">
				<div class="box-shadow-start"></div>
				<div class="box-shadow">
					<p class="lead"><strong>Blog.</strong> Prosa about noteworthy upcoming features and the current development status. <img  src="http://media.cyberduck.ch/img/twitter.png" alt="twitter" /><a href="http://twitter.com/davidkocher">Follow @davidkocher</a>.</p>
				</div>
				<div class="box-shadow-end"></div>
			</div>
		</div>
	</div><?php echo(echoanalytics("..")); ?>
</body>
</html>
