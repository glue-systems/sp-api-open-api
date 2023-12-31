<?php
/**
 * CapacityType
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\ServicesV1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Services
 *
 * With the Services API, you can build applications that help service providers get and modify their service orders and manage their resources.
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

namespace Glue\SpApi\OpenAPI\Clients\ServicesV1\Model;
use \Glue\SpApi\OpenAPI\Clients\ServicesV1\ObjectSerializer;

/**
 * CapacityType Class Doc Comment
 *
 * @category Class
 * @description Type of capacity
 * @package  Glue\SpApi\OpenAPI\Clients\ServicesV1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CapacityType
{
    /**
     * Possible values of this enum
     */
    const SCHEDULED_CAPACITY = 'SCHEDULED_CAPACITY';
    const AVAILABLE_CAPACITY = 'AVAILABLE_CAPACITY';
    const ENCUMBERED_CAPACITY = 'ENCUMBERED_CAPACITY';
    const RESERVED_CAPACITY = 'RESERVED_CAPACITY';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SCHEDULED_CAPACITY,
            self::AVAILABLE_CAPACITY,
            self::ENCUMBERED_CAPACITY,
            self::RESERVED_CAPACITY,
        ];
    }
}


