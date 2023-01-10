<?php

namespace App\Http\Requests\Website;

use Illuminate\Foundation\Http\FormRequest;

class ServiceApplicationRequest extends FormRequest
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
            "name"         => "required|string",
            "email"        => "nullable|email",
            "whats_number" => "required|string",
            "address"      => "nullable|string",
            "services"     => "required",
            'g-recaptcha-response' => 'required|captcha',

        ];
    }

}
