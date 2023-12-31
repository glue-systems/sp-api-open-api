<?php
/**
 * Code
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\EasyShipV20220323
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Easy Ship
 *
 * The Selling Partner API for Easy Ship helps you build applications that help sellers manage and ship Amazon Easy Ship orders.  Your Easy Ship applications can:  * Get available time slots for packages to be scheduled for delivery.  * Schedule, reschedule, and cancel Easy Ship orders.  * Print labels, invoices, and warranties.  See the [Marketplace Support Table](doc:easyship-api-v2022-03-23-use-case-guide#marketplace-support-table) for the differences in Easy Ship operations by marketplace.
 *
 * OpenAPI spec version: 2022-03-23
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model;
use \Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\ObjectSerializer;

/**
 * Code Class Doc Comment
 *
 * @category Class
 * @description An error code that identifies the type of error that occurred. The error codes listed below are specific to the Easy Ship section.
 * @package  Glue\SpApi\OpenAPI\Clients\EasyShipV20220323
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Code
{
    /**
     * Possible values of this enum
     */
    const INVALID_INPUT = 'InvalidInput';
    const INVALID_TIME_SLOT_ID = 'InvalidTimeSlotId';
    const SCHEDULED_PACKAGE_ALREADY_EXISTS = 'ScheduledPackageAlreadyExists';
    const SCHEDULE_WINDOW_EXPIRED = 'ScheduleWindowExpired';
    const RETRYABLE_AFTER_GETTING_NEW_SLOTS = 'RetryableAfterGettingNewSlots';
    const TIME_SLOT_NOT_AVAILABLE = 'TimeSlotNotAvailable';
    const RESOURCE_NOT_FOUND = 'ResourceNotFound';
    const INVALID_ORDER_STATE = 'InvalidOrderState';
    const REGION_NOT_SUPPORTED = 'RegionNotSupported';
    const ORDER_NOT_ELIGIBLE_FOR_RESCHEDULING = 'OrderNotEligibleForRescheduling';
    const INTERNAL_SERVER_ERROR = 'InternalServerError';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INVALID_INPUT,
            self::INVALID_TIME_SLOT_ID,
            self::SCHEDULED_PACKAGE_ALREADY_EXISTS,
            self::SCHEDULE_WINDOW_EXPIRED,
            self::RETRYABLE_AFTER_GETTING_NEW_SLOTS,
            self::TIME_SLOT_NOT_AVAILABLE,
            self::RESOURCE_NOT_FOUND,
            self::INVALID_ORDER_STATE,
            self::REGION_NOT_SUPPORTED,
            self::ORDER_NOT_ELIGIBLE_FOR_RESCHEDULING,
            self::INTERNAL_SERVER_ERROR,
        ];
    }
}


