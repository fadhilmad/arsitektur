let table = $("#datatable").DataTable({
    ajax: {
        url: baseUrl("/api/administrator/frontend/service" + "-fetch"),
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
            data: "service_nama",
        },
        {
            data: "service_urutan",
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
            width: "100px",
        },
    ],
    createdRow: function (row, data) {
        // ==> Edit Button
        $(".action-edit", row).click(function (e) {
            e.preventDefault();

            // ==> Form
            $('input[name="id"]').val(data.id);
            $('input[name="nama"]').val(data.service_nama);
            $('input[name="icon"]').val(data.service_icon);
            $('input[name="urutan"]').val(data.service_urutan);
            $('textarea[name="deskripsi"]').val(data.service_deskripsi);

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
                        url: baseUrl(
                            "/api/administrator/frontend/service/" + data.id
                        ),
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

    $("#modal-form").modal("show");
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