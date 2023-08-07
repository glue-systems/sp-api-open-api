<?php
/**
 * OperatingHoursByDay
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701
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

namespace Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model;

use \ArrayAccess;
use \Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\ObjectSerializer;

/**
 * OperatingHoursByDay Class Doc Comment
 *
 * @category Class
 * @description Operating hours per day
 * @package  Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OperatingHoursByDay implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OperatingHoursByDay';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'monday' => '\Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\OperatingHour[]',
        'tuesday' => '\Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\OperatingHour[]',
        'wednesday' => '\Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\OperatingHour[]',
        'thursday' => '\Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\OperatingHour[]',
        'friday' => '\Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\OperatingHour[]',
        'saturday' => '\Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\OperatingHour[]',
        'sunday' => '\Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\OperatingHour[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'monday' => null,
        'tuesday' => null,
        'wednesday' => null,
        'thursday' => null,
        'friday' => null,
        'saturday' => null,
        'sunday' => null
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
        'monday' => 'monday',
        'tuesday' => 'tuesday',
        'wednesday' => 'wednesday',
        'thursday' => 'thursday',
        'friday' => 'friday',
        'saturday' => 'saturday',
        'sunday' => 'sunday'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'monday' => 'setMonday',
        'tuesday' => 'setTuesday',
        'wednesday' => 'setWednesday',
        'thursday' => 'setThursday',
        'friday' => 'setFriday',
        'saturday' => 'setSaturday',
        'sunday' => 'setSunday'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'monday' => 'getMonday',
        'tuesday' => 'getTuesday',
        'wednesday' => 'getWednesday',
        'thursday' => 'getThursday',
        'friday' => 'getFriday',
        'saturday' => 'getSaturday',
        'sunday' => 'getSunday'
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
        $this->container['monday'] = isset($data['monday']) ? $data['monday'] : null;
        $this->container['tuesday'] = isset($data['tuesday']) ? $data['tuesday'] : null;
        $this->container['wednesday'] = isset($data['wednesday']) ? $data['wednesday'] : null;
        $this->container['thursday'] = isset($data['thursday']) ? $data['thursday'] : null;
        $this->container['friday'] = isset($data['friday']) ? $data['friday'] : null;
        $this->container['saturday'] = isset($data['saturday']) ? $data['saturday'] : null;
        $this->container['sunday'] = isset($data['sunday']) ? $data['sunday'] : null;
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
     * Gets monday
     *
     * @return \Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\OperatingHour[]|null
     */
    public function getMonday()
    {
        return $this->container['monday'];
    }

    /**
     * Sets monday
     *
     * @param \Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\OperatingHour[]|null $monday A list of Operating Hours.
     *
     * @return $this
     */
    public function setMonday($monday)
    {
        $this->container['monday'] = $monday;

        return $this;
    }

    /**
     * Gets tuesday
     *
     * @return \Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\OperatingHour[]|null
     */
    public function getTuesday()
    {
        return $this->container['tuesday'];
    }

    /**
     * Sets tuesday
     *
     * @param \Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\OperatingHour[]|null $tuesday A list of Operating Hours.
     *
     * @return $this
     */
    public function setTuesday($tuesday)
    {
        $this->container['tuesday'] = $tuesday;

        return $this;
    }

    /**
     * Gets wednesday
     *
     * @return \Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\OperatingHour[]|null
     */
    public function getWednesday()
    {
        return $this->container['wednesday'];
    }

    /**
     * Sets wednesday
     *
     * @param \Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\OperatingHour[]|null $wednesday A list of Operating Hours.
     *
     * @return $this
     */
    public function setWednesday($wednesday)
    {
        $this->container['wednesday'] = $wednesday;

        return $this;
    }

    /**
     * Gets thursday
     *
     * @return \Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\OperatingHour[]|null
     */
    public function getThursday()
    {
        return $this->container['thursday'];
    }

    /**
     * Sets thursday
     *
     * @param \Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\OperatingHour[]|null $thursday A list of Operating Hours.
     *
     * @return $this
     */
    public function setThursday($thursday)
    {
        $this->container['thursday'] = $thursday;

        return $this;
    }

    /**
     * Gets friday
     *
     * @return \Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\OperatingHour[]|null
     */
    public function getFriday()
    {
        return $this->container['friday'];
    }

    /**
     * Sets friday
     *
     * @param \Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\OperatingHour[]|null $friday A list of Operating Hours.
     *
     * @return $this
     */
    public function setFriday($friday)
    {
        $this->container['friday'] = $friday;

        return $this;
    }

    /**
     * Gets saturday
     *
     * @return \Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\OperatingHour[]|null
     */
    public function getSaturday()
    {
        return $this->container['saturday'];
    }

    /**
     * Sets saturday
     *
     * @param \Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\OperatingHour[]|null $saturday A list of Operating Hours.
     *
     * @return $this
     */
    public function setSaturday($saturday)
    {
        $this->container['saturday'] = $saturday;

        return $this;
    }

    /**
     * Gets sunday
     *
     * @return \Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\OperatingHour[]|null
     */
    public function getSunday()
    {
        return $this->container['sunday'];
    }

    /**
     * Sets sunday
     *
     * @param \Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\OperatingHour[]|null $sunday A list of Operating Hours.
     *
     * @return $this
     */
    public function setSunday($sunday)
    {
        $this->container['sunday'] = $sunday;

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


