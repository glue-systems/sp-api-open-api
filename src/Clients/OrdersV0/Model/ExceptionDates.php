<?php
/**
 * ExceptionDates
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

use \ArrayAccess;
use \Glue\SpApi\OpenAPI\Clients\OrdersV0\ObjectSerializer;

/**
 * ExceptionDates Class Doc Comment
 *
 * @category Class
 * @description Dates when the business is closed or open with a different time window.
 * @package  Glue\SpApi\OpenAPI\Clients\OrdersV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ExceptionDates implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExceptionDates';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'exception_date' => 'string',
        'is_open' => 'bool',
        'open_intervals' => '\Glue\SpApi\OpenAPI\Clients\OrdersV0\Model\OpenInterval[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'exception_date' => null,
        'is_open' => null,
        'open_intervals' => null
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
        'exception_date' => 'ExceptionDate',
        'is_open' => 'IsOpen',
        'open_intervals' => 'OpenIntervals'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'exception_date' => 'setExceptionDate',
        'is_open' => 'setIsOpen',
        'open_intervals' => 'setOpenIntervals'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'exception_date' => 'getExceptionDate',
        'is_open' => 'getIsOpen',
        'open_intervals' => 'getOpenIntervals'
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
        $this->container['exception_date'] = isset($data['exception_date']) ? $data['exception_date'] : null;
        $this->container['is_open'] = isset($data['is_open']) ? $data['is_open'] : null;
        $this->container['open_intervals'] = isset($data['open_intervals']) ? $data['open_intervals'] : null;
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
     * Gets exception_date
     *
     * @return string|null
     */
    public function getExceptionDate()
    {
        return $this->container['exception_date'];
    }

    /**
     * Sets exception_date
     *
     * @param string|null $exception_date Date when the business is closed, in ISO-8601 date format.
     *
     * @return $this
     */
    public function setExceptionDate($exception_date)
    {
        $this->container['exception_date'] = $exception_date;

        return $this;
    }

    /**
     * Gets is_open
     *
     * @return bool|null
     */
    public function getIsOpen()
    {
        return $this->container['is_open'];
    }

    /**
     * Sets is_open
     *
     * @param bool|null $is_open Boolean indicating if the business is closed or open on that date.
     *
     * @return $this
     */
    public function setIsOpen($is_open)
    {
        $this->container['is_open'] = $is_open;

        return $this;
    }

    /**
     * Gets open_intervals
     *
     * @return \Glue\SpApi\OpenAPI\Clients\OrdersV0\Model\OpenInterval[]|null
     */
    public function getOpenIntervals()
    {
        return $this->container['open_intervals'];
    }

    /**
     * Sets open_intervals
     *
     * @param \Glue\SpApi\OpenAPI\Clients\OrdersV0\Model\OpenInterval[]|null $open_intervals Time window during the day when the business is open.
     *
     * @return $this
     */
    public function setOpenIntervals($open_intervals)
    {
        $this->container['open_intervals'] = $open_intervals;

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


