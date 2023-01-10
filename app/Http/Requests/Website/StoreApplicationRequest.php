<?php

namespace App\Http\Requests\Website;

use App\Rules\Recaptcha;
use Illuminate\Foundation\Http\FormRequest;

class StoreApplicationRequest extends FormRequest
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
            "full_name"                 => "required|string",
            "company_name"                 => "required|string",
            "email"                => "nullable|email",
            "phone"                => "required|string",
            "online_store_platform"                => "required|string",
            "online_store_url"                => "required|url",
            "count_orders"                => "required|integer",
            "count_orders_ads"             => "required|integer",
            "message"             => "nullable|string",
//            'g-recaptcha-response' => ['required', 'string', new Recaptcha()],

        ];
    }


}
