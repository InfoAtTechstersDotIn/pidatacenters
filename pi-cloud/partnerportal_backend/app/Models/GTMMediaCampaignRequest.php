<?php

namespace App\Models;

use App\Models\Partner;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GTMMediaCampaignRequest extends Model
{
    use HasFactory;

    protected $table = "gtm_media_campaign_requests";

    protected $fillable = [
        'project_name',
        'gmt_prod_services',
        'gmt_prod_services_others',
        'estimated_event_cost',
        'budget_plan_doc_path',
        'objective',
        'target_market',
        'partner_ownership',
        'existing_sponsors',
        'sponsor_deliverables',
        'pi_deliverables',
        'fund_requested',
        'comments',
        'executive_name',
        'executive_email',
        'executive_mobile_code',
        'executive_mobile_no',
        'executive_desig',
        'marteking_cname',
        'marteking_cemail',
        'marteking_cmobile_code',
        'marteking_cmobile_no',
        'success_parameters',
        'success_metrics',
        'media_house_online',
        'media_house_offline',
        'status',
        'status_date',
        'rejection_comment',
        'partner_id',
	'is_active',
        'created_at',
        'updated_at',
    ];

    public function partner() {
        return $this->belongsTo(Partner::class);
    }
}
