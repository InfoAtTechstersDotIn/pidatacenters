<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relationowner extends Model
{
    use HasFactory;

    protected $table = "relationowners";

    protected $fillable = [
        'ro_name',
        'ro_email',
	'rh_id',
    ];

    public function states() {
        return $this->belongsToMany(State::class, 'relationowner_state');
    }
    public function regionhead() {
        return $this->belongsTo(RegionHead::class, 'rh_id', 'id');
    }
}
