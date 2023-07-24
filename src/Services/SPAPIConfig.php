<?php

namespace Glue\SPAPI\OpenAPI\Services;

class SPAPIConfig
{
    /**
     * @var string
     */
    public $spApiBaseUrl;

    /**
     * @var string
     */
    public $marketplaceId;

    /**
     * @var string
     */
    public $sellerId;

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
    public $awsAccessKeyId;

    /**
     * @var string
     */
    public $awsSecretAccessKey;

    /**
     * @var string
     */
    public $appNameAndVersion;

    /**
     * @var string
     */
    public $appLanguageAndVersion;

    /**
     * @var bool
     */
    public $sandbox;

    /**
     * @var bool
     */
    public $debug = false;

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
            static::validateFieldConstructable($field, $allowedFields);
            $config->{$field} = $value;
        }

        return $config;
    }

    /**
     * @param string $field
     * @param array $allowedFields
     * @return void
     */
    public static function validateFieldConstructable($field, array $allowedFields)
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

    public function validateConfig()
    {
        $requiredStringFields = [
            'spApiBaseUrl',
            'marketplaceId',
            'sellerId',
            'lwaOAuthBaseUrl',
            'lwaRefreshToken',
            'lwaClientId',
            'lwaClientSecret',
            'awsAccessKeyId',
            'awsSecretAccessKey',
            'appNameAndVersion',
            'appLanguageAndVersion',
        ];

        foreach ($requiredStringFields as $field) {
            if (empty($this->{$field})) {
                throw new \RuntimeException("Missing required string field '$field' in [" . self::class . '].'
                    . ' Please check your env for missing values and verify the object is being instantiated properly.');
            }
        }

        $requiredBoolFields = [
            'sandbox',
        ];

        foreach ($requiredBoolFields as $field) {
            if (!isset($this->{$field})) {
                throw new \RuntimeException("Missing required bool field '$field' in [" . self::class . '].'
                    . ' Please check your env for missing values and verify the object is being instantiated properly.');
            }
        }

        if ($this->sandbox && !str_contains(strtolower($this->spApiBaseUrl), 'sandbox')) {
            throw new \RuntimeException("Production URL detected! Invalid spApiBaseUrl '$this->spApiBaseUrl' when sandbox = true."
                . " Please adjust your ENV to use the sandbox URL and associated credentials instead."
                . " For more info, see the Amazon docs: https://developer-docs.amazon.com/amazon-shipping/docs/the-selling-partner-api-sandbox.");
        }
    }

    /**
     * @return string
     */
    public function userAgent()
    {
        return "$this->appNameAndVersion (Language=$this->appLanguageAndVersion)";
    }
}
