<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;



class HomeController extends Controller
{
    public function index()
    {   
        $our_team = DB::table('our_team')->get();

        return view('landing.home',['our_team' => $our_team]);
    }
}