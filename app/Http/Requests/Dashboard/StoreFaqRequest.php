<?php

namespace App\Http\Requests\Dashboard;

use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Foundation\Http\FormRequest;

class StoreFaqRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->can('create faq');
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
            $rules["$key.question"] = ['required', 'string'];
            $rules["$key.answer"] = ['required', 'string'];
        }

        return $rules;

    }

    public function attributes()
    {
        return RuleFactory::make([
            '%question%' => __('validation.attributes.question'),
            '%answer%' => __('validation.attributes.answer'),
        ]);
    }

}
