<?php include "../lang.php"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?php include "../functions.php"; ?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<?php echo(echoheader("..")); ?>
	<title> 寄付</title>
	<script src="js/jquery.form.js" type="text/javascript">
</script>
</head>

<body id="donate">
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
				<p class="lead"><strong>フリーソフトウェア</strong> <a class="ext" href="http://www.gnu.org/philosophy/free-sw.html">フリーソフトウェア</a> は、ユーザが自由に実行、コピー、配布、 研究、変更、改良することができます。ユーザからの継続的な寄付によって、Cyberduckを無償で提供することが可能になっています。あなたにとってこのプログラムが有益であったなら、ぜひ <a id="paypal" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=4914397">寄付</a>をご考慮ください。Cyberduckをさらに良いものにすることができます！</p>

				<p class="lead"><strong>貢献</strong> Cyberduckに寄付をしていただくと、Cyberduckのインストールやアップデートの後に寄付を求める表示を停止するキーを受け取ることができます。Paypalアカウントを開設せずに、クレジットカードまたは銀行口座を利用できます。手続きが完了すると、Paypalからレシートが発行されます。</p>

				<p>Paypalを利用したくない場合は、IBANで送金することができます。手続きが完了したら、 <a href="mailto:feedback@cyberduck.ch">寄付キーを要求</a> してください。</p>

				<tt><strong>IBAN</strong> CH19 0900 0000 3030 0229 3</tt><br />
				<tt><strong>BIC</strong> POFICHBEXXX</tt></p>

				<form id="lookup" method="get" action="lookup">
					<p class="lead"><strong>寄付キーの再取得</strong> Paypalでの手続きが完了すると、寄付キーがメールで自動送信されます。登録キーを紛失した場合は、以下にメールアドレスを入力して再取得できます。</p>

					<p><label for="email">Paypalに登録されているメールアドレス:</label> <input type="text" id="email" name="email" /> <input type="submit" id="lookup" value="検索" />
					<script charset="utf-8" type="text/javascript">
//<![CDATA[
									$(document).ready(function() {
									var options = {
									target: '#result',
									clearForm: true
									}
									$("form#lookup").ajaxForm(options);
									});
									//]]>
					</script></p>
				</form>

				<p><strong id="result"></strong></p>
				
				<p>受け取ったライセンスキーをダブルクリックしてCyberduckで開いてください。ファイル名の末尾が <tt>.cyberducklicense</tt> となっている添付ファイルが寄付キーです。</p>
			</div>

			<div id="footer">
				<a class="swissmade" href="http://www.swissmadesoftware.org"><img src="http://media.cyberduck.ch/img/sms-logo-small-footer.png" alt="swiss made software" /></a> <a href=
				"http://validator.w3.org/check/referer">Validate</a>, $Date: $<br />
			</div>
		</div>

		<div id="sidebar">
			<div id="teaser">
				<div class="box-shadow-start"></div>

				<div class="box-shadow">
					<p class="lead"><strong>Cyberduckは <a class="ext" href="http://www.gnu.org/philosophy/free-sw.html">フリーソフトウェア</a> ですが、開発、サポート、配布にコストがかかっています。</strong> Cyberduckに寄付をしていただくと、寄付を求める表示を停止するキーを受け取ることができます。</p><br />

					<form action="https://www.paypal.com/cgi-bin/webscr" method="post"
							onClick="javascript:_gaq.push(['_trackEvent', 'Paypal', 'VTBUBS29YLYE4']);">
						<fieldset>
							<input type="hidden" name="cmd" value="_s-xclick" />
							<input type="hidden" id="paypal" name="hosted_button_id" value="4914397" />
							<input type="image" src="../img/donate" name="submit" alt="Donate to the development of Cyberduck!"/>
						</fieldset>
					</form>
					<script type="text/javascript">
							//<![CDATA[
							$(document).ready(function() {
								if(navigator.userAgent.toLowerCase().indexOf('windows') > -1) {
									$("form input#paypal").attr('value', '7TAQE4SM2FH6L');
									$("a#paypal").attr('href', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=7TAQE4SM2FH6L');
								}
								else {
									$("form input#paypal").attr('value', '4914397');
									$("a#paypal").attr('href', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=4914397');
								}
							});
					//]]>
					</script>
				</div>
				<div class="box-shadow-end"></div>
			</div>
		</div>
	</div>
</body>
</html>
