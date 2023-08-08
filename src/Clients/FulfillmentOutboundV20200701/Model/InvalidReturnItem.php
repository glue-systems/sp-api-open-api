<?php
/**
 * InvalidReturnItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner APIs for Fulfillment Outbound
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
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

namespace Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model;

use \ArrayAccess;
use \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\ObjectSerializer;

/**
 * InvalidReturnItem Class Doc Comment
 *
 * @category Class
 * @description An item that is invalid for return.
 * @package  Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InvalidReturnItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InvalidReturnItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sellerReturnItemId' => 'string',
        'sellerFulfillmentOrderItemId' => 'string',
        'invalidItemReason' => '\Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\InvalidItemReason'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'sellerReturnItemId' => null,
        'sellerFulfillmentOrderItemId' => null,
        'invalidItemReason' => null
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
        'sellerReturnItemId' => 'sellerReturnItemId',
        'sellerFulfillmentOrderItemId' => 'sellerFulfillmentOrderItemId',
        'invalidItemReason' => 'invalidItemReason'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sellerReturnItemId' => 'setSellerReturnItemId',
        'sellerFulfillmentOrderItemId' => 'setSellerFulfillmentOrderItemId',
        'invalidItemReason' => 'setInvalidItemReason'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sellerReturnItemId' => 'getSellerReturnItemId',
        'sellerFulfillmentOrderItemId' => 'getSellerFulfillmentOrderItemId',
        'invalidItemReason' => 'getInvalidItemReason'
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
        $this->container['sellerReturnItemId'] = isset($data['sellerReturnItemId']) ? $data['sellerReturnItemId'] : null;
        $this->container['sellerFulfillmentOrderItemId'] = isset($data['sellerFulfillmentOrderItemId']) ? $data['sellerFulfillmentOrderItemId'] : null;
        $this->container['invalidItemReason'] = isset($data['invalidItemReason']) ? $data['invalidItemReason'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sellerReturnItemId'] === null) {
            $invalidProperties[] = "'sellerReturnItemId' can't be null";
        }
        if ($this->container['sellerFulfillmentOrderItemId'] === null) {
            $invalidProperties[] = "'sellerFulfillmentOrderItemId' can't be null";
        }
        if ($this->container['invalidItemReason'] === null) {
            $invalidProperties[] = "'invalidItemReason' can't be null";
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
     * Gets sellerReturnItemId
     *
     * @return string
     */
    public function getSellerReturnItemId()
    {
        return $this->container['sellerReturnItemId'];
    }

    /**
     * Sets sellerReturnItemId
     *
     * @param string $sellerReturnItemId An identifier assigned by the seller to the return item.
     *
     * @return $this
     */
    public function setSellerReturnItemId($sellerReturnItemId)
    {
        $this->container['sellerReturnItemId'] = $sellerReturnItemId;

        return $this;
    }

    /**
     * Gets sellerFulfillmentOrderItemId
     *
     * @return string
     */
    public function getSellerFulfillmentOrderItemId()
    {
        return $this->container['sellerFulfillmentOrderItemId'];
    }

    /**
     * Sets sellerFulfillmentOrderItemId
     *
     * @param string $sellerFulfillmentOrderItemId The identifier assigned to the item by the seller when the fulfillment order was created.
     *
     * @return $this
     */
    public function setSellerFulfillmentOrderItemId($sellerFulfillmentOrderItemId)
    {
        $this->container['sellerFulfillmentOrderItemId'] = $sellerFulfillmentOrderItemId;

        return $this;
    }

    /**
     * Gets invalidItemReason
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\InvalidItemReason
     */
    public function getInvalidItemReason()
    {
        return $this->container['invalidItemReason'];
    }

    /**
     * Sets invalidItemReason
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\InvalidItemReason $invalidItemReason invalidItemReason
     *
     * @return $this
     */
    public function setInvalidItemReason($invalidItemReason)
    {
        $this->container['invalidItemReason'] = $invalidItemReason;

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

