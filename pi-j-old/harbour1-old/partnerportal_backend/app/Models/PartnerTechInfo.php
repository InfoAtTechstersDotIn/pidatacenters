<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerTechInfo extends Model
{
    use HasFactory;

    protected $table = "partnertechinfos";

    protected $fillable = [
        'partner_ref_no',
        'use_case_expertise',
        'use_case_expertise_other',
        'technology_expertise',
        'technology_expertise_other',
        'professional_services_offered_other',
        'professional_services_offered',
        'interested_ser_prod_at_pi',
        'interested_ser_prod_at_pi_other',
        'busi_case_brief',
        'partner_type',
        'partner_id',
	'agreement_doc',
        'nda_doc',
    ];

    public function partner() {
        //return $this->hasOne(PartnerPersonalInfo::class, 'partner_ref_no');
        return $this->belongsTo(Partner::class);
    }
}
