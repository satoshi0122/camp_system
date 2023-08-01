@extends('mst_sites.layout')

@section('content')

<label class="open" for="pop-up">新規作成</label>
<input type="checkbox" id="pop-up">
@include('mst_sites.create')

  <h3>index</h3>
  @foreach ($mst_sites as $mst_site) 
    サイト名：{{ $mst_site->name }}<br>
    最大利用人数：{{ $mst_site->people_num_max }}
    <a href="{{ route('mst_sites.edit',$mst_site->id) }}">編集</a><br><br>

  @endforeach 





@endsection



