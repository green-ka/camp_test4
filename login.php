<?php

$name = $_POST["name"];
$password = $_POST["password"];

//1.  DB接続します xxxにDB名を入れます
try {
    // mampの場合は注意です！違います！別途後ほど確認します！
    $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
    } catch (PDOException $e) {
      exit('データベースに接続できませんでした。'.$e->getMessage());
    }
    
    if($name != null && $password != null) {
        //２．データ登録SQL作成
        //作ったテーブル名を書く場所  xxxにテーブル名を入れます
        $stmt = $pdo->prepare("SELECT * FROM gs_user_table WHERE name='.$name.'AND pass='.$password.'");
        $status = $stmt->execute();

        //３．データ表示
        $view="";
        if($status==false){
        //execute（SQL実行時にエラーがある場合）
            $error = $stmt->errorInfo();
            exit("ErrorQuery:".$error[2]);
        }else{
            //Selectデータの数だけ自動でループしてくれる $resultの中に「カラム名」が入ってくるのでそれを表示させる例
            while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
                $view .= $result;
            }
        }
    }
?>