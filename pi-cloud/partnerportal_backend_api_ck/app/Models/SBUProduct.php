<?php

namespace App\Models;

use App\Models\SBUnit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SBUProduct extends Model
{
    use HasFactory;

    protected $table = "sbuproducts";
    
    protected $fillable = [
        'sbunits_id',
        'prod_name',
    ];

    public function sbunit() {
        return $this->belongsTo(SBUnit::class, 'sbunits_id', 'id');
    }

    public function pipelines() {
        return $this->hasMany(Pipeline::class, 'sbu_product_id', 'id');
    }
}
