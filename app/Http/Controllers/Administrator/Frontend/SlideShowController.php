<?php

namespace App\Http\Controllers\Administrator\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Libraries\System;
use App\Models\Administrator\Frontend\SlideShowModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class SlideShowController extends Controller
{
    private $fileDirUpload = "slide-show";
    private $system;

    public function __construct()
    {
        $this->system = new System();
    }

    public function index()
    {
        return view('administrator.frontend.slide-show.index');
    }

    public function fetch(Request $request)
    {
        $DB = DB::table('slide_show');
        return DataTables::of($DB)
            ->toJson(JSON_PRETTY_PRINT);
    }

    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'nama' => 'required|regex:/^[a-z0-9 .\-]+$/i',
            'keterangan' => 'required',
            'urutan' => 'required|numeric',
            'active' => 'nullable|numeric',
            'images' => 'mimes:png,jpg,jpeg|max:2048'
        ]);

        if ($validated->fails()) return $this->badRequest($validated);

        // ==> Data Insert
        $data = [
            'slide_show_nama' => $request->input('nama'),
            'slide_show_keterangan' => $request->input('keterangan'),
            'slide_show_urutan' => $request->input('urutan'),
            'slide_show_active' => $request->input('active') ?: 0,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => null
        ];

        // ==> File Upload
        if ($request->file('images') != null) {
            $path = $request->file('images')->store(
                $this->fileDirUpload,
                'uploads'
            );

            $data['slide_show_img'] = str_replace($this->fileDirUpload . '/', '', $path);
        }

        // ==> Insert Data
        $i = SlideShowModel::create($data);
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
            'keterangan' => 'required',
            'urutan' => 'required|numeric',
            'active' => 'nullable|numeric',
            'images' => 'mimes:png,jpg,jpeg|max:2048'
        ]);

        if ($validated->fails()) return $this->badRequest($validated);

        // ==> Data Insert
        $data = [
            'slide_show_nama' => $request->input('nama'),
            'slide_show_keterangan' => $request->input('keterangan'),
            'slide_show_urutan' => $request->input('urutan'),
            'slide_show_active' => $request->input('active') ?: 0,
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        // ==> File Upload
        if ($request->file('images') != null) {
            $path = $request->file('images')->store(
                $this->fileDirUpload,
                'uploads'
            );

            $data['slide_show_img'] = str_replace($this->fileDirUpload . '/', '', $path);
        }

        // ==> Insert Data
        $i = SlideShowModel::where('id', $id)->update($data);
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
        $i = SlideShowModel::where('id', $id)->delete();

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
