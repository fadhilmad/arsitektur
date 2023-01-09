<?php

namespace App\Http\Controllers\Administrator\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Libraries\System;
use App\Models\Administrator\Frontend\IdentitasWebModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IdentitasWebController extends Controller
{
    private $fileDirUpload = "logo";
    private $system;

    public function __construct()
    {
        $this->system = new System();
    }

    public function index()
    {
        $identitasWeb = IdentitasWebModel::where('id', 1)->first();
        return view('administrator.frontend.identitas-web.index', ['data' => $identitasWeb]);
    }

    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'nama' => 'required|regex:/^[a-z0-9 .\-]+$/i',
            'no_telp' => 'required|numeric',
            'email' => 'required|email',
            'logo' => 'mimes:png,jpg,jpeg|max:512',
            'alamat' => 'required',
            'meta_keyword' => 'required',
            'meta_deskripsi' => 'required'
        ]);

        if ($validated->fails()) return $this->badRequest($validated);

        // ==> Data Insert
        $data = [
            'website_nama' => $request->input('nama'),
            'website_no_telp' => $request->input('no_telp'),
            'website_email' => $request->input('email'),
            'website_facebook' => $request->input('facebook'),
            'website_linked' => $request->input('linkedin'),
            'website_instagram' => $request->input('instagram'),
            'website_twitter' => $request->input('twitter'),
            'website_behance' => $request->input('behance'),
            'website_lokasi' => $request->input('alamat'),
            'website_meta_keyword' => $request->input('meta_keyword'),
            'website_meta_deskripsi' => $request->input('meta_deskripsi'),
        ];

        // ==> File Upload
        if ($request->file('logo') != null) {
            $path = $request->file('logo')->store(
                $this->fileDirUpload,
                'uploads'
            );

            $data['website_logo'] = str_replace($this->fileDirUpload . '/', '', $path);
        }

        // ==> Insert Data
        $i = IdentitasWebModel::where('id', 1)->update($data);
        if (!$i) return $this->system->responseServer(500, [
            'statusCode' => 500,
            'message' => 'Terjadi kesalahan saat insert data'
        ]);

        return $this->system->responseServer(200, [
            'statusCode' => 200,
            'message' => 'Data telah berhasil disimpan !'
        ]);
    }
}
