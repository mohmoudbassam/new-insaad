<?php

namespace App\Http\Requests\Dashboard;

use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Foundation\Http\FormRequest;

class UpdateAboutUsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->can('update policy');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [];

        foreach (config('app.languages') as $key => $lang) {
            $rules["$key.vision"] = ['required', 'string'];
            $rules["$key.mission"] = ['required', 'string'];
            $rules["$key.description_one"] = ['required', 'string'];
        }

        return $rules;

    }

    public function attributes()
    {
        return RuleFactory::make([
            '%description_one%' => __('about.about us'),
            '%mission%' => __('about.mission'),
            '%vision%' => __('home.Our Vision'),
        ]);
    }

}
