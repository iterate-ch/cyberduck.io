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
		</style>
	</div>

	<div id="container">
		<div id="maincolumn">
			<?php echo(echogoogle());?>
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

				<div>
					<p><strong>Reviews.</strong> Cyberduck has been <a href="reviews">reviewed</a> by many sites and got tremendous feedback over the last years.</p>
					<blockquote>
						“All the other FTP clients I've used have been hard to learn and are confusing, but I've never had to look at the help file for Cyberduck”<br />
						— <a href="http://www.boingboing.net/2005/01/07/cyberduck_ftp_browse.html">boingboing.net</a>
					</blockquote>
					<blockquote>
						“[Cyberduck] is one of those apps that just does what it’s supposed to, no more, no less. - check it out today, and I bet you will switch too.”<br />
						— <a href="http://www.macsoftreview.com/2006/01/29/david-kochers-cyberduck/?p=13">macsoftreview.com</a>
					</blockquote>
					<blockquote>
						“Ce logiciel rend l’opération vraiment plus simple!”<br />
						— <a href="./reviews/vvmac_review.pdf">vvmac.com</a>
					</blockquote>
					<blockquote>
						“With a user-friendly interface, funky name, and loads of great features, Cyberduck leads the pack among free FTP clients.”<br />
						— <a href="http://www.spymac.com/news/article.php?contentid=2875">spymac.com</a>
					</blockquote>
					<blockquote>
						“Forget the rest, this is the best! (...) I will never use another FTP client again.”<br />
						— <a href="http://www.macfanatic.com/node/19">macfanatic.com</a>
					</blockquote>
					<blockquote>
						“Cyberduck is getting some great acclaim, and deservedly so.”<br />
						— <a href="http://www.osxguide.com/modules.php?op=modload&amp;name=News&amp;file=article&amp;sid=189&amp;mode=thread&amp;order=0&amp;thold=0">osxguide.com</a>
					</blockquote>
				</div>
			</div>
		</div>
	</div><?php echo(echoanalytics("..")); ?>
</body>
</html>
