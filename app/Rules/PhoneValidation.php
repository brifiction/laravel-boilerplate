<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PhoneValidation implements Rule
{

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // $this->validate($request, ['phone' => new PhoneValidation]);
        // --OR--
        // $rules = [
        //    'phone' => ['required', new PhoneValidation(), ...],
        // ];
        $pattern = '/^(?:\+?(61))? ?(?:\((?=.*\)))?(0?[2-57-8])\)? ?(\d\d(?:[- ](?=\d{3})|(?!\d\d[- ]?\d[- ]))\d\d[- ]?\d[- ]?\d{3})$/';
        return preg_match($pattern, $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return ':attribute should be a valid Australian phone number';
    }
}
