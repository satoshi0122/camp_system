## 目的

本ドキュメントは、キャンプ場(架空)の５か所のスペースの予約・スケジュール管理を行うシステム開発に関する要件定義書になります。

要件定義はこちらの資料を参考にしています。  
https://notepm.jp/sharing/190de8bd-5e83-40f6-ab5e-1bc2f231beb8


## 業務要件

### 現状のフロー

現状のフローは次のようになっています。（仮）

1. キャンプの利用者が管理人に直接電話をし、利用人数、日程、名前、電話番号、利用したいスペースの場所を伝え、予約を行う。
1. 管理人がExcelに記入
1. 当日、現地にて現金決済

### 構築後のフロー

システム構築後、フローは次のようになります。

1. 利用者は、WEBページから、メールアドレス、名前、日時、利用人数、電話番号、利用スペース番号を入力
1. メール認証　　？？
1. ブッキングなどの問題がなければ予約完了
1. 当日、現地にて現金決済



### 利用者一覧

- キャンプ場管理人
- キャンプ場利用者

### 規模

3人月(エンジニア1人×3)の予定です。

## 機能要件

### 画面


- 案：カレンダーの画面から、日程を選択し、予約を行う。


### 権限

- スペースの追加、予約の強制消去は管理人のみ可能とします。
- 予約者の一覧、日程の閲覧は理人のみ可能とします。
  

### 情報・データ

本システムでは以下のデータが作成されます。

- ３か月先までの予約データ
利用者情報もデータベースに保存されます。

### 外部インタフェース

- メール
誤予約防止のため、メールアドレスの認証を行います。
注：ログイン機能は実装しない



### スケジュール

| 日付 | 内容 |
|--------|--------|
| 2023年06月まで | 要件定義 |
| 2023年07月まで | データベース・画面設計 |
| 2023年09月まで | バックエンド実装 |
| YYYY年MM月DD日 | 開発完了及び |

### 予算

0万円
