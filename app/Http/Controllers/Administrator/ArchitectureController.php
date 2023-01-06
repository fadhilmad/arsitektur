<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Libraries\System;
use App\Models\Administrator\ArchitectureModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class ArchitectureController extends Controller
{
    private $fileDirUpload = "architecture";
    private $system;

    public function __construct()
    {
        $this->system = new System();
    }

    public function index()
    {
        return view('administrator.architecture.index');
    }

    public function fetch(Request $request)
    {
        $kategori = $request->input('kategori_architecture');

        $DB = DB::table('architecture as ar')
            ->select([
                'ar.id',
                'ar.architecture_kategori_id',
                'ak.architecture_kategori_nama',
                'ar.architecture_nama',
                'ar.architecture_thumbnail',
                'ar.architecture_deskripsi',
                'ar.architecture_video_link',
                'ar.architecture_meta_keyword',
                'ar.architecture_meta_deskripsi',
                'ar.created_at',
                'ar.updated_at',
            ])
            ->join('architecture_kategori as ak', 'ar.architecture_kategori_id', '=', 'ak.id');

        if ($kategori) $DB->where('ar.architecture_kategori_id', '=', $kategori);

        return DataTables::of($DB)
            ->addColumn('foto_count', function ($row) {
                return ArchitectureModel::countFotoarchitecture($row->id);
            })
            ->rawColumns(['architecture_deskripsi'])
            ->toJson(JSON_PRETTY_PRINT);
    }

    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'nama' => 'required|regex:/^[a-z0-9 .\-]+$/i',
            'kategori_architecture' => 'required|numeric',
            'video_link' => 'url',
            'deskripsi' => 'required',
            'thumbnail' => 'mimes:png,jpg,jpeg|max:512'
        ]);

        if ($validated->fails()) return $this->badRequest($validated);

        // ==> Data Insert
        $data = [
            'architecture_nama' => $request->input('nama'),
            'architecture_kategori_id' => $request->input('kategori_architecture'),
            'architecture_deskripsi' => $request->input('deskripsi'),
            'architecture_video_link' => $request->input('video_link'),
            'architecture_meta_keyword' => strtolower($request->input('nama')),
            'architecture_meta_deskripsi' => htmlspecialchars(strip_tags($request->input('deskripsi'))),
            'created_at' => date('Y-m-d H:i:s')
        ];

        // ==> File Upload
        if ($request->file('thumbnail') != null) {
            $path = $request->file('thumbnail')->store(
                $this->fileDirUpload,
                'uploads'
            );

            $data['architecture_thumbnail'] = str_replace($this->fileDirUpload . '/', '', $path);
        }

        // ==> Insert Data
        $i = ArchitectureModel::create($data);
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
            'kategori_architecture' => 'required|numeric',
            'video_link' => 'url',
            'deskripsi' => 'required',
            'thumbnail' => 'mimes:png,jpg,jpeg|max:512'
        ]);

        if ($validated->fails()) return $this->badRequest($validated);

        // ==> Data Insert
        $data = [
            'architecture_nama' => $request->input('nama'),
            'architecture_kategori_id' => $request->input('kategori_architecture'),
            'architecture_deskripsi' => $request->input('deskripsi'),
            'architecture_video_link' => $request->input('video_link'),
            'architecture_meta_keyword' => strtolower($request->input('nama')),
            'architecture_meta_deskripsi' => htmlspecialchars(strip_tags($request->input('deskripsi'))),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        // ==> File Upload
        if ($request->file('thumbnail') != null) {
            $path = $request->file('thumbnail')->store(
                $this->fileDirUpload,
                'uploads'
            );

            $data['architecture_thumbnail'] = str_replace($this->fileDirUpload . '/', '', $path);
        }

        // ==> Insert Data
        $i = ArchitectureModel::where('id', $id)->update($data);
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
        $i = ArchitectureModel::where('id', $id)->delete();

        if (!$i) return $this->system->responseServer(500, [
            'statusCode' => 500,
            'message' => 'Terjadi kesalahan saat hapus data'
        ]);

        return $this->system->responseServer(200, [
            'statusCode' => 200,
            'message' => 'Data telah berhasil dihapus !'
        ]);
    }

    public function image($id)
    {
        return view('administrator.architecture.image', ['master_id' => $id]);
    }

    public function imageFetch($id)
    {
        $DB = DB::table('architecture_foto')
            ->where('architecture_id', $id);

        return DataTables::of($DB)
            ->toJson(JSON_PRETTY_PRINT);
    }

    public function imageStore(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'nama' => 'required|regex:/^[a-z0-9 .\-]+$/i',
            'images' => 'mimes:png,jpg,jpeg|max:5120'
        ]);

        if ($validated->fails()) return $this->badRequest($validated);

        // ==> Data Insert
        $data = [
            'architecture_id' => $request->input('architecture_id'),
            'architecture_foto_nama' => $request->input('nama'),
            'created_at' => date('Y-m-d H:i:s')
        ];

        // ==> File Upload
        if ($request->file('images') != null) {
            $path = $request->file('images')->store(
                $this->fileDirUpload . '/foto',
                'uploads'
            );

            $data['architecture_foto_img'] = str_replace($this->fileDirUpload . '/foto/', '', $path);
        }

        // ==> Insert Data
        $i = ArchitectureModel::saveImage($data);
        if (!$i) return $this->system->responseServer(500, [
            'statusCode' => 500,
            'message' => 'Terjadi kesalahan saat insert data'
        ]);

        return $this->system->responseServer(200, [
            'statusCode' => 200,
            'message' => 'Data telah berhasil disimpan !'
        ]);
    }

    public function imageUpdate(Request $request, $id)
    {
        $validated = Validator::make($request->all(), [
            'nama' => 'required|regex:/^[a-z0-9 .\-]+$/i',
            'images' => 'mimes:png,jpg,jpeg|max:5120'
        ]);

        if ($validated->fails()) return $this->badRequest($validated);

        // ==> Data Insert
        $data = [
            'architecture_id' => $request->input('architecture_id'),
            'architecture_foto_nama' => $request->input('nama'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        // ==> File Upload
        if ($request->file('images') != null) {
            $path = $request->file('images')->store(
                $this->fileDirUpload . '/foto',
                'uploads'
            );

            $data['architecture_foto_img'] = str_replace($this->fileDirUpload . '/foto/', '', $path);
        }

        // ==> Insert Data
        $i = ArchitectureModel::saveImage($data, $id);
        if (!$i) return $this->system->responseServer(500, [
            'statusCode' => 500,
            'message' => 'Terjadi kesalahan saat update data'
        ]);

        return $this->system->responseServer(200, [
            'statusCode' => 200,
            'message' => 'Data telah berhasil disimpan !'
        ]);
    }

    public function imageDestroy($id)
    {
        $i = ArchitectureModel::deleteImage($id);

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
