<?php
/**
 * AggregationTimePeriod
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\NotificationsV1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Notifications
 *
 * The Selling Partner API for Notifications lets you subscribe to notifications that are relevant to a selling partner's business. Using this API you can create a destination to receive notifications, subscribe to notifications, delete notification subscriptions, and more.  For more information, see the [Notifications Use Case Guide](doc:notifications-api-v1-use-case-guide).
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Glue\SpApi\OpenAPI\Clients\NotificationsV1\Model;
use \Glue\SpApi\OpenAPI\Clients\NotificationsV1\ObjectSerializer;

/**
 * AggregationTimePeriod Class Doc Comment
 *
 * @category Class
 * @description The supported aggregation time periods. For example, if FiveMinutes is the value chosen, and 50 price updates occur for an ASIN within 5 minutes, Amazon will send only two notifications; one for the first event, and then a subsequent notification 5 minutes later with the final end state of the data. The 48 interim events will be dropped.
 * @package  Glue\SpApi\OpenAPI\Clients\NotificationsV1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AggregationTimePeriod
{
    /**
     * Possible values of this enum
     */
    const FIVE_MINUTES = 'FiveMinutes';
    const TEN_MINUTES = 'TenMinutes';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FIVE_MINUTES,
            self::TEN_MINUTES,
        ];
    }
}


