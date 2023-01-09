@extends('layout.administrator.index')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-btn d-flex justify-content-between">
                    <h4 class="card-title">
                        <i class="nc-icon nc-send mr-1"></i> Contact Us
                    </h4>
                </div>
                <div class="card-body">
                    <table id="datatable" class="table table-striped table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Subject</th>
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
                <div class="modal-header d-flex">
                    <h5 class="modal-title">Detail Informasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control-plaintext" name="nama" id="nama"
                                    placeholder="Nama" value="" readonly>
                                <small class="message-error text-danger" data-target="nama_error"></small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control-plaintext" name="email" id="email"
                                    placeholder="Email" value="" readonly>
                                <small class="message-error text-danger" data-target="email_error"></small>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control-plaintext" name="subject" id="subject"
                                    placeholder="Subject" value="" readonly>
                                <small class="message-error text-danger" data-target="subject_error"></small>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="isi">Isi Pesan</label>
                                <textarea class="form-control" name="isi" id="isi" rows="3"></textarea>
                                <small class="message-error text-danger" data-target="isi_error"></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{ asset('/assets/administrator/utils/administrator/frontend/contact-us.js') }}"></script>
@endsection
