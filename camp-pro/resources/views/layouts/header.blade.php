<header>  
  <div class="header-1">
    <a href="#" class="brand">○○キャンプ場</a>
    @auth
    <form action="{{ route('logout') }}" method="post">
      @csrf
      <button type="submit">ログアウト</button>
      </form>
    @else
    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">ログイン</a>
    @endauth

  </div>
  <div class="header-2">
    @auth
        <a href="{{ route('mst_sites.index') }}">キャンプサイト一覧</a>
    @endauth
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