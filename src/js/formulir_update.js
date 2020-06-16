$(document).ready(function () {
  $("#input_file_ktp").closest("div.dropify-wrapper").hide();
  $("#foto_ktp").show();

  $("#foto_ktp").error(function () {
    $("#ganti_foto").attr("disabled", "disabled");
    $("#input_file_ktp").closest("div.dropify-wrapper").show();
    $("#foto_ktp").hide();
    console.log(3);
  });

  $("#ganti_foto").on("click", function () {
    if ($("#foto_ktp").is(":visible")) {
      $("#input_file_ktp").closest("div.dropify-wrapper").show();
      $("#foto_ktp").hide();
    } else {
      $("#input_file_ktp").closest("div.dropify-wrapper").hide();
      $("#foto_ktp").show();
    }
  });
  $("#alert").hide();
  getKecamatan();
});

(function () {
  // Basic
  $(".dropify").dropify();
  var tanggal_lahir = document.getElementById("tanggal_lahir");
  var tinggal_dari = document.getElementById("tinggal_dari");
  const validators = {
    validators: {
      notEmpty: {
        message: "Harap Isi Bidang Ini",
      },
    },
  };

  tanggal_lahir.addEventListener("keyup", (e) => {
    tinggal_dari.value = tanggal_lahir.value;
  });

  $("#tanggal_lahir").datepicker({
    format: "yyyy-mm-dd",
    orientation: "bottom left",
    container: "#tl-container",
    autoclose: true,
    todayHighlight: true,
  });

  $("#tinggal_dari").datepicker({
    format: "yyyy-mm-dd",
    orientation: "bottom left",
    container: "#td-container",
    autoclose: true,
    todayHighlight: true,
  });

  $("#tinggal_sampai").datepicker({
    format: "yyyy-mm-dd",
    orientation: "bottom left",
    container: "#ts-container",
    autoclose: true,
    todayHighlight: true,
  });

  $("#kota").on("change", (e) => {
    var id_kota = $("#kota").data("id");
    $("#kecamatan").html(`<option value="">-- Pilih Kecamatan</option>`);
    $("#kelurahan").html(`<option value="">-- Pilih Kelurahan/Desa</option>`);
    $.get(`${$.url()}api/kabkota/kecamatan/${$("#kota").val()}`, (respon) => {
      var html = `<option value="">-- Pilih Kecamatan</option>`;

      for (let index = 0; index < respon.data.length; index++) {
        const element = respon.data[index];
        html += `<option value="${element.id}">${element.nama_kecamatan}</option>`;
      }

      $("#kecamatan").html(html);
    });
  });

  $("#kecamatan").on("change", (e) => {
    $.get(`${$.url()}api/kecamatan/desa/${$("#kecamatan").val()}`, (respon) => {
      var html = `<option value="">-- Pilih Kelurahan/Desa</option>`;

      for (let index = 0; index < respon.data.length; index++) {
        const element = respon.data[index];
        html += `<option value="${element.id}">${element.nama_desa}</option>`;
      }
      $("#kelurahan").html(html);
    });
  });

  checkSelectedAgama();

  $('input:radio[name="keperluan_action"]').click(function (e) {
    if ($(this).val() == 1 && $(this).is(":checked")) {
      $("#keperluan").attr("disabled", "disabled");
      $("#keperluan_ekstra").attr("name", "keperluan");
      $("#keperluan").removeAttr("name");
      $("#keperluan_ekstra").removeAttr("disabled");
    } else {
      $("#keperluan_ekstra").attr("disabled", "disabled");
      $("#keperluan").attr("name", "keperluan");
      $("#keperluan").removeAttr("disabled");
      $("#keperluan_ekstra").removeAttr("name");
    }
  });

  $("#exampleValidator").wizard({
    onInit: function () {
      $("#validation").formValidation({
        framework: "bootstrap",
        fields: {
          nik: validators,
          tempat_lahir: validators,
          tanggal_lahir: validators,
          nama_jalan: validators,
          kota: validators,
          kecamatan: validators,
          kelurahan: validators,
          agama: validators,
          pekerjaan: validators,
        },
      });
    },
    validator: function () {
      var fv = $("#validation").data("formValidation");
      var $this = $(this);
      // Validate the container
      fv.validateContainer($this);
      var isValidStep = fv.isValidContainer($this);
      if (isValidStep === false || isValidStep === null) {
        return false;
      }
      return true;
    },
    onFinish: function () {
      $.ajax({
        url: `${$.url()}user/update`,
        type: "post",
        data: new FormData(document.getElementById("validation")),
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        beforeSend: function () {
          $("#alert").removeClass("alert-danger");
          $("#alert").removeClass("alert-success");
          $("#alert").addClass("alert-warning");
          $("#alert").show();
          $("#messages").text("Menyimpan Data Anda, Silahkan Tunggu");
        },
        success: function (d) {
          $("#alert").fadeOut(500);
          var data = JSON.parse(d);
          if (data["errors"] == true) {
            $("#alert").removeClass("alert-warning");
            $("#alert").removeClass("alert-success");
            $("#alert").addClass("alert-danger");
            $("#alert").fadeIn(500);
            $("#messages").text(data["messages"]);
          } else {
            $("#alert").removeClass("alert-warning");
            $("#alert").removeClass("alert-danger");
            $("#alert").addClass("alert-success");
            $("#alert").fadeIn(500);
            $("#messages").text(data["messages"]);
            setTimeout(() => {
              window.location.href = `${$.url()}user/pengajuan_skck`;
            }, 5000);
          }
        },
      });
    },
  });
})(jQuery);

function getKecamatan() {
  var id_kecamatan = $("#kecamatan").data("id");
  $.get(`${$.url()}api/kabkota/kecamatan/${$("#kota").val()}`, (respon) => {
    var html = `<option value="">-- Pilih Kecamatan</option>`;

    for (let index = 0; index < respon.data.length; index++) {
      const element = respon.data[index];
      html += `<option value="${element.id}" ${
        element.id == id_kecamatan ? "selected" : ""
      }>${element.nama_kecamatan}</option>`;
    }
    $("#kecamatan").html(html);
  }).done(getDesa);
}

function getDesa() {
  var id_kelurahan = $("#kelurahan").data("id");
  $.get(`${$.url()}api/kecamatan/desa/${$("#kecamatan").val()}`, (respon) => {
    var html = `<option value="">-- Pilih Kelurahan/Desa</option>`;

    for (let index = 0; index < respon.data.length; index++) {
      const element = respon.data[index];
      html += `<option value="${element.id}" ${
        element.id == id_kelurahan ? "selected" : ""
      }>${element.nama_desa}</option>`;
    }
    $("#kelurahan").html(html);
  });
}

function checkSelectedAgama(params) {
  var value = $("#agama").data("value");

  $("#agama option").each(function () {
    if (this.value === value) {
      this.setAttribute("selected", "");
    }
  });
}
