<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StoreVideoRequest extends FormRequest
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
            "kccs_vid_title" => "required",
            "kccs_vid_ext_url" => "nullable",
            //"kccs_vid_thumb" => "nullable",
            "kccs_video" => "nullable|mimes:mp4,mov",
        ];
    }

    public function messages()
    {
        return [
            'kccs_vid_title.required' => 'Title is required',
            'kccs_video.mimes' => 'The video must be of mp4 or mov type',
        ];
    }

    
}
