let table = $("#datatable").DataTable({
    ajax: {
        url: baseUrl("/api/administrator/frontend/contact-us" + "-fetch"),
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
            data: "contact_us_nama",
        },
        {
            data: "contact_us_email",
        },
        {
            data: "contact_us_subject",
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
                btn.className = "btn btn-primary btn-icon btn-sm action-edit";
                btn.innerHTML = '<i class="fa fa-list mr-1"></i>';
                div.append(btn);

                return div.outerHTML;
            },
            width: "40px",
        },
    ],
    createdRow: function (row, data) {
        // ==> Edit Button
        $(".action-edit", row).click(function (e) {
            e.preventDefault();

            // ==> Form
            $('input[name="nama"]').val(data.contact_us_nama);
            $('input[name="email"]').val(data.contact_us_email);
            $('input[name="subject"]').val(data.contact_us_subject);
            $('textarea[name="isi"]').summernote("code", data.contact_us_pesan);

            $(".message-error").empty();
            $("#modal-form").modal("show");
        });
    },
});

// ==> SummerNote
$('textarea[name="isi"]').summernote({
    height: 150,
    toolbar: [],
});
