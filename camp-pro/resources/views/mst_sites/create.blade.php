<div class="overlay">
    <div class="window">
      <label class="close" for="pop-up">×</label>
      <div class="mst-sites-creat-box">
          <p class="text">create</p>
          <form action="{{ route('mst_sites.store') }}" method="post">
              @csrf
              {{-- @include('mst_sites.form') --}}

              @csrf
              <label for="">サイト名</label><input type="text" name="name" value=""><br>
              <label for="">最大利用人数<input type="number" name="people_num_max" value=""></label><br>
              <label for="">とりま登録者情報も自動追加<input type="number" name="created_by" value="1"><br>







              <button type="submit">新規登録</button>
          </form>
      </div>
    </div>
</div>