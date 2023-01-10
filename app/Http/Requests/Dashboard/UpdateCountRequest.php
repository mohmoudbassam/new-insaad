<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCountRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->can('update count');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            "count" => "nullable|numeric",
            'image' => 'nullable|image',

        ];

        foreach (config('app.languages') as $key => $lang) {
            $rules["$key.name"] = [
                'required',
                'string',
                 Rule::unique("count_translations", "name")->where('locale', $key)
                     ->ignore($this->route('count')->id, "count_id"),
            ];
            $rules["$key.item"] = [
                'required', 'string'
            ];
        }

        return $rules;
    }

}
