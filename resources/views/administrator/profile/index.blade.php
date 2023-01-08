@extends('layout.administrator.index')

@section('css')
    <style>
        .image-preview {
            height: 165px;
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
                        <i class="nc-icon nc-single-02 mr-1"></i> Profile
                    </h4>
                </div>
                <div class="card-body pr-4 pl-4">
                    <form id="form-data" action="{{ url('/api/administrator/profile') }}" method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="alamat">Foto Profile</label>
                                    <div class="card card-upload-image on-hover">
                                        <div class="card-body text-center">
                                            <img class="image-preview"
                                                src="{{ $data->user_img ? url('/uploads/foto-profile/' . $data->user_img) : url('/uploads/foto-profile/no-image.png') }}"
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
                                            <input type="text" class="form-control" name="nama" id="user-nama"
                                                placeholder="Nama" value="{{ $data->user_nama }}">
                                            <small class="message-error text-danger" data-target="nama_error"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Email" value="{{ $data->user_email }}">
                                            <small class="message-error text-danger" data-target="email_error"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="no-telp">No Telp</label>
                                            <input type="number" class="form-control" name="no_telp" id="no-telp"
                                                placeholder="No Telp" value="{{ $data->user_telp }}">
                                            <small class="message-error text-danger" data-target="no_telp_error"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" name="username" id="username"
                                                placeholder="Username" value="{{ $data->username }}">
                                            <small class="message-error text-danger" data-target="username_error"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" name="password" id="password"
                                                placeholder="Password">
                                            <small class="message-error text-danger" data-target="password_error"></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="facebook">Facebook</label>
                                    <input type="text" class="form-control" name="facebook" id="facebook"
                                        placeholder="@facebook" value="{{ $data->user_fb }}">
                                    <small class="message-error text-danger" data-target="facebook_error"></small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="twitter">Twitter</label>
                                    <input type="text" class="form-control" name="twitter" id="twitter"
                                        placeholder="@twitter" value="{{ $data->user_tw }}">
                                    <small class="message-error text-danger" data-target="twitter_error"></small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="instagram">Instagram</label>
                                    <input type="text" class="form-control" name="instagram" id="instagram"
                                        placeholder="@instagram" value="{{ $data->user_ig }}">
                                    <small class="message-error text-danger" data-target="instagram_error"></small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="linkedin">LinkedIn</label>
                                    <input type="text" class="form-control" name="linkedin" id="linkedin"
                                        placeholder="@linkedin" value="{{ $data->user_ln }}">
                                    <small class="message-error text-danger" data-target="linkedin_error"></small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="behance">Behance</label>
                                    <input type="text" class="form-control" name="behance" id="behance"
                                        placeholder="@behance" value="{{ $data->user_be }}">
                                    <small class="message-error text-danger" data-target="behance_error"></small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <input type="text" class="form-control" name="jabatan" id="jabatan"
                                        placeholder="Jabatan" value="{{ $data->user_jabatan }}">
                                    <small class="message-error text-danger" data-target="jabatan_error"></small>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="biodata">Biodata</label>
                                    <textarea class="form-control" name="biodata" id="biodata" rows="3" placeholder="Biodata">{{ $data->user_biodata }}</textarea>
                                    <small class="message-error text-danger" data-target="biodata_error"></small>
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
    <script src="{{ asset('/assets/administrator/utils/administrator/profile.js') }}"></script>
@endsection
