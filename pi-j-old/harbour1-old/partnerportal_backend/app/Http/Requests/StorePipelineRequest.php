<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePipelineRequest extends FormRequest
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
            'rbpname' => 'required',
            'rbpregion' => 'required',
            'salesowner' => 'required',
            'cregion' => 'required',
            'customername' => 'required',
            'customeremilid' => 'required',
            'industry' => 'required',
            'cactype' => 'required',
            'sbu' => 'required',
            'cproduct' => 'required',
            'pstage' => 'required',
            'prating' => 'required',
            'pmrc' => 'required',
            'potc' => 'required',
            'parc' => 'required',
            'cpinmonths' => 'required',
            'paymentterm' => 'required',
            // 'podate' => 'required',
            'pprdate' => 'required',
            'pclosingdate' => 'required',
            'cpcusttype' => 'required',
            'cmmsontype' => 'required',
            'ppcwebsite' => 'required',
	    'ooppdetails' => 'required',
            'opportunity_docs' => 'nullable',
            'opportunity_docs.*' => 'mimes:xlsx,xls,pdf',
        ];
    }

    public function messages() {
        return [
            'rbpname.required' => 'RBP Name is required',
            'rbpregion.required' => 'RBP Region is required',
            'salesowner.required' => 'Sales Owner is required',
            'cregion.required' => 'Customer Region is required',
            'customername.required' => 'Customer Name is required',
            'customeremilid.required' => 'Customer email id is required',
            'industry.required' => 'Business Industry is required',
            'cactype.required' => 'Account Type is required',
            'sbu.required' => 'SBU is required',
            'cproduct.required' => 'Product is required',
            'pstage.required' => 'Stage is required',
            'prating.required' => 'Rating is required',
            'pmrc.required' => 'MRC is required',
            'potc.required' => 'OTC is required',
            'parc.required' => 'ARC is required',
            'cpinmonths.required' => 'Contract Period is required',
            'paymentterm.required' => 'Payment Terms is required',
            'podate.required' => 'Oppotunity Date is required',
            'pprdate.required' => 'Proposal Date is required',
            'pclosingdate.required' => 'Closing Date is required',
            'cpcusttype.required' => 'Customer Type is required',
            'cmmsontype.required' => 'Commission Type is required',
            'ppcwebsite.required' => 'Customer Website is required',
	    'ooppdetails.required' => 'Opportunity Details is required',
        ];
    }
}
