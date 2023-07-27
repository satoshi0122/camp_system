@foreach ($mst_sites as $mst_site) 
  サイト名：{{ $mst_site->name }}<br>
最大利用人数：{{ $mst_site->people_num_max }}<br>
@endforeach 