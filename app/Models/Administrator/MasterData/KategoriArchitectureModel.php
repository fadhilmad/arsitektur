<?php

namespace App\Models\Administrator\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriArchitectureModel extends Model
{
    use HasFactory;

    protected $table = 'architecture_kategori';

    protected $fillable = [
        'architecture_kategori_nama',
        'created_at',
        'updated_at'
    ];
}
