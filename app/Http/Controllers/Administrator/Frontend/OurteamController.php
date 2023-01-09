<?php

namespace App\Http\Controllers\Administrator\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Libraries\System;
use App\Models\Administrator\Frontend\OurteamModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class OurteamController extends Controller
{
    private $fileDirUpload = "ourteam";
    private $system;

    public function __construct()
    {
        $this->system = new System();
    }

    public function index()
    {
        return view('administrator.frontend.ourteam.index');
    }

    public function fetch(Request $request)
    {
        $DB = DB::table('our_team');
        return DataTables::of($DB)
            ->toJson(JSON_PRETTY_PRINT);
    }

    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'nama' => 'required|regex:/^[\pL\s\-]+$/u',
            'image' => 'mimes:png,jpg,jpeg|max:512'
        ]);

        if ($validated->fails()) return $this->badRequest($validated);

        // ==> Data Insert
        $data = [
            'our_team_nama' => $request->input('nama'),
            'our_team_jabatan' => $request->input('jabatan'),
            'our_team_biodata' => $request->input('biodata'),
            'our_team_fb' => $request->input('facebook'),
            'our_team_tw' => $request->input('twitter'),
            'our_team_ig' => $request->input('instagram'),
            'our_team_ln' => $request->input('linkedin'),
            'our_team_be' => $request->input('behance'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => null
        ];

        // ==> File Upload
        if ($request->file('image') != null) {
            $path = $request->file('image')->store(
                $this->fileDirUpload,
                'uploads'
            );

            $data['our_team_img'] = str_replace($this->fileDirUpload . '/', '', $path);
        }

        // ==> Insert Data
        $i = OurteamModel::create($data);
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
            'nama' => 'required|regex:/^[\pL\s\-]+$/u',
            'image' => 'mimes:png,jpg,jpeg|max:512'
        ]);

        if ($validated->fails()) return $this->badRequest($validated);

        // ==> Data Insert
        $data = [
            'our_team_nama' => $request->input('nama'),
            'our_team_jabatan' => $request->input('jabatan'),
            'our_team_biodata' => $request->input('biodata'),
            'our_team_fb' => $request->input('facebook'),
            'our_team_tw' => $request->input('twitter'),
            'our_team_ig' => $request->input('instagram'),
            'our_team_ln' => $request->input('linkedin'),
            'our_team_be' => $request->input('behance'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        // ==> File Upload
        if ($request->file('image') != null) {
            $path = $request->file('image')->store(
                $this->fileDirUpload,
                'uploads'
            );

            $data['our_team_img'] = str_replace($this->fileDirUpload . '/', '', $path);
        }

        // ==> Insert Data
        $i = OurteamModel::where('id', $id)->update($data);
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
        $i = OurteamModel::where('id', $id)->delete();

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
