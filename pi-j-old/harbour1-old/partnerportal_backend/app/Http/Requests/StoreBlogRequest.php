<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogRequest extends FormRequest
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
            "blog_title"   =>  "required",
            "blog_author"   =>  "nullable",
            "blog_short_desc" => "required",
            "blog_desc"     =>  "nullable",
            //"blog_banner"   =>  "nullable|mimes:jpg,png,gif|max:2048",
            "blog_banner"   =>  "nullable",
            "is_ext_link"   =>  "nullable",
            "external_link" =>  "nullable",        
        ];
    }
}
