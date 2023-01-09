<?php

namespace App\Models\Administrator\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlideShowModel extends Model
{
    use HasFactory;

    protected $table = 'slide_show';

    protected $fillable = [
        'slide_show_nama',
        'slide_show_keterangan',
        'slide_show_img',
        'slide_show_urutan',
        'slide_show_active',
        'created_at',
        'updated_at'
    ];
}
