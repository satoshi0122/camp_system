@extends('mst_sites.layout')

@section('content')


<h3>edit</h3>
<form action="{{ route('mst_sites.update',$mst_site) }}" method="post">
    @csrf
    @method('patch')
    @include('mst_sites.form')
    <button type="submit">編集</button>
</form>

{{-- <a href="{{ route('mst_sites.mindestroy',$mst_site->id) }}">削除</a> --}}
<form action="{{ route('mst_sites.mindestroy',$mst_site->id) }}" method="post">
  @csrf
  {{-- @method('patch') --}}
  <button type="submit">削除</button>
</form>

@endsection