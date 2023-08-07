<?php
/**
 * EasyShipShipmentStatus
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
 * EasyShipShipmentStatus Class Doc Comment
 *
 * @category Class
 * @description The status of the Amazon Easy Ship order. This property is included only for Amazon Easy Ship orders.
 * @package  Glue\SpApi\OpenAPI\Clients\OrdersV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EasyShipShipmentStatus
{
    /**
     * Possible values of this enum
     */
    const PENDING_SCHEDULE = 'PendingSchedule';
    const PENDING_PICK_UP = 'PendingPickUp';
    const PENDING_DROP_OFF = 'PendingDropOff';
    const LABEL_CANCELED = 'LabelCanceled';
    const PICKED_UP = 'PickedUp';
    const DROPPED_OFF = 'DroppedOff';
    const AT_ORIGIN_FC = 'AtOriginFC';
    const AT_DESTINATION_FC = 'AtDestinationFC';
    const DELIVERED = 'Delivered';
    const REJECTED_BY_BUYER = 'RejectedByBuyer';
    const UNDELIVERABLE = 'Undeliverable';
    const RETURNING_TO_SELLER = 'ReturningToSeller';
    const RETURNED_TO_SELLER = 'ReturnedToSeller';
    const LOST = 'Lost';
    const OUT_FOR_DELIVERY = 'OutForDelivery';
    const DAMAGED = 'Damaged';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PENDING_SCHEDULE,
            self::PENDING_PICK_UP,
            self::PENDING_DROP_OFF,
            self::LABEL_CANCELED,
            self::PICKED_UP,
            self::DROPPED_OFF,
            self::AT_ORIGIN_FC,
            self::AT_DESTINATION_FC,
            self::DELIVERED,
            self::REJECTED_BY_BUYER,
            self::UNDELIVERABLE,
            self::RETURNING_TO_SELLER,
            self::RETURNED_TO_SELLER,
            self::LOST,
            self::OUT_FOR_DELIVERY,
            self::DAMAGED,
        ];
    }
}


