<?php

namespace App\Http\Controllers\Administrator\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Libraries\System;
use App\Models\Administrator\Frontend\ServiceModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class ServiceController extends Controller
{
    private $system;

    public function __construct()
    {
        $this->system = new System();
    }

    public function index()
    {
        return view('administrator.frontend.service.index');
    }

    public function fetch(Request $request)
    {
        $DB = DB::table('service');
        return DataTables::of($DB)
            ->toJson(JSON_PRETTY_PRINT);
    }

    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'nama' => 'required|regex:/^[a-z0-9 .\-]+$/i',
            'deskripsi' => 'required|regex:/^[a-z0-9 .\-]+$/i',
            'icon' => 'required',
            'urutan' => 'required|numeric',
        ]);

        if ($validated->fails()) return $this->badRequest($validated);

        // ==> Data Insert
        $data = [
            'service_nama' => $request->input('nama'),
            'service_icon' => $request->input('icon'),
            'service_deskripsi' => $request->input('deskripsi'),
            'service_urutan' => $request->input('urutan'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => null
        ];

        // ==> Insert Data
        $i = ServiceModel::create($data);
        if (!$i) return $this->system->responseServer(500, [
            'statusCode' => 500,
            'message' => 'Terjadi kesalahan saat insert data'
        ]);

        return $this->system->responseServer(200, [
            'statusCode' => 200,
            'message' => 'Data telah berhasil disimpan !'
        ]);
    }

    public function update(Request $request, $id)
    {
        $validated = Validator::make($request->all(), [
            'nama' => 'required|regex:/^[a-z0-9 .\-]+$/i',
            'deskripsi' => 'required|regex:/^[a-z0-9 .\-]+$/i',
            'icon' => 'required',
            'urutan' => 'required|numeric',
        ]);

        if ($validated->fails()) return $this->badRequest($validated);

        // ==> Data Insert
        $data = [
            'service_nama' => $request->input('nama'),
            'service_icon' => $request->input('icon'),
            'service_deskripsi' => $request->input('deskripsi'),
            'service_urutan' => $request->input('urutan'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => null
        ];

        // ==> Insert Data
        $i = ServiceModel::where('id', $id)->update($data);
        if (!$i) return $this->system->responseServer(500, [
            'statusCode' => 500,
            'message' => 'Terjadi kesalahan saat update data'
        ]);

        return $this->system->responseServer(200, [
            'statusCode' => 200,
            'message' => 'Data telah berhasil disimpan !'
        ]);
    }

    public function destroy($id)
    {
        $i = ServiceModel::where('id', $id)->delete();

        if (!$i) return $this->system->responseServer(500, [
            'statusCode' => 500,
            'message' => 'Terjadi kesalahan saat hapus data'
        ]);

        return $this->system->responseServer(200, [
            'statusCode' => 200,
            'message' => 'Data telah berhasil dihapus !'
        ]);
    }
}
