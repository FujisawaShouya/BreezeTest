<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="header">
    <h1 class="header_title">Atte</h1>
    <div class="header_nav">
      <ul class="nav_list">
        <li><a href="/">ホーム</a></li>
        <li><a href="/">日付一覧</a></li>
        <li><a href="/">ログアウト</a></li>
      </ul>
    </div>
  </div>

   <div class="main">
    <h2 class="main_title">さんお疲れ様です！</h2>
    <div class="main_button">
      <div class="start_button">
          {{-- <form action="{{route('timestamp/punchin')}}" method="POST"></form> --}} <!--PunchinController実装後 -->
         <form action="/" method="POST">
          @csrf
          <button type="submit" class="btn punchin_btn">勤務開始</button>
          <button type="submit" class="btn punchout_btn">勤務終了</button>
          <button type="submit" class="btn breakin_btn">休憩開始</button>
          <button type="submit" class="btn breakout_btn">休憩終了</button>
         </form>
      </div>
    </div>
   </div>

</body>
</html>