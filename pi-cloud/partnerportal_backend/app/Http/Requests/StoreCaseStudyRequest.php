<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCaseStudyRequest extends FormRequest
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
            'kccs_short_desc' => "nullable",
            'kccs_banner' => "required|mimes:jpg,png,gif",
            'kccs_doc' => "required|mimes:pdf",
            'kccs_date' => "nullable",
        ];
    }
}
