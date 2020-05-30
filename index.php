<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
  <?php
  session_start();
  $_SESSION["username"] = "ゲスト";
  ?>
    <!-- ヘッダー -->
    <header>
      <!-- タイトルを入力する -->
      <h1>Game</h1>

      <!-- ナビゲーション 4項目程度 -->
      <nav>
        <ul>
          <li class="a">Game</li>
          <li class="c">Game</li>
          <li class="d">Game</li>
          <li class="e">Game</li>
          <li class="f">Game</li>
          <li class="login">
          <?php
          echo '<a href="login.php">'.$_SESSION["username"].'</a>でログインしています</li>'
          ?>
        </ul>
      </nav>
    </header>
    <!-- メイン -->
    <main>
      <!-- 内容が関連する場合 -->
      <section></section>
      <!-- 内容が異なる場合 -->
      <article></article>
      <!-- 上記に当てはまらない場合 -->
      <div></div>
    </main>
    <!-- フッター -->
    <footer></footer>
  </body>
</html>
