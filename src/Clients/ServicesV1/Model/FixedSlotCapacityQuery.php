<?php
/**
 * FixedSlotCapacityQuery
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
 * FixedSlotCapacityQuery Class Doc Comment
 *
 * @category Class
 * @description Request schema for the &#x60;getFixedSlotCapacity&#x60; operation. This schema is used to define the time range, capacity types and slot duration which are being queried.
 * @package  Glue\SpApi\OpenAPI\Clients\ServicesV1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FixedSlotCapacityQuery implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FixedSlotCapacityQuery';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'capacityTypes' => '\Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\CapacityType[]',
        'slotDuration' => 'double',
        'startDateTime' => '\DateTime',
        'endDateTime' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'capacityTypes' => null,
        'slotDuration' => 'int32',
        'startDateTime' => 'date-time',
        'endDateTime' => 'date-time'
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
        'capacityTypes' => 'capacityTypes',
        'slotDuration' => 'slotDuration',
        'startDateTime' => 'startDateTime',
        'endDateTime' => 'endDateTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'capacityTypes' => 'setCapacityTypes',
        'slotDuration' => 'setSlotDuration',
        'startDateTime' => 'setStartDateTime',
        'endDateTime' => 'setEndDateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'capacityTypes' => 'getCapacityTypes',
        'slotDuration' => 'getSlotDuration',
        'startDateTime' => 'getStartDateTime',
        'endDateTime' => 'getEndDateTime'
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
        $this->container['capacityTypes'] = isset($data['capacityTypes']) ? $data['capacityTypes'] : null;
        $this->container['slotDuration'] = isset($data['slotDuration']) ? $data['slotDuration'] : null;
        $this->container['startDateTime'] = isset($data['startDateTime']) ? $data['startDateTime'] : null;
        $this->container['endDateTime'] = isset($data['endDateTime']) ? $data['endDateTime'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['startDateTime'] === null) {
            $invalidProperties[] = "'startDateTime' can't be null";
        }
        if ($this->container['endDateTime'] === null) {
            $invalidProperties[] = "'endDateTime' can't be null";
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
     * Gets capacityTypes
     *
     * @return \Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\CapacityType[]|null
     */
    public function getCapacityTypes()
    {
        return $this->container['capacityTypes'];
    }

    /**
     * Sets capacityTypes
     *
     * @param \Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\CapacityType[]|null $capacityTypes An array of capacity types which are being requested. Default value is `[SCHEDULED_CAPACITY]`.
     *
     * @return $this
     */
    public function setCapacityTypes($capacityTypes)
    {
        $this->container['capacityTypes'] = $capacityTypes;

        return $this;
    }

    /**
     * Gets slotDuration
     *
     * @return double|null
     */
    public function getSlotDuration()
    {
        return $this->container['slotDuration'];
    }

    /**
     * Sets slotDuration
     *
     * @param double|null $slotDuration Size in which slots are being requested. This value should be a multiple of 5 and fall in the range: 5 <= `slotDuration` <= 360.
     *
     * @return $this
     */
    public function setSlotDuration($slotDuration)
    {
        $this->container['slotDuration'] = $slotDuration;

        return $this;
    }

    /**
     * Gets startDateTime
     *
     * @return \DateTime
     */
    public function getStartDateTime()
    {
        return $this->container['startDateTime'];
    }

    /**
     * Sets startDateTime
     *
     * @param \DateTime $startDateTime Start date time from which the capacity slots are being requested in ISO 8601 format.
     *
     * @return $this
     */
    public function setStartDateTime($startDateTime)
    {
        $this->container['startDateTime'] = $startDateTime;

        return $this;
    }

    /**
     * Gets endDateTime
     *
     * @return \DateTime
     */
    public function getEndDateTime()
    {
        return $this->container['endDateTime'];
    }

    /**
     * Sets endDateTime
     *
     * @param \DateTime $endDateTime End date time up to which the capacity slots are being requested in ISO 8601 format.
     *
     * @return $this
     */
    public function setEndDateTime($endDateTime)
    {
        $this->container['endDateTime'] = $endDateTime;

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


