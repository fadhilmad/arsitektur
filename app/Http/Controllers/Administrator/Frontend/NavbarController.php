<?php

namespace App\Http\Controllers\Administrator\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Libraries\System;
use App\Models\Administrator\Frontend\NavbarModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class NavbarController extends Controller
{
    private $system;

    public function __construct()
    {
        $this->system = new System();
    }

    public function index()
    {
        return view('administrator.frontend.navbar.index');
    }

    public function fetch(Request $request)
    {
        $DB = DB::table('navbar as nv')
            ->select([
                'nv.id',
                'nv.navbar_parent_id',
                'pr.navbar_nama as parent_nama',
                'nv.navbar_nama',
                'nv.navbar_link',
                'nv.navbar_index',
                'nv.created_at',
                'nv.updated_at'
            ])
            ->join('navbar as pr', 'nv.navbar_parent_id', '=', 'pr.id', 'left');

        return DataTables::of($DB)
            ->toJson(JSON_PRETTY_PRINT);
    }

    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'parent' => 'nullable|numeric',
            'nama' => 'required|alpha',
            'link' => 'required',
            'index' => 'required|numeric'
        ]);

        if ($validated->fails()) return $this->badRequest($validated);

        // ==> Data Insert
        $data = [
            'navbar_parent_id' => $request->input('parent'),
            'navbar_nama' => $request->input('nama'),
            'navbar_link' => $request->input('link'),
            'navbar_index' => $request->input('index'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => null
        ];

        // ==> Insert Data
        $i = NavbarModel::create($data);
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
            'parent' => 'nullable|numeric',
            'nama' => 'required|alpha',
            'link' => 'required',
            'index' => 'required|numeric'
        ]);

        if ($validated->fails()) return $this->badRequest($validated);

        // ==> Data Insert
        $data = [
            'navbar_parent_id' => $request->input('parent'),
            'navbar_nama' => $request->input('nama'),
            'navbar_link' => $request->input('link'),
            'navbar_index' => $request->input('index'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        // ==> Insert Data
        $i = NavbarModel::where('id', $id)->update($data);
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
        $i = NavbarModel::where('id', $id)->delete();

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
