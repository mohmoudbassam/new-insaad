<?php

namespace App\Http\Requests\Website;

use App\Models\Application;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UniversityRegisterRequest extends FormRequest
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
            "gender"                          => "required|string|in:male,female",
            "semester"                        => "required|string|in:first,second,summer",
            "university_id"                   => "required|exists:universities,id",
            "country_id"                      => "required|exists:countries,id",
            "city_id"                         => "required|exists:cities,id",
            "study_language_id"               => "required|exists:study_languages,id",
            "scientificDegree"                => ["required", Rule::in(Application::SIENTIFICDEGREES)],
            "image"                           => "required|mimes:jpg,jpeg,bmp,png,pdf",
            "passport_photo"                  => "required|mimes:jpg,jpeg,bmp,png,pdf",
            "secondary_education_certificate" => "required_if:scientificDegree,BACHELOR|mimes:jpg,jpeg,bmp,png,pdf",
            "secondary_education_degree"      => "required_if:scientificDegree,BACHELOR|mimes:jpg,jpeg,bmp,png,pdf",

            'Bachelor_degree_photo'           => 'required_if:scientificDegree,MASTER,PHD|mimes:jpg,jpeg,bmp,png,pdf',
            'Bachelor_degree_transcript'      => 'required_if:scientificDegree,MASTER,PHD|mimes:jpg,jpeg,bmp,png,pdf',
            'letter_of_intent'                => 'nullable|mimes:jpg,jpeg,bmp,png,pdf',

            'Master_degree_certificate'       => 'required_if:scientificDegree,PHD|mimes:jpg,jpeg,bmp,png,pdf',
            'Master_degree_transcript'        => 'required_if:scientificDegree,PHD|mimes:jpg,jpeg,bmp,png,pdf',
            'letter_of_recommendation'        => 'nullable|mimes:jpg,jpeg,bmp,png,pdf',
            'letter_of_recommendation2'       => 'nullable|mimes:jpg,jpeg,bmp,png,pdf',
            'toefl_test_certificate'          => 'required_if:scientificDegree,PHD|mimes:jpg,jpeg,bmp,png,pdf',

//            'g-recaptcha-response' => 'required|captcha',

        ];
    }

}
