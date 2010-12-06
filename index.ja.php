<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	
<?php include "functions.php"; ?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<?php echo(echoheader(".")); ?>
	<title>
Cyberduck | FTP、SFTP、WebDAV、Cloud Files、Google Docs、S3用ブラウザ、MacとWindowsに対応 | Cyberduckについて
	</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
</head>

<body id="index">
	<div id="header">
		<?php echo(echologo("."));?>
		<div id='title'><h1 id='maintitle'>Cyberduck</h1><h3 id='subtitle'>Cyberduckは、MacとWindowsに対応した、オープンソースのFTP、SFTP、WebDAV、 <br />Could Files、Google Docs、S3用ブラウザです</h3></div>
		<div id='navigation'>
			<ul>
				<li><a id="navigation-index" href="/">Cyberduckについて</li>
				<li><a id="navigation-news" href="/news/">ニュース</a></li>
				<li><a id="navigation-changelog" href="/changelog/">更新履歴</a></li>
				<li><a id="navigation-trac" href="http://trac.cyberduck.ch/">開発</a></li>
				<li><a id="navigation-help" href="http://help.cyberduck.ch/ja">ヘルプ</a></li>
				<li><a id="navigation-donate" href="/donate">寄付</a></li>
			</ul>
		</div>
	</div>

	<div id="container">
		<div id="maincolumn">
			<?php echo(echogoogle());?>
			<div id="content">
				<p>
					Cyberduckは、MacとWindowsに対応した、オープンソースのFTP、SFTP、WebDAV、Could Files、Google Docs、S3用ブラウザです。素早くアクセスできるブックマークを備えた、使いやすいインターフェースを提供します。ブラウザのアウトラインビューで大量のフォルダ構造も効率よく閲覧し、QuickLookで素早くファイルをプレビューすることができます。ファイルの編集では、あらゆる外部エディタアプリケーションとシームレスに連携することで、素早く簡単にコンテンツを変更できます。クラウドでコンテンツを配信するために、Amazon CloudFrontやRackspace Cloud Filesを構成することも簡単です。30言語以上のローカライズ版が提供されています。
				</p>
				<div id="screenshots">
					<div class="figure">
						<a class="windows" style="display:none;" href="http://media.cyberduck.ch/img/windows/browser-bookmarks.png"><img alt="Cyberduck Bookmarks" width="400px" src="http://media.cyberduck.ch/img/windows/browser-bookmarks-thumb.png" /></a>
						<a class="mac" style="display:none;" href="http://media.cyberduck.ch/img/mac/browser-bookmarks.png"><img alt="Cyberduck Bookmarks" width="400px" src="http://media.cyberduck.ch/img/mac/browser-bookmarks-thumb.png" /></a>

						<p>ブックマーク</p>
					</div>

					<div class="figure">
						<a class="windows" style="display:none;" href="http://media.cyberduck.ch/img/windows/browser.png"><img alt="Cyberduck Browser" width="400px" src="http://media.cyberduck.ch/img/windows/browser-thumb.png" /></a>
						<a class="mac" style="display:none;" href="http://media.cyberduck.ch/img/mac/browser.png"><img alt="Cyberduck Browser" width="400px" src="http://media.cyberduck.ch/img/mac/browser-thumb.png" /></a>

						<p>ブラウザ</p>
					</div>
				</div>
				<script type="text/javascript">
						//<![CDATA[
						$(document).ready(function() {
							if(navigator.userAgent.toLowerCase().indexOf('windows') > -1) {
								$("#screenshots .windows").css('display', 'inline');
							}
							else {
								$("#screenshots .mac").css('display', 'inline');
							}
						});
				//]]>
				</script>
				<div id="features">
					<img src="http://media.cyberduck.ch/img/connect.png" class="headline" />
					<div class="description">
						<h2 class="headline">あらゆるサーバに接続。</h2>
						<p>使いやすいインターフェースで、<a href="http://trac.cyberduck.ch/wiki/help/en/howto/ftp">FTP (File Transfer Protocol)</a>、 <a href="http://trac.cyberduck.ch/wiki/help/en/howto/ftp">FTP/TLS (FTP secured over SSL/TLS)</a>、 <a href="http://trac.cyberduck.ch/wiki/help/en/howto/sftp">SFTP (SSH Secure File Transfer)</a>、 <a href="http://trac.cyberduck.ch/wiki/help/en/howto/dav" >WebDAV</a> (Web-based Distributed
						Authoring and Versioning), <a href="http://trac.cyberduck.ch/wiki/help/en/howto/s3">Amazon S3</a>、 <a href="http://trac.cyberduck.ch/wiki/help/en/howto/googlestorage">Google Storage</a>、 <a href="http://trac.cyberduck.ch/wiki/help/en/howto/googledocs/">Google Docs</a>、 <a href=
							"http://trac.cyberduck.ch/wiki/help/en/howto/azure">Windows Azure</a> and <a href=
						"http://trac.cyberduck.ch/wiki/help/en/howto/cloudfiles">Rackspace Cloud Files</a>に接続。 <a href="http://trac.cyberduck.ch/wiki/help/en/howto/eucalyptus/">Eucalyptus</a> や <a href="http://trac.cyberduck.ch/wiki/help/en/howto/openstack/">OpenStack</a>のオープンな最新クラウドソフトウェアも利用できます。</p>
					</div>

					<img src="http://media.cyberduck.ch/img/pencil.png" class="headline" />
					<div class="description">
						<h2 class="headline">あらゆるファイルを好きなエディタで編集。</h2>
						<p>ファイルの編集では、あらゆる外部エディタアプリケーションとシームレスに連携。コンテンツを素早く簡単に変更できます。どんなテキストファイルやバイナリファイルも、好みのアプリケーションを使ってサーバ上で編集できます。</p>
					</div>

					<img src="http://media.cyberduck.ch/img/cf-disk.png" class="headline" />
					<div class="description">
						<h2 class="headline">Distribute your content in the cloud.</h2>
						<p>Both Amazon <a href="http://trac.cyberduck.ch/wiki/help/en/howto/cloudfront">CloudFront</a> and Rackspace Limelight can be easily configured to distribute your files using their content distribution networks (<a href="http://trac.cyberduck.ch/wiki/help/en/howto/cdn">CDN</a>). Connect to any server using FTP, SFTP or WebDAV and configure it as the origin of a new Amazon <a href="http://trac.cyberduck.ch/wiki/help/en/howto/cloudfront">CloudFront</a> CDN distribution.</p>
						<div class="column">
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/s3.png" class="feature" alt="" /> <strong>Amazon CloudFront</strong><br />
								カスタムオリジン、ベーシックおよびストリーミングのCloudFrontディストリビューションを管理。配置のトグル、CNAMEの定義、配信アクセスロギング、デフォルトインデックスファイルの設定も可能です。</p>
							</div>
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/google.png" class="feature" alt="" /> <strong>Google Storage for Developers</strong><br />認証付きURLを備えたACLを使用してファイルへのアクセス権を付与し、安全にファイルを共有できます。</p>
							</div>
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/cf.png" class="feature" alt="" /> <strong>Rackspace Cloud Files</strong><br />
								Rackspace <a class="ext" href="https://www.rackspacecloud.com/signup/503.html">Cloud Files</a>ストレージを管理。	<a href=
									"http://www.rackspacecloud.com/cloud_hosting_products/files/limelight">Limelight Content Distribution</a>の構成も可能です。</p>
							</div>
						</div>
					</div>

					<img src="http://media.cyberduck.ch/img/s3-disk.png" class="headline" />
					<div class="description">
						<h2 class="headline">Amazon S3</h2>
						<p>							 <a href="http://trac.cyberduck.ch/wiki/help/en/howto/s3">Amazon Simple Storage Service</a> Serviceを自分のハードディスクのようにブラウズ。S3ストレージオプションの素晴らしい新機能に対応。ロギングオプション、ストレージクラス、コンテンツの地理的ロケーションを定義できます。</p>
						<div class="column">
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/s3.png" class="feature" alt="" /> <strong>バージョニングとMFA</strong><br />
									バケットバージョニングと多要素認証削除に対応。バージョニングを有効にすれば、ファイルのあらゆる過去のバージョンに回復可能。</p>
							</div>
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/permissions.png" class="feature" alt="" /> <strong>ACL</strong><br />
								アクセス制御リスト（ACL）で、きめ細かいアクセス許可を設定。一時アクセスのために署名付きURLをコピーすることもできます。</p>
							</div>
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/info.png" class="feature" alt="" /> <strong>メタデータ</strong><br />
									ファイルの標準HTTPヘッダを編集、またはカスタムHTTPヘッダを追加して、メタデータの格納やキャッシュ有効期限の設定が可能。バッチ編集にも対応。</p>
							</div>
						</div>
					</div>
				
					<img src="http://media.cyberduck.ch/img/google-disk.png" class="headline" />
					<div class="description">
						<h2 class="headline">Google Docsを管理。</h2>
						<p>Google Docs形式に変換してアップロード。画像はOCR（光学式文字認識）されます。</p>
					</div>
				
					<img src="http://media.cyberduck.ch/img/bookmark.png" class="headline" />
					<div class="description">
						<h2 class="headline">最上級のブックマーク。</h2>
						<p>ドラッグ&ドロップでブックマークを管理、フィルタフィールドを使って素早く検索。</p>
						<div class="column">
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/document.png" class="feature" alt="" /> <strong>ファイル</strong><br />
								ブックマークをFinder.appにドラッグ&ドロップしておけば、ファイルをブックマークにドロップするだけでアップロードできます。 
								<p><img src="http://media.cyberduck.ch/img/spotlight.png" class="feature" alt="" /> <strong>Spotlight</strong><br />
								ブックマークファイルのためのSpotlightインポーター。</p>
							</div>
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/history.png" class="feature" alt="" /> <strong>履歴</strong><br />
								訪問したサーバの履歴を保存。</p>
								<p><img src="http://media.cyberduck.ch/img/rendezvous.png" class="feature" alt="" /> <strong>Bonjour</strong><br />
								ローカルネットワーク上のFTPおよびWebDAVサービスを自動で発見。</p>
							</div>
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/advanced.png" class="feature" alt="" /> <strong>Import</strong><br />
							 サードパーティのアプリケーションから <a href="http://trac.cyberduck.ch/wiki/help/en/howto/bookmarks#Fromthird-partyapplications">ブックマークをインポート</a>。
							</div>
						</div>
					</div>

					<img src="http://media.cyberduck.ch/img/browse.png" class="headline" />
					<div class="description">
						<h2 class="headline">簡単に閲覧。</h2>
						<p>ブラウザ上で素早くファイルを閲覧、移動できます。キャッシュを利用して最高のパフォーマンスを実現。あらゆる文字エンコードに対応し、ウムラウト、日本語、中国語も正しく表示。</p>

						<div class="column">
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/quicklook.png" class="feature" alt="" /> <strong>Quick Look</strong><br />
								Quick Lookでファイルを素早くプレビュー。スペースキーを押すと、明示的にダウンロードすることなく、Finder.appのようにファイルをプレビューできます。</p>
							</div>
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/outline.png" class="feature" alt="" /> <strong>使いやすく</strong><br />
									Theブラウザのアウトラインビューで、大量のフォルダ構造も効率良く閲覧。カット&ペーストまたはドラッグ&ドロップでファイルを整理できます。</p>
							</div>
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/safari.png" class="feature" alt="" /> <strong>Web URL</strong><br />
								Webブラウザ上で対応するHTTP URLを選択し、素早くコピーしたり開いたりできます。</p>
							</div>
						</div>
					</div>

					<img src="http://media.cyberduck.ch/img/transfer.png" class="headline" />
					<div class="description">
						<h2 class="headline">すべてを転送。</h2>
						<p>同時転送数の制限、正規表現によるファイルの絞り込みができます。中断したダウンロードもアップロードも再開できます。ディレクトリの再帰転送も可能。</p>

						<div class="column">
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/download.png" class="feature" alt="" /> <strong>ダウンロードとアップロード</strong><br />
								ブラウザからブラウザへドラッグ&ドロップするだけで、サーバ間のファイルダウンロードやアップロード、コピーができます。とても簡単です。</p>
							</div>
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/sync.png" class="feature" alt="" /> <strong>同期</strong><br />
								ローカルディレクトリをリモートディレクトリと同期（その逆も同じ）。操作を実行する前に、影響するファイルをプレビューできます。</p>
							</div>
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/growl.png" class="feature" alt="" /> <strong>Growl</strong><br />
								グローバル通知システムのGrowlに対応。ファイル転送イベントを通知します。growl.infoをご覧ください。</p>
							</div>
						</div>
					</div>
									
					<img src="http://media.cyberduck.ch/img/sftp-disk.png" class="headline" />
					<div class="description">
						<h2 class="headline">高度なSSH機能。</h2>
						<p>至れり尽くせり、妥協のないSFTPサーバアクセス。</p>
						<div class="column">
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/protocol.png" class="feature" alt="" /> <strong>認証とセキュリティ</strong><br />
公開鍵認証、キーボードインタラクティブ（PAM）認証、ワンタイムパスワードに対応。多様な暗号化方式（3DES、Blowfish、Twofish、AES、CAST）と認証アルゴリズムをサポート。任意でSecure Copy（SCP）を使用したファイル転送も可能。</p>
							</div>
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/openssh.png" class="feature" alt="" /><strong>相互運用性</strong><br />
									既存のOpenSSH構成オプションから、ホストエイリアス、公開鍵認証設定、デフォルトログインユーザを含む設定を読み込めます。Terminal.appとの統合により、シェル内の現在の作業ディレクトリを開くことが可能。PuTTY公開鍵も使用できます。</p>
							</div>
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/archive.png" class="feature" alt="" /><strong>アーカイブ</strong><br />
								SSH経由のリモートで、TARおよびZIPファイルを圧縮、展開。</p>
							</div>
						</div>
					</div>
				
					<img src="http://media.cyberduck.ch/img/mac32.png" class="headline" />
					<div class="description">
						<h2 class="headline">システムテクノロジーとの統合。</h2>
						<p>Mac OS XでもWindowsでもネイティブ。</p>
						<div class="column">
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/keychain.png" class="feature" alt="" /> <strong>キーチェーン</strong><br />
							すべてのパスワードはシステムのキーチェーンに格納され、インターネットパスワードはサードパーティアプリケーションでも利用可能。証明書はキーチェーンの信頼設定を使用して認証されます。</p>
							</div>
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/finder.png" class="feature" alt="" /> <strong>Finder</strong><br />
								システム全体でFTPとSFTPのデフォルトプロトコルハンドラとしてCyberduckを使用すれば、.inetlocファイルや.duckブックマークファイルをFinderから開けます。</p>
							</div>
							<div class="feature">
								<p><img src="http://media.cyberduck.ch/img/windows32.png" class="feature" alt="" /> <strong>Windows</strong><br />
								プライベートベータ に<a href="mailto:feedback@cyberduck.ch?subject=Windows Private Beta">登録</a> してください。</p>
							</div>
						</div>
					</div>

					<img src="http://media.cyberduck.ch/img/osi.png" class="headline" />
					<div class="description">
						<h2 class="headline">オープン。</h2>
						<p>日々の開発活動をフォローしたり、ロードマップを見たり、ハッキングを楽しむために trac.cyberduck.ch からソースを入手することもできます。GPLに基づいてライセンスされます。</p>
					</div>
					
					<img src="http://media.cyberduck.ch/img/language.png" class="headline" />
					<div class="description">
						<h2 class="headline">インターナショナル。</h2>
						<p>Speaks your language.  English, čeština, Nederlands, Suomi, Français, Deutsch, Italiano, 日本語, 한국어, Norsk, Slovenčina, Español, Português (do Brasil), Português (Europeu), 中文 (简体), 正體中文 (繁體), Русский, Svenska, Dansk, Język Polski, Magyar, Bahasa Indonesia, Català, Cymraeg, ภาษาไทย, Türkçe, Ivrit, Latviešu Valoda, Ελληνικά, Cрпски, ქართული ენა, Slovenščina &amp; Română.</p>
					</div>
				</div>

				<div style="clear:both;"></div>

				<p><small>Copyright (c) 2002-2010 David V. Kocher. All rights reserved. This program is free software; you can redistribute it and/or modify it under the terms of the <a href=
				"http://creativecommons.org/licenses/GPL/2.0/">GNU General Public License</a> as published by the Free Software Foundation; either version 2 of the License, or (at your option) any
				later version.<em>This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
				PARTICULAR PURPOSE. See the GNU General Public License for more details.</em></small></p>

				<p><small>This product includes software developed by 
					<strong>Duncan McGregor et al.</strong> (<a class="ext" href="http://code.google.com/p/rococoa/">Rococoa</a>), 
					<strong>Timothy Wall et al.</strong> (<a class="ext" href="https://jna.dev.java.net/">JNA</a>), 
					<strong>Jeroen Frijters</strong> (<a class="ext" href="http://www.ikvm.net/">IKVM.NET</a>),
					<strong>Christian Plattner</strong> (<a class="ext" href="http://www.ganymed.ethz.ch/ssh2/">Ganymed</a>),
					<strong>enterprisedt</strong> (<a class="ext" href="http://www.enterprisedt.com">edtFTPj</a>), 
					<strong>Apache Software Foundation</strong> (<a class="ext" href="http://commons.apache.org">Apache Commons</a>), 
					<strong>Apache Software Foundation</strong> (<a class="ext" href="http://jakarta.apache.org/slide/">Jakarta Slide</a>), 
					<strong>James Murty</strong> (<a class="ext" href="http://jets3t.s3.amazonaws.com/index.html">jetS3t</a>), 
					<strong>Lowell Vaughn et al.</strong> (<a class="ext" href="https://github.com/rackspace/java-cloudfiles">Cloud Files API</a>), 
					<strong>Christopher Forsythe et al.</strong> (<a class="ext" href="http://growl.info/">Growl</a>), 
					<strong>M. Uli Kusterer</strong> (<a class="ext" href="http://zathras.de/">UKCrashReporter and UKPrefsPanel</a>), 
					<strong>Kurt Revis</strong> (<a class="ext" href="http://www.snoize.com/">SNDisclosableView</a>), 
					<strong>Shaun Wexler</strong> (<a class="ext" href="http://www.snoize.com/">CTGradient</a>), 
					<strong>Brian Amerige</strong> (<a class="ext" href="http://extendmac.com/EMKeychain/">EMKeychain</a>), 
					<strong>Steve McLeod</strong> (<a class="ext" href="http://code.google.com/p/barbarywatchservice/">barbarywatchservice</a>)
					<strong>Lucas Newman</strong> (<a class="ext" href="http://www.aquaticmac.com/">AquaticPrime</a>), 
					<strong>Andy Matuschak</strong> (<a class="ext" href="http://sparkle.andymatuschak.org/">Sparkle</a>), 
					<strong>wyDay</strong> (<a class="ext" href="http://code.google.com/p/wyupdate/">wyUpdate</a>),
					<strong>Jeremy D. Miller</strong> (<a class="ext" href="http://structuremap.net/structuremap/">StructureMap</a>),
					<strong>Ayende Rahien</strong> (<a class="ext" href="http://www.ayende.com/projects/rhino-mocks.aspx">Rhino Mocks</a>).</small>
				</p>
			</div>

			<div id="footer">
				<a class="swissmade" href="http://www.swissmadesoftware.org"><img src="http://media.cyberduck.ch/img/sms-logo-small-footer.png" alt="swiss made software" /></a> <a href=
				"http://validator.w3.org/check/referer">Validate</a>, $Date: 2010-12-01 11:25:55 +0100 (Wed, 01 Dec 2010) $<br />
			</div>
		</div>

		<div id="sidebar">
			<div id="teaser">
				<div class="box-shadow-start"></div>

				<div class="box-shadow">
					<div id="mac" class="download">
						<div>
							<strong>ダウンロード</strong><br />
							<strong>バージョン3.8</strong><br />
							<em>2010年12月3日</em><br />
							<a href="Cyberduck-3.8.zip">Cyberduck-3.8.zip</a><br />
							<em>ユニバーサルバイナリ、Mac OS X 10.5以降が必要</em><br />
							<small>Downloads hosted by <a href="http://cacheboy.net/">Cacheboy CDN: <i>Open Source Content Delivery</i></a>.</small>
						</div>
						<img src="http://media.cyberduck.ch/img/mac32.png" />
					</div>

					<div id="windows" class="download">
						<div>
							<strong>プライベートベータ</strong><br />
プライベートベータに<a href="mailto:feedback@cyberduck.ch?subject=Windows Private Beta">申し込む</a><br />
							<em>Windows XP、Windows VistaまたはWindows 7が必要</em>
						</div>
						<img src="http://media.cyberduck.ch/img/windows32.png" />
					</div>
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick" />
						<input type="hidden" id="paypal" name="hosted_button_id" value="4914397" />
						<input type="image" src="https://www.paypal.com/en_US/CH/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="寄付する" />
						<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
					</form>
					<script type="text/javascript">
							//<![CDATA[
							$(document).ready(function() {
								if(navigator.userAgent.toLowerCase().indexOf('windows') > -1) {
									$("form input#paypal").attr('value', 'NKZSJQTDVF4ZA');
								}
								else {
									$("form input#paypal").attr('value', '4914397');
								}
							});
					//]]>
					</script>
				</div>

				<div class="box-shadow-end"></div>
			</div>

			<div class="box-solid">
				<p class="lead"><strong>News &amp; Feedback.</strong> This software is written by <a class="ext" href="http://sudo.ch/">David V. Kocher</a>. I appreciate any <a class="ext" href=
				"mailto:%66%65%65%64%62%61%63%6B%40%63%79%62%65%72%64%75%63%6B%2E%63%68">feedback</a> you might have. For bug reports and feature suggestions you should issue a <a class="ext" href=
				"http://trac.cyberduck.ch/newticket">new ticket</a> in the <a class="ext" href="http://trac.cyberduck.ch">issue tracker</a>.</p>

				<p><img class="feature" src="http://media.cyberduck.ch/img/feed-icon-16x16.png" alt="feed" /><strong>ブログ</strong> <a class="ext" href="news">開発ブログ</a><a class="ext" href="http://cyberduck.ch/changelog.rss">購読</a> を.</p>
				<p><img class="feature" src="http://media.cyberduck.ch/img/twitter.png" alt="twitter" /> <strong>Twitter.</strong> <a class="ext" href="http://twitter.com/davidkocher">@davidkocherをフォロー。</a>.</p>
				<p><strong>メーリングリスト</strong> <a href="http://lists.cyberduck.ch/mailman/listinfo/cyberduck-news">Cyberduck-news</a> メーリングリストに登録すると、新しいバージョンがリリースされた際に通知を受け取ることができます。</p>
				<form method="post" action="http://lists.cyberduck.ch/mailman/subscribe/cyberduck-news">
					<p><input id="mailinglist" type="text" name="email" value="" /> <input type="submit" name="email-button" value="登録" /></p>
				</form>
			</div>
		</div>
		<?php echo(echoanalytics(".")); ?>
	</div>
</body>
</html>
