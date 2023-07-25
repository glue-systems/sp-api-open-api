<?php
/**
 * OperationalConfiguration
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

use \ArrayAccess;
use \Glue\SPAPI\OpenAPI\Clients\SupplySources\ObjectSerializer;

/**
 * OperationalConfiguration Class Doc Comment
 *
 * @category Class
 * @description SupplySources operational configuration
 * @package  Glue\SPAPI\OpenAPI\Clients\SupplySources
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OperationalConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OperationalConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'contact_details' => '\Glue\SPAPI\OpenAPI\Clients\SupplySources\Model\ContactDetails',
        'throughput_config' => '\Glue\SPAPI\OpenAPI\Clients\SupplySources\Model\ThroughputConfig',
        'operating_hours_by_day' => '\Glue\SPAPI\OpenAPI\Clients\SupplySources\Model\OperatingHoursByDay',
        'handling_time' => '\Glue\SPAPI\OpenAPI\Clients\SupplySources\Model\Duration'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'contact_details' => null,
        'throughput_config' => null,
        'operating_hours_by_day' => null,
        'handling_time' => null
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
        'contact_details' => 'contactDetails',
        'throughput_config' => 'throughputConfig',
        'operating_hours_by_day' => 'operatingHoursByDay',
        'handling_time' => 'handlingTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contact_details' => 'setContactDetails',
        'throughput_config' => 'setThroughputConfig',
        'operating_hours_by_day' => 'setOperatingHoursByDay',
        'handling_time' => 'setHandlingTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contact_details' => 'getContactDetails',
        'throughput_config' => 'getThroughputConfig',
        'operating_hours_by_day' => 'getOperatingHoursByDay',
        'handling_time' => 'getHandlingTime'
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
        $this->container['contact_details'] = isset($data['contact_details']) ? $data['contact_details'] : null;
        $this->container['throughput_config'] = isset($data['throughput_config']) ? $data['throughput_config'] : null;
        $this->container['operating_hours_by_day'] = isset($data['operating_hours_by_day']) ? $data['operating_hours_by_day'] : null;
        $this->container['handling_time'] = isset($data['handling_time']) ? $data['handling_time'] : null;
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
     * Gets contact_details
     *
     * @return \Glue\SPAPI\OpenAPI\Clients\SupplySources\Model\ContactDetails|null
     */
    public function getContactDetails()
    {
        return $this->container['contact_details'];
    }

    /**
     * Sets contact_details
     *
     * @param \Glue\SPAPI\OpenAPI\Clients\SupplySources\Model\ContactDetails|null $contact_details contact_details
     *
     * @return $this
     */
    public function setContactDetails($contact_details)
    {
        $this->container['contact_details'] = $contact_details;

        return $this;
    }

    /**
     * Gets throughput_config
     *
     * @return \Glue\SPAPI\OpenAPI\Clients\SupplySources\Model\ThroughputConfig|null
     */
    public function getThroughputConfig()
    {
        return $this->container['throughput_config'];
    }

    /**
     * Sets throughput_config
     *
     * @param \Glue\SPAPI\OpenAPI\Clients\SupplySources\Model\ThroughputConfig|null $throughput_config throughput_config
     *
     * @return $this
     */
    public function setThroughputConfig($throughput_config)
    {
        $this->container['throughput_config'] = $throughput_config;

        return $this;
    }

    /**
     * Gets operating_hours_by_day
     *
     * @return \Glue\SPAPI\OpenAPI\Clients\SupplySources\Model\OperatingHoursByDay|null
     */
    public function getOperatingHoursByDay()
    {
        return $this->container['operating_hours_by_day'];
    }

    /**
     * Sets operating_hours_by_day
     *
     * @param \Glue\SPAPI\OpenAPI\Clients\SupplySources\Model\OperatingHoursByDay|null $operating_hours_by_day operating_hours_by_day
     *
     * @return $this
     */
    public function setOperatingHoursByDay($operating_hours_by_day)
    {
        $this->container['operating_hours_by_day'] = $operating_hours_by_day;

        return $this;
    }

    /**
     * Gets handling_time
     *
     * @return \Glue\SPAPI\OpenAPI\Clients\SupplySources\Model\Duration|null
     */
    public function getHandlingTime()
    {
        return $this->container['handling_time'];
    }

    /**
     * Sets handling_time
     *
     * @param \Glue\SPAPI\OpenAPI\Clients\SupplySources\Model\Duration|null $handling_time handling_time
     *
     * @return $this
     */
    public function setHandlingTime($handling_time)
    {
        $this->container['handling_time'] = $handling_time;

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


