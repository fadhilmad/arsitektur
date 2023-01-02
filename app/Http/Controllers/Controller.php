<?php

namespace App\Http\Controllers;

use App\Http\Libraries\System;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private $system;

    public function __construct()
    {
        $this->system = new System();
    }

    public function badRequest($validator)
    {
        $getErrors = $validator->errors()->messages();
        $indexArr = array_keys((array) $getErrors);

        $messageError = [];
        foreach ($indexArr as $key) {
            $messageData = $validator->errors()->get($key);
            $messageError[$key] = @$messageData[0];
        }

        return $this->system->response(400, [
            'statusCode' => 400,
            'message' => 'Mohon isi form dengan benar !',
            'data' => [
                'error' => $messageError
            ]
        ]);
    }
}
