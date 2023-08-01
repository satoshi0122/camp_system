<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=chrome">
  <title>キャンプサイト管理</title>
</head>
<body>
  レイアウト<br>
  @yield('content')
  <br>レイアウト
</body>
</html>
<style>
  .mst-sites-creat-box{
    margin: 5%;
  }
  .open {
	cursor:pointer; /* マウスオーバーでカーソルの形状を変えることで、クリックできる要素だとわかりやすいように */
}
#pop-up {
	visibility: hidden;; /* label でコントロールするので input は非表示に */
}
.overlay {
	visibility: hidden; /* input にチェックが入るまでは非表示に */
}
#pop-up:checked + .overlay {
	visibility: visible;
	display: block;
	z-index: 9999;
	background-color: #00000070;
	position: fixed;
	width: 100%;
	height: 100vh;
	top: 0;
	left: 0;
}
.window {
	width: 90vw;  
	max-width: 540px;
	height: 380px;
	background-color: #ffffff;
	border-radius: 6px;
	/* display: flex; */
	/* justify-content: center; */
	/* align-items: center; */
	position: fixed;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
}
.text {
	font-size: 18px;
	margin: 0;
}
.close {
	cursor:pointer;
	position: absolute;
	top: 4px;
	right: 4px;
	font-size: 20px;
}
</style>