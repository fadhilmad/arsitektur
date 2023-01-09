<?php

namespace App\Http\Controllers\Administrator\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Libraries\System;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('administrator.frontend.contact-us.index');
    }

    public function fetch(Request $request)
    {
        $DB = DB::table('contact_us');

        return DataTables::of($DB)
            ->toJson(JSON_PRETTY_PRINT);
    }
}
