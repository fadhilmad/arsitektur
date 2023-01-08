@extends('layout.administrator.index')

@section('css')
    <style>
        .image-preview {
            height: 90px;
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
                        <i class="nc-icon nc-badge mr-1"></i> Our Team
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
                                <th>Nama</th>
                                <th>Jabatan</th>
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
                <form id="form-data" action="{{ url('api/administrator/frontend/ourteam') }}" method="post">
                    <input type="hidden" name="id">
                    <div class="modal-header d-flex">
                        <h5 class="modal-title">Our Team Form</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="alamat">Foto</label>
                                    <div class="card card-upload-image on-hover">
                                        <div class="card-body text-center">
                                            <img class="image-preview" src="{{ url('/uploads/ourteam/no-image.png') }}"
                                                alt="no-image.png">
                                        </div>
                                    </div>
                                    <input class="d-none" type="file" name="image" id="image-file">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
                                            <small class="message-error text-danger" data-target="nama_error"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="text">Jabatan</label>
                                            <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="jabatan">
                                            <small class="message-error text-danger" data-target="jabatan_error"></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="facebook">Facebook</label>
                                    <input type="text" class="form-control" name="facebook" id="facebook" placeholder="@facebook">
                                    <small class="message-error text-danger" data-target="facebook_error"></small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="twitter">Twitter</label>
                                    <input type="text" class="form-control" name="twitter" id="twitter" placeholder="@twitter">
                                    <small class="message-error text-danger" data-target="twitter_error"></small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="instagram">Instagram</label>
                                    <input type="text" class="form-control" name="instagram" id="instagram" placeholder="@instagram">
                                    <small class="message-error text-danger" data-target="instagram_error"></small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="linkedin">LinkedIn</label>
                                    <input type="text" class="form-control" name="linkedin" id="linkedin" placeholder="@linkedin">
                                    <small class="message-error text-danger" data-target="linkedin_error"></small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="behance">Behance</label>
                                    <input type="text" class="form-control" name="behance" id="behance" placeholder="@behance">
                                    <small class="message-error text-danger" data-target="behance_error"></small>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="biodata">Biodata</label>
                                    <textarea class="form-control" name="biodata" id="biodata" rows="3" placeholder="Biodata"></textarea>
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
    <script src="{{ asset('/assets/administrator/utils/administrator/frontend/ourteam.js') }}"></script>
@endsection
