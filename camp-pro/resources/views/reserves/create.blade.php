@extends('layouts.default')
@section('content')
    <p>{{ date("Y年m月d日", strtotime($date)) }}の予約</p>
    <form action="{{ route('reserves.store') }}" method="post">
        @csrf
        <label for="">利用人数<input type="number" name="people_num" value=""></label><br>
        <label for=""><input type="hidden" name="date" value="{{ $date }}"></label><br>

          <input type="hidden" name="user_id" value="{{ $user_id }}">
          <input type="hidden" name="mst_site_id" value="{{ $mst_site->id }}">
        <button type="submit">予約する</button>
    </form>









    {{-- @include('reserves.calendars.test') --}}
{{-- 
<label class="open" for="pop-up">新規作成</label>
    <input type="checkbox" id="pop-up">

    <div class="overlay">
        <div class="window">
          <label class="close" for="pop-up">×</label>
          <div class="mst-sites-creat-box">
              <p class="text">create</p>
              <form action="{{ route('reserves.store') }}" method="post">
                  
    
                  @csrf
                  <label for="">利用人数<input type="number" name="people_num" value=""></label><br>
                  <label for="">開始日<input type="date" name="started" value=""></label><br>
                  <label for="">終了日<input type="date" name="finished" value=""></label><br><br>

                    <input type="hidden" value="{{ $reserve->user_id }}">
                    <input type="hidden" value="{{ $reserve->site_id }}">
                  <button type="submit">新規登録</button>
              </form>
          </div>
        </div>
    </div>
     --}}
@endsection