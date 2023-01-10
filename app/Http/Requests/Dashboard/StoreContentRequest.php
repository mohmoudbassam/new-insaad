<?php

namespace App\Http\Requests\Dashboard;

use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreContentRequest extends FormRequest
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
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:1000',
            'thumbnail_image' => 'required|mimes:jpeg,jpg,png|max:1000',
            'type' => 'required',
            "category_id" => "required|exists:categories,id",
            "date" => "nullable|date",
        ];

        foreach (config('app.languages') as $key => $lang) {
            $rules["$key.title"] = [
                'required',
                'string',
                Rule::unique("content_translations", "title")->where('locale', $key)->whereNull('deleted_at'),

            ];

            $rules["$key.slug"] = [
                'required',
                'string',
                Rule::unique("content_translations", "slug")->where('locale', $key)->whereNull('deleted_at'),

            ];

            $rules["$key.description"] = ['required', 'string',];

            $rules["$key.meta_keywords"] = ['nullable', 'string'];

            $rules["$key.meta_description"] = ['nullable', 'string',];
        }

        return $rules;
    }

    public function prepareForValidation()
    {
        $this->merge([
            "author" => auth()->user()->name,
        ]);
    }

    public function attributes()
    {
        return RuleFactory::make([
            '%title%' => __('validation.attributes.title'),
            '%slug%' => __('validation.attributes.slug'),
            '%description%' => __('validation.attributes.description'),
        ]);
    }
}
