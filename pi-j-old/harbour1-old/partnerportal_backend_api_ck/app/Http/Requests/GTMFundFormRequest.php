<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GTMFundFormRequest extends FormRequest
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
            'gtm_fundreq_products' => 'required',
            'gtm_fundreq_prod_other' => 'nullable|string',
            'gtm_fundreq_proj_cost' => 'required',
            'gtm_fundreq_objective' => 'required',
            'gtm_fundreq_market' => 'required',
            'gtm_fundreq_part_ownership' => 'required',
            'gtm_fundreq_sponsers' => 'required',
            'gtm_fundreq_spon_deliverables' => 'required',
            'gmt_fundreq_pi_deliverables' => 'required',
            'gtm_fundreq_fund_requested' => 'nullable',
            'gtm_fundreq_comments' => 'required',
            'gtm_fundreq_exe_name'  => 'required',
            'gtm_fundreq_exe_email' => 'required|email',
            // 'executive_mobile_code' => 'nullable|text',
            'gtm_fundreq_exe_mob' => 'required',
            'gtm_fundreq_exe_desig' => 'required',
            'gtm_fundreq_mark_name' => 'required',
            'gtm_fundreq_mark_email' => 'required',
            // 'marteking_cmobile_code' => 'nullable|text',
            'gtm_fundreq_mark_mob' => 'required',
            'gtm_fundreq_success_params' => 'required',
            'gtm_fundreq_success_metrics' => 'required',
            'budget_plan_doc' => 'nullable|mimes:xlsx,xls,pdf,doc,docx',
        ];
    }
}
