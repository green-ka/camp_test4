<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規登録</title>
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/insert.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<body>
<div class="insert_form">
    <form method="post" action="insert.php" autocomplete="off">
        <fieldset>
        <legend class="title">Sign Up</legend>
        <label>ユーザー名：</label>
        <p class="box">
            <input type="text" name="new_username" required>
        </p>
        <label>パスワード：</label>
        <p class="box">
            <input type="password" name="new_password" required>
            <span class="field-icon">
                <i class="far fa-eye toggle-password"></i>
            </span>
        </p>
        <label>email：</label>
        <p class="box">
                <input type="email" name="email">
        </p>
            
        <input type="submit" value="Create Account">
        </fieldset>
</form>
<p class="link"><a href="login_screen.php">Sign In</a></p>
<p class="link"><a href="index.php">Home</a></p>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>