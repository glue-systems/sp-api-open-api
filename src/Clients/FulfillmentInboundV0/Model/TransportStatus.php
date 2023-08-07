<?php
/**
 * TransportStatus
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Fulfillment Inbound
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
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

namespace Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model;
use \Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\ObjectSerializer;

/**
 * TransportStatus Class Doc Comment
 *
 * @category Class
 * @description Indicates the status of the Amazon-partnered carrier shipment.
 * @package  Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TransportStatus
{
    /**
     * Possible values of this enum
     */
    const WORKING = 'WORKING';
    const ESTIMATING = 'ESTIMATING';
    const ESTIMATED = 'ESTIMATED';
    const ERROR_ON_ESTIMATING = 'ERROR_ON_ESTIMATING';
    const CONFIRMING = 'CONFIRMING';
    const CONFIRMED = 'CONFIRMED';
    const ERROR_ON_CONFIRMING = 'ERROR_ON_CONFIRMING';
    const VOIDING = 'VOIDING';
    const VOIDED = 'VOIDED';
    const ERROR_IN_VOIDING = 'ERROR_IN_VOIDING';
    const ERROR = 'ERROR';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::WORKING,
            self::ESTIMATING,
            self::ESTIMATED,
            self::ERROR_ON_ESTIMATING,
            self::CONFIRMING,
            self::CONFIRMED,
            self::ERROR_ON_CONFIRMING,
            self::VOIDING,
            self::VOIDED,
            self::ERROR_IN_VOIDING,
            self::ERROR,
        ];
    }
}

