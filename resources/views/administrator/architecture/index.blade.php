@extends('layout.administrator.index')

@section('css')
    <style>
        .image-preview {
            height: 92px;
            object-fit: contain;
        }

        p[read="more"] .more {
            display: contents;
        }

        p[read="less"] .more,
        p[read="more"] a[read="more"] {
            display: none;
        }

        #deskripsi p {
            margin-bottom: 0px;
        }
    </style>
@endsection

@section('content')
    <div class="row justify-content-end">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="form-group p-2">
                        <label for="kategori-architecture-filter">Kategori Arsitektur</label>
                        <select class="form-control" id="kategori-architecture-filter">
                            <option value="">-</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-btn d-flex justify-content-between">
                    <h4 class="card-title">
                        <i class="nc-icon nc-ruler-pencil mr-1"></i> Arsitektur
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
                                <th>Nama Arsitektur</th>
                                <th>Kategori</th>
                                <th>Link Video</th>
                                <th>Jumlah Foto</th>
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
                <form id="form-data" action="{{ url('api/administrator/architecture') }}" method="post">
                    <input type="hidden" name="id">
                    <div class="modal-header d-flex">
                        <h5 class="modal-title">Arsitektur Form</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="alamat">Thumbnail</label>
                                    <div class="card card-upload-image on-hover">
                                        <div class="card-body text-center">
                                            <img class="image-preview" src="{{ url('/uploads/architecture/no-image.png') }}"
                                                alt="no-image.png">
                                        </div>
                                    </div>
                                    <input class="d-none" type="file" name="thumbnail" id="image-file">
                                    <small class="message-error text-danger" data-target="thumbnail_error"></small>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nama-arsitektur">Nama Arsitektur</label>
                                            <input type="text" class="form-control" name="nama" id="nama-arsitektur"
                                                placeholder="Nama arsitektur">
                                            <small class="message-error text-danger" data-target="nama_error"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="kategori-architecture">Kategori Arsitektur</label>
                                            <select class="form-control" name="kategori_architecture"
                                                id="kategori-architecture">
                                                <option value="">-</option>
                                            </select>
                                            <small class="message-error text-danger"
                                                data-target="kategori_architecture_error"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="video-link">Video Link</label>
                                            <input type="text" class="form-control" name="video_link" id="video-link"
                                                placeholder="Link URL">
                                            <small class="message-error text-danger" data-target="video_link_error"></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"></textarea>
                                    <small class="message-error text-danger" data-target="deskripsi_error"></small>
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
    <script src="{{ asset('/assets/administrator/utils/administrator/architecture.js') }}"></script>
@endsection
