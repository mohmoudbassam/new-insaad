<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Astrotomic\Translatable\Validation\RuleFactory;

class EditServiceRequest extends FormRequest
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
            'image' => 'nullable|mimes:jpeg,jpg,png,gif|max:1000',
            'icon' => 'nullable|mimes:jpeg,jpg,png,gif|max:1000',

        ];

        foreach (config('app.languages') as $key => $lang) {
            $rules["$key.title"] = [
                'required', 'string',
                Rule::unique("service_translations", "title")
                    ->where('locale', $key)
                    ->whereNull('deleted_at')->ignore($this->service->id, 'service_id'),

            ];
            $rules["$key.slug"] = [
                'required', 'string',
                Rule::unique("service_translations", "slug")
                    ->where('locale', $key)
                    ->whereNull('deleted_at')->ignore($this->service->id, 'service_id'),

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
