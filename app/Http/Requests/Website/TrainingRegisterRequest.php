<?php

namespace App\Http\Requests\Website;

use Illuminate\Foundation\Http\FormRequest;

class TrainingRegisterRequest extends FormRequest
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
            "name"                 => "required|string",
//            "title"                => "required|string",
            "phone"                => "required|string",
            "age"                  => "required|integer",
            "gender"               => "required|in:MALE,FEMALE",
//            "educational_level"    => "required|string",
            "whats_number"         => "required|string",
            "nationality"          => "required",
            "country_id"           => "required",
            'g-recaptcha-response' => 'required|captcha',

        ];
    }

}
