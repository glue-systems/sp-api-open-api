<?php
/**
 * ContentBadge
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\AplusContentV20201101
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for A+ Content Management
 *
 * With the A+ Content API, you can build applications that help selling partners add rich marketing content to their Amazon product detail pages. A+ content helps selling partners share their brand and product story, which helps buyers make informed purchasing decisions. Selling partners assemble content by choosing from content modules and adding images and text.
 *
 * OpenAPI spec version: 2020-11-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model;
use \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\ObjectSerializer;

/**
 * ContentBadge Class Doc Comment
 *
 * @category Class
 * @description A flag that provides additional information about an A+ Content document.
 * @package  Glue\SpApi\OpenAPI\Clients\AplusContentV20201101
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ContentBadge
{
    /**
     * Possible values of this enum
     */
    const BULK = 'BULK';
    const GENERATED = 'GENERATED';
    const LAUNCHPAD = 'LAUNCHPAD';
    const PREMIUM = 'PREMIUM';
    const STANDARD = 'STANDARD';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BULK,
            self::GENERATED,
            self::LAUNCHPAD,
            self::PREMIUM,
            self::STANDARD,
        ];
    }
}


