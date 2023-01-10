<?php

namespace App\Http\Requests\Dashboard;

use App\Models\Partner;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePartnerRequest extends FormRequest
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
            'title' => 'required|string|unique:partners',
            'link' => 'nullable|url',
            'image' => 'required|image',
            'type' => ['required','string',Rule::in(Partner::ARR_TYPE)]
        ];
    }
}
