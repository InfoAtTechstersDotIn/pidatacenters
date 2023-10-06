<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseStudy extends Model
{
    use HasFactory;

    protected $table = "case_studies";

    protected $fillable = [
        'cs_title',
        'cs_short_description',
        'cs_image_path',
        'cs_doc_path',
        'cs_is_active',
        'cs_date',
    ];
}
