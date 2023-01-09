<?php

namespace App\Models\Administrator\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurteamModel extends Model
{
    use HasFactory;

    protected $table = 'our_team';

    protected $fillable = [
        'our_team_nama',
        'our_team_img',
        'our_team_jabatan',
        'our_team_biodata',
        'our_team_fb',
        'our_team_tw',
        'our_team_ig',
        'our_team_ln',
        'our_team_be',
        'created_at',
        'updated_at'
    ];
}
