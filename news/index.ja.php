<?php include "../lang.php"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php include "../functions.php"; ?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<?php echo(echoheader("..")); ?>
	<link rel="Stylesheet" type="text/css" href="news.css" />
	<?php
		define('MAGPIE_DIR',  './magpierss-0.72/');
		// access magpie libraries
		require_once(MAGPIE_DIR.'rss_fetch.inc');
		require_once(MAGPIE_DIR.'rss_utils.inc');
		
		define('MAGPIE_INPUT_ENCODING', 'UTF-8');
		define('MAGPIE_OUTPUT_ENCODING', 'UTF-8');

		define('MAGPIE_CACHE_ON', true);
	?>
	<title>ニュース</title>
</head>

<body id="news">
	<div id="header">
		<?php echo(echologo(".."));?>
		<div id='title'><h1 id='maintitle'>Cyberduck</h1><h3 id='subtitle'><a href='http://www.gnu.org/philosophy/free-sw.html'>オープンソース</a> のFTP、SFTP、WebDAV、Cloud Files、 <br />Google Docs、Amazon S3用ブラウザ、MacとWindowsに対応。</h3></div>
		<div id='navigation'>
			<ul>
				<li><a id="navigation-index" href="../">Cyberduckについて</li>
				<li><a id="navigation-news" href="../news/">ニュース</a></li>
				<li><a id="navigation-changelog" href="../changelog/">更新履歴</a></li>
				<li><a id="navigation-trac" href="http://trac.cyberduck.ch/">開発</a></li>
				<li><a id="navigation-help" href="http://help.cyberduck.ch/ja">ヘルプ</a></li>
				<li><a id="navigation-donate" href="../donate">寄付</a></li>
			</ul>
		</div>
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
					<p class="lead"><strong>ブログ</strong> 今後の注目機能や開発状況について。<img  src="http://media.cyberduck.ch/img/twitter.png" alt="twitter" /><a href="http://twitter.com/davidkocher">@davidkocherをフォロー</a>。</p>
				</div>
				<div class="box-shadow-end"></div>
			</div>
		</div>
	</div>
</body>
</html>
