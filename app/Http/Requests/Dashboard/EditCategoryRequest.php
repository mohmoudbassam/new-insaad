<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EditCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->can('update content');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            "image" => "nullable|image"
        ];

        foreach (config('app.languages') as $key => $lang) {
            $rules["$key.name"] = [
                'required',
                'string',
                Rule::unique('category_translations', "name")
                    ->where('locale', $key)
                    ->ignore($this->category->id, "category_id")
            ];
        }

        return $rules;


    }

}
