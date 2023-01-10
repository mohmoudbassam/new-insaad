<?php

namespace App\Http\Requests\Website;

use App\Rules\Recaptcha;
use Illuminate\Foundation\Http\FormRequest;

class StoreCommentRequest extends FormRequest
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
            'email'   => 'required|email',
            'comment' => 'required|string',
            'g-recaptcha-response' => 'required|captcha',

        ];
    }


}
