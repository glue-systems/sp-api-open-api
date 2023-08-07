<?php
/**
 * AvailabilityRecord
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

use \ArrayAccess;
use \Glue\SpApi\OpenAPI\Clients\ServicesV1\ObjectSerializer;

/**
 * AvailabilityRecord Class Doc Comment
 *
 * @category Class
 * @description &#x60;AvailabilityRecord&#x60; to represent the capacity of a resource over a time range.
 * @package  Glue\SpApi\OpenAPI\Clients\ServicesV1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AvailabilityRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AvailabilityRecord';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'startTime' => '\DateTime',
        'endTime' => '\DateTime',
        'recurrence' => '\Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\Recurrence',
        'capacity' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'startTime' => 'date-time',
        'endTime' => 'date-time',
        'recurrence' => null,
        'capacity' => null
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
        'startTime' => 'startTime',
        'endTime' => 'endTime',
        'recurrence' => 'recurrence',
        'capacity' => 'capacity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'startTime' => 'setStartTime',
        'endTime' => 'setEndTime',
        'recurrence' => 'setRecurrence',
        'capacity' => 'setCapacity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'startTime' => 'getStartTime',
        'endTime' => 'getEndTime',
        'recurrence' => 'getRecurrence',
        'capacity' => 'getCapacity'
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
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['recurrence'] = isset($data['recurrence']) ? $data['recurrence'] : null;
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
        if (!is_null($this->container['capacity']) && ($this->container['capacity'] < 1)) {
            $invalidProperties[] = "invalid value for 'capacity', must be bigger than or equal to 1.";
        }

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
     * Gets startTime
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
     * Sets startTime
     *
     * @param \DateTime $startTime Denotes the time from when the resource is available in a day in ISO-8601 format.
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;

        return $this;
    }

    /**
     * Gets endTime
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
     * Sets endTime
     *
     * @param \DateTime $endTime Denotes the time till when the resource is available in a day in ISO-8601 format.
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;

        return $this;
    }

    /**
     * Gets recurrence
     *
     * @return \Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\Recurrence|null
     */
    public function getRecurrence()
    {
        return $this->container['recurrence'];
    }

    /**
     * Sets recurrence
     *
     * @param \Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\Recurrence|null $recurrence recurrence
     *
     * @return $this
     */
    public function setRecurrence($recurrence)
    {
        $this->container['recurrence'] = $recurrence;

        return $this;
    }

    /**
     * Gets capacity
     *
     * @return int|null
     */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
     * Sets capacity
     *
     * @param int|null $capacity Signifies the capacity of a resource which is available.
     *
     * @return $this
     */
    public function setCapacity($capacity)
    {

        if (!is_null($capacity) && ($capacity < 1)) {
            throw new \InvalidArgumentException('invalid value for $capacity when calling AvailabilityRecord., must be bigger than or equal to 1.');
        }

        $this->container['capacity'] = $capacity;

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

