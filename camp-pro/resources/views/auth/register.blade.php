@extends('layouts.auth')

@section('content')

    <p>会員登録</p>
    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
    <form action="{{ route('register') }}" method="post">
    @csrf
    名前：　　　　　：<input type="text" name="name" value="{{ old('name') }}"><br>
    メールアドレス　：<input type="text" name="email" value="{{ old('email') }}"><br>
    電話番号　　　　：<input type="text" name="phone" value="{{ old('phone') }}"><br>
    パスワード　　　：<input type="text" name="password" value="{{ old('password') }}"><br>
    確認用パスワード：<input type="text" name="password_confirmation" value=""><br>
        
    <button type="submit">会員登録</button>
        
    </form>
    または<a href="{{ route('login') }}">ログイン</a>
@endsection