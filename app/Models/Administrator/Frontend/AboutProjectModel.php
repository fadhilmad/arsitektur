<?php

namespace App\Models\Administrator\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AboutProjectModel extends Model
{
    use HasFactory;

    protected $table = 'about_project';

    protected $fillable = [
        'about_project_nama',
        'about_project_img',
        'created_at',
        'updated_at'
    ];

    public static function countItem($id)
    {
        return DB::table('about_project_item')
            ->where('about_project_id', $id)
            ->count();
    }

    public static function saveItem($data, $id = "")
    {
        if ($id) {
            return DB::table('about_project_item')
                ->where('id', $id)
                ->update($data);
        } else {
            return DB::table('about_project_item')
                ->insert($data);
        }
    }

    public static function deleteItem($id)
    {
        return DB::table('about_project_item')
            ->where('id', $id)
            ->delete();
    }
}
