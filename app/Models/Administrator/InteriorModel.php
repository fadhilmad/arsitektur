<?php

namespace App\Models\Administrator;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class InteriorModel extends Model
{
    use HasFactory;

    protected $table = 'interior';

    protected $fillable = [
        'interior_nama',
        'interior_thumbnail',
        'interior_deskripsi',
        'interior_video_link',
        'interior_meta_keyword',
        'interior_meta_deskripsi',
        'interior_author',
        'created_at',
        'updated_at'
    ];

    public static function countFotoInterior($id)
    {
        return DB::table('interior_foto')
            ->where('interior_id', $id)
            ->count();
    }

    public static function saveImage($data, $id = "")
    {
        if ($id) {
            return DB::table('interior_foto')
                ->where('id', $id)
                ->update($data);
        } else {
            return DB::table('interior_foto')
                ->insert($data);
        }
    }

    public static function deleteImage($id)
    {
        return DB::table('interior_foto')
            ->where('id', $id)
            ->delete();
    }
}
