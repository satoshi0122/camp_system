<header>  
  <div class="header-1">
    <a href="#" class="brand">Brand</a>
    @auth
    <form action="{{ route('logout') }}" method="post">
      @csrf
      <button type="submit">ログアウト</button>
      </form>
    @else
    <form action="{{ route('login') }}" method="post">
      @csrf
      <button type="submit">ログイン</button>
      </form>
    @endauth

    
    
  </div>
  <div class="header-2">
    <a href="">キャンプサイト一覧</a>
    <a href="">予約を行う</a>
  </div>
  


</header>
<style>
  .header-1{
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: white;
  > a{
    padding:16px;
  }
}
  .header-2{
    display: flex;
    align-items: center;
    background-color: rgb(169, 212, 255);
    > a{
      padding:16px;
    }
  }



</style>