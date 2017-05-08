Title: Press Release Cyberduck 4.0
Slug: changelog/pr/4.0/jp
Status: hidden

### プレスリリース

## Cyberduck 4、MacとWindowsでリリース

_スイス ベルン州、2011年3月8日_

Cyberduck 4をリリースしました。ファイルサーバおよびクラウドストレージにアクセスするための最も人気のあるMac用クライアントソフトウェアが、1年以上におよぶ開発と数ヶ月にわたるベータテストを経て、ついにWindowsプラットフォームに登場します。

ベータリリースからの改善として、バグ修正のほか、主要クラウドストレージプロバイダの最新機能への対応が追加されました。S3では並列アップロードにより、最大5TBのファイルをアップロードできるようになりました。バケットをWebサイトエンドポイントとして構成し、CloudFront CDNを有効にすることも可能です。Rackspaceでは新しいCDNプロバイダのAkamaiに対応し、エッジロケーションのファイルを削除できます。

更新履歴は http://cyberduck.ch/changelog をご覧ください。

ほとんどあらゆるサーバに接続できる多様なプロトコルに対応しており、サポートされるプロトコルには、FTP/TLS（File Transfer Protocol）、SFTP（SSH Secure File Transfer）、WebDAV（Web-based Distributed Authoring and Versioning）、Amazon S3、Google Storage、Google Docs、Windows Azure、Rackspace Cloud Filesがあります。

ブラウザの階層ビューで大量のフォルダ構造も効率よく閲覧し、ドラッグ&ドロップでファイルをダウンロード、アップロード、移動することができます。訪問したサーバの履歴を保存できるほか、Bonjourの統合により、ローカルネットワーク上のFTPやWebDAVサービスを自動で発見します。

あらゆる外部エディタアプリケーションでファイルを編集できる強力な機能により、コンテンツを素早く編集し、ファイルを保存するだけで、バックグラウンドで変更がサーバにアップロードされます。

Google Docsの文書の同期をまとめて管理し、画像をOCR（光学式文字認識）することで、編集できるよう変換してアップロードすることも可能です。

Cyberduckの画期的にシンプルなインターフェースなら、クラウドを利用したコンテンツ配信のための高度な構成オプションを容易かつ直感的に操作できます。Amazon CloudFront CDNのカスタムオリジンに対応しているため、FTPまたはSFTPであらゆるサーバに接続し、Amazon CloudFront CDNを使用して配布するコンテンツをオリジンが取得するよう構成することができます。

ファイルへのアクセスを読み出しおよび書き込み権限により制限し、Amazon S3やGoogle Storageを使用する際には、アクセス制御リスト（ACL）にも対応します。Google Storageに保存されたファイルへのアクセスを特定のメールアドレスに限定することで、大きなファイルであっても、即座に共同作業者に安全に共有できます。

Amazon S3用のその他の高度な設定としては、ストレージの冗長レベル、地理的ロケーション、ファイルバージョニング（復元を含む）、アクセスログ設定、ファイルを削除から保護するためのハードウェアトークンのワンタイムパスコードを使用した多要素認証（MFA）があります。

SFTPはOpenSSHおよびPuTTY鍵形式の公開鍵認証に対応しています。

ソフトウェアは絶えず改良されており、統合されたソフトウェアアップデートコンポーネントによって、常に最新かつ最も優れたバージョンを確実に使用することができます。サードパーティーのソフトウェアからCyberduckに移行するユーザは、他の様々なFTPクライアントの接続の詳細を含むブックマークを取り込むことができます。

Cyberduckは多くの言語で使用できます。英語、チェコ語、オランダ語、フィンランド語、フランス語、ドイツ語、イタリア語、日本語、韓国語、ノルウェー語、スロバキア語、スペイン語、ブラジルポルトガル語、ポルトガル語、簡体中国語、繁体中国語、ロシア語、スウェーデン語、デンマーク語、ポーランド語、ハンガリー語、インドネシア語、カタルーニャ語、ウェールズ語、タイ語、トルコ語、ヘブライ語、ラトビア語、ギリシャ語、セルビア語、グルジア語、スロベニア語、ウクライナ語、ルーマニア語に対応しています。

Mac OS X 10.5以降、Windows XP、Windows Vista、またはWindows 7が必要です。

#### 連絡先
David Kocher  
Yves Langisch  
mailto:feedback-ja@cyberduck.ch  
http://cyberduck.ch  

#### About Cyberduck

Cyberduckは、FTP、SFTP、WebDAVでのファイル転送、Rackspace Could Files、Windows Azure、Amazon S3といったクラウドストレージアカウントへの接続、Google Docsの文書管理に対応した、オープンソースのMacおよびWindows用ブラウザです。素早くアクセスできるブックマークを備え、すべての接続に共通の使いやすいインターフェースを提供します。ブラウザの階層ビューで大量のフォルダ構造も効率よく閲覧し、ドラッグ&ドロップでファイルをダウンロード、アップロード、移動できます。ファイル転送や、ローカルディレクトリをリモートディレクトリと同期するのも簡単です。ファイルの編集では、あらゆる外部エディタアプリケーションとシームレスに連携することで、素早く簡単にコンテンツを変更できます。Google Docsアカウントの文書管理では、OCR（光学式文字認識）により画像を変換してアップロードすることも可能です。Amazon CloudFrontやAkamaiコンテンツディストリビューションネットワーク（CDN）を容易に構成し、エッジロケーションのファイルを世界中に配信します。日本語、韓国語、中国語、スペイン後、ドイツ語、フランス語を含む30言語以上にローカライズされたユーザインターフェースで、すぐに使いこなすことができます。

FTP（File Transfer Protocol、TLS対応）、SFTP（SSH Secure File Transfer）、WebDAV（Web-based distributed Authoring and Versioning）、Amazon S3、Google Storage、Google Docs、Windows Azure、Rackspace Cloud Files接続に対応。S3、またはGoogle Storage、Dunkel Cloud Storage、Rackspace Cloud Files（US/UK）、Internap XIPCloud Storage、Eucalyptusのあらゆるカスタムインストレーションといった、サードパーティーが提供するOpenstack APIを使用してオープンな最新クラウドソフトウェアと連携できます。

Copyright (c) 2002-2011 David Kocher. Copyright (c) 2011 Yves Langisch. All rights reserved. This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version. This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
