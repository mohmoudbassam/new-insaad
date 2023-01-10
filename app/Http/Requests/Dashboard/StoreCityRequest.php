<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreCityRequest extends FormRequest
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
        $rules = [
            'address'      => 'required|string',
            'service_area' => 'required|numeric',
            'latitude'     => 'required',
            'longitude'    => 'required',
        ];

        foreach (config('app.languages') as $key => $lang) {
            $rules["$key.name"] = [
                'required', 'string',
                Rule::unique("city_translations", "name")->where('locale', $key)->whereNull('deleted_at'),
            ];
        }

        return $rules;

    }

}
