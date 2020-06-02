<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  </head>
  <body>
  <?php
  session_start();
  $_SESSION["username"] = "";
  ?>
    <!-- ヘッダー -->
    <header>
      <!-- タイトルを入力する -->
      <?php
          if($_SESSION["username"]==""){
            $_SESSION["username"] = "ゲスト";
            echo '<div class="tooltip">
              <p>ようこそ、<span class="user">'.$_SESSION["username"].'</span>さん</p>
              <div class="description">
              <a href="login_screen.php" class="link"><i class="fas fa-lock"></i>　ログイン</a><br>
              <a href="insert.php" class="link"><i class="far fa-user"></i>　新規登録</a>
              </div>
              </div>';
          }else{
            echo '<div class="tooltip">
              <p><span class="user">'.$_SESSION["username"].'</span>さん
              <div class="description_user">
              <i class="fas fa-sign-out-alt"></i>　ログアウト</a><br>
              </div>
              </div>';
          }
          ?> 
        <div class="title"><p class="game">Game</p></div>


      <!-- ナビゲーション 4項目程度 -->
      <nav>
        <ul>
          <li class="a">Game</li>
          <li class="c">Game</li>
          <li class="d">Game</li>
          <li class="e">Game</li>
          <li class="f">Game</li>
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
