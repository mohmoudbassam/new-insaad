<?php

namespace App\Http\Requests\Dashboard;

use App\Models\Application;
use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Foundation\Http\FormRequest;

class EditApplicationRequest extends FormRequest
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
            'status' => 'string',
            'initial_acceptance' => 'required_if:status,'.Application::STATUS_OFFER_LETTER.'|mimes:jpg,jpeg,bmp,png,pdf',
            'final_acceptance' => 'required_if:status,'.Application::STATUS_FINAL_ACCEPTED.'|mimes:jpg,jpeg,bmp,png,pdf'
        ];
    }
    public function attributes()
    {
        return RuleFactory::make([
            'status' => __('application.status.status'),
            'initial_acceptance' => __('application.Initial Acceptance'),
            'final_acceptance' => __('application.Final Acceptance'),
        ]);
    }
}
