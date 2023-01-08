@extends('layout.administrator.index')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-btn d-flex justify-content-between">
                    <h4 class="card-title">
                        <i class="nc-icon nc-tile-56 mr-1"></i> Navbar
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
                                <th>Parent</th>
                                <th>Nama Navbar</th>
                                <th>Link</th>
                                <th>Urutan</th>
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
                <form id="form-data" action="{{ url('api/administrator/frontend/navbar') }}" method="post">
                    <input type="hidden" name="id">
                    <div class="modal-header d-flex">
                        <h5 class="modal-title">Navbar Form</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="parent">Parent</label>
                                    <select class="form-control" name="parent" id="parent">
                                        <option value="">-</option>
                                    </select>
                                    <small class="message-error text-danger" data-target="parent_error"></small>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="nama">Nama Navbar</label>
                                    <input type="text" class="form-control" name="nama" id="nama"
                                        placeholder="Nama Navbar">
                                    <small class="message-error text-danger" data-target="nama_error"></small>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="link">Link URL</label>
                                    <input type="text" class="form-control" name="link" id="link"
                                        placeholder="Link URL">
                                    <small class="message-error text-danger" data-target="link_error"></small>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="index">Urutan</label>
                                    <input type="number" class="form-control" name="index" id="index" placeholder="">
                                    <small class="message-error text-danger" data-target="index_error"></small>
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
    <script src="{{ asset('/assets/administrator/utils/administrator/frontend/navbar.js') }}"></script>
@endsection
