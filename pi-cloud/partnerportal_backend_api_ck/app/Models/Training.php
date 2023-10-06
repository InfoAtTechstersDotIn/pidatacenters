<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    protected $table = "trainings";

    protected $fillable = [
        "training_title",
        "training_date",
        "training_st_time",
        "training_end_time",
        "training_content",
        "training_is_active",
    ];
}
