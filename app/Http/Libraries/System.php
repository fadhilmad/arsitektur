<?php

namespace App\Http\Libraries;

class System
{
    public function response($statusCode, $data = [])
    {
        return response()->json($data, $statusCode);
    }
}
