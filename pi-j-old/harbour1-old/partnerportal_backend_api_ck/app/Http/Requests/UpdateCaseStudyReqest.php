<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCaseStudyReqest extends FormRequest
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
            'kccs_title' => "required",
            'kccs-short-desc' => "nullable",
            'kccs_banner' => "nullable|mimes:jpg,png,gif",
            'kccs_doc' => "nullable",
            'kccs_date' => "nullable",
        ];
    }
}
