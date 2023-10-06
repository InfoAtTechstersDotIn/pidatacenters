<?php

namespace App\Models;

use App\Models\RegionHead;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class State extends Model
{
    use HasFactory;

    protected $table = "states";

    protected $fillable = [
        'country_id',
        'state_name',
        'rh_id'
    ];

    public function regionhead() {
        return $this->belongsTo(RegionHead::class, 'rh_id', 'id');
    }

    public function relationowners() {
        return $this->belongsToMany(Relationowner::class, 'relationowner_state');
    }
}
