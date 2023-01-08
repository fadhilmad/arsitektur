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
                        <i class="nc-icon nc-alert-circle-i mr-1"></i> About Us
                    </h4>
                </div>
                <div class="card-body pr-4 pl-4">
                    <form id="form-data" action="{{ url('/api/administrator/frontend/about-us') }}" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="isi">About Us</label>
                                    <textarea class="form-control" name="isi" id="isi" rows="3">{{ $data->about_us_isi }}</textarea>
                                    <small class="message-error text-danger" data-target="isi_error"></small>
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
    <script src="{{ asset('/assets/administrator/utils/administrator/frontend/about-us.js') }}"></script>
@endsection
