<?php

namespace App\Http\Requests\Website;

use Illuminate\Foundation\Http\FormRequest;

class SearchUniversitiesRequest extends FormRequest
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
        return [
            'country_id' => "nullable|exists:countries,id",
            'city_id' => "nullable|exists:cities,id",
            'study_language_id'=>"nullable|exists:study_languages,id",
            'category_id' => "nullable|exists:categories,id",
            'specialty_id' => "nullable|exists:specialties,id",
        ];
    }
}
