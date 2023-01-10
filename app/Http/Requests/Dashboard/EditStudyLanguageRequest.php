<?php

namespace App\Http\Requests\Dashboard;

use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EditStudyLanguageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->can('update university');
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
            $rules["$key.name"] = [
                'required',
                'string',
                Rule::unique('study_language_translations', "name")
                    ->where('locale', $key)
                    ->ignore($this->study_language->id, "study_language_id")
            ];
        }

        return $rules;


    }

    public function attributes()
    {
        return RuleFactory::make([
            '%name%' => __('validation.attributes.name'),
        ]);
    }

}
