<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessIndustry extends Model
{
    use HasFactory;

    protected $table = 'business_industries';

    protected $fillable = [
        'display_value',
        'display_name',
    ];
}
