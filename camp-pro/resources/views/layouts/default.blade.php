<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=chrome">
	<link href="{{ asset('css\layouts\default.blade.css') }}" rel="stylesheet">
	{{-- 子ブレード個別のスタイルシート反映 --}}
	@stack('css')
	<title>〇〇キャンプ場</title>
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
