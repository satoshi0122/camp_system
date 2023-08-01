@extends('mst_sites.layout')

@section('content')

@include('mst_sites.create')

{{-- 新規作成ボタン --}}
<input type="button" value="新規作成" onClick="check();">


aaa
<div id="overflow">
  <div class="conf">
    <p>ダイアログです</p>
    <div class="btns">
      <input type="text" id="name">
      <input type="text" id="ppp">

      <input type="button" value="キャンセル" onClick="cansel();"> 
      <input type="button" value="オッケー" class="ok" onClick="next();">
    </div>
  </div>
</div>

<p>これでいいですか？</p>
<input type="button" value="決定" onClick="check();">

<script>
	function check(){
  $("#overflow").show();
	}
	function cansel(){
		$("#overflow").hide(); // 確認ボックスを消す
	}
	function next(){
		$("#overflow").hide();
		// ok後の処理を書く
	}
</script>





  <h3>index</h3>
  @foreach ($mst_sites as $mst_site) 
    サイト名：{{ $mst_site->name }}<br>
  最大利用人数：{{ $mst_site->people_num_max }} 
  {{-- <form action="{{ route('mst_sites.store',$mst_site->id) }}" method="post"> --}}
  </form>

  
  <br><br>
  @endforeach 

@endsection