/*
  Author    : R Andri Pratama
  Instagram : @andridev.03
***/
$(function () {
  $("#login-form").validate({
    rules: {
      username: {
        required: true,
        minlength: 5,
      },
      password: {
        required: true,
        minlength: 5,
      },
    },
    messages: {
      username: {
        required: "Username Tidak Boleh Kosong",
        minlength: "Username Harus berjumlah 5 karakter",
      },
      password: {
        required: "Password Tidak Boleh Kosong",
        minlength: "Password Harus berjumlah 5 karakter",
      },
    },
    highlight: function (el) {
      $(el)
        .closest(".form-group")
        .removeClass("has-success")
        .addClass("has-error");
    },
    unhighlight: function (el) {
      $(el)
        .closest(".form-group")
        .removeClass("has-error")
        .addClass("has-success");
    },
    submitHandler: function (form) {
      $.post($("#login-form").attr("action"), {
        username: $("#username").val(),
        password: $("#password").val(),
      });
      form.submit();
      console.log($("#login-form").attr("action"));
    },
  });
});
