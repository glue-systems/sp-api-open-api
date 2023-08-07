<?php
/**
 * OutboundCapability
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
 * OutboundCapability Class Doc Comment
 *
 * @category Class
 * @description Outbound capability of a supply source.
 * @package  Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OutboundCapability implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OutboundCapability';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'is_supported' => 'bool',
        'operational_configuration' => '\Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\OperationalConfiguration',
        'return_location' => '\Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\ReturnLocation',
        'delivery_channel' => '\Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\DeliveryChannel',
        'pickup_channel' => '\Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\PickupChannel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'is_supported' => null,
        'operational_configuration' => null,
        'return_location' => null,
        'delivery_channel' => null,
        'pickup_channel' => null
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
        'is_supported' => 'isSupported',
        'operational_configuration' => 'operationalConfiguration',
        'return_location' => 'returnLocation',
        'delivery_channel' => 'deliveryChannel',
        'pickup_channel' => 'pickupChannel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_supported' => 'setIsSupported',
        'operational_configuration' => 'setOperationalConfiguration',
        'return_location' => 'setReturnLocation',
        'delivery_channel' => 'setDeliveryChannel',
        'pickup_channel' => 'setPickupChannel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_supported' => 'getIsSupported',
        'operational_configuration' => 'getOperationalConfiguration',
        'return_location' => 'getReturnLocation',
        'delivery_channel' => 'getDeliveryChannel',
        'pickup_channel' => 'getPickupChannel'
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
        $this->container['is_supported'] = isset($data['is_supported']) ? $data['is_supported'] : null;
        $this->container['operational_configuration'] = isset($data['operational_configuration']) ? $data['operational_configuration'] : null;
        $this->container['return_location'] = isset($data['return_location']) ? $data['return_location'] : null;
        $this->container['delivery_channel'] = isset($data['delivery_channel']) ? $data['delivery_channel'] : null;
        $this->container['pickup_channel'] = isset($data['pickup_channel']) ? $data['pickup_channel'] : null;
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
     * Gets is_supported
     *
     * @return bool|null
     */
    public function getIsSupported()
    {
        return $this->container['is_supported'];
    }

    /**
     * Sets is_supported
     *
     * @param bool|null $is_supported is_supported
     *
     * @return $this
     */
    public function setIsSupported($is_supported)
    {
        $this->container['is_supported'] = $is_supported;

        return $this;
    }

    /**
     * Gets operational_configuration
     *
     * @return \Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\OperationalConfiguration|null
     */
    public function getOperationalConfiguration()
    {
        return $this->container['operational_configuration'];
    }

    /**
     * Sets operational_configuration
     *
     * @param \Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\OperationalConfiguration|null $operational_configuration operational_configuration
     *
     * @return $this
     */
    public function setOperationalConfiguration($operational_configuration)
    {
        $this->container['operational_configuration'] = $operational_configuration;

        return $this;
    }

    /**
     * Gets return_location
     *
     * @return \Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\ReturnLocation|null
     */
    public function getReturnLocation()
    {
        return $this->container['return_location'];
    }

    /**
     * Sets return_location
     *
     * @param \Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\ReturnLocation|null $return_location return_location
     *
     * @return $this
     */
    public function setReturnLocation($return_location)
    {
        $this->container['return_location'] = $return_location;

        return $this;
    }

    /**
     * Gets delivery_channel
     *
     * @return \Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\DeliveryChannel|null
     */
    public function getDeliveryChannel()
    {
        return $this->container['delivery_channel'];
    }

    /**
     * Sets delivery_channel
     *
     * @param \Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\DeliveryChannel|null $delivery_channel delivery_channel
     *
     * @return $this
     */
    public function setDeliveryChannel($delivery_channel)
    {
        $this->container['delivery_channel'] = $delivery_channel;

        return $this;
    }

    /**
     * Gets pickup_channel
     *
     * @return \Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\PickupChannel|null
     */
    public function getPickupChannel()
    {
        return $this->container['pickup_channel'];
    }

    /**
     * Sets pickup_channel
     *
     * @param \Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\PickupChannel|null $pickup_channel pickup_channel
     *
     * @return $this
     */
    public function setPickupChannel($pickup_channel)
    {
        $this->container['pickup_channel'] = $pickup_channel;

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


