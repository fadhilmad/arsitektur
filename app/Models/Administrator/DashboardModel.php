<?php

namespace App\Models\Administrator;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DashboardModel extends Model
{
    use HasFactory;

    public static function countProjectInterior($tahun = "")
    {
        $DB = DB::table('interior');
        if ($tahun) $DB->where('created_at', 'like', '%' . $tahun . '%');

        $i = $DB->count();

        return $i;
    }

    public static function countProjectArsitektur($tahun = "")
    {
        $DB = DB::table('architecture');
        if ($tahun) $DB->where('created_at', 'like', '%' . $tahun . '%');

        $i = $DB->count();

        return $i;
    }

    public static function countProjectMiscellanouse($tahun = "")
    {
        $DB = DB::table('miscellaneouse');
        if ($tahun) $DB->where('created_at', 'like', '%' . $tahun . '%');

        $i = $DB->count();

        return $i;
    }

    public static function countProjectCommercial($tahun = "")
    {
        $DB = DB::table('architecture');
        if ($tahun) $DB->where('created_at', 'like', '%' . $tahun . '%');

        $DB->where('architecture_kategori_id', '=', 1);
        $i = $DB->count();

        return $i;
    }

    public static function countProjectResidential($tahun = "")
    {
        $DB = DB::table('architecture');
        if ($tahun) $DB->where('created_at', 'like', '%' . $tahun . '%');

        $DB->where('architecture_kategori_id', '=', 2);
        $i = $DB->count();

        return $i;
    }

    public static function countProjectRetail($tahun = "")
    {
        $DB = DB::table('architecture');
        if ($tahun) $DB->where('created_at', 'like', '%' . $tahun . '%');

        $DB->where('architecture_kategori_id', '=', 3);
        $i = $DB->count();

        return $i;
    }
}
