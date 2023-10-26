  @csrf
  <label for="">サイト名</label><input type="text" name="name" value="{{ $mst_site->name }}"><br>
  <label for="">最大利用人数<input type="number" name="people_num_max" value="{{ $mst_site->people_num_max }}"></label><br>
  {{-- <label for="">とりま登録者情報も自動追加<input type="number" name="created_by" value="1"><br> --}}
    
    <input type="hidden" name="updated_by" value="{{ Auth::id() }}">
