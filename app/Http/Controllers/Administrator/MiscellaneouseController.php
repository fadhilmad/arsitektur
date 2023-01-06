<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Libraries\System;
use App\Models\Administrator\MiscellaneouseModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class MiscellaneouseController extends Controller
{
    private $fileDirUpload = "miscellaneouse";
    private $system;

    public function __construct()
    {
        $this->system = new System();
    }

    public function index()
    {
        return view('administrator.miscellaneouse.index');
    }

    public function fetch()
    {
        $DB = DB::table('miscellaneouse as mi')
            ->select([
                'mi.id',
                'mi.miscellaneouse_nama',
                'mi.miscellaneouse_thumbnail',
                'mi.miscellaneouse_deskripsi',
                'mi.miscellaneouse_video_link',
                'mi.miscellaneouse_meta_keyword',
                'mi.miscellaneouse_meta_deskripsi',
                'us.user_nama',
                'mi.created_at',
                'mi.updated_at',
            ])
            ->join('users as us', 'mi.miscellaneouse_author', '=', 'us.id');

        return DataTables::of($DB)
            ->addColumn('foto_count', function ($row) {
                return MiscellaneouseModel::countFotoMiscellaneouse($row->id);
            })
            ->rawColumns(['miscellaneouse_deskripsi'])
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
            'miscellaneouse_nama' => $request->input('nama'),
            'miscellaneouse_deskripsi' => $request->input('deskripsi'),
            'miscellaneouse_video_link' => $request->input('video_link'),
            'miscellaneouse_meta_keyword' => strtolower($request->input('nama')),
            'miscellaneouse_meta_deskripsi' => htmlspecialchars(strip_tags($request->input('deskripsi'))),
            'miscellaneouse_author' => Auth::id()
        ];

        // ==> File Upload
        if ($request->file('thumbnail') != null) {
            $path = $request->file('thumbnail')->store(
                $this->fileDirUpload,
                'uploads'
            );

            $data['miscellaneouse_thumbnail'] = str_replace($this->fileDirUpload . '/', '', $path);
        }

        // ==> Insert Data
        $i = MiscellaneouseModel::create($data);
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
            'miscellaneouse_nama' => $request->input('nama'),
            'miscellaneouse_deskripsi' => $request->input('deskripsi'),
            'miscellaneouse_video_link' => $request->input('video_link'),
            'miscellaneouse_meta_keyword' => strtolower($request->input('nama')),
            'miscellaneouse_meta_deskripsi' => htmlspecialchars(strip_tags($request->input('deskripsi'))),
            'miscellaneouse_author' => Auth::id()
        ];

        // ==> File Upload
        if ($request->file('thumbnail') != null) {
            $path = $request->file('thumbnail')->store(
                $this->fileDirUpload,
                'uploads'
            );

            $data['miscellaneouse_thumbnail'] = str_replace($this->fileDirUpload . '/', '', $path);
        }

        // ==> Insert Data
        $i = MiscellaneouseModel::where('id', $id)->update($data);
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
        $i = MiscellaneouseModel::where('id', $id)->delete();

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
        return view('administrator.miscellaneouse.image', ['master_id' => $id]);
    }

    public function imageFetch($id)
    {
        $DB = DB::table('miscellaneouse_foto')
            ->where('miscellaneouse_id', $id);

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
            'miscellaneouse_id' => $request->input('miscellaneouse_id'),
            'miscellaneouse_foto_nama' => $request->input('nama'),
            'created_at' => date('Y-m-d H:i:s')
        ];

        // ==> File Upload
        if ($request->file('images') != null) {
            $path = $request->file('images')->store(
                $this->fileDirUpload . '/foto',
                'uploads'
            );

            $data['miscellaneouse_foto_img'] = str_replace($this->fileDirUpload . '/', '', $path);
        }

        // ==> Insert Data
        $i = MiscellaneouseModel::saveImage($data);
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
            'miscellaneouse_id' => $request->input('miscellaneouse_id'),
            'miscellaneouse_foto_nama' => $request->input('nama'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        // ==> File Upload
        if ($request->file('images') != null) {
            $path = $request->file('images')->store(
                $this->fileDirUpload . '/foto',
                'uploads'
            );

            $data['miscellaneouse_foto_img'] = str_replace($this->fileDirUpload . '/', '', $path);
        }

        // ==> Insert Data
        $i = MiscellaneouseModel::saveImage($data, $id);
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
        $i = MiscellaneouseModel::deleteImage($id);

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
