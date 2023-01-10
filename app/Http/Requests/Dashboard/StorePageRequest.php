<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePageRequest extends FormRequest
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
            "ar.title" => ["required", "min:5", "max:141", Rule::unique("page_translations", "title")->where('locale', 'ar')],
            "en.title" => ["required", "min:5", "max:141", Rule::unique("page_translations", "title")->where('locale', 'en')],
            "ar.description" => "required",
            "en.description" => "required",
            "image" => "required", "image"
        ];
    }

    public function messages()
    {
        return [
            "ar.title.required" => "This field is required.",
            "ar.title.min" => "This field must be at least 5 characters",
            "ar.title.max" => "This field may not be greater than 255 characters",
            "ar.title.unique" => "This arabic title has already been taken.",
            "en.title.required" => "This field is required.",
            "en.title.min" => "This field must be at least 5 characters",
            "en.title.max" => "This field may not be greater than 255 characters",
            "en.title.unique" => "This english title has already been taken.",
            "image.required" => "This image is required.",
            "ar.description.required" => "This field is required.",
            "en.description.required" => "This field is required.",
        ];
    }
}
