<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Libraries\System;
use App\Models\Administrator\InteriorModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class InteriorController extends Controller
{
    private $fileDirUpload = "interior";
    private $system;

    public function __construct()
    {
        $this->system = new System();
    }

    public function index()
    {
        return view('administrator.interior.index');
    }

    public function fetch()
    {
        $DB = DB::table('interior as in')
            ->select([
                'in.id',
                'in.interior_nama',
                'in.interior_thumbnail',
                'in.interior_deskripsi',
                'in.interior_video_link',
                'in.interior_meta_keyword',
                'in.interior_meta_deskripsi',
                'in.created_at',
                'in.updated_at',
            ]);

        return DataTables::of($DB)
            ->addColumn('foto_count', function ($row) {
                return InteriorModel::countFotoInterior($row->id);
            })
            ->rawColumns(['interior_deskripsi'])
            ->toJson(JSON_PRETTY_PRINT);
    }

    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'nama' => 'required|regex:/^[a-z0-9 .\-]+$/i',
            'video_link' => 'url',
            'deskripsi' => 'required',
            'thumbnail' => 'mimes:png,jpg,jpeg|max:512'
        ]);

        if ($validated->fails()) return $this->badRequest($validated);

        // ==> Data Insert
        $data = [
            'interior_nama' => $request->input('nama'),
            'interior_deskripsi' => $request->input('deskripsi'),
            'interior_video_link' => $request->input('video_link'),
            'interior_meta_keyword' => strtolower($request->input('nama')),
            'interior_meta_deskripsi' => htmlspecialchars(strip_tags($request->input('deskripsi'))),
            'created_at' => date('Y-m-d H:i:s')
        ];

        // ==> File Upload
        if ($request->file('thumbnail') != null) {
            $path = $request->file('thumbnail')->store(
                $this->fileDirUpload,
                'uploads'
            );

            $data['interior_thumbnail'] = str_replace($this->fileDirUpload . '/', '', $path);
        }

        // ==> Insert Data
        $i = InteriorModel::create($data);
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
            'video_link' => 'url',
            'deskripsi' => 'required',
            'thumbnail' => 'mimes:png,jpg,jpeg|max:512'
        ]);

        if ($validated->fails()) return $this->badRequest($validated);

        // ==> Data Insert
        $data = [
            'interior_nama' => $request->input('nama'),
            'interior_deskripsi' => $request->input('deskripsi'),
            'interior_video_link' => $request->input('video_link'),
            'interior_meta_keyword' => strtolower($request->input('nama')),
            'interior_meta_deskripsi' => htmlspecialchars(strip_tags($request->input('deskripsi'))),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        // ==> File Upload
        if ($request->file('thumbnail') != null) {
            $path = $request->file('thumbnail')->store(
                $this->fileDirUpload,
                'uploads'
            );

            $data['interior_thumbnail'] = str_replace($this->fileDirUpload . '/', '', $path);
        }

        // ==> Insert Data
        $i = InteriorModel::where('id', $id)->update($data);
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
        $i = InteriorModel::where('id', $id)->delete();

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
        return view('administrator.interior.image', ['master_id' => $id]);
    }

    public function imageFetch($id)
    {
        $DB = DB::table('interior_foto')
            ->where('interior_id', $id);

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
            'interior_id' => $request->input('interior_id'),
            'interior_foto_nama' => $request->input('nama'),
            'created_at' => date('Y-m-d H:i:s')
        ];

        // ==> File Upload
        if ($request->file('images') != null) {
            $path = $request->file('images')->store(
                $this->fileDirUpload . '/foto',
                'uploads'
            );

            $data['interior_foto_img'] = str_replace($this->fileDirUpload . '/foto/', '', $path);
        }

        // ==> Insert Data
        $i = InteriorModel::saveImage($data);
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
            'interior_id' => $request->input('interior_id'),
            'interior_foto_nama' => $request->input('nama'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        // ==> File Upload
        if ($request->file('images') != null) {
            $path = $request->file('images')->store(
                $this->fileDirUpload . '/foto',
                'uploads'
            );

            $data['interior_foto_img'] = str_replace($this->fileDirUpload . '/foto/', '', $path);
        }

        // ==> Insert Data
        $i = InteriorModel::saveImage($data, $id);
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
        $i = InteriorModel::deleteImage($id);

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
