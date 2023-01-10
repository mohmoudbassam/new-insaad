<?php

namespace App\Http\Requests\Dashboard;

use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class EditContentRequest extends FormRequest
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
            'type' => 'required',
            "category_id" => "required|exists:categories,id",
            "image" => "nullable|image",
            'thumbnail_image' => 'nullable|mimes:jpeg,jpg,png|max:1000',
            "date" => "nullable|date",

        ];

        foreach (config('app.languages') as $key => $lang) {
            $rules["$key.title"] = [
                'required',
                'string',
                Rule::unique('content_translations', "title")
                    ->where('locale', $key)
                    ->ignore($this->route('content')->id, "content_id"),
            ];

            $rules["$key.slug"] = [
                'required',
                'string',
                Rule::unique('content_translations', "slug")
                    ->where('locale', $key)
                    ->ignore($this->route('content')->id, "content_id"),
            ];
            $rules["$key.description"] = ['required', 'string'];

            $rules["$key.meta_keywords"] = ['nullable', 'string'];

            $rules["$key.meta_description"] = ['nullable', 'string',];
        }

        return $rules;
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
