<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerPersonalInfo extends Model
{
    use HasFactory;

    protected $table = "partnerpersonalinfos";

    protected $fillable = [
        'partner_ref_no',
        'title',
        'first_name',
        'last_name',
        'designation',
        'business_email',
        'mobile_code',
        'mobile_number',
        'partner_id',
    ];

    public function partner() {
        //return $this->hasOne(PartnerPersonalInfo::class, 'partner_ref_no');
        return $this->belongsTo(Partner::class);
    }
}
