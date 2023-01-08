<?php

namespace App\Models\Administrator\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdentitasWebModel extends Model
{
    use HasFactory;

    protected $table = 'identitas';

    protected $fillable = [
        'website_logo',
        'website_nama',
        'website_no_telp',
        'website_email',
        'website_facebook',
        'website_linked',
        'website_instagram',
        'website_twitter',
        'website_behance',
        'website_lokasi',
        'website_meta_keyword',
        'website_meta_deskripsi',
        'created_at',
        'updated_at'
    ];
}
