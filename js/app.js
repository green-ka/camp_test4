$(function () {
  $(".arrow_btn").on("click", function (e) {
    if (php.error_msg != "") {
      php.error_msg = "";
      $(".error").html("<p class='error'>" + php.error_msg + "</p>");
    }
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
