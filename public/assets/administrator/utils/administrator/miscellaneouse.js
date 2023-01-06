let table = $("#datatable").DataTable({
    ajax: {
        url: baseUrl("/api/administrator/miscellaneouse" + "-fetch"),
        dataSrc: "data",
        type: "POST",
    },
    processing: true,
    serverSide: true,
    paging: true,
    lengthChange: true,
    searching: true,
    ordering: true,
    info: true,
    autoWidth: false,
    responsive: true,
    columns: [
        {
            data: "miscellaneouse_nama",
            name: "mi.miscellaneouse_nama",
            width: "250px",
        },
        {
            data: "miscellaneouse_video_link",
            name: "mi.miscellaneouse_video_link",
        },
        {
            data: "foto_count",
        },
        {
            data: "created_at",
            name: "mi.created_at",
        },
        {
            data: "id",
            name: "mi.id",
            render: function (data, i, row) {
                // ==> Container
                var div = document.createElement("div");
                div.className = "row-action";

                // ==> Button Foto
                var btn = document.createElement("button");
                btn.className = "btn btn-info btn-icon btn-sm action-detail";
                btn.innerHTML = '<i class="fa fa-list mr-1"></i>';
                div.append(btn);

                // ==> Button Edit
                var btn = document.createElement("button");
                btn.className = "btn btn-warning btn-icon btn-sm action-edit";
                btn.innerHTML = '<i class="fa fa-edit mr-1"></i>';
                div.append(btn);

                // ==> Button Delete
                var btn = document.createElement("button");
                btn.className = "btn btn-danger btn-icon btn-sm action-hapus";
                btn.innerHTML = '<i class="fa fa-times mr-1"></i>';
                div.append(btn);

                return div.outerHTML;
            },
            width: "150px",
        },
    ],
    createdRow: function (row, data) {
        // ==> Detail Button
        $(".action-detail", row).click(function (e) {
            e.preventDefault();
            window.location.replace(
                baseUrl("/administrator/projeck-miscellaneouse-image/" + data.id)
            );
        });

        // ==> Edit Button
        $(".action-edit", row).click(function (e) {
            e.preventDefault();

            // ==> Form
            $('input[name="id"]').val(data.id);
            $('input[name="nama"]').val(data.miscellaneouse_nama);
            $('input[name="video_link"]').val(data.miscellaneouse_video_link);
            $('textarea[name="deskripsi"]').summernote(
                "code",
                data.miscellaneouse_deskripsi
            );
            $(".image-preview").attr(
                "src",
                data.miscellaneouse_thumbnail
                    ? assetsUrl("uploads/miscellaneouse/" + data.miscellaneouse_thumbnail)
                    : assetsUrl("uploads/miscellaneouse/no-image.png")
            );

            $(".message-error").empty();
            $("#modal-form").modal("show");
        });

        // ==> Delete Button
        $(".action-hapus", row).click(function (e) {
            e.preventDefault();
            Swal.fire({
                title: "Warning",
                text: "Anda akan menghapus data ini ??",
                icon: "warning",
                showCancelButton: true,
                customClass: {
                    confirmButton: "btn btn-danger",
                    cancelButton: "btn btn-secondary",
                },
                buttonsStyling: false,
                confirmButtonText: "Hapus",
                cancelButtonText: "Batal",
            }).then((result) => {
                if (result.value) {
                    $.LoadingOverlay("show");
                    $.httpRequest({
                        url: baseUrl("/api/administrator/miscellaneouse/" + data.id),
                        method: "DELETE",
                        response: (res) => {
                            $.LoadingOverlay("hide");
                            if (res.statusCode == 200) {
                                Swal.fire("Success", res.message, "success");
                                table.ajax.reload();
                            }
                        },
                    });
                }
            });
        });
    },
});

$(".action-add").click(function () {
    $("#form-data").formReset();
    $(".message-error").empty();

    $(".image-preview").attr("src", assetsUrl("uploads/miscellaneouse/no-image.png"));
    $('textarea[name="deskripsi"]').summernote("code", "");
    $("#modal-form").modal("show");
});

// ==> Image Uploads
$("#image-file").change(function () {
    if (this.files && this.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(".image-preview").attr("src", e.target.result);
        };
        reader.readAsDataURL(this.files[0]);
    }
});

$(".card-upload-image").click(function () {
    $("#image-file").trigger("click");
});

// ==> Form Submit
$("#form-data").formSubmit((response) => {
    if (response.statusCode == 200) {
        $("#form-data").formReset();
        $("#modal-form").modal("hide");
        Swal.fire("Success", response.message, "success");
        table.ajax.reload();
    }
});

$('textarea[name="deskripsi"]').summernote({
    height: 200,
    toolbar: [
        ["font", ["bold", "italic", "underline", "clear"]],
        ["fontname", ["fontname"]],
        ["fontsize", ["fontsize"]],
        ["color", ["color"]],
        ["para", ["ol", "ul", "paragraph"]],
        ["insert", ["link"]],
        ["view", ["undo", "redo", "fullscreen", "codeview", "help"]],
    ],
});
