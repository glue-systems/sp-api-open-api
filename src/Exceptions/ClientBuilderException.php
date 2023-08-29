<?php

namespace Glue\SpApi\OpenAPI\Exceptions;

use Exception;

class ClientBuilderException extends Exception
{
    /**
     * @param string $message
     * @param int $code
     * @param Exception|null $previous
     */
    public function __construct($message = '', $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
