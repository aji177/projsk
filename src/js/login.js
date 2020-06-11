"use strict";

(function () {
  $.toast({
    heading: "Selamat Datang!!",
    text: "Silahkan Login untuk memulai pengajuan SKCK",
    position: "top-right",
    loaderBg: "#ff6849",
    icon: "success",
    hideAfter: 3500,
  });
  $("#login-form").on("submit", function (event) {
    event.preventDefault();

    var validation = {
      nik: {
        valid: {
          required: true,
          minLength: 16,
        },
        messages: {
          required: "Kolom Nomor KTP tidak boleh kosong",
          minLength: "Kolom Nomor KTP kurang lebih 16 karakter",
        },
      },
      nama: {
        valid: {
          required: true,
        },
        messages: {
          required: "Kolom Nama Lengkap tidak boleh kosong",
        },
      },
    };

    var isValid = 0;
    var dataInput = {};

    for (const id in validation) {
      if (validation.hasOwnProperty(id)) {
        const key = validation[id];
        var jKey = $(`#${id}`);

        var required = jKey.val() == "";
        var minLength = jKey.val().length < key.valid.minLength;

        if (required == key.valid.required) {
          jKey.closest(".form-group").addClass("has-error");
          jKey
            .closest(".form-group")
            .find("p.valid-text")
            .text(key.messages.required);
          console.log(key.messages.required);
        } else if (minLength) {
          jKey.closest(".form-group").addClass("has-error");
          jKey
            .closest(".form-group")
            .find("p.valid-text")
            .text(key.messages.minLength);
          console.log(key.messages.minLength);
        } else {
          jKey.closest(".form-group").removeClass("has-error");
          jKey.closest(".form-group").addClass("has-success");
          isValid += 1;
          dataInput[id] = jKey.val();
        }
      }
    }

    if (Object.keys(validation).length == isValid) {
      // Logical Login
      var url = this.getAttribute("action");
      $.post(url, dataInput).done((data) => {
        if (data.errors == true) {
          $.toast({
            heading: "Oops!!",
            text: data.messages,
            position: "top-right",
            loaderBg: "#ff6849",
            icon: "error",
            hideAfter: 3500,
          });
        } else {
          document.location.href = data.redirect;
        }
      });
    }
  });
})(jQuery);
