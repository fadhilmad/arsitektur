<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Libraries\System;
use App\Models\Administrator\UsersModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class UsersController extends Controller
{
    private $fileDirUpload = "foto-profile";
    private $system;

    public function __construct()
    {
        $this->system = new System();
    }

    public function index()
    {
        return view('administrator.users.index');
    }

    public function fetch(Request $request)
    {
        $DB = DB::table('users');
        return DataTables::of($DB)
            ->removeColumn(['password'])
            ->toJson(JSON_PRETTY_PRINT);
    }

    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'nama' => 'required|regex:/^[\pL\s\-]+$/u',
            'email' => 'required|email',
            'no_telp' => 'required|numeric',
            'username' => 'required|alpha_num',
            'password' => 'required',
            'jabatan' => 'required|regex:/^[\pL\s\-]+$/u',
            'biodata' => 'required',
            'foto_profile' => 'mimes:png,jpg,jpeg|max:512'
        ]);

        if ($validated->fails()) return $this->badRequest($validated);

        // ==> Data Insert
        $data = [
            'username' => $request->input('username'),
            'user_nama' => $request->input('nama'),
            'user_telp' => $request->input('no_telp'),
            'user_jabatan' => $request->input('jabatan'),
            'user_email' => $request->input('email'),
            'user_biodata' => $request->input('biodata'),
            'user_fb' => $request->input('facebook'),
            'user_tw' => $request->input('twitter'),
            'user_ig' => $request->input('instagram'),
            'user_ln' => $request->input('linkedin'),
            'user_be' => $request->input('behance'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => null
        ];

        // ==> File Upload
        if ($request->file('foto_profile') != null) {
            $path = $request->file('foto_profile')->store(
                $this->fileDirUpload,
                'uploads'
            );

            $data['user_img'] = str_replace($this->fileDirUpload . '/', '', $path);
        }

        // ==> Password
        if ($request->input('password') != "") {
            $data['password'] = Hash::make($request->input('password'));
        }

        // ==> Insert Data
        $i = UsersModel::create($data);
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
            'email' => 'required|email',
            'no_telp' => 'required|numeric',
            'username' => 'required|alpha_num',
            'jabatan' => 'required|regex:/^[\pL\s\-]+$/u',
            'biodata' => 'required',
            'foto_profile' => 'mimes:png,jpg,jpeg|max:512'
        ]);

        if ($validated->fails()) return $this->badRequest($validated);

        // ==> Data Insert
        $data = [
            'username' => $request->input('username'),
            'user_nama' => $request->input('nama'),
            'user_telp' => $request->input('no_telp'),
            'user_jabatan' => $request->input('jabatan'),
            'user_email' => $request->input('email'),
            'user_biodata' => $request->input('biodata'),
            'user_fb' => $request->input('facebook'),
            'user_tw' => $request->input('twitter'),
            'user_ig' => $request->input('instagram'),
            'user_ln' => $request->input('linkedin'),
            'user_be' => $request->input('behance'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        // ==> File Upload
        if ($request->file('foto_profile') != null) {
            $path = $request->file('foto_profile')->store(
                $this->fileDirUpload,
                'uploads'
            );

            $data['user_img'] = str_replace($this->fileDirUpload . '/', '', $path);
        }

        // ==> Password
        if ($request->input('password') != "") {
            $data['password'] = Hash::make($request->input('password'));
        }

        // ==> Insert Data
        $i = UsersModel::where('id', $id)->update($data);
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
        $i = UsersModel::where('id', $id)->delete();

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
