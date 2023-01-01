<?php

namespace App\Http\Middleware;

use App\Http\Libraries\System;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class AuthenticateAjax extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            http_response_code(400);
            header("Content-Type: application/json");

            echo json_encode([
                'statusCode' => 400,
                'message' => 'Diperlukan Authentikasi'
            ], JSON_PRETTY_PRINT);
            die;
        }
    }
}
