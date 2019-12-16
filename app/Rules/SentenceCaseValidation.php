<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Str;

class SentenceCaseValidation implements Rule
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
        // Convert $value to sentence case first
        $converted = Str::title($value);
        // Validate if $value matches $converted (sentence case) value
        return Str::is($converted.'*', $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return ':attribute should be in sentence case, such as Bruce Thomas Wayne.';
    }
}
