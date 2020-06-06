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

$("#new_btn").on("click", function () {
  if ($("#new_name").val() == "") {
    $(".error_new_pass").html("<p id='error_new_pass'><p>");
    $(".error_new_name").text("※ユーザー名を入力してください");
    return false;
  } else if ($("#new_pass").val() == "") {
    $(".error_new_name").html("<p id='error_new_name'><p>");
    $(".error_new_pass").text("※パスワードを入力してください");
    return false;
  }
  var result_name = $("#new_name")
    .val()
    .match(/^[A-Za-z0-9]{4,25}$/);
  if (result_name == null) {
    $(".error_new_pass").html("<p id='error_new_pass'><p>");
    $(".error_new_name").text(
      "※ユーザー名は4文字以上25文字以下の半角英数で入力してください"
    );
    return false;
  }
  var result_pass = $("#new_pass")
    .val()
    .match(/^[A-Za-z0-9]{4,25}$/);
  if (result_pass == null) {
    $(".error_new_name").html("<p id='error_new_name'><p>");
    $(".error_new_pass").text(
      "※パスワードは4文字以上25文字以下の半角英数で入力してください"
    );
    return false;
  }
});
