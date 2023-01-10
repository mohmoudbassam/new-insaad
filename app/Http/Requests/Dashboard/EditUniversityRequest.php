<?php

namespace App\Http\Requests\Dashboard;

use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class EditUniversityRequest extends FormRequest
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
        $rules = [
            'images.*'                     => 'mimes:jpeg,jpg,png,gif|max:1000',
            'thumbnail_image'              => 'mimes:jpeg,jpg,png,gif|max:1000',
            'foundation_year'              => 'nullable|numeric:4|min:0|max:2155',
            "faculty_count"                => "nullable|numeric|min:0|max:65535",
            "international_rank"           => "nullable|numeric|min:0|max:65535",
            "specialty_count"              => "nullable|numeric|min:0|max:65535",
            "local_rank"                   => "nullable|numeric|min:0|max:65535",
            "students_count"               => "nullable|numeric|min:0|max:16777215",
            "institute_count"              => "nullable|numeric|min:0|max:65535",
            "original_price"               => "nullable|string",
            "price"                        => "nullable|string",
            "address"                      => "required|string",
            "type"                         => "required|string|in:governmental,private",
            "video"                        => "nullable|url",
            "link"                         => "nullable|url",
            "country_id"                   => "required|exists:countries,id",
            "city_id"                      => "required|exists:cities,id",
            "features"                       => 'required|array',
            "features.*.study_years"       => "required_with:features|numeric",
            "features.*.fees_before"        => "required|string",
            "features.*.fees"              => "required:features|string",
            "features.*.thesis"            => "required:features|numeric|in:0,1",
            "features.*.category_id"       => "required:features|exists:categories,id",
            "features.*.study_language_id" => "required:features|exists:study_languages,id",
            "features.*.specialty_id"      => "required:features|exists:specialties,id",

        ];

        foreach (config('app.languages') as $key => $lang) {
            $rules["$key.title"] = [
                'required', 'string',
                Rule::unique("university_translations", "title")
                    ->where('locale', $key)
                    ->whereNull('deleted_at')
                    ->ignore($this->university->id, "university_id"),

            ];

            $rules["$key.slug"] = [
                'required', 'string',
                Rule::unique("university_translations", "slug")
                    ->where('locale', $key)
                    ->whereNull('deleted_at')
                    ->ignore($this->university->id, "university_id"),

            ];

            $rules["$key.description"] = ['required', 'string',];

            $rules["$key.meta_keywords"] = ['nullable', 'string'];

            $rules["$key.meta_description"] = ['nullable', 'string',];
            $rules["$key.study_language"] = ['nullable', 'string',];

        }

        return $rules;

    }


    public function attributes()
    {
        return RuleFactory::make([
            '%title%' => __('validation.attributes.title'),
            '%slug%' => __('validation.attributes.slug'),
            '%description%' => __('validation.attributes.description'),
            '%study_language%' => __('validation.attributes.filter.study_language_id'),
        ]);
    }

}
