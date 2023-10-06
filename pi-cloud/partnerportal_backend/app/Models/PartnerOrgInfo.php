<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerOrgInfo extends Model
{
    use HasFactory;

    protected $table = "partnerorginfos";

    protected $fillable = [
        'partner_ref_no',
        'comp_name',
        'comp_website',
        'comp_hq',
        'comp_desc',
        'comp_size',
        'industry',
        'annual_revenue',
        'lob',
        'lob_other',
        'city',
        'ro_name',
        'rh_name',
        'state',
        'country',
        'pincode',
        'loc_o_b',
        'client_base',
        'client_base_other',
        'partnership_model',
        'partner_id',
    ];

    public function partner() {
        return $this->belongsTo(Partner::class);
    }
}
