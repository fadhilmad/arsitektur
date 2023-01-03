<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Libraries\System;
use App\Models\Administrator\InteriorModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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

    public function fetch(Request $request)
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
                'us.user_nama',
                'in.created_at',
                'in.updated_at',
            ])
            ->join('users as us', 'in.interior_author', '=', 'us.id');

        return DataTables::of($DB)
            ->addColumn('foto_count', function ($row) {
                return InteriorModel::countFotoInterior($row->id);
            })
            ->toJson(JSON_PRETTY_PRINT);
    }

    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), []);

        if ($validated->fails()) return $this->badRequest($validated);

        // ==> Data Insert
        $data = [];

        // ==> File Upload
        if ($request->file('images') != null) {
            $path = $request->file('images')->store(
                $this->fileDirUpload,
                'uploads'
            );

            $data['user_img'] = str_replace($this->fileDirUpload . '/', '', $path);
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
        $validated = Validator::make($request->all(), []);

        if ($validated->fails()) return $this->badRequest($validated);

        // ==> Data Insert
        $data = [];

        // ==> File Upload
        if ($request->file('images') != null) {
            $path = $request->file('images')->store(
                $this->fileDirUpload,
                'uploads'
            );

            $data['user_img'] = str_replace($this->fileDirUpload . '/', '', $path);
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

    public function image()
    {
        return view('administrator.interior.image');
    }

    public function image_fetch(Request $request)
    {
        $DB = DB::table('interior_foto');
        return DataTables::of($DB)
            ->toJson(JSON_PRETTY_PRINT);
    }
}
