<?php

namespace Glue\SpApi\OpenAPI\Traits;

use Psr\Http\Message\StreamInterface;

trait UnpacksResponseBodyAsString
{
    use RecognizesStringables;

    /**
     * Unpack an HTTP response body as a string, or empty if not unpackable.
     *
     * @param mixed $body
     * @return string
     */
    public static function unpackResponseBodyAsString($body)
    {
        if ($body instanceof StreamInterface) {
            $contents = $body->getContents();
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
