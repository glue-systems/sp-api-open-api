<?php
/**
 * DeliveryPreferences
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
 * DeliveryPreferences Class Doc Comment
 *
 * @category Class
 * @description Contains all of the delivery instructions provided by the customer for the shipping address.
 * @package  Glue\SPAPI\OpenAPI\Clients\OrdersV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DeliveryPreferences implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DeliveryPreferences';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'drop_off_location' => 'string',
        'preferred_delivery_time' => '\Glue\SPAPI\OpenAPI\Clients\OrdersV0\Model\PreferredDeliveryTime',
        'other_attributes' => '\Glue\SPAPI\OpenAPI\Clients\OrdersV0\Model\OtherDeliveryAttributes[]',
        'address_instructions' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'drop_off_location' => null,
        'preferred_delivery_time' => null,
        'other_attributes' => null,
        'address_instructions' => null
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
        'drop_off_location' => 'DropOffLocation',
        'preferred_delivery_time' => 'PreferredDeliveryTime',
        'other_attributes' => 'OtherAttributes',
        'address_instructions' => 'AddressInstructions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'drop_off_location' => 'setDropOffLocation',
        'preferred_delivery_time' => 'setPreferredDeliveryTime',
        'other_attributes' => 'setOtherAttributes',
        'address_instructions' => 'setAddressInstructions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'drop_off_location' => 'getDropOffLocation',
        'preferred_delivery_time' => 'getPreferredDeliveryTime',
        'other_attributes' => 'getOtherAttributes',
        'address_instructions' => 'getAddressInstructions'
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
        $this->container['drop_off_location'] = isset($data['drop_off_location']) ? $data['drop_off_location'] : null;
        $this->container['preferred_delivery_time'] = isset($data['preferred_delivery_time']) ? $data['preferred_delivery_time'] : null;
        $this->container['other_attributes'] = isset($data['other_attributes']) ? $data['other_attributes'] : null;
        $this->container['address_instructions'] = isset($data['address_instructions']) ? $data['address_instructions'] : null;
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
     * Gets drop_off_location
     *
     * @return string|null
     */
    public function getDropOffLocation()
    {
        return $this->container['drop_off_location'];
    }

    /**
     * Sets drop_off_location
     *
     * @param string|null $drop_off_location Drop-off location selected by the customer.
     *
     * @return $this
     */
    public function setDropOffLocation($drop_off_location)
    {
        $this->container['drop_off_location'] = $drop_off_location;

        return $this;
    }

    /**
     * Gets preferred_delivery_time
     *
     * @return \Glue\SPAPI\OpenAPI\Clients\OrdersV0\Model\PreferredDeliveryTime|null
     */
    public function getPreferredDeliveryTime()
    {
        return $this->container['preferred_delivery_time'];
    }

    /**
     * Sets preferred_delivery_time
     *
     * @param \Glue\SPAPI\OpenAPI\Clients\OrdersV0\Model\PreferredDeliveryTime|null $preferred_delivery_time preferred_delivery_time
     *
     * @return $this
     */
    public function setPreferredDeliveryTime($preferred_delivery_time)
    {
        $this->container['preferred_delivery_time'] = $preferred_delivery_time;

        return $this;
    }

    /**
     * Gets other_attributes
     *
     * @return \Glue\SPAPI\OpenAPI\Clients\OrdersV0\Model\OtherDeliveryAttributes[]|null
     */
    public function getOtherAttributes()
    {
        return $this->container['other_attributes'];
    }

    /**
     * Sets other_attributes
     *
     * @param \Glue\SPAPI\OpenAPI\Clients\OrdersV0\Model\OtherDeliveryAttributes[]|null $other_attributes Enumerated list of miscellaneous delivery attributes associated with the shipping address.
     *
     * @return $this
     */
    public function setOtherAttributes($other_attributes)
    {
        $this->container['other_attributes'] = $other_attributes;

        return $this;
    }

    /**
     * Gets address_instructions
     *
     * @return string|null
     */
    public function getAddressInstructions()
    {
        return $this->container['address_instructions'];
    }

    /**
     * Sets address_instructions
     *
     * @param string|null $address_instructions Building instructions, nearby landmark or navigation instructions.
     *
     * @return $this
     */
    public function setAddressInstructions($address_instructions)
    {
        $this->container['address_instructions'] = $address_instructions;

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

