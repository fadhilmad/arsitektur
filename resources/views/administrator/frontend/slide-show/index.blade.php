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
                        <i class="nc-icon nc-image mr-1"></i> Slide Show
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
                                <th>Slide Show</th>
                                <th>Urutan</th>
                                <th>Is Active</th>
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
                <form id="form-data" action="{{ url('api/administrator/frontend/slide-show') }}" method="post">
                    <input type="hidden" name="id">
                    <div class="modal-header d-flex">
                        <h5 class="modal-title">Slide Show Form</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama">Nama Slide Show</label>
                                    <input type="text" class="form-control" name="nama" id="nama">
                                    <small class="message-error text-danger" data-target="nama_error"></small>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="urutan">Urutan</label>
                                    <input type="number" class="form-control" name="urutan" id="urutan">
                                    <small class="message-error text-danger" data-target="urutan_error"></small>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="active">Status</label>
                                    <div class="form-check mt-2">
                                        <label class="form-check-label">
                                            <input name="active" class="form-check-input" value="1" type="checkbox"
                                                checked>
                                            <span class="form-check-sign"></span>
                                            Active
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="alamat">Slide Show</label>
                                    <div class="card card-upload-image on-hover">
                                        <div class="card-body text-center">
                                            <img class="image-preview" src="{{ url('/uploads/slide-show/no-image.png') }}"
                                                alt="no-image.png">
                                        </div>
                                    </div>
                                    <input class="d-none" type="file" name="images" id="image-file">
                                    <small class="message-error text-danger" data-target="images_error"></small>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="keterangan">Keterangan</label>
                                    <textarea class="form-control" name="keterangan" id="keterangan" rows="3"></textarea>
                                    <small class="message-error text-danger" data-target="keterangan_error"></small>
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
    <script src="{{ asset('/assets/administrator/utils/administrator/frontend/slide-show.js') }}"></script>
@endsection
