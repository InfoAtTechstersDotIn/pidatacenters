<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GTMCollateralRequest extends Model
{
    use HasFactory;
    protected $table = "gtm_collateral_requests";

    protected $fillable = [
        'event_name',
        'collateral_name',
        'gtm_prod_services',
        'gtm_prod_services_others',
        'collateral_type',
        'objective',
        'target_audience',
        'status',
        'status_date',
        'rejection_comment',
        'partner_id',
	'is_active',
    ];

    public function partner() {
        return $this->belongsTo(Partner::class);
    }
}
