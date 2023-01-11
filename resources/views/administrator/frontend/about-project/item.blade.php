@extends('layout.administrator.index')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-btn d-flex justify-content-between">
                    <h4 class="card-title">
                        <i class="nc-icon nc-ruler-pencil mr-1"></i> Item About Project
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
                                <th>Nama Item</th>
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
                <form id="form-data" action="{{ url('api/administrator/frontend/about-project-item') }}" method="post">
                    <input type="hidden" name="id">
                    <input type="hidden" name="master_id">
                    <div class="modal-header d-flex">
                        <h5 class="modal-title">Item Project Form</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nama">Nama Item</label>
                                    <input type="text" class="form-control" name="nama" id="nama"
                                        placeholder="Nama Item">
                                    <small class="message-error text-danger" data-target="nama_error"></small>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="icon">Icon</label>
                                    <input type="text" class="form-control" name="icon" id="icon"
                                        placeholder="Flaticon Icon">
                                    <small class="message-error text-danger" data-target="icon_error"></small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="urutan">Urutan</label>
                                    <input type="number" class="form-control" name="urutan" id="urutan">
                                    <small class="message-error text-danger" data-target="urutan_error"></small>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" placeholder="Deskripsi Service"></textarea>
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
    <script>
        let masterId = '{{ $master_id }}';
    </script>
    <script src="{{ asset('/assets/administrator/utils/administrator/frontend/about-project-item.js') }}"></script>
@endsection
