<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
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
            "event_title" => "required",
            "event_date"  => "required",
            "event_st_time" => "required",
            "event_end_time" => "nullable",
            "event_content" => "required",
            "event_banner" => "nullable|mimes:jpg,png,webp,gif",
        ];
    }
}
