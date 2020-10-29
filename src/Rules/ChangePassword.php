<?php

namespace Shopper\Framework\Rules;

use Illuminate\Contracts\Validation\Rule;

class ChangePassword implements Rule
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
        $uppercase = preg_match('@[A-Z]@', $value);
        $lowercase = preg_match('@[a-z]@', $value);
        $number = preg_match('@\d@', $value);

        return $uppercase && $lowercase && $number && \strlen($value) >= 8;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('Your password does not match the conditions requested!');
    }
}
