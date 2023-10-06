<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GTMMediaCollateralRequest extends FormRequest
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
            'gtm_event_name' => 'required',
            'gtm_collateral_name'   =>  'required',
            'gtm_collateral_product'    =>  'required',
            'gtm_collateral_prod_other' =>  'nullable',
            'gtm_collateral_types'  =>  'required',
            'gtm_collateral_objective'  =>  'required',
            'gtm_target_audience'   =>  'required',
        ];
    }
}
