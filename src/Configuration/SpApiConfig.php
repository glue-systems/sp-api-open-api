<?php

namespace Glue\SpApi\OpenAPI\Configuration;

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
    public $defaultSellerId;

    /**
     * AWS 'service' component of the credential scope used in Signature V4 request authentication.
     * See SP-API documentation for more info:
     * https://developer-docs.amazon.com/sp-api/docs/connecting-to-the-selling-partner-api#credential-scope
     *
     * @var string
     */
    public $defaultAwsCredentialScopeService = 'execute-api';

    /**
     * AWS 'region' component of the credential scope used in Signature V4 request authentication.
     * See SP-API documentation for more info:
     * https://developer-docs.amazon.com/sp-api/docs/connecting-to-the-selling-partner-api#credential-scope
     *
     * @var string
     */
    public $defaultAwsCredentialScopeRegion;

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
    public $alwaysUnpackApiExceptionResponseBody = false;

    public function __construct(array $data)
    {
        $allowedFields = get_class_vars(static::class);

        foreach ($data as $field => $value) {
            static::validateFieldConstructable($field, $allowedFields);
            $this->{$field} = $value;
        }

        $this->validateConfig();
    }

    /**
     * Create a new config object from an associative array.
     *
     * @param array $data
     * @return SpApiConfig
     */
    public static function make(array $data)
    {
        return new SpApiConfig($data);
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
                . " property '{$field}' does not exist in class '" . static::class . "'.";
            if (is_numeric($field)) {
                $exceptionMessage .= " Please ensure you are passing in a strictly"
                    . " associative array as the data argument instead of a sequential one.";
            }
            $exceptionMessage .= " Allowed fields: [" . implode(', ', $allowedFields) . "].";
            throw new SpApiConfigurationException($exceptionMessage);
        }
    }

    public function validateRequiredFieldsArePresent()
    {
        foreach ($this->getRequiredFields() as $field) {
            if (!isset($this->{$field}) || $this->{$field} === '') {
                throw new SpApiConfigurationException("Missing required field '{$field}'"
                    . " in [" . static::class . ']. Please verify that this object'
                    . " is being instantiated properly -- e.g. by checking your"
                    . " environment variables.");
            }
        }
    }

    public function validateStringFieldsAreStrings()
    {
        foreach ($this->getStringFields() as $field) {
            if (isset($this->{$field}) && !is_string($this->{$field})) {
                throw new SpApiConfigurationException("Field '{$field}' must be a string"
                    . " in [" . static::class . "]. Please verify that this object"
                    . " is being instantiated properly -- e.g. by checking your"
                    . " environment variables.");
            }
        }
    }

    public function validateBooleanFieldsAreBooleans()
    {
        foreach ($this->getBooleanFields() as $field) {
            if (isset($this->{$field}) && !is_bool($this->{$field})) {
                throw new SpApiConfigurationException("Field '{$field}' must be a boolean"
                    . " in [" . static::class . "]. Please verify that this object"
                    . " is being instantiated properly -- e.g. by checking your"
                    . " environment variables.");
            }
        }
    }

    /**
     * @return void
     * @throws SpApiConfigurationException
     */
    public function validateConfig()
    {
        $this->validateRequiredFieldsArePresent();

        $this->validateStringFieldsAreStrings();

        $this->validateBooleanFieldsAreBooleans();

        if ($this->sandbox && strpos(strtolower($this->defaultBaseUrl), 'sandbox') === false) {
            throw new SpApiConfigurationException("Production URL detected! Invalid defaultBaseUrl"
                . " value '{$this->defaultBaseUrl}' when sandbox = true. Please use the sandbox URL"
                . " and associated credentials instead. For more info, see the SP-API docs:"
                . " https://developer-docs.amazon.com/amazon-shipping/docs/the-selling-partner-api-sandbox");
        }
    }

    /**
     * @return string
     */
    public function userAgent()
    {
        return "{$this->appNameAndVersion} (Language={$this->appLanguageAndVersion})";
    }

    /**
     * @return array
     */
    public static function getRequiredFields()
    {
        return [
            'defaultBaseUrl',
            'defaultAwsCredentialScopeRegion',
            'defaultAwsCredentialScopeService',
            'lwaOAuthBaseUrl',
            'lwaRefreshToken',
            'lwaClientId',
            'lwaClientSecret',
            'lwaAccessTokenCacheKey',
            'appNameAndVersion',
            'appLanguageAndVersion',
            'sandbox',
            'domainApiCallDebug',
            'oAuthApiCallDebug',
            'alwaysUnpackApiExceptionResponseBody',
        ];
    }

    /**
     * @return array
     */
    public static function getStringFields()
    {
        return [
            'defaultBaseUrl',
            'defaultMarketplaceId',
            'defaultSellerId',
            'defaultAwsCredentialScopeRegion',
            'defaultAwsCredentialScopeService',
            'lwaOAuthBaseUrl',
            'lwaRefreshToken',
            'lwaClientId',
            'lwaClientSecret',
            'lwaAccessTokenCacheKey',
            'appNameAndVersion',
            'appLanguageAndVersion',
        ];
    }

    /**
     * @return array
     */
    public static function getBooleanFields()
    {
        return [
            'sandbox',
            'domainApiCallDebug',
            'oAuthApiCallDebug',
            'alwaysUnpackApiExceptionResponseBody',
        ];
    }
}
