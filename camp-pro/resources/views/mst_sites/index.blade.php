@extends('layouts.default')

{{-- 親にpush --}}
@push('css')
    <link href="{{ asset('css/mst_sites/index.css') }}" rel="stylesheet">
@endpush

@section('content')

<label class="open" for="pop-up">新規作成</label>
<input type="checkbox" id="pop-up">
@include('mst_sites.create')

  @foreach ($mst_sites as $mst_site) 
    <div class="mst-site-box">
      <div class="image-box">
        {{-- TODO：画像のCRUD機能 --}}
        @php
            $ran = rand(1,5);
        @endphp
        <img src="{{ asset('images/site'.$ran.'.jpg') }}" alt="サイト画像" width="250" height="124">
      </div>
        <div class="text-box">
          <p class="site-name">{{ $mst_site->name }}</p>
            <div class="site-text">
            <p>最大利用人数：{{ $mst_site->people_num_max }}</p>
            </div>   
        </div>
        <div-site-button>
          @auth
          <a href="{{ route
            ('mst_sites.edit',$mst_site->id) }}">編集</a>
            @endauth
          <a href="{{ route('reserves.index',$mst_site->id) }}">予約</a>
        </div-site-button>
    </div>
  @endforeach 

@endsection





