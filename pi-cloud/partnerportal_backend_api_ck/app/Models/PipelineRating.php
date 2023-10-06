<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PipelineRating extends Model
{
    use HasFactory;

    protected $table = "pipeline_ratings";

    protected $fillable = [
        'rate_name',
        'rate_probability',
    ];
}
