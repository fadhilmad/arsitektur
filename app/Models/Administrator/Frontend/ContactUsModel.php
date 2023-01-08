<?php

namespace App\Models\Administrator\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUsModel extends Model
{
    use HasFactory;

    protected $table = 'contact_us';

    protected $fillable = [
        'contact_us_nama',
        'contact_us_email',
        'contact_us_subject',
        'contact_us_pesan',
        'created_at',
        'updated_at'
    ];
}
