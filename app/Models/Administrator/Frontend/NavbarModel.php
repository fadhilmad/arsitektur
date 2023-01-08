<?php

namespace App\Models\Administrator\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NavbarModel extends Model
{
    use HasFactory;

    protected $table = 'navbar';

    protected $fillable = [
        'navbar_parent_id',
        'navbar_nama',
        'navbar_link',
        'navbar_index',
        'created_at',
        'updated_at'
    ];
}
