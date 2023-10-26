@extends('layouts.default')

@section('content')


<h3>edit</h3>
<form action="{{ route('reserves.update',$reserve) }}" method="post">
  @csrf
  @method('patch')
  <label for="">利用人数<input type="number" name="people_num" value="{{ $reserve->people_num }}"></label><br>
  <label for="">開始日<input type="date" name="started" value="{{ $reserve->started }}"></label><br>
  <label for="">終了日<input type="date" name="finished" value="{{ $reserve->finished }}"></label><br><br>

  <input type="hidden" value="{{ $reserve->user_id }}">

    <button type="submit">編集</button>
</form>



@endsection