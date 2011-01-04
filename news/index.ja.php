<?php include "../lang.php"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php include "../functions.php"; ?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<?php echo(echoheader("..")); ?>
	<link rel="Stylesheet" type="text/css" href="http://media.cyberduck.ch/news.css" />
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
					<p class="lead"><strong>ブログ</strong> 今後の注目機能や開発状況について。</p>
					<br />
					<p> このソフトウェアは <a class="ext" href="http://sudo.ch/">David V. Kocher</a>が開発しました。<a class="ext" href=
					"mailto:%66%65%65%64%62%61%63%6B%40%63%79%62%65%72%64%75%63%6B%2E%63%68">ご意見</a> をお待ちしています。バグレポートおよび機能追加の提案をするには、<a class="ext" href=
					"http://trac.cyberduck.ch/newticket">イシュートラッカー</a> で <a class="ext" href="http://trac.cyberduck.ch">新規チケット</a>を作成してください。</p>
					<br />
					<p><img src="http://media.cyberduck.ch/img/feed-icon-16x16.png" alt="feed" /> <a href="http://cyberduck.ch/changelog.rss">Subscribe to the RSS feed.</a></p>
					<p><img src="http://media.cyberduck.ch/img/twitter.png" alt="twitter" /> <a href="http://twitter.com/davidkocher">@davidkocherをフォロー</a>。</p>
					<br />
					<p><a href="http://lists.cyberduck.ch/mailman/listinfo/cyberduck-news">Cyberduck-news</a>  メーリングリストに登録すると、新しいバージョンがリリースされた際に通知を受け取ることができます。</p>
					<form method="post" action="http://lists.cyberduck.ch/mailman/subscribe/cyberduck-news">
						<p><input id="mailinglist" type="text" name="email" value="" /> <input type="submit" name="email-button" value="Subscribe" /></p>
					</form>
				</div>
				<div class="box-shadow-end"></div>
			</div>
		</div>
	</div>
</body>
</html>
