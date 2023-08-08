<?php
/**
 * GetAdditionalSellerInputsRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Merchant Fulfillment
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
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

namespace Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Model;

use \ArrayAccess;
use \Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\ObjectSerializer;

/**
 * GetAdditionalSellerInputsRequest Class Doc Comment
 *
 * @category Class
 * @description Request schema.
 * @package  Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GetAdditionalSellerInputsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetAdditionalSellerInputsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shippingServiceId' => 'string',
        'shipFromAddress' => '\Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Model\Address',
        'orderId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'shippingServiceId' => null,
        'shipFromAddress' => null,
        'orderId' => null
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
        'shippingServiceId' => 'ShippingServiceId',
        'shipFromAddress' => 'ShipFromAddress',
        'orderId' => 'OrderId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shippingServiceId' => 'setShippingServiceId',
        'shipFromAddress' => 'setShipFromAddress',
        'orderId' => 'setOrderId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shippingServiceId' => 'getShippingServiceId',
        'shipFromAddress' => 'getShipFromAddress',
        'orderId' => 'getOrderId'
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
        $this->container['shippingServiceId'] = isset($data['shippingServiceId']) ? $data['shippingServiceId'] : null;
        $this->container['shipFromAddress'] = isset($data['shipFromAddress']) ? $data['shipFromAddress'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shippingServiceId'] === null) {
            $invalidProperties[] = "'shippingServiceId' can't be null";
        }
        if ($this->container['shipFromAddress'] === null) {
            $invalidProperties[] = "'shipFromAddress' can't be null";
        }
        if ($this->container['orderId'] === null) {
            $invalidProperties[] = "'orderId' can't be null";
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
     * Gets shippingServiceId
     *
     * @return string
     */
    public function getShippingServiceId()
    {
        return $this->container['shippingServiceId'];
    }

    /**
     * Sets shippingServiceId
     *
     * @param string $shippingServiceId An Amazon-defined shipping service identifier.
     *
     * @return $this
     */
    public function setShippingServiceId($shippingServiceId)
    {
        $this->container['shippingServiceId'] = $shippingServiceId;

        return $this;
    }

    /**
     * Gets shipFromAddress
     *
     * @return \Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Model\Address
     */
    public function getShipFromAddress()
    {
        return $this->container['shipFromAddress'];
    }

    /**
     * Sets shipFromAddress
     *
     * @param \Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Model\Address $shipFromAddress shipFromAddress
     *
     * @return $this
     */
    public function setShipFromAddress($shipFromAddress)
    {
        $this->container['shipFromAddress'] = $shipFromAddress;

        return $this;
    }

    /**
     * Gets orderId
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId
     *
     * @param string $orderId An Amazon-defined order identifier, in 3-7-7 format.
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;

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

