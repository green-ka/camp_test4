<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<body>

<div class="login_form">
<form method="post" name="form1" action="login.php">
<fieldset>
    <legend class="title">Login</legend>
    <label><input type="text" name="name" id="" placeholder="Username" class="login"></label><br>
    <label for="pass"><input type="password" name="password" id="" placeholder="Password" class="login"></label><br>
    <a href="javascript:form1.submit()" class="arrow_btn">Login　<span><i class='fas fa-arrow-circle-right'></i></span></a>
</fieldset>
</form>
<p class="link"><a href="insert.php">新規登録</a></p>
<p class="link"><a href="index.php">Home</a></p>
</div>
</body>
</html>