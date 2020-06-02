<?php
session_start();
$name = $_POST["name"];
$password = $_POST["password"];
// エラーメッセージが格納されている場合空にする
if(isset($_SESSION["error"])) {
     $_SESSION["error"] = "";
}

// DB接続
try {
    $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
    } catch (PDOException $e) {
      exit('データベースに接続できませんでした。'.$e->getMessage());
    }

    if($name != null && $password != null) {
        //２．データ登録SQL作成
        $stmt = $pdo->prepare("SELECT count(*) FROM gs_user_table WHERE name='".$name."' AND pass='".$password."'");
        $status = $stmt->execute();
        if($status==false){
            //execute（SQL実行時にエラーがある場合）
            $error = $stmt->errorInfo();
            exit("ErrorQuery:".$error[2]);
        }else{
            $result = $stmt->fetch(PDO::FETCH_COLUMN);
            if($result == 1) {
                $stmt2 = $pdo->prepare("SELECT name FROM gs_user_table WHERE name='".$name."' AND pass='".$password."'");
                $status2 = $stmt2->execute();
                if($status2==false) {
                    $error = $stmt2->errorInfo();
                    exit("QueryError:".$error[2]);
                }else {
                    $result2 = $stmt2->fetch(PDO::FETCH_ASSOC);
                    $_SESSION["username"] = $result2["name"];
                    $SETTION["error"]="";
                    // index.phpへリダイレクト    
                    header("Location: index.php");
                    exit;
                }
            }else{
                $_SESSION["error"] = "ユーザー名またはパスワードが間違っています";
                header("Location: login_screen.php");
            }
        }
    }else{
        header("Location: login_screen.php");
    }
?>

