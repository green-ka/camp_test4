<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<body>

<div class="login_form">
<form method="post" name="form1" action="login.php">
<fieldset>
    <legend class="title">Login</legend>
    <label><input type="text" name="name" id="name" placeholder="Username" class="login"></label>
    <p id="error_name"><p>
    <label for="pass"><input type="password" name="password" id="password" placeholder="Password" class="login"></label>
    <p id="error_pass"><p>
    <a href="javascript:form1.submit()" class="arrow_btn">Login　<span><i class='fas fa-arrow-circle-right'></i></span></a>
</fieldset>
</form>
<?php
session_start();
if(isset($_SESSION["error"])){
    echo "<p class='error'>".$_SESSION["error"]."</p>";
}
?>
<?php $error_msg = $_SESSION["error"]; ?>
<p class="link"><a href="insert.php">新規登録</a></p>
<p class="link"><a href="index.php">Home</a></p>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/app.js"></script>
<script>
    var php = {
        error_msg:"<?php echo $error_msg; ?>"
    }
</script>
</body>
</html>