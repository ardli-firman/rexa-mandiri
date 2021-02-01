$(function () {
  $("#list-barang").DataTable({
    paging: false,
    scrollY: 400
  });
  $(".alert").hide();
  $("#form-tambah").on("submit", function (params) {
    params.preventDefault();
    $(".alert").fadeOut();
    $.ajax({
      url: "./admin/manajemen/tambah",
      data: new FormData(this),
      method: "post",
      contentType: false,
      processData: false,
      success: function (params) {
        if (params == 1) {
          swal({
            title: "Success",
            text: "Berhasil ditambahkan",
            icon: "success",
            buttons: false
          });
          setTimeout(function () {
            window.location.href = "./admin";
          }, 1000);
        } else {
          $(".alert").fadeIn();
          $(".alert").html(params);
        }
      }
    });
  });

  $(".modal-edit").on("click", function (params) {
    params.preventDefault();

    let id = $(this).data("id");
    $(".alert").fadeOut();

    $.ajax({
      url: "./admin/manajemen/getUbah",
      data: {
        id: id
      },
      method: "post",
      dataType: "json",
      success: function (params) {
        $("#e_id_brg").val(params.id_barang);
        $("#e_kategori").val(params.id_kategori);
        $("#e_nm_foto").val(params.foto_barang);
        $("#e_nama").val(params.nama_barang);
        $("#e_deskripsi").val(params.deskripsi_barang);
      }
    });
  });

  $("#form-edit").on("submit", function (params) {
    $(".alert").fadeOut();

    params.preventDefault();
    $.ajax({
      url: "./admin/manajemen/ubah",
      data: new FormData(this),
      method: "post",
      processData: false,
      contentType: false,
      success: function (params) {
        if (params == 1) {
          swal({
            title: "Success",
            text: "Berhasil diedit",
            icon: "success",
            buttons: false
          });
          setTimeout(function () {
            window.location.href = "./admin";
          }, 1000);
        } else {
          $(".alert").fadeIn();
          $(".alert").html(params);
        }
      }
    });
  });
});