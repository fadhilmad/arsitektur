let table = $("#datatable").DataTable({
    ajax: {
        url: baseUrl("/api/administrator/frontend/ourteam" + "-fetch"),
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
            data: "our_team_nama",
        },
        {
            data: "our_team_jabatan",
        },
        {
            data: "created_at",
        },
        {
            data: "id",
            render: function (data, i, row) {
                // ==> Container
                var div = document.createElement("div");
                div.className = "row-action";

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
            width: "180px",
        },
    ],
    createdRow: function (row, data) {
        // ==> Edit Button
        $(".action-edit", row).click(function (e) {
            e.preventDefault();

            // ==> Form
            $('input[name="id"]').val(data.id);
            $('input[name="nama"]').val(data.our_team_nama);
            $('input[name="jabatan"]').val(data.our_team_jabatan);
            $('input[name="facebook"]').val(data.our_team_fb);
            $('input[name="twitter"]').val(data.our_team_tw);
            $('input[name="instagram"]').val(data.our_team_ig);
            $('input[name="linkedin"]').val(data.our_team_ln);
            $('input[name="behance"]').val(data.our_team_be);
            $('textarea[name="biodata"]').val(data.our_team_biodata);

            $(".image-preview").attr(
                "src",
                data.our_team_img
                    ? assetsUrl("uploads/ourteam/" + data.our_team_img)
                    : assetsUrl("uploads/ourteam/no-image.png")
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
                        url: baseUrl("/api/administrator/frontend/ourteam/" + data.id),
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

    $(".image-preview").attr(
        "src",
        assetsUrl("uploads/ourteam/no-image.png")
    );

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
