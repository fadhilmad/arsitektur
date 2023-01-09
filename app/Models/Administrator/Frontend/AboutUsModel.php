<?php

namespace App\Models\Administrator\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUsModel extends Model
{
    use HasFactory;

    protected $table = 'about_us';

    protected $fillable = [
        'about_us_isi',
        'created_at',
        'updated_at'
    ];
}
