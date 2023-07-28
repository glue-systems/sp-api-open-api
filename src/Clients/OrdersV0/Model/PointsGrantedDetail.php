<?php
/**
 * PointsGrantedDetail
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SPAPI\OpenAPI\Clients\OrdersV0
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

namespace Glue\SPAPI\OpenAPI\Clients\OrdersV0\Model;

use \ArrayAccess;
use \Glue\SPAPI\OpenAPI\Clients\OrdersV0\ObjectSerializer;

/**
 * PointsGrantedDetail Class Doc Comment
 *
 * @category Class
 * @description The number of Amazon Points offered with the purchase of an item, and their monetary value.
 * @package  Glue\SPAPI\OpenAPI\Clients\OrdersV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PointsGrantedDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PointsGrantedDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'points_number' => 'int',
        'points_monetary_value' => '\Glue\SPAPI\OpenAPI\Clients\OrdersV0\Model\Money'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'points_number' => null,
        'points_monetary_value' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'points_number' => 'PointsNumber',
        'points_monetary_value' => 'PointsMonetaryValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'points_number' => 'setPointsNumber',
        'points_monetary_value' => 'setPointsMonetaryValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'points_number' => 'getPointsNumber',
        'points_monetary_value' => 'getPointsMonetaryValue'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['points_number'] = isset($data['points_number']) ? $data['points_number'] : null;
        $this->container['points_monetary_value'] = isset($data['points_monetary_value']) ? $data['points_monetary_value'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets points_number
     *
     * @return int|null
     */
    public function getPointsNumber()
    {
        return $this->container['points_number'];
    }

    /**
     * Sets points_number
     *
     * @param int|null $points_number The number of Amazon Points granted with the purchase of an item.
     *
     * @return $this
     */
    public function setPointsNumber($points_number)
    {
        $this->container['points_number'] = $points_number;

        return $this;
    }

    /**
     * Gets points_monetary_value
     *
     * @return \Glue\SPAPI\OpenAPI\Clients\OrdersV0\Model\Money|null
     */
    public function getPointsMonetaryValue()
    {
        return $this->container['points_monetary_value'];
    }

    /**
     * Sets points_monetary_value
     *
     * @param \Glue\SPAPI\OpenAPI\Clients\OrdersV0\Model\Money|null $points_monetary_value points_monetary_value
     *
     * @return $this
     */
    public function setPointsMonetaryValue($points_monetary_value)
    {
        $this->container['points_monetary_value'] = $points_monetary_value;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


