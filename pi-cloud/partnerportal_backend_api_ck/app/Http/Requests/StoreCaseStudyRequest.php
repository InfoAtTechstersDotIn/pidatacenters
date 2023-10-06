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

    public function messages()
    {
        return [
            'kccs_title.required' => 'The title is required',
            'kccs_banner.required' => 'The banner is required',
            'kccs_doc.required' => 'The upload file is required',
            'kccs_doc.mimes:pdf' => 'The uploaded file is required and must be a pdf file',
        ];
    }
}
