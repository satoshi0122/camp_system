<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=chrome">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <title>キャンプサイト管理</title>
</head>
<body>
  レイアウト<br>
  @yield('content')
  <br>レイアウト
</body>
</html>
<style>
	*{
		margin:0;
		padding:0;
	}
  .mst-sites-creat-box{
    margin: 5%;
  }

	#overflow {
  width: 100vw;  /* 横幅を画面いっぱいにする */
  height: 100vh; /* 高さを画面いっぱいにする */
  background-color: rgba(0,0,0,0.2); /* 背景を半透明の黒い背景にする */
  position: absolute; /* 相対位置に指定 */
  z-index: 10;        /* ウィンドウの全面に表示 */
  display: none;      /* 初期は非表示 */
}

#overflow .conf {
  background: #FFF;   /* 背景を白色に指定 */
  padding: 20px;      /* 余白を20pxに指定 */
  position: absolute; /* 装置位置に指定 */
  top: 50%;           /* 上から50%の位置に配置 */
  left: 50%;          /* 左から50%の位置に配置 */
  transform: translate(-50%,-50%); /* コンテンツの半分だけ位置を戻して上下左右中央に配置 */
}

.btns {
  text-align: right; /* 要素を右寄せにする */
}
.btns .ok {
  /* okボタンの装飾を変えるなら書く */
}
</style>
{{-- スクリプト動かした --}}