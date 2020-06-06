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
    <form method="post" name="form2" action="insert.php" autocomplete="off" required>
        <fieldset>
        <legend class="title">Sign Up</legend>
        <label>ユーザー名：</label>
        <p class="box">
            <input class="text" type="text" name="new_username" maxlength="25">
        </p>
        <label>パスワード：</label>
        <p class="box">
            <input class="pass" type="password" name="new_password" maxlength="25">
            <span class="field-icon">
                <i class="far fa-eye toggle-password"></i>
            </span>
        </p>
        <label>email：</label>
        <p class="box">
            <input class="text" type="email" name="email">
        </p>
         
    <div class="container">
        <a href="javascript:form2.submit()" class="btn">
        <svg width="200" height="55">
        <defs>
        <linearGradient id="grad1">
            <stop offset="0%" stop-color="#FF8282"/>
            <stop offset="100%" stop-color="#E178ED" />
        </linearGradient>
        </defs>
        <rect x="5" y="5" rx="25" fill="none" stroke="url(#grad1)" width="190" height="45"></rect>
        </svg>
        <span>Create Account</span>
        </a>
    </div>
</fieldset>
</form>
<p class="link"><a href="login_screen.php">Sign In</a></p>
<p class="link"><a href="index.php">Home</a></p>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>