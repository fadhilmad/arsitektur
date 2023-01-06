<?php

namespace App\Http\Controllers;

use App\Http\Libraries\Select2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UtilsController extends Controller
{
    public function debug()
    {
        // code
    }

    public function getKategoriArchitecture()
    {
        $data = DB::table('architecture_kategori')
            ->select([
                'id',
                'architecture_kategori_nama as text'
            ])
            ->get()
            ->toArray();

        $select2 = new Select2($data);
        $select2->merge([(object)[
            'id' => '',
            'text' => '-'
        ]]);

        return $select2->render();
    }
}
