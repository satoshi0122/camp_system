@extends('layouts.auth')

@section('content')

    <h1>管理者登録</h1>
    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
    <form action="{{ route('register') }}" method="post">
    @csrf
    名前：<input type="text" name="name" value="{{ old('name') }}"><br>
    メールアドレス：<input type="text" name="email" value="{{ old('email') }}"><br>
    パスワード：<input type="text" name="password" value="{{ old('pasword') }}"><br>
    確認用パスワード：<input type="text" name="password_confirmation" value=""><br>
        
    <button type="submit">管理者登録</button>
        
            
    </form>
    または<a href="{{ route('login') }}">ログイン</a>
@endsection