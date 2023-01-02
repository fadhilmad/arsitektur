@extends('layout.administrator.index')

@section('css')
    <style>
        .image-preview {
            height: 172px;
            object-fit: contain;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-btn d-flex justify-content-between">
                    <h4 class="card-title">
                        <i class="nc-icon nc-single-02 mr-1"></i> Users
                    </h4>
                    <button class="btn btn-success action-add">
                        <span class="btn-label mr-1">
                            <i class="fa fa-plus"></i>
                        </span>
                        Tambah
                    </button>
                </div>
                <div class="card-body">
                    <table id="datatable" class="table table-striped table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th>Nama User</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>No Telp</th>
                                <th>Created At</th>
                                <th class="disabled-sorting">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div id="modal-form" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <form id="form-data" action="{{ url('api/administrator/users') }}" method="post">
                    <input type="hidden" name="id">
                    <div class="modal-header d-flex">
                        <h5 class="modal-title">User Form</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="alamat">Foto Profile</label>
                                    <div class="card card-upload-image on-hover">
                                        <div class="card-body">
                                            <img class="image-preview" src="{{ url('/uploads/foto-profile/no-image.png') }}"
                                                alt="no-image.png">
                                        </div>
                                    </div>
                                    <input class="d-none" type="file" name="foto_profile" id="image-file">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="user-nama">User Nama</label>
                                            <input type="text" class="form-control" name="nama" id="user-nama">
                                            <small class="message-error text-danger" data-target="nama_error"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" id="email">
                                            <small class="message-error text-danger" data-target="email_error"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="no-telp">No Telp</label>
                                            <input type="number" class="form-control" name="no_telp" id="no-telp">
                                            <small class="message-error text-danger" data-target="no_telp_error"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" name="username" id="username">
                                            <small class="message-error text-danger" data-target="username_error"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" name="password" id="password">
                                            <small class="message-error text-danger" data-target="password_error"></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="facebook">Facebook</label>
                                    <input type="text" class="form-control" name="facebook" id="facebook">
                                    <small class="message-error text-danger" data-target="facebook_error"></small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="twitter">Twitter</label>
                                    <input type="text" class="form-control" name="twitter" id="twitter">
                                    <small class="message-error text-danger" data-target="twitter_error"></small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="instagram">Instagram</label>
                                    <input type="text" class="form-control" name="instagram" id="instagram">
                                    <small class="message-error text-danger" data-target="instagram_error"></small>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <input type="text" class="form-control" name="jabatan" id="jabatan">
                                    <small class="message-error text-danger" data-target="jabatan_error"></small>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="biodata">Biodata</label>
                                    <textarea class="form-control" name="biodata" id="biodata" rows="3"></textarea>
                                    <small class="message-error text-danger" data-target="biodata_error"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        let table = $('#datatable').DataTable({
            ajax: {
                url: baseUrl("/api/administrator/users" + "-fetch"),
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
            columns: [{
                    data: "user_nama"
                },
                {
                    data: "user_email"
                },
                {
                    data: "username"
                },
                {
                    data: "user_telp"
                },
                {
                    data: "created_at"
                },
                {
                    data: "id",
                    render: function(data, i, row) {
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
            createdRow: function(row, data) {
                // ==> Edit Button
                $(".action-edit", row).click(function(e) {
                    e.preventDefault();

                    // ==> Form
                    $('input[name="id"]').val(data.id);
                    $('input[name="nama"]').val(data.user_nama);
                    $('input[name="email"]').val(data.user_email);
                    $('input[name="no_telp"]').val(data.user_telp);
                    $('input[name="username"]').val(data.username);
                    $('input[name="facebook"]').val(data.user_fb);
                    $('input[name="twitter"]').val(data.user_tw);
                    $('input[name="instagram"]').val(data.user_ig);
                    $('input[name="jabatan"]').val(data.user_jabatan);
                    $('input[name="biodata"]').val(data.user_biodata);

                    $(".message-error").empty();
                    $("#modal-form").modal("show");
                });

                // ==> Delete Button
                $(".action-hapus", row).click(function(e) {
                    e.preventDefault();
                    Swal.fire({
                        title: 'Warning',
                        text: "Anda akan menghapus data ini ??",
                        icon: 'warning',
                        showCancelButton: true,
                        customClass: {
                            confirmButton: 'btn btn-danger',
                            cancelButton: 'btn btn-secondary'
                        },
                        buttonsStyling: false,
                        confirmButtonText: 'Hapus',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.value) {
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )
                        }
                    })
                });
            },
        });

        $('.action-add').click(
            function() {
                $("#form-data").formReset();
                $(".message-error").empty();

                $(".image-preview").attr(
                    "src",
                    assetsUrl("uploads/foto-profile/no-image.png")
                );

                $("#modal-form").modal("show");
            }
        );

        // ==> Image Uploads
        $("#image-file").change(function() {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $(".image-preview").attr("src", e.target.result);
                };
                reader.readAsDataURL(this.files[0]);
            }
        });

        $(".card-upload-image").click(function() {
            $("#image-file").trigger("click");
        });

        // ==> Form Submit
        $("#form-data").formSubmit((response) => {
            if (response.statusCode == 200) {
                $("#form-data").formReset();
                $("#modal-form").modal("hide");
                Swal.fire(
                    'Success',
                    response.message,
                    'success'
                );
                table.ajax.reload();
            }
        });
    </script>
@endsection
