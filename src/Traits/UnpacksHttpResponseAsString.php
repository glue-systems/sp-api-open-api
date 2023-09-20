<?php

namespace Glue\SpApi\OpenAPI\Traits;

use Psr\Http\Message\ResponseInterface;

trait UnpacksHttpResponseAsString
{
    use RecognizesStringables;

    /**
     * Unpack an HTTP response as a string, or empty if not stringable.
     *
     * @param mixed $body
     * @return string
     */
    public static function unpackHttpResponseAsString($body)
    {
        if ($body instanceof ResponseInterface) {
            $contents = $body->getBody()->getContents();
        } elseif (static::isStringable($body)) {
            $contents = (string) $body;
        } elseif ($json = json_encode($body)) {
            $contents = $json;
        } else {
            $contents = '';
        }

        return $contents;
    }
}
