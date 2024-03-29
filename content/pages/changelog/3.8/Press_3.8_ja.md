﻿Title: Press Release Cyberduck 3.8
Slug: changelog/pr/3.8/jp
Status: hidden

### プレスリリース

## Cyberduck 3.8をリリース

_スイス ベルン州、2010年12月3日_

Cyberduckの新しいメジャーバージョンをリリースしました。バージョン3.8の重点は、Amazon CloudFront CDN（Content Delivery Network）の統合にあります。カスタムオリジンのサポートにより、コンテンツをS3にアップロードすることなく、オリジナルのコンテンツを一般的なWebサーバから供給し、CloudFront CDN内のエッジロケーションのネットワークを使用して配信することができます。[1]

[1] http://cyberduck.ch/news/2010/11/17/cloudfront-for-the-rest-of-us-with-custom-origins/

Cyberduckの直感的なインターフェースで、CloudFrontのカスタムオリジンのセットアップと構成が可能です。また、新しい無効化機能により、誤って配信されたコンテンツをCloudFrontのエッジロケーションから削除することもできます。設定オプションの詳細は、Wikiドキュメント[2]をご覧ください。

[2] http://trac.cyberduck.ch/wiki/help/ja/howto/cloudfront

このバージョンでは、クラウドストレージサーバソフトウェアの新たなオープンスタンダードであるSwift Storage（Openstack）インストレーションへの接続にも対応しています。その他の変更には、SFTP転送スループットの大幅なパフォーマンス向上のほか、サードパーティのS3ストレージツールとの相互運用性に関する多くの修正が含まれます。

本リリースにおける多数の新機能とバグ修正に関するより詳細な一覧は、http://cyberduck.ch/changelog/ をご参照ください。ユーザは「アップデートを確認」機能から自動でアップグレードできます。Mac OS X 10.5以降が必要です。

Cyberduck for Windowsのパブリックベータ版を今月後半に公開する予定です。バージョン4.0以降では、MacとWindowsの両方で同等のリリースを提供していきます。[3]

[3] http://cyberduck.ch/news

#### About Cyberduck

Cyberduckは、MacとWindowsに対応した、オープンソースのFTP、SFTP、WebDAV、Could Files、Google Docs、S3用ブラウザです。素早くアクセスできるブックマークを備えた、使いやすいインターフェースを提供します。ブラウザのアウトラインビューで大量のフォルダ構造も効率よく閲覧し、Quick Lookで素早くファイルをプレビューすることができます。ファイルの編集では、あらゆる外部エディタアプリケーションとシームレスに連携することで、素早く簡単にコンテンツを変更できます。クラウドでコンテンツを配信するために、Amazon CloudFrontやRackspace Cloud Filesを構成することも簡単です。30言語以上のローカライズ版が提供されています。

#### 連絡先
iterate GmbH  
David Kocher  
[support@cyberduck.io](mailto:support@cyberduck.io)  
[cyberduck.io](https://cyberduck.io)  