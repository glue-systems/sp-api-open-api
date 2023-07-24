<?php

namespace Glue\SPAPI\OpenAPI\Factory;

class SPAPIConfig
{
    /**
     * @var string
     */
    public $lwaOAuthBaseUrl;

    /**
     * @var string
     */
    public $lwaRefreshToken;

    /**
     * @var string
     */
    public $lwaClientId;

    /**
     * @var string
     */
    public $lwaClientSecret;

    /**
     * @var string
     */
    public $apiBaseUrl;

    /**
     * @var string
     */
    public $appNameAndVersion;

    /**
     * @var string
     */
    public $appLanguageAndVersion;

    /**
     * @var string
     */
    public $awsAccessKeyId;

    /**
     * @var string
     */
    public $awsSecretAccessKey;

    /**
     * @var string
     */
    public $sellerId;

    /**
     * @var string
     */
    public $marketplaceId;

    /**
     * @var bool
     */
    public $debug;

    /**
     * Create a new config object from an associative array.
     * 
     * @param array $data
     * @return SPAPIConfig
     */
    public static function make(array $data)
    {
        $config        = new SPAPIConfig();
        $allowedFields = get_class_vars(self::class);

        foreach ($data as $field => $value) {
            // Validate the array argument matches the prescribed shape of the target config object,
            // to prevent potential introduction of bugs during development.
            static::_validateFieldConstructable($field, $allowedFields);
            $config->{$field} = $value;
        }

        return $config;
    }

    /**
     * @param string $field
     * @param array $allowedFields
     * @return void
     */
    protected static function _validateFieldConstructable($field, array $allowedFields)
    {
        if (!array_key_exists($field, $allowedFields)) {
            $exceptionMessage = "Failed to construct config object from array:"
                . " property '$field' does not exist in class '" . self::class . "'.";
            if (is_numeric($field)) {
                $exceptionMessage .= " Please ensure you are passing in"
                    . " a strictly associative array instead of a sequential one.";
            }
            $exceptionMessage .= " Allowed fields: [" . implode(', ', $allowedFields) . "].";
            throw new \RuntimeException("$exceptionMessage");
        }
    }
}
