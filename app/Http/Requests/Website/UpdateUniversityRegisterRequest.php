<?php

namespace App\Http\Requests\Website;

use App\Models\Application;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUniversityRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->application->user_id == auth()->user()->id;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name"                            => "required|string|max:255",
            "mother_name"                     => "required|string|max:255",
            "dad_name"                        => "required|string|max:255",
            "email"                           => "required|email|max:255",
            "passport_number"                 => "required|string|max:255",
            "phone"                           => "required|string|max:255",
            "whats_number"                    => "required|string|max:255",
            "birthday"                        => "required|date|before:today|max:255",
            "first_desire"                    => "required|string|max:255",
            "second_desire"                   => "required|string|max:255",
            "gender"                          => "required|string|in:MALE,FEMALE",
            "semester"                        => "required|string|in:first,second,summer",
            "university_id"                   => "required|exists:universities,id",
            "country_id"                      => "required|exists:countries,id",
            "city_id"                         => "required|exists:cities,id",
            "study_language_id"               => "required|exists:study_languages,id",
            "scientificDegree"                => ["nullable", Rule::in(Application::SIENTIFICDEGREES)],
            "image"                           => "nullable|mimes:jpg,jpeg,bmp,png,pdf",
            "passport_photo"                  => "nullable|mimes:jpg,jpeg,bmp,png,pdf",
            "secondary_education_certificate" => "nullable|mimes:jpg,jpeg,bmp,png,pdf",
            "secondary_education_degree"      => "nullable|mimes:jpg,jpeg,bmp,png,pdf",

            'Bachelor_degree_photo'           => 'nullable|mimes:jpg,jpeg,bmp,png,pdf',
            'Bachelor_degree_transcript'      => 'nullable|mimes:jpg,jpeg,bmp,png,pdf',
            'letter_of_intent'                => 'nullable|mimes:jpg,jpeg,bmp,png,pdf',

            'Master_degree_certificate'       => 'nullable|mimes:jpg,jpeg,bmp,png,pdf',
            'Master_degree_transcript'        => 'nullable|mimes:jpg,jpeg,bmp,png,pdf',
            'letter_of_recommendation'        => 'nullable|mimes:jpg,jpeg,bmp,png,pdf',
            'letter_of_recommendation2'       => 'nullable|mimes:jpg,jpeg,bmp,png,pdf',
            'toefl_test_certificate'          => 'nullable|mimes:jpg,jpeg,bmp,png,pdf',

//            'g-recaptcha-response' => 'required|captcha',

        ];
    }

}
