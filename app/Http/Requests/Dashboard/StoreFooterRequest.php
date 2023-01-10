<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreFooterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->can('create footer');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        $rules = [
            'link' => 'required|string'
        ];
        foreach (config('app.languages') as $key => $lang) {
            $rules["$key.name"] = [
                'required', 'string',
                Rule::unique("footer_translations", "name")
                    ->where('locale', $key)

            ];
        }

        return $rules;

    }

}
