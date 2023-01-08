@extends('layout.administrator.index')

@section('css')
    <style>
        .image-preview {
            height: 162px;
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
                        <i class="nc-icon nc-world-2 mr-1"></i> Identitas Web
                    </h4>
                </div>
                <div class="card-body pr-4 pl-4">
                    <form id="form-data" action="{{ url('/api/administrator/frontend/identitas-web') }}" method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="image-file">Logo</label>
                                    <div class="card card-upload-image on-hover">
                                        <div class="card-body text-center">
                                            <img class="image-preview"
                                                src="{{ $data->website_logo ? url('/uploads/logo/' . $data->website_logo) : url('/uploads/logo/no-image.png') }}"
                                                alt="no-image.png">
                                        </div>
                                    </div>
                                    <input class="d-none" type="file" name="logo" id="image-file">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="nama">Nama Website</label>
                                            <input type="text" class="form-control" name="nama" id="nama"
                                                placeholder="Nama" value="{{ $data->website_nama }}">
                                            <small class="message-error text-danger" data-target="nama_error"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="no-telp">No Telp</label>
                                            <input type="number" class="form-control" name="no_telp" id="no-telp"
                                                placeholder="No Telp" value="{{ $data->website_no_telp }}">
                                            <small class="message-error text-danger" data-target="no_telp_error"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" name="email" id="email"
                                                placeholder="Email" value="{{ $data->website_email }}">
                                            <small class="message-error text-danger" data-target="email_error"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="facebook">Facebook</label>
                                            <input type="text" class="form-control" name="facebook" id="facebook"
                                                placeholder="@facebook" value="{{ $data->website_facebook }}">
                                            <small class="message-error text-danger" data-target="facebook_error"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="twitter">Twitter</label>
                                            <input type="text" class="form-control" name="twitter" id="twitter"
                                                placeholder="@twitter" value="{{ $data->website_twitter }}">
                                            <small class="message-error text-danger" data-target="twitter_error"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="instagram">Instagram</label>
                                            <input type="text" class="form-control" name="instagram" id="instagram"
                                                placeholder="@instagram" value="{{ $data->website_instagram }}">
                                            <small class="message-error text-danger" data-target="instagram_error"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="linkedin">LinkedIn</label>
                                            <input type="text" class="form-control" name="linkedin" id="linkedin"
                                                placeholder="@linkedin" value="{{ $data->website_linked }}">
                                            <small class="message-error text-danger" data-target="linkedin_error"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="behance">Behance</label>
                                            <input type="text" class="form-control" name="behance" id="behance"
                                                placeholder="@behance" value="{{ $data->website_behance }}">
                                            <small class="message-error text-danger" data-target="behance_error"></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control" name="alamat" id="alamat" rows="2" placeholder="Alamat">{{ $data->website_lokasi }}</textarea>
                                    <small class="message-error text-danger" data-target="alamat_error"></small>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="meta-keyword">Meta Keywords</label>
                                    <input type="text" class="form-control" name="meta_keyword" id="meta-keyword"
                                        placeholder="Meta Keyword" value="{{ $data->website_meta_keyword }}">
                                    <small class="message-error text-danger" data-target="meta_keyword_error"></small>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="meta-deskripsi">Meta Deskripsi</label>
                                    <textarea class="form-control" name="meta_deskripsi" id="meta-deskripsi" rows="3"
                                        placeholder="Meta Deskripsi">{{ $data->website_meta_deskripsi }}</textarea>
                                    <small class="message-error text-danger" data-target="meta_deskripsi_error"></small>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary"><i class="nc-icon nc-send mr-2"></i>
                                    Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{ asset('/assets/administrator/utils/administrator/frontend/identitas-web.js') }}"></script>
@endsection
