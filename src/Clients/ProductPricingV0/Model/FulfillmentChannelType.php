<?php
/**
 * FulfillmentChannelType
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\ProductPricingV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Pricing
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
 *
 * OpenAPI spec version: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Glue\SpApi\OpenAPI\Clients\ProductPricingV0\Model;
use \Glue\SpApi\OpenAPI\Clients\ProductPricingV0\ObjectSerializer;

/**
 * FulfillmentChannelType Class Doc Comment
 *
 * @category Class
 * @description Indicates whether the item is fulfilled by Amazon or by the seller (merchant).
 * @package  Glue\SpApi\OpenAPI\Clients\ProductPricingV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FulfillmentChannelType
{
    /**
     * Possible values of this enum
     */
    const AMAZON = 'Amazon';
    const MERCHANT = 'Merchant';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AMAZON,
            self::MERCHANT,
        ];
    }
}


