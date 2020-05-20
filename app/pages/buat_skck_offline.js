$(function () {
  // $("#tanggal_lahir, #tinggal_dari, #tinggal_sampai").datepicker({
  //   format: "yyyy-mm-dd",
  //   autoclose: true,
  //   todayHighlight: true,
  // });
  // // input dropify
  // // Basic
  // $(".dropify").dropify();
  // // Used events
  // var drEvent = $("#input-file-events").dropify();
  // drEvent.on("dropify.beforeClear", function (event, element) {
  //   return confirm(
  //     'Do you really want to delete "' + element.file.name + '" ?'
  //   );
  // });
  // drEvent.on("dropify.afterClear", function (event, element) {
  //   alert("File deleted");
  // });
  // drEvent.on("dropify.errors", function (event, element) {
  //   console.log("Has Errors");
  // });
  // var drDestroy = $("#input-file-to-destroy").dropify();
  // drDestroy = drDestroy.data("dropify");
  // $("#toggleDropify").on("click", function (e) {
  //   e.preventDefault();
  //   if (drDestroy.isDropified()) {
  //     drDestroy.destroy();
  //   } else {
  //     drDestroy.init();
  //   }
  // });
  // // Select
  // $("#kota").on("change", (e) => {
  //   var $th = $("#kota");
  //   $("#kecamatan").html(`<option value="">-- Pilih Kecamatan</option>`);
  //   $.get(
  //     $("#validation").data("api") + "/kabkota/kecamatan/" + $th.val(),
  //     (respon) => {
  //       var html = `<option value="">-- Pilih Kecamatan</option>`;
  //       let data = respon.data;
  //       for (let index = 0; index < data.length; index++) {
  //         const element = data[index];
  //         html += `<option value="${element.id}">${element.nama_kecamatan}</option>`;
  //       }
  //       $("#kecamatan").html(html);
  //     }
  //   );
  // });
  // $("#kecamatan").on("change", (e) => {
  //   var $th = $("#kecamatan");
  //   $("#kelurahan").html(`<option value="">-- Pilih Kelurahan/Desa</option>`);
  //   $.get(
  //     $("#validation").data("api") + "/kecamatan/desa/" + $th.val(),
  //     (respon) => {
  //       var html = `<option value="">-- Pilih Kelurahan/Desa</option>`;
  //       let data = respon.data;
  //       for (let index = 0; index < data.length; index++) {
  //         const element = data[index];
  //         html += `<option value="${element.id}">${element.nama_desa}</option>`;
  //       }
  //       $("#kelurahan").html(html);
  //     }
  //   );
  // });

  $("#validation").validate({
    rules: {
      nik: {
        required: true,
      },
    },
    messages: {
      nik: {
        required: "nik Tidak Boleh Kosong",
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
      form.submit();
      console.log($("#login-form").attr("action"));
    },
  });
});
