<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $table="videos";

    protected $fillable = [
        'vid_title',
        'vid_is_ext_url',
        'vid_url',
        //'vid_thumb',
        'vid_is_active',
    ];
}
