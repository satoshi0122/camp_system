@extends('layouts.default')

@section('content')


<form action="{{ route('mst_sites.update',$mst_site->id) }}" method="post">
    @csrf
    @method('patch')
    @include('mst_sites.form')
    <button type="submit">更新</button>
</form>

{{-- <a href="{{ route('mst_sites.mindestroy',$mst_site->id) }}">削除</a> --}}
<form action="{{ route('mst_sites.softDestroy',$mst_site->id) }}" method="post">
  @csrf
  @method('delete')
  <button type="submit">削除</button>
</form>

@endsection