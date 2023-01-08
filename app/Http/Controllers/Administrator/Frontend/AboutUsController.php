<?php

namespace App\Http\Controllers\Administrator\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Libraries\System;
use App\Models\Administrator\Frontend\AboutUsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AboutUsController extends Controller
{
    private $system;

    public function __construct()
    {
        $this->system = new System();
    }

    public function index()
    {
        $aboutUs = AboutUsModel::where('id', 1)->first();
        return view('administrator.frontend.about-us.index', ['data' => $aboutUs]);
    }

    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'isi' => 'required'
        ]);

        if ($validated->fails()) return $this->badRequest($validated);

        // ==> Data Insert
        $data = [
            'about_us_isi' => $request->input('isi'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        // ==> Insert Data
        $i = AboutUsModel::where('id', 1)->update($data);
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
