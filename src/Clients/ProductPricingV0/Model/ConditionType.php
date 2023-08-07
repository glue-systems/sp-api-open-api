<?php
/**
 * ConditionType
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
 * ConditionType Class Doc Comment
 *
 * @category Class
 * @description Indicates the condition of the item. Possible values: New, Used, Collectible, Refurbished, Club.
 * @package  Glue\SpApi\OpenAPI\Clients\ProductPricingV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ConditionType
{
    /**
     * Possible values of this enum
     */
    const _NEW = 'New';
    const USED = 'Used';
    const COLLECTIBLE = 'Collectible';
    const REFURBISHED = 'Refurbished';
    const CLUB = 'Club';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_NEW,
            self::USED,
            self::COLLECTIBLE,
            self::REFURBISHED,
            self::CLUB,
        ];
    }
}


