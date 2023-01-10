<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EditClientRequest extends FormRequest
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
            "name" => ["required",  "max:141", Rule::unique("clients", "name")->ignore($this->client->id, "id")],
            'ar.testimonial' =>'max:255',
            'en.testimonial' =>'max:255',
            "image" => "sometimes", "image"
        ];
    }

}
