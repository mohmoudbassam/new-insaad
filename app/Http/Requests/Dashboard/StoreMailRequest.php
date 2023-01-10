<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class StoreMailRequest extends FormRequest
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
            "name"    => "required|string",
            "email"   => "required|email",
            "phone"   => "required|string",
            "subject" => "nullable|string",
            "message" => "required|string",
            'g-recaptcha-response' => 'required|captcha',
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            "sent_by" => optional(auth()->user())->name,
        ]);
    }

}
