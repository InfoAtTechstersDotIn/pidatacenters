<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GTMMediaCampaignRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'gtm_proj_name' => 'required',
            'gtm_mcampaign_products' => 'required',
            'gtm_mcampaign_prod_other' => 'nullable|string',
            'gtm_mcampaign_proj_cost' => 'required',
            'gtm_mcampaign_objective' => 'required',
            'gtm_mcampaign_market' => 'required',
            'gtm_mcampaign_part_ownership' => 'required',
            'gtm_mcampaign_sponsors' => 'required',
            'gtm_mcampaign_spon_deliverables' => 'required',
            'gmt_mcampaign_pi_deliverables' => 'required',
            'gtm_mcampaign_fund_requested' => 'nullable',
            'gtm_mcampaign_comments' => 'required',
            'gtm_mcampaign_exe_name'  => 'required',
            'gtm_mcampaign_exe_email' => 'required|email',
            // 'executive_mobile_code' => 'nullable|text',
            'gtm_mcampaign_exe_mob' => 'required',
            'gtm_mcampaign_exe_desig' => 'required',
            'gtm_mcampaign_mark_name' => 'required',
            'gtm_mcampaign_mark_email' => 'required',
            // 'marteking_cmobile_code' => 'nullable|text',
            'gtm_mcampaign_mark_mob' => 'required',
            'gtm_mcampaign_success_params' => 'required',
            'gtm_mcampaign_success_metrics' => 'required',
            'gtm_mcampaign_media_online'    => 'required',
            'gtm_mcampaign_media_offline'   => 'required',
            'budget_plan_doc' => 'nullable',
        ];
    }
}
