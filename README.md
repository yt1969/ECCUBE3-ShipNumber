## 【ECCUBE3 プラグイン】配送伝票番号

ECCUBE3で注文毎に配送伝票番号を登録し、発送メールに追記します。

### インストール方法

このページの右下の「Download ZIP」からZIPファイルをダウンロード

ECCUBE3管理画面<オーナーズストア<プラグイン<プラグイン一覧

ページ下部の独自プラグイン「プラグインのアップロードはこちら」

ダウンロードしたZIPを選択してアップロード

独自プラグインにプラグインが追加されるので、「有効にする」をクリック

### 機能

- メールテンプレート追加
  - 「発送メール」というテンプレートが追加されます。
  - 設定>基本情報設定>メール設定 からテンプレートの編集が出来ます。
  - サンプルはヤマト運輸ですので、ご自身の配送会社に変更下さい。
  - ※「伝票番号：」は編集しないでください。発送メール送信時に配送伝票番号が記載されなくなります。

![サンプル画像](https://github.com/ohtacky/ECCUBE3-ShipNumber/raw/images/admin_template.png)


- 配送伝票番号の登録
  - 受注管理>各受注の編集画面 から配送伝票番号の登録が出来ます。

  ![サンプル画像](https://github.com/ohtacky/ECCUBE3-ShipNumber/raw/images/admin_order.png)


- 発送メールの送信
  - 発送メールに自動的に登録した配送伝票番号が記載されます。
  - 配送伝票番号を登録していない場合は、メール送信時に文面を編集してください。
  - ※メール本文の「伝票番号：」は変更すると配送伝票番号が記載されなくなりますので、ご注意下さい。
  - メール一括送信にも対応しています。
    ‐ 配送伝票番号を登録していない場合、「伝票番号：」の後は何も記載されませんので、ご注意ください。

  ![サンプル画像](https://github.com/ohtacky/ECCUBE3-ShipNumber/raw/images/admin_mail.png)
