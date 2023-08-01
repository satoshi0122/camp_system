<div id="overflow">
  <div class="conf">
    <p>編集</p> {{-- ダイアログの中身 --}}
    <div class="btns">


        @csrf
        <label for="">サイト名</label><input type="text" name="name" value="{{ $mst_site->name }}"><br>
        <label for="">最大利用人数</label><input type="number" name="people_num_max" value="{{ $mst_site->people_num_max }}"><br>
        <label for="">とりま登録者情報も自動追加</label><input type="number" name="created_by" value="1"><br>
        <button type="submit">編集</button><br><br>
        <input type="button" value="キャンセル" onClick="cansel();"> 
        <input type="button" value="オッケー" class="ok" onClick="next();">

      
    </div>
  </div>
</div>