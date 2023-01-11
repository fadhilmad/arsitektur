<?php

namespace App\Http\Controllers\Administrator\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Libraries\System;
use App\Models\Administrator\Frontend\AboutProjectModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class AboutProjectController extends Controller
{
    private $fileDirUpload = "about-project";
    private $system;

    public function __construct()
    {
        $this->system = new System();
    }

    public function index()
    {
        return view('administrator.frontend.about-project.index');
    }

    public function fetch(Request $request)
    {
        $DB = DB::table('about_project');
        return DataTables::of($DB)
            ->toJson(JSON_PRETTY_PRINT);
    }

    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'nama' => 'required|regex:/^[a-z0-9 .\-]+$/i',
            'image' => 'mimes:png,jpg,jpeg|max:1024'
        ]);

        if ($validated->fails()) return $this->badRequest($validated);

        // ==> Data Insert
        $data = [
            'about_project_nama' => $request->input('nama'),
            'created_at' => date('Y-m-d H:i:s')
        ];

        // ==> File Upload
        if ($request->file('image') != null) {
            $path = $request->file('image')->store(
                $this->fileDirUpload,
                'uploads'
            );

            $data['about_project_img'] = str_replace($this->fileDirUpload . '/', '', $path);
        }

        // ==> Insert Data
        $i = AboutProjectModel::create($data);
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
            'image' => 'mimes:png,jpg,jpeg|max:1024'
        ]);

        if ($validated->fails()) return $this->badRequest($validated);

        // ==> Data Insert
        $data = [
            'about_project_nama' => $request->input('nama'),
            'created_at' => date('Y-m-d H:i:s')
        ];

        // ==> File Upload
        if ($request->file('image') != null) {
            $path = $request->file('image')->store(
                $this->fileDirUpload,
                'uploads'
            );

            $data['about_project_img'] = str_replace($this->fileDirUpload . '/', '', $path);
        }

        // ==> Insert Data
        $i = AboutProjectModel::where('id', $id)->update($data);
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
        $i = AboutProjectModel::where('id', $id)->delete();

        if (!$i) return $this->system->responseServer(500, [
            'statusCode' => 500,
            'message' => 'Terjadi kesalahan saat hapus data'
        ]);

        return $this->system->responseServer(200, [
            'statusCode' => 200,
            'message' => 'Data telah berhasil dihapus !'
        ]);
    }

    public function item($id)
    {
        $count = AboutProjectModel::countItem($id);
        return view('administrator.frontend.about-project.item', ['master_id' => $id, 'count' => $count]);
    }

    public function itemFetch($id)
    {
        $DB = DB::table('about_project_item')
            ->where('about_project_id', $id);

        return DataTables::of($DB)
            ->toJson(JSON_PRETTY_PRINT);
    }

    public function itemStore(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'master_id' => 'required|numeric',
            'nama' => 'required|regex:/^[a-z0-9 .\-]+$/i',
            'deskripsi' => 'required|regex:/^[a-z0-9 .\-]+$/i',
            'icon' => 'required',
            'urutan' => 'required|numeric',
        ]);

        if ($validated->fails()) return $this->badRequest($validated);

        // ==> Data Insert
        $data = [
            'about_project_id' => $request->input('master_id'),
            'about_project_item_nama' => $request->input('nama'),
            'about_project_item_icon' => $request->input('icon'),
            'about_project_item_deskripsi' => $request->input('deskripsi'),
            'about_project_item_urutan' => $request->input('urutan'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => null
        ];

        // ==> Insert Data
        $i = AboutProjectModel::saveItem($data);
        if (!$i) return $this->system->responseServer(500, [
            'statusCode' => 500,
            'message' => 'Terjadi kesalahan saat insert data'
        ]);

        return $this->system->responseServer(200, [
            'statusCode' => 200,
            'message' => 'Data telah berhasil disimpan !'
        ]);
    }

    public function itemUpdate(Request $request, $id)
    {
        $validated = Validator::make($request->all(), [
            'master_id' => 'required|numeric',
            'nama' => 'required|regex:/^[a-z0-9 .\-]+$/i',
            'deskripsi' => 'required|regex:/^[a-z0-9 .\-]+$/i',
            'icon' => 'required',
            'urutan' => 'required|numeric',
        ]);

        if ($validated->fails()) return $this->badRequest($validated);

        // ==> Data Insert
        $data = [
            'about_project_id' => $request->input('master_id'),
            'about_project_item_nama' => $request->input('nama'),
            'about_project_item_icon' => $request->input('icon'),
            'about_project_item_deskripsi' => $request->input('deskripsi'),
            'about_project_item_urutan' => $request->input('urutan'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        // ==> Insert Data
        $i = AboutProjectModel::saveItem($data, $id);
        if (!$i) return $this->system->responseServer(500, [
            'statusCode' => 500,
            'message' => 'Terjadi kesalahan saat update data'
        ]);

        return $this->system->responseServer(200, [
            'statusCode' => 200,
            'message' => 'Data telah berhasil disimpan !'
        ]);
    }

    public function itemDestroy($id)
    {
        $i = AboutProjectModel::deleteItem($id);

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
