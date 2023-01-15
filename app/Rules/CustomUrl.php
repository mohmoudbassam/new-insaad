<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Str;

class CustomUrl implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
     dd(preg_match("^(?:\S+:\/\/)?[^\/]+\/?$",$value));


        $url = strpos($value, 'http') !== 0 ? "http://$value" : $value;
        dd(filter_var($url, FILTER_VALIDATE_URL));
       return filter_var($url, FILTER_VALIDATE_URL);

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {

        return 'Pleas Enter a valid URL';
    }
}
