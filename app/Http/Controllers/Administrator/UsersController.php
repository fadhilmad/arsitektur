<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class UsersController extends Controller
{
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
            'nama' => 'required|alpha',
            'email' => 'required|email',
            'no_telp' => 'required|numeric',
            'username' => 'required|alpha_num',
            'password' => 'required',
            'jabatan' => 'required|alpha',
            'biodata' => 'required'
        ]);

        if ($validated->fails()) return $this->badRequest($validated);
    }

    public function update(Request $request, $id)
    {
        echo $id;
    }

    public function destroy(Request $request, $id)
    {
        echo $id;
    }
}
