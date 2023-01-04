<?php

namespace App\Http\Controllers;

use App\Http\Libraries\System;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    private $system;

    public function __construct()
    {
        $this->system = new System();
    }
    public function index()
    {
        if (Auth::check()) return redirect('/administrator/dashboard');
        
        return view('login.index');
    }

    public function auth(Request $request)
    {
        $authData = [
            'user_email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        if (!Auth::attempt($authData)) return $this->system->responseServer(404, [
            'statusCode' => 404,
            'message' => 'Email atau Password Salah !'
        ]);

        Session::put('uid', Auth::id());

        return $this->system->responseServer(200, [
            'statusCode' => 200,
            'message' => 'Login berhasil'
        ]);
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('/login');
    }
}
