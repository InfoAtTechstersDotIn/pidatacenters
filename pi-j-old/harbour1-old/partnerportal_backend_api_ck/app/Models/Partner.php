<?php

namespace App\Models;

// use Laravel\Passport\HasApiTokens;
// use Illuminate\Notifications\Notifiable;
// use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\GTMFundRequest;
use App\Models\PartnerPersonalInfo;
use App\Models\GTMCollateralRequest;
use App\Models\GTMJointEventRequest;
use App\Models\GTMMediaCampaignRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Partner extends Model
{
    use HasFactory;

    protected $table = 'partners';

    protected $fillable = [
        'partner_ref_no',
        'business_email',
        'password',
        'mobile_code',
        'mobile_number',
        'is_verified',
        'status',
        'login_role',
        'email',
        'rejection_comment',
    ];

    protected $hidden = [
        'password',
        //'remember_token',
    ];

    public function partnerPersonalInfo() {
        //return $this->hasOne(PartnerPersonalInfo::class, 'partner_ref_no');
        return $this->hasOne(PartnerPersonalInfo::class);
    }

    public function partnerOrgInfo() {
        //return $this->hasOne(PartnerPersonalInfo::class, 'partner_ref_no');
        return $this->hasOne(PartnerOrgInfo::class);
    }

    public function partnerTechInfo() {
        //return $this->hasOne(PartnerPersonalInfo::class, 'partner_ref_no');
        return $this->hasOne(PartnerTechInfo::class);
    }

    public function gtmFundReqs() {
        return $this->hasMany(GTMFundRequest::class);
    }

    public function gtmCollateralReqs() {
        return $this->hasMany(GTMCollateralRequest::class);
    }

    public function gtmMediaCampaignReqs() {
        return $this->hasMany(GTMMediaCampaignRequest::class);
    }

    public function gtmJointEventReqs() {
        return $this->hasMany(GTMJointEventRequest::class);
    }
    
}
