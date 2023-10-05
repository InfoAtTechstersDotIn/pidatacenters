<?php

namespace App\Models;

use App\Models\SBUnit;
use App\Models\Partner;
use App\Models\SBUProduct;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pipeline extends Model
{
    use HasFactory;

    protected $table = "pipelines";

    protected $fillable = [
        'potential_id',
        'rbp_name',
        'rbp_state',
        'sales_owner',
        'customer_state',
        'customer_name',
        'customer_email_id',
        'business_industry',
        'account_type',
        'sbunits_id',
        'sbu_product_id',
        'opportunity_details',
        'stage',
        'rating_id',
        'mrc',
        'otc',
        'arc',
        'acv',
        'tcv',
        'contract_period',
        'payment_terms',
        'opportunity_date',
        'proposal_date',
        'closing_date',
        'customer_type',
        'commission_type',
        'projected_commission',
        'customer_website',
	'opportunity_docs',
        'status',
        'rejection_comment',
        'status_date',
        'partner_id',
    ];

    public function sbUnit() {
        return $this->belongsTo(SBUnit::class, 'sbunits_id', 'id');
    }

    public function product() {
        return $this->belongsTo(SBUProduct::class, 'sbu_product_id', 'id');
    }

    public function partner() {
        return $this->belongsTo(Partner::class, 'partner_id',  'id');
    }

    public function contractPeriod() {
        return $this->belongsTo(ContractPeriod::class, 'contract_period', 'id');
    }

    public function stagemaster() {
        return $this->belongsTo(Stage::class, 'stage', 'id');
    }
}
