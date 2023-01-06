<?php

namespace App\Models\Administrator;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'username',
        'password',
        'user_nama',
        'user_telp',
        'user_jabatan',
        'user_email',
        'user_img',
        'user_biodata',
        'user_fb',
        'user_tw',
        'user_ig',
        'user_ln',
        'user_be',
        'created_at',
        'updated_at'
    ];
}
