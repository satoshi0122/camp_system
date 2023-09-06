@extends('layouts.auth')

@section('content')

    <p>ログイン</p>
    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
    <form action="{{ route('login') }}" method="post">
    @csrf
    {{-- 名前：<input type="text" name="name" value="{{ old('name') }}"><br> --}}
    メールアドレス：<input type="text" name="email" value="{{ old('email') }}"><br>
    パスワード：<input type="text" name="password" value="{{ old('pasword') }}"><br>
        
    <button type="submit">ログイン</button>
        
            
    </form>
    または<a href="{{ route('register') }}">管理者登録</a>
@endsection