<?php

namespace App\Models\Administrator;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MiscellaneouseModel extends Model
{
    use HasFactory;

    protected $table = 'miscellaneouse';

    protected $fillable = [
        'miscellaneouse_nama',
        'miscellaneouse_thumbnail',
        'miscellaneouse_deskripsi',
        'miscellaneouse_video_link',
        'miscellaneouse_meta_keyword',
        'miscellaneouse_meta_deskripsi',
        'miscellaneouse_author',
        'created_at',
        'updated_at'
    ];

    public static function countFotoMiscellaneouse($id)
    {
        return DB::table('miscellaneouse_foto')
            ->where('miscellaneouse_id', $id)
            ->count();
    }

    public static function saveImage($data, $id = "")
    {
        if ($id) {
            return DB::table('miscellaneouse_foto')
                ->where('id', $id)
                ->update($data);
        } else {
            return DB::table('miscellaneouse_foto')
                ->insert($data);
        }
    }

    public static function deleteImage($id)
    {
        return DB::table('miscellaneouse_foto')
            ->where('id', $id)
            ->delete();
    }
}
