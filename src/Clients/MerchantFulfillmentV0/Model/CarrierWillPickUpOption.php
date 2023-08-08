<?php
/**
 * CarrierWillPickUpOption
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Merchant Fulfillment
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
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

namespace Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Model;
use \Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\ObjectSerializer;

/**
 * CarrierWillPickUpOption Class Doc Comment
 *
 * @category Class
 * @description Carrier will pick up option.
 * @package  Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CarrierWillPickUpOption
{
    /**
     * Possible values of this enum
     */
    const CARRIER_WILL_PICK_UP = 'CarrierWillPickUp';
    const SHIPPER_WILL_DROP_OFF = 'ShipperWillDropOff';
    const NO_PREFERENCE = 'NoPreference';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CARRIER_WILL_PICK_UP,
            self::SHIPPER_WILL_DROP_OFF,
            self::NO_PREFERENCE,
        ];
    }
}


