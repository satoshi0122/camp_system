<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=chrome">
	{{-- ブレード個別のスタイルシート反映 --}}
	@stack('css')
	@yield('yield.css')
  {{-- <title>〇〇キャンプ場</title> --}}
</head>
<body>
	@include('layouts.header')
	<div class="over">
		<div class="over2">
  		@yield('content')
		</div>
	</div>
</body>
</html>
<style>
  * {
		margin:0;
		padding:0;
	}
	.over{
		width: 100%;
		height: 1000px;
		background-color: white;
	}
	.over2{
		max-width: 800px;
		min-width: 600px;
		height: 400px;
		margin: 0 auto;
		background-color: white;
	}
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
/* createモーダル */
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