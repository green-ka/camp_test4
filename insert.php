<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/insert.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<body>
</body>
</html>

<?php
//1. POSTデータ取得

//まず前のphpからデーターを受け取る（この受け取ったデータをもとにbindValueと結びつけるため）
$new_username = $_POST["new_username"];
$new_password = $_POST["new_password"];
$email = $_POST["email"];

//2. DB接続します xxxにDB名を入力する
//ここから作成したDBに接続をしてデータを登録します xxxxに作成したデータベース名を書きます
try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}


// 同一ユーザー名がないか検索
$stmt1 = $pdo->prepare("SELECT count(*) FROM gs_user_table where name=:new_username");
$stmt1->bindValue(':new_username', $new_username, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status1 = $stmt1->execute();
$result1 = $stmt1->fetch(PDO::FETCH_COLUMN);
if($result1 == 1) {
    echo "<div class='insert'>
    <p class='view'>既に存在しているユーザーです</p>
    <p class='link back'><a href='insert_screen.php'>back</a></p>
    </div>";
    exit;
}

//登録処理を行う
$stmt2 = $pdo->prepare("INSERT INTO gs_user_table(id, name, pass, email)VALUES(NULL, :new_username, :new_password, :email)");
$stmt2->bindValue(':new_username', $new_username, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt2->bindValue(':new_password', $new_password, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt2->bindValue(':email', $email, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status2 = $stmt2->execute();

//４．データ登録処理後
if($status2==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt2->errorInfo();
  exit("QueryError:".$error[2]);
}else{
  //５．index.phpへリダイレクト 書くときにLocation: in この:　のあとは半角スペースがいるので注意！！
  header("Location: insert_complete.php");
  exit;
}
?>
