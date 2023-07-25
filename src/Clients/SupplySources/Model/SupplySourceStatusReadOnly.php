<?php
/**
 * SupplySourceStatusReadOnly
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SPAPI\OpenAPI\Clients\SupplySources
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Supply Sources
 *
 * Manage configurations and capabilities of seller supply sources.
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

namespace Glue\SPAPI\OpenAPI\Clients\SupplySources\Model;
use \Glue\SPAPI\OpenAPI\Clients\SupplySources\ObjectSerializer;

/**
 * SupplySourceStatusReadOnly Class Doc Comment
 *
 * @category Class
 * @description SupplySource status.
 * @package  Glue\SPAPI\OpenAPI\Clients\SupplySources
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SupplySourceStatusReadOnly
{
    /**
     * Possible values of this enum
     */
    const ACTIVE = 'Active';
    const INACTIVE = 'Inactive';
    const ARCHIVED = 'Archived';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACTIVE,
            self::INACTIVE,
            self::ARCHIVED,
        ];
    }
}


