<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GTMJointEventFormRequest extends FormRequest
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
            'je_event_name' => 'required',
            'gtm_je_products' => 'required',
            'gtm_je_prod_other' => 'nullable|string',
            'je_proj_cost' => 'required',
            'je_objective' => 'required',
            'je_audience' => 'required',
            //'gtm_fundreq_part_ownership' => 'required',
            'je_existing_sponsors' => 'required',
            'je_part_deliverables' => 'required',
            'je_pi_deliverables' => 'required',
            //'gtm_fundreq_fund_requested' => 'required',
            'je_comments' => 'required',
            'je_exec_name'  => 'required',
            'je_exec_email' => 'required|email',
            // 'executive_mobile_code' => 'nullable|text',
            'je_exec_mob' => 'required',
            'je_exec_desig' => 'required',
            'je_mark_name' => 'required',
            'je_mark_email' => 'required',
            // 'marteking_cmobile_code' => 'nullable|text',
            'je_mark_mob' => 'required',
            'je_success_params' => 'required',
            'je_success_metrics' => 'required',
            'je_loc' => 'required',
            'je_social_media' => 'required',
            'je_print_media' => 'required',
            'je_inst_branding' => 'required',
            'budget_plan_doc' => 'nullable',
        ];
    }
}
