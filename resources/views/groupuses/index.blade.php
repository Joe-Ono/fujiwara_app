<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>groupuse cover</title>
</head>
<body>
    <h1>平泉町体育施設</h1>
    <!-- 利用登録画面へジャンプする -->
    <button onclick="location.href='/groupuses/create'">利用団体登録</button>
    <!-- ログイン画面へジャンプする -->
    <button onclick="location.href='/groupuses/'">体育施設予約</button>
    <div id="cover-img">
        {{-- <img src="img/reservationsystem.png" alt="cover-photo"> --}}
        <img src="{{ Storage::url('images/reservationsystem.png' ) }}" alt="" class="mb-4">
    </div>
    <div id="menu-img">
        <img src="{{ Storage::url('images/check.png' ) }}">
        <img src="{{ Storage::url('images/facilities.png' ) }}">
    </div>
    <h3>登録項目一覧</h3>
    <ul>
        @foreach ($groupuses as $groupuse)
            <!-- // リンク先をidで取得し名前で出力 -->
            <li><a href="/groupuses/{{  $groupuse->id }}">{{  $groupuse->group_name  }}</a></li>
        @endforeach
    </ul>
    <!-- 新規登録画面へジャンプする -->
    <button onclick="location.href='/groupuses/create'">登録する</button>

</body>
</html>
