<?php

namespace App\Http\Requests\Dashboard;

use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreSpecialtiesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->can('create university');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            "category_id"     => "required|exists:categories,id",
            'image'           => 'required|image|mimes:jpeg,jpg,png,gif|max:2000',
        ];

        foreach (config('app.languages') as $key => $lang) {
            $rules["$key.name"] = [
                'required', 'string',
                Rule::unique("specialty_translations", "name")->where('locale', $key)->whereNull('deleted_at')

            ];

            $rules["$key.description"] = ['required', 'string',];

        }

        return $rules;

    }

    public function attributes()
    {
        return RuleFactory::make([
            '%name%' => __('validation.attributes.name'),
            '%description%' => __('validation.attributes.description'),
        ]);
    }

}
