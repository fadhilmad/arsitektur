<?php

namespace App\Models\Administrator\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceModel extends Model
{
    use HasFactory;

    protected $table = 'service';

    protected $fillable = [
        'service_nama',
        'service_icon',
        'service_deskripsi',
        'service_urutan',
        'created_at',
        'updated_at'
    ];
}
