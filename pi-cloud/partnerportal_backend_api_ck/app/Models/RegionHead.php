<?php

namespace App\Models;

use App\Models\State;
use App\Models\Relationowner;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RegionHead extends Model
{
    use HasFactory;

    protected $table = "region_heads";

    protected $fillable = [
        'rh_name',
        'rh_email',
    ];

    public function states() {
        return $this->hasMany(State::class, 'rh_id', 'id');
    }

    public function relationshipowners() {
        return $this->hasMany(Relationowner::class, 'rh_id', 'id');
    }
}
