<?php

namespace Glue\SpApi\OpenAPI\Traits;

trait RecognizesStringables
{
    public static function isStringable($value)
    {
        // Idea from: https://stackoverflow.com/a/5496674/7797476
        if (!is_array($value)) {
            if (!is_object($value) && settype($value, 'string') !== false) {
                return true;
            }
            if (is_object($value) && method_exists($value, '__toString')) {
                return true;
            }
        }
        return false;
    }
}
