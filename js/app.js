$(function () {
  $(".arrow_btn").on("click", function (e) {
    php.error_msg = "";
    $(".error").html("<p class='error'><p>");
    if ($("#name").val() == null || $("#name").val() == "") {
      $("#error_pass").html("<p id='error_pass'><p>");
      $("#error_name").html("※ユーザー名を入力してください");
      return false;
    } else if ($("#password").val() == null || $("#password").val() == "") {
      $("#error_name").html("<p id='error_name'><p>");
      $("#error_pass").html("※パスワードを入力してください");
      return false;
    }
  });
});

// パスワードの表示・非表示切替
$(".toggle-password").click(function () {
  // iconの切り替え
  if ($(this).hasClass("far fa-eye")) {
    $(this).toggleClass();
    $(this).toggleClass("far fa-eye-slash toggle-password");
  } else {
    $(this).toggleClass();
    $(this).toggleClass("far fa-eye toggle-password");
  }

  // 入力フォームの取得
  let input = $(this).parent().prev("input");
  // type切替
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});

$(".btn").on("click", function () {
  alert("ボタン押したよ");
  return false;
});
