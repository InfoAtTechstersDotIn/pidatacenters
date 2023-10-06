<?php

namespace App\Models;

use App\Models\Pipeline;
use App\Models\SBUProduct;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SBUnit extends Model
{
    use HasFactory;

    protected $table = "sbunits";

    protected $fillable = [
        'sbu_name',
    ];


    public function products() {
        return $this->hasMany(SBUProduct::class, 'sbunits_id','id');
    }

    public function pipelines() {
        return $this->hasMany(Pipeline::class, 'sbunits_id','id');
    }
}
