## 目的

本ドキュメントは、キャンプ場(架空)の予約・スケジュール管理を行うシステム開発に関する要件定義書になります。

要件定義はこちらの資料を参考にしています。  
https://notepm.jp/sharing/190de8bd-5e83-40f6-ab5e-1bc2f231beb8

##RE図
https://viewer.diagrams.net/?tags=%7B%7D&highlight=0000ff&edit=_blank&layers=1&nav=1&title=prj-camp.drawio#R7Z1bc5u6Fsc%2FDTPdD80YML482o69mzlJT052uk%2F3ecmoRrFpMfJgJbH76Y8ACRtLJhAuxkidtMVCEbDWXz%2FrtpBmTlbbP32wXt4hG7qa0bG3mnmtGYY%2BtCzyX5Cyi1J6ph4lLHzHppn2CX85vyFN7NDUF8eGm0RGjJCLnXUycY48D85xIg34PnpLZntGbvKqa7CAXMJfc%2BDyqf91bLyMUgdWZ5%2F%2BBTqLJbuy3qFnVoBlpgmbJbDRWyIJbvEMeZje4j30V8CDHiZn7oD%2FC%2FqaNV1iHDzpSDNm5Oc5yH21QGjhQrB2NldztCLJ8w3JMnsGK8cNzHxQ0JgWRC5nTjVz4iOEo6PVdgLdwFfMDdE9zU6cje3gB%2BVm%2BIXJ59fd7a8O9r68mX%2Fju7vFff%2FHZ1rKK3BfqH2pbfCOGRzaxP70I7mUg3cP0AXYQd50f2YMPXsUeJdkmj78hj56RHfAIw8%2F3mDg4%2F055NHsM4fcnnmtsyz0c4d85h%2BN3ucGvfhzmPI8RpdKEvgLiFMy9qjD7YTaqOX%2BhGgFsb8jGd72GouVtDzUF0v0Q6O8JlUKqJIWcYHxNe6REwqLVkyzS8uh1bLPJMmKiB6d%2Ftahm48K6h4V1DsuKDINVxA5OHjwfVKoohyKMjhF%2BXAD%2FVfCjGNlkQq4Dg4x%2BBFqKJQBJY4Z6IAwBAPHI9Ul0skcuS5Yb5wwe5SydFz7FuzQC2YFsU%2FjZ2cL7YcIOEFeosBbUtiGiiyoukzXwWngOguPHM%2BJ6IIrjsl9k3u5BRtMc5yU5Sv0Mdym6oietcykdxi2DmQWpx3KzOwMr4aHf7qnBZbwaF73me8DgbmNGAI7wH0glAfeIvRg0kGBlW0frR9ZZQwS1oHwoD99hRFnQ1eQqj9BLgr87EWACLOFD2eNyQ8xyaRzZWkWuYEJ%2BazvP5OfILuPJ8jbYB84oXMgcdsbDFw3xmhNr%2BPCZ3YbPrVtcPwDYUywfcrJqTJ%2F3%2FM75sGsnq7Is13Os%2Ff%2FyuNbRJ712Q0pvnRsG3pRBQ2%2B5MHe3wJXCu0f2%2FzYGcfVMqM%2FzMz%2BOHCAmdP%2BtLC9VXKXBlyifQ9gOEYvnr2pAsAW52eS3ejcfH38pHf%2BIEdf%2F%2F0Y%2FPvt9laLm0JNUgADcZR3vFmDueMtbqPf7B1JxKpCIlvtZJU1SpVMpuJq0MxQZuqLW5zlUL93buqzbtuBa2dNxH5GBwwzO6DtmNf5rtsLaWc%2FJWA%2FMbTRRSK%2BdDlIh%2FSeQno1SB%2BeG%2Bn9VhG9l9n%2BbSf6gPPrxsHwKaX13jifl8X17KJoM9fnN6vhfDX7PnOeNrv%2BdjgYTXqf%2BxmGbBXYPwJ23aiR7GLf8oOnDazkvP3ThSoV2cWm4EdV1xCtXfjkvawO6d44X38A6EXFIB%2FR%2BZFZRfRyiJ59eqUqovOjsQ2s5VkrcTezA1pPdL57Hc5ewqCxfj16nD7e3E1b2Fovqgv54M731hXcy4H74Oxw53vsDazlWStxP7MDWg93fjrs2fGczVJOumcXhnR01w01zF4R3uMFp2fDu24U%2B%2B5uFt%2F3UlWA1w3%2Bm5uuUrSfAJYQ8nnUISHlpV4VWSnlu%2BenfLHht6ZRXsqFkCdswQ%2B%2BzYE3hy5P%2Bcb5uzywq2WPQWndn4Nvw5tXa77%2B%2Fr%2Bfjn%2FX2Vk3ghl3KbHOSSMr6U9jvV8j1oWuLbaitVaov2P%2B08ptNdKFjy1YzdpAt2Zkd4l%2BbzO5xatf%2BRZ5sPpVxZiRM591Vk0ojUUD5UOBH%2BPEjLpgd2MkL2cJ1tH0GyIbqafac4RT6dlbjSnxbSKRVRfpwLf22xTgpks5%2BS42BT%2Fonlwk2zifVxXSlkMUKU2EXrlNhCzF1aESNfNeFetFUW31sv5CZ97TharIrvPddpeo%2F8kDq%2BCG%2Fx49TL6MHj4Z8kRC5BCHdIRn%2FQxF%2BNIJLwpyq5Xwcbe3DYSPhaoIz9yYWFvlixFPo5flAH0OjbQZ9MJJrIGaf68K9MKgt6pIL3Zum%2BbfB2r6PTYFPx4Xt%2BWffgEPSEL7ojqRj%2FZqTW1ltBcFxNVL%2BzatqR2oJbWxKfgRuX27XuG%2BlNW17cT9kO8RKtyXhPusM%2F%2BV4X5YrOfWLNzHSlW4H%2FKdNrgCjnsAeb1zQPlvX2%2F%2B802aaIocQpEO97qal62M98KYuVp5r1%2FqzOw7WlXE1wVzs%2BtlYPxo4Y0ZzskyzjfO46XFU6gJ2ZRujnqPdGVoFwXK1duUv4i19xmrcaxUBfYhP9PubJ5%2BAs%2FBxA1G55P%2BR4T4f8jfBnq8tDGaUl4mffFgF09O89344N20KtzikMxs0EW0OlJY1%2FV8ujgRbiGawRVuVXUO3ah4i2wNghxRuinxFnm%2Fn4qt0Gp3vIWh4i1iU6h4i%2FyiSGkjZIFzjjZC%2FawXtp9MtUirKtZnblFU1fcz27RGy1RrtGJT8N%2Fhx%2BtwrTaGWhTVhXRw7yq4VwV3UahFrXDv8nC%2FkA2F0qWq8N4VvADLh%2BSS9tOPndbmXYWKKkM%2BwKtFt1UBXhhiUS%2Fh27TotqsW3cam4BdbML5L%2BRbbHNKQD%2FBqbr4ywIuiKmoFPLuBtjTh1ex87FnBNs9rW9CEb5yvS4N6KfPy7YS6ZSioVwV1UexEvVBvU%2BxErFSFdIsfb2NIl%2BWt5DnUIB3Te4rpVTFdGB9RK9N7PNMvuaHeU1SPTcFT3YYulKihnkMM8kG92D7ACuo5IyPqhXqxuZOGId3K7IDWI52fNmFIDxvqEiA9uxikQzobH1BILx%2Fpou2DakX64EJfP5quVIX0QbHO9YXhO4fj24xv4U5KGVY0Q3sBWZAAMbSDdw%2FQBdhB3nR%2FZgw9e%2BT7oSamD7%2Bhjx7RHfB2Gg1%2B25%2BLlECyz5zgVsNglDAL%2Fbyv0cGFD7wlDFDboBd%2FDlOwy%2FaGwOwr5ZRKomVRqSwQxpPFiX5oldfkLaco4z74wtprrn%2B0XZHVsZJFRI9Kf2uvBK6gQSdZkN49KigyBVcQcRHYHWSjX6gnb9jqJa%2FDAvn2Co1KLFWvGTqQsuh1eF69mkfuj%2FcZzavXrnUk%2FF5Feu0f6dWoQa8Z%2BsRn0CvcOvg7PRcc%2FxOkX1n00%2FX2INv17owaj8bSWqjx3nFBZWl8cKRxswaNZ1hW2T4mCzOeGcnWURMiLjevXPtHujeO2yIn5FqWonS%2BfxLtazk1NdJ3GRnsYMwOeuGBqY1NejAYaNOuNh5og%2BvwYKYNyUFPG0w00qudkvSOxt7NffFvbnhnD9X0zk53mHR2tyPo%2FbR%2Bo0yxDqWO98qsr5Q6fHJwS9TFrupFTuL747u%2BF%2FTihg955P0e7qWPdomfm%2B80tvPFDWWKos0vdxIbQoV%2BVcX6OjfKFN%2FfBUV%2Bfcj%2BPUnJzkd%2BtXujzDLFIR%2FhVexXVYSvc6NM4f0V3AS1%2BYR%2Ff2iplYQXbIAqxUaZZWpEOtCzuq9AXzroa90oU%2BzcC4oH%2B4gDjBMOaD3p%2BfE4aTbKLFMn8tFeBRVURvs6N8oUO%2FeCggo%2BVIstSWnPj8jJs1FmmUKRD%2FfFttZSuE%2FBfZ0bZYqdW2yIrvm4H8iJe3ZJKTfKLFMo0uHeLBaCpHB%2FGve17pMpdm6xgbrG495sf3yZ%2BLn5Mbr2bZJZpiDkw7rUW2JVi%2FU698gUO7fYiFzzsd6VFOuCHbBauEdmmZJoEdjJRx8hfJjdB%2BvlHbJhkOP%2F

## 業務要件

### 現状のフロー

現状のフローは次のようになっています。

1. キャンプの利用者が管理人に直接電話をし、利用人数、日程、名前、電話番号、利用したいスペースの場所を伝え、予約を行う。
1. 管理人がExcelに記入
1. 当日、現地にて現金決済

### 構築後のフロー

システム構築後、フローは次のようになります。

利用者
1. 利用者は、予約ページから、メールアドレス、名前、メールアドレス、電話番号、日時、利用人数、利用スペース番号を入力
1. 問題がなければ予約完了
1. 当日、現地にて現金決済
1. キャンセル・変更の場合はメールに届いた予約情報URLからキャンセル申請

ログイン利用者
1. アカウント登録、ログイン
1. 予約ページから、日時、利用人数、利用スペース番号を入力
1. 問題がなければ予約完了
1. 当日、現地にて現金決済
1. キャンセル・変更の場合は自身の予約一覧からキャンセル申請

管理者
1. 与えられたメールアドレス、パスワードでログイン
1. キャンプスペース情報の編集・削除・新規登録
1. 予約情報の確認

### 利用者一覧

- キャンプ場管理人
- キャンプ場利用者

### 規模

3人月(エンジニア1人×3)の予定です。

## 機能要件
- キャンプサイト情報確認ページ
- 空き情報確認ページ
- 予約登録
- 予約変更
- 予約キャンセル
- 予約アカウント作成ページ
- マイページ
-- ログイン
-- 予約履歴
-- 退会
- 管理者画面
-- ログイン
-- 予約一覧
-- 予約検索
-- キャンプサイト登録
-- キャンプサイト情報変更
-- キャンプサイト削除


### 画面


- 画面遷移図を参照m
- https://github.com/satoshi0122/will-laravel-project/blob/main/%E7%94%BB%E9%9D%A2%E9%81%B7%E7%A7%BB%E5%9B%B3.PNG


### 権限

- スペースの追加、予約の強制消去は管理者のみ可能とします。
- 予約者の一覧、日程の閲覧は管理者のみ可能とします。
  

### 情報・データ

本システムでは以下のデータが作成されます。

- 利用者情報
- 予約情報
- キャンプスペース情報
- ３か月先までの予約データ

### 外部インタフェース

- メール
アカウント登録をしない場合、予約情報の詳細などはメールにURLが送られます。

### 二次開発
- アカウント未登録での予約登録(メールでのCRUD機能)
- 薪の販売システム
- キャンプ道具のレンタルシステム

### スケジュール

| 日付 | 内容 |
|--------|--------|
| 2023年06月まで | データベース・画面設計 |
| 2023年08月まで | バックエンド実装 |
| 2023年11月まで | インフラ構築 |

