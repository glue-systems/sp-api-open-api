<?php
/**
 * OtherDeliveryAttributes
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\OrdersV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Orders
 *
 * The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools. The Orders API only supports orders that are less than two years old. Orders more than two years old will not show in the API response.
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

namespace Glue\SpApi\OpenAPI\Clients\OrdersV0\Model;
use \Glue\SpApi\OpenAPI\Clients\OrdersV0\ObjectSerializer;

/**
 * OtherDeliveryAttributes Class Doc Comment
 *
 * @category Class
 * @description Miscellaneous delivery attributes associated with the shipping address.
 * @package  Glue\SpApi\OpenAPI\Clients\OrdersV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OtherDeliveryAttributes
{
    /**
     * Possible values of this enum
     */
    const HAS_ACCESS_POINT = 'HAS_ACCESS_POINT';
    const PALLET_ENABLED = 'PALLET_ENABLED';
    const PALLET_DISABLED = 'PALLET_DISABLED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::HAS_ACCESS_POINT,
            self::PALLET_ENABLED,
            self::PALLET_DISABLED,
        ];
    }
}


