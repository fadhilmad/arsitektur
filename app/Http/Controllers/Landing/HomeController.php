<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;


class HomeController extends Controller
{
    public function index()
    {

        $data['data'] = Home::all();
        
    	return view('landing.home',$data);
    }
}