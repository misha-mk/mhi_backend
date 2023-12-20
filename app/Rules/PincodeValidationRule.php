<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PincodeValidationRule implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // Use a regular expression to check if the value is a valid PIN code
        return preg_match('/^[0-9]{6}$/', $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute must be a valid PIN code.';
    }
}
