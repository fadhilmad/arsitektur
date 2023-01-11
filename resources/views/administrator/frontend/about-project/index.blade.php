@extends('layout.administrator.index')

@section('css')
    <style>
        .image-preview {
            max-height: 210px;
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
                        <i class="nc-icon nc-ruler-pencil mr-1"></i> About Project
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
                                <th>Nama Project</th>
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
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form id="form-data" action="{{ url('api/administrator/frontend/about-project') }}" method="post">
                    <input type="hidden" name="id">
                    <div class="modal-header d-flex">
                        <h5 class="modal-title">About Project Form</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="alamat">Foto Project</label>
                                    <div class="card card-upload-image on-hover">
                                        <div class="card-body text-center">
                                            <img class="image-preview" src="{{ url('/uploads/about-project/no-image.png') }}"
                                                alt="no-image.png">
                                        </div>
                                    </div>
                                    <input class="d-none" type="file" name="image" id="image-file">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nama-project">Nama Project</label>
                                    <input type="text" class="form-control" name="nama" id="nama-project">
                                    <small class="message-error text-danger" data-target="nama_error"></small>
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
    <script src="{{ asset('/assets/administrator/utils/administrator/frontend/about-project.js') }}"></script>
@endsection
