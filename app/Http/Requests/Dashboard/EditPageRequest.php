<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EditPageRequest extends FormRequest
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
            "ar.title" => ["required", "min:5", "max:141", Rule::unique("page_translations", "title")->where('locale', 'ar')->ignore($this->page->id, "page_id")],
            "en.title" => ["required", "min:5", "max:141", Rule::unique("page_translations", "title")->where('locale', 'en')->ignore($this->page->id, "page_id")],
            "ar.description" => "required",
            "en.description" => "required",
            "image" =>  "image"
        ];
    }


}
