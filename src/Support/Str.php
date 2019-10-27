<?php

namespace Paymongo\Support;

class Str
{
    /**
     * Convert the given string to lower-case.
     *
     * @param  string  $value
     * @return string
     * 
     * Copied from Laravel's Str helper. 
     * @see https://github.com/illuminate/support/blob/master/Str.php#L262
     */
    public static function lower($value)
    {
        return mb_strtolower($value, 'UTF-8');
    }

        /**
     * Convert a string to snake case.
     *
     * @param  string  $value
     * @param  string  $delimiter
     * @return string
     * 
     * Copied from Laravel's Str helper. 
     * @see https://github.com/illuminate/support/blob/master/Str.php#L493
     */
    public static function snake($value, $delimiter = '_')
    {
        $key = $value;

        if (! ctype_lower($value)) {
            $value = preg_replace('/\s+/u', '', ucwords($value));
            $value = static::lower(preg_replace('/(.)(?=[A-Z])/u', '$1'.$delimiter, $value));
        }
        return $value;
    }

    /**
     * Convert a string to kebab case.
     *
     * @param  string  $value
     * @return string
     * 
     * Copied from Laravel's Str helper. 
     * @see https://github.com/illuminate/support/blob/master/Str.php#L218
     */
    public static function kebab($value)
    {
        return static::snake($value, '-');
    }

}