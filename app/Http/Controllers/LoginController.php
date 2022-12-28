<?php

namespace App\Http\Controllers;

use App\Http\Libraries\System;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    private $system;

    public function __construct()
    {
        $this->system = new System();
    }
    public function index()
    {
        return view('login.index');
    }

    public function auth(Request $request)
    {
        
        // if (Auth::attempt($request->only('user_email', 'password'))) {
        //     return redirect('dashboard');
        // }

        // return redirect('/');

        // var_dump($request->input());
        // die;

        return $this->system->response(200, [
            'statusCode' => 200,
            'message' => 'Fetch Berhasil'
        ]);
    }
}
