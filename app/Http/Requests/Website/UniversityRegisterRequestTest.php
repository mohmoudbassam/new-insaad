<?php

namespace App\Http\Requests\Website;

use App\Models\Application;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UniversityRegisterRequestTest extends FormRequest
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
            "personal.name"                            => "required|string|max:255",
            "personal.mother_name"                     => "required|string|max:255",
            "personal.dad_name"                        => "required|string|max:255",
            "personal.email"                           => "required|email|max:255",
            "personal.passport_number"                 => "required|string|max:255",
            "personal.phone"                           => "required|string|max:255",
            "personal.whats_number"                    => "required|string|max:255",
            "personal.birthday"                        => "required|date|before:today|max:255",
            "personal.gender"                          => "required|string|in:male,female",
            "personal.country_id"                      => "required|exists:countries,id",
            "personal.city_id"                         => "required|exists:cities,id",

            "specialty.first_desire"                    => "required|string|max:255",
            "specialty.second_desire"                   => "required|string|max:255",
            "specialty.semester"                        => "required|string|in:first,second,summer",
            "specialty.university_id"                   => "required|exists:universities,id",
            "specialty.study_language_id"               => "required|exists:study_languages,id",
            "specialty.scientificDegree"                => ["required", Rule::in(Application::SIENTIFICDEGREES)],
            "files.image"                           => "required|mimes:jpg,jpeg,bmp,png,pdf",
            "files.passport_photo"                  => "required|mimes:jpg,jpeg,bmp,png,pdf",
            "files.secondary_education_certificate" => "required_if:scientificDegree,BACHELOR_TYPE|mimes:jpg,jpeg,bmp,png,pdf",
            "files.secondary_education_degree"      => "required_if:scientificDegree,BACHELOR_TYPE|mimes:jpg,jpeg,bmp,png,pdf",

            'files.Bachelor_degree_photo'           => 'required_if:scientificDegree,MASTER,PHD|mimes:jpg,jpeg,bmp,png,pdf',
            'files.Bachelor_degree_transcript'      => 'required_if:scientificDegree,MASTER,PHD|mimes:jpg,jpeg,bmp,png,pdf',
            'files.letter_of_intent'                => 'nullable|mimes:jpg,jpeg,bmp,png,pdf',

            'files.Master_degree_certificate'       => 'required_if:scientificDegree,PHD|mimes:jpg,jpeg,bmp,png,pdf',
            'files.Master_degree_transcript'        => 'required_if:scientificDegree,PHD|mimes:jpg,jpeg,bmp,png,pdf',
            'files.letter_of_recommendation'        => 'nullable|mimes:jpg,jpeg,bmp,png,pdf',
            'files.letter_of_recommendation2'       => 'nullable|mimes:jpg,jpeg,bmp,png,pdf',
            'files.toefl_test_certificate'          => 'required_if:scientificDegree,PHD|mimes:jpg,jpeg,bmp,png,pdf',

//            'g-recaptcha-response' => 'required|captcha',

        ];
    }

}
