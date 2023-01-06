<?php

namespace App\Models\Administrator;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ArchitectureModel extends Model
{
    use HasFactory;

    protected $table = 'architecture';

    protected $fillable = [
        'architecture_nama',
        'architecture_kategori_id',
        'architecture_thumbnail',
        'architecture_deskripsi',
        'architecture_video_link',
        'architecture_meta_keyword',
        'architecture_meta_deskripsi',
        'created_at',
        'updated_at'
    ];

    public static function countFotoArchitecture($id)
    {
        return DB::table('architecture_foto')
            ->where('architecture_id', $id)
            ->count();
    }

    public static function saveImage($data, $id = "")
    {
        if ($id) {
            return DB::table('architecture_foto')
                ->where('id', $id)
                ->update($data);
        } else {
            return DB::table('architecture_foto')
                ->insert($data);
        }
    }

    public static function deleteImage($id)
    {
        return DB::table('architecture_foto')
            ->where('id', $id)
            ->delete();
    }
}
