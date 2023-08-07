<?php
/**
 * ProgramType
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Replenishment
 *
 * The Selling Partner API for Replenishment (Replenishment API) provides programmatic access to replenishment program metrics and offers. These programs provide recurring delivery (automatic or manual) of any replenishable item at a frequency chosen by the customer.
 *
 * OpenAPI spec version: 2022-11-07
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model;
use \Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\ObjectSerializer;

/**
 * ProgramType Class Doc Comment
 *
 * @category Class
 * @description The replenishment program type.
 * @package  Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProgramType
{
    /**
     * Possible values of this enum
     */
    const SUBSCRIBE_AND_SAVE = 'SUBSCRIBE_AND_SAVE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SUBSCRIBE_AND_SAVE,
        ];
    }
}

