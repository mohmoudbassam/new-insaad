<?php

namespace App\Http\Requests\Website;

use Illuminate\Foundation\Http\FormRequest;

class BeAgentRequest extends FormRequest
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
            'g-recaptcha-response' => 'required|captcha',
            "email"                => "required|email",
            "phone"                => "required|string",
            "website"              => "required|url",
            "whats_number"         => "required|string",
            "address"              => "required|string",
        ];
    }

}
