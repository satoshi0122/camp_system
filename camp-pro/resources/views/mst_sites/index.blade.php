@extends('mst_sites.layout')

@push('css')
    <link href="{{ asset('css/mst_sites/index.css') }}" rel="stylesheet">
@endpush

{{-- <style>
  .mst-site-box{
  height: 160px;
  width: 100%;
  margin: 5px 10px;
  background-color: blue;
  .image-box{
    height: 40px;
    width: 120px;
    padding:5%;
    background-color: red;
  }
  }
  h3{
    color: red;
  }
</style> --}}
{{-- @section('yield.css')
  <link href="{{ URL('/camp-pro/resources/css/mst_sites/index.css') }}" rel="stylesheet">
@endsection --}}

@section('content')

{{-- @push('css')
    <link href="{{ asset('/camp-pro/resources/css/mst_sites/index.css') }}" rel="stylesheet">
@endpush --}}

<label class="open" for="pop-up">新規作成</label>
<input type="checkbox" id="pop-up">
@include('mst_sites.create')

  <h3>index</h3>
  @foreach ($mst_sites as $mst_site) 
    <div class="mst-site-box">
      <div class="image-box">
        {{-- TODO：画像のCRUD機能 --}}
        <img src="" alt="">
      </div>
        <div class="text-box">
          <p class="site-name">{{ $mst_site->name }}</p>
            <div class="site-text">
            <p>最大利用人数：{{ $mst_site->people_num_max }}</p>
            </div>   
        </div>
        <div-site-button>
          <a href="{{ route
            ('mst_sites.edit',$mst_site->id) }}">編集</a>
          <a href="">2</a>
          <a href="">3</a>
        </div-site-button>
    </div>
  @endforeach 

@endsection





