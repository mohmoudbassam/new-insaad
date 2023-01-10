<?php

namespace App\Http\Requests\Dashboard;

use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->can('create content');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            "categorical_type" => "required|string",
            "image" => "required_if:categorical_type,SPECIALTIES|image"
        ];

        foreach (config('app.languages') as $key => $lang) {
            $rules["$key.name"] = [
                'required',
                'string',
                Rule::unique("category_translations", "name")
                    ->where('locale', $key)->whereNull('deleted_at')
            ];
        }

        return $rules;
    }

    public function attributes()
    {
        return RuleFactory::make([
            '%name%' => __('validation.attributes.name'),
            'image.required_if' => __('validation.attributes.image'),
        ]);
    }

}
