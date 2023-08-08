<?php
/**
 * InvalidItemReasonCode
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner APIs for Fulfillment Outbound
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * OpenAPI spec version: 2020-07-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model;
use \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\ObjectSerializer;

/**
 * InvalidItemReasonCode Class Doc Comment
 *
 * @category Class
 * @description A code for why the item is invalid for return.
 * @package  Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InvalidItemReasonCode
{
    /**
     * Possible values of this enum
     */
    const INVALID_VALUES = 'InvalidValues';
    const DUPLICATE_REQUEST = 'DuplicateRequest';
    const NO_COMPLETED_SHIP_ITEMS = 'NoCompletedShipItems';
    const NO_RETURNABLE_QUANTITY = 'NoReturnableQuantity';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INVALID_VALUES,
            self::DUPLICATE_REQUEST,
            self::NO_COMPLETED_SHIP_ITEMS,
            self::NO_RETURNABLE_QUANTITY,
        ];
    }
}

