<?php

namespace Glue\SpApi\OpenAPI;

use Glue\SpApi\OpenAPI\Exceptions\SpApiConfigurationException;

class SpApiConfig
{
    /**
     * @var string
     */
    public $defaultBaseUrl;

    /**
     * @var string
     */
    public $defaultMarketplaceId;

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
    public $lwaAccessTokenCacheKey = 'lwa_access_token';

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
    public $domainApiCallDebug = false;

    /**
     * @var bool
     */
    public $oAuthApiCallDebug = false;

    /**
     * Note that, if set to true and the ApiException's response body is a stream,
     * it is possible that it can only be unpacked once for that object before the
     * internal stream handle becomes detached. If you have no need to automate
     * the parsing and handling of ApiExceptions in any domain, then set this
     * value to true.
     *
     * @var bool
     */
    public $alwaysStringifyApiExceptionResponseBody = false;

    /**
     * Create a new config object from an associative array.
     *
     * @param array $data
     * @return SpApiConfig
     */
    public static function make(array $data)
    {
        $config        = new SpApiConfig();
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
                . " property '{$field}' does not exist in class '" . self::class . "'.";
            if (is_numeric($field)) {
                $exceptionMessage .= " Please ensure you are passing in"
                    . " a strictly associative array instead of a sequential one.";
            }
            $exceptionMessage .= " Allowed fields: [" . implode(', ', $allowedFields) . "].";
            throw new SpApiConfigurationException($exceptionMessage);
        }
    }

    public function validateConfig()
    {
        $requiredStringFields = [
            'defaultBaseUrl',
            'sellerId',
            'lwaOAuthBaseUrl',
            'lwaRefreshToken',
            'lwaClientId',
            'lwaClientSecret',
            'appNameAndVersion',
            'appLanguageAndVersion',
        ];

        foreach ($requiredStringFields as $field) {
            if (empty($this->{$field})) {
                throw new SpApiConfigurationException("Missing required string field '{$field}' in [" . self::class . '].'
                    . ' Please verify the config object is being instantiated properly'
                    . ' -- e.g. by checking your environment variables.');
            }
        }

        $requiredBoolFields = [
            'sandbox',
        ];

        foreach ($requiredBoolFields as $field) {
            if (!isset($this->{$field})) {
                throw new SpApiConfigurationException("Missing required bool field '{$field}' in [" . self::class . '].'
                    . ' Please verify the config object is being instantiated properly'
                    . ' -- e.g. by checking your environment variables.');
            }
        }

        if ($this->sandbox && strpos(strtolower($this->defaultBaseUrl), 'sandbox') === false) {
            throw new SpApiConfigurationException("Production URL detected! Invalid defaultBaseUrl '{$this->defaultBaseUrl}'"
                . " when sandbox = true. Please use the sandbox URL and associated credentials instead."
                . " For more info, see the Amazon docs: https://developer-docs.amazon.com/amazon-shipping/docs/the-selling-partner-api-sandbox.");
        }
    }

    /**
     * @return string
     */
    public function userAgent()
    {
        return "{$this->appNameAndVersion} (Language={$this->appLanguageAndVersion})";
    }
}
