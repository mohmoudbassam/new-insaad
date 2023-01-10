<?php

namespace App\Http\Requests\Dashboard;

use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePoliciesRequest extends FormRequest
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
            $rules["$key.privacy"] = ['nullable', 'string'];
            $rules["$key.usage"] = ['nullable', 'string'];
            $rules["$key.refund"] = ['nullable', 'string'];
            $rules["$key.agreement"] = ['nullable', 'string'];
        }

        return $rules;

    }

    public function attributes()
    {
        return RuleFactory::make([
            '%privacy%' => __('validation.attributes.privacy'),
            '%usage%' => __('validation.attributes.usage'),
            '%refund%' => __('validation.attributes.refund'),
            '%agreement%' => __('validation.attributes.agreement'),
        ]);
    }

}
