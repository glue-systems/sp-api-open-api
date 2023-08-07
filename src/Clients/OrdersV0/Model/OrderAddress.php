<?php
/**
 * OrderAddress
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
 * OrderAddress Class Doc Comment
 *
 * @category Class
 * @description The shipping address for the order.
 * @package  Glue\SpApi\OpenAPI\Clients\OrdersV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderAddress implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amazonOrderId' => 'string',
        'buyerCompanyName' => 'string',
        'shippingAddress' => '\Glue\SpApi\OpenAPI\Clients\OrdersV0\Model\Address',
        'deliveryPreferences' => '\Glue\SpApi\OpenAPI\Clients\OrdersV0\Model\DeliveryPreferences'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'amazonOrderId' => null,
        'buyerCompanyName' => null,
        'shippingAddress' => null,
        'deliveryPreferences' => null
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
        'amazonOrderId' => 'AmazonOrderId',
        'buyerCompanyName' => 'BuyerCompanyName',
        'shippingAddress' => 'ShippingAddress',
        'deliveryPreferences' => 'DeliveryPreferences'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amazonOrderId' => 'setAmazonOrderId',
        'buyerCompanyName' => 'setBuyerCompanyName',
        'shippingAddress' => 'setShippingAddress',
        'deliveryPreferences' => 'setDeliveryPreferences'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amazonOrderId' => 'getAmazonOrderId',
        'buyerCompanyName' => 'getBuyerCompanyName',
        'shippingAddress' => 'getShippingAddress',
        'deliveryPreferences' => 'getDeliveryPreferences'
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
        $this->container['amazonOrderId'] = isset($data['amazonOrderId']) ? $data['amazonOrderId'] : null;
        $this->container['buyerCompanyName'] = isset($data['buyerCompanyName']) ? $data['buyerCompanyName'] : null;
        $this->container['shippingAddress'] = isset($data['shippingAddress']) ? $data['shippingAddress'] : null;
        $this->container['deliveryPreferences'] = isset($data['deliveryPreferences']) ? $data['deliveryPreferences'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['amazonOrderId'] === null) {
            $invalidProperties[] = "'amazonOrderId' can't be null";
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
     * Gets amazonOrderId
     *
     * @return string
     */
    public function getAmazonOrderId()
    {
        return $this->container['amazonOrderId'];
    }

    /**
     * Sets amazonOrderId
     *
     * @param string $amazonOrderId An Amazon-defined order identifier, in 3-7-7 format.
     *
     * @return $this
     */
    public function setAmazonOrderId($amazonOrderId)
    {
        $this->container['amazonOrderId'] = $amazonOrderId;

        return $this;
    }

    /**
     * Gets buyerCompanyName
     *
     * @return string|null
     */
    public function getBuyerCompanyName()
    {
        return $this->container['buyerCompanyName'];
    }

    /**
     * Sets buyerCompanyName
     *
     * @param string|null $buyerCompanyName Company name of the destination address.
     *
     * @return $this
     */
    public function setBuyerCompanyName($buyerCompanyName)
    {
        $this->container['buyerCompanyName'] = $buyerCompanyName;

        return $this;
    }

    /**
     * Gets shippingAddress
     *
     * @return \Glue\SpApi\OpenAPI\Clients\OrdersV0\Model\Address|null
     */
    public function getShippingAddress()
    {
        return $this->container['shippingAddress'];
    }

    /**
     * Sets shippingAddress
     *
     * @param \Glue\SpApi\OpenAPI\Clients\OrdersV0\Model\Address|null $shippingAddress shippingAddress
     *
     * @return $this
     */
    public function setShippingAddress($shippingAddress)
    {
        $this->container['shippingAddress'] = $shippingAddress;

        return $this;
    }

    /**
     * Gets deliveryPreferences
     *
     * @return \Glue\SpApi\OpenAPI\Clients\OrdersV0\Model\DeliveryPreferences|null
     */
    public function getDeliveryPreferences()
    {
        return $this->container['deliveryPreferences'];
    }

    /**
     * Sets deliveryPreferences
     *
     * @param \Glue\SpApi\OpenAPI\Clients\OrdersV0\Model\DeliveryPreferences|null $deliveryPreferences deliveryPreferences
     *
     * @return $this
     */
    public function setDeliveryPreferences($deliveryPreferences)
    {
        $this->container['deliveryPreferences'] = $deliveryPreferences;

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


