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
        <div class="label">
        <label class="required">必須</label>
        <label class="label2">ユーザー名：</label>
        <p class="label3">4文字以上25文字以下の半角英数を入力してください
        </p>
        </div>
        <p class="box">
            <input id="new_name" class="text" type="text" name="new_username" maxlength="25">
        </p>
        <div class="label">
        <p class="error_new_name"></p>
        <label class="required">必須</label>
        <label class="label2">パスワード：</label>
        <p class="label3">4文字以上25文字以下の半角英数を入力してください
        </p>
        </div>
        <p class="box">
            <input id="new_pass" class="pass" type="password" name="new_password" maxlength="25">
            <span class="field-icon">
                <i class="far fa-eye toggle-password"></i>
            </span>
        </p>
        <p class="error_new_pass"></p>
        <div class="label">
        <label class="optional">任意</label>
        <label class="label2">email：</label>
        </div>
        <p class="box">
            <input class="text" type="email" name="email">
        </p>
         
    <div class="container">
        <a href="javascript:form2.submit()" class="btn" id="new_btn">
        <svg width="200" height="55" id="bbb">
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