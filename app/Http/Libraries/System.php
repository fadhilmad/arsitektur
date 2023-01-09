<?php

namespace App\Http\Libraries;

use App\Models\Administrator\UsersModel;

class System
{
    public function responseServer($statusCode, $data = [])
    {
        /*
        *   Informasi Status Code Server
        *   
        *   200 => Success (Digunakan ketika sukses mengakses halaman)
        *   400 => Bad Request (Digunakan ketika validasi form tidak valid)
        *   401 => Unauthorized  (Digunakan ketika user tidak login)
        *   403 => Forbidden (Digunakan ketika token tidak valid)
        *   500 => Internal Server Error (Digunakan ketika terjadi kesalahan di sisi server)
        */

        return response()->json($data, $statusCode, ['Content-type' => 'application/json'], JSON_PRETTY_PRINT);
    }

    public static function getImageProfile($id)
    {
        $dataUser = UsersModel::where('id', $id)->first();
        return @$dataUser->user_img ?: 'no-image.png';
    }
}
