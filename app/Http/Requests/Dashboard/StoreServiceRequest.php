<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Astrotomic\Translatable\Validation\RuleFactory;

class StoreServiceRequest extends FormRequest
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
        $rules = [
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:1000',
            'icon' => 'required|mimes:jpeg,jpg,png,gif|max:1000',
//            'order' => 'required|numeric|unique:services',
        ];

        foreach (config('app.languages') as $key => $lang) {
            $rules["$key.title"] = [
                'required', 'string',
                Rule::unique("service_translations", "title")
                    ->where('locale', $key)
                    ->whereNull('deleted_at'),

            ];
            $rules["$key.slug"] = [
                'required', 'string',
                Rule::unique("service_translations", "slug")
                    ->where('locale', $key)
                    ->whereNull('deleted_at'),

            ];


            $rules["$key.description"] = ['required', 'string',];
        }

        return $rules;
    }

    public function attributes()
    {
        return RuleFactory::make([
            '%title%'       => __('validation.attributes.title'),
            '%description%' => __('validation.attributes.description'),
            'image'         => __('validation.attributes.image'),
            'order'         => __('validation.attributes.order'),
        ]);
    }
}
