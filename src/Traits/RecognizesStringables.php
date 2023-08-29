<?php

namespace Glue\SpApi\OpenAPI\Traits;

use __PHP_Incomplete_Class;

trait RecognizesStringables
{
    public static function isStringable($value)
    {
        // Expanding on ideas from: https://stackoverflow.com/a/5496674/7797476
        $type = gettype($value);
        if (
            in_array($type, ['array', 'resource', 'resource (closed)', 'unknown type'])
            || $value instanceof __PHP_Incomplete_Class
        ) {
            return false;
        }

        if (is_object($value)) {
            if (method_exists($value, '__toString')) {
                return true;
            }
            return false;
        }

        return settype($value, 'string') !== false;
    }
}
