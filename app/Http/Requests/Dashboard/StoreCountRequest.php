<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreCountRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->can('create count');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        $rules = [
            'count' => 'required|numeric',
            'image' => 'required|image',
        ];
        foreach (config('app.languages') as $key => $lang) {
            $rules["$key.name"] = [
                'required', 'string',
                Rule::unique("count_translations", "name")
                    ->where('locale', $key)

            ];
            $rules["$key.item"] = [
                'required', 'string'
            ];
        }

        return $rules;

    }

}
