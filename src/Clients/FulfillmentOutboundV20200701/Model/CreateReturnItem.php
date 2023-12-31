<?php
/**
 * CreateReturnItem
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
 * CreateReturnItem Class Doc Comment
 *
 * @category Class
 * @description An item that Amazon accepted for return.
 * @package  Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CreateReturnItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateReturnItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sellerReturnItemId' => 'string',
        'sellerFulfillmentOrderItemId' => 'string',
        'amazonShipmentId' => 'string',
        'returnReasonCode' => 'string',
        'returnComment' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'sellerReturnItemId' => null,
        'sellerFulfillmentOrderItemId' => null,
        'amazonShipmentId' => null,
        'returnReasonCode' => null,
        'returnComment' => null
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
        'amazonShipmentId' => 'amazonShipmentId',
        'returnReasonCode' => 'returnReasonCode',
        'returnComment' => 'returnComment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sellerReturnItemId' => 'setSellerReturnItemId',
        'sellerFulfillmentOrderItemId' => 'setSellerFulfillmentOrderItemId',
        'amazonShipmentId' => 'setAmazonShipmentId',
        'returnReasonCode' => 'setReturnReasonCode',
        'returnComment' => 'setReturnComment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sellerReturnItemId' => 'getSellerReturnItemId',
        'sellerFulfillmentOrderItemId' => 'getSellerFulfillmentOrderItemId',
        'amazonShipmentId' => 'getAmazonShipmentId',
        'returnReasonCode' => 'getReturnReasonCode',
        'returnComment' => 'getReturnComment'
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
        $this->container['amazonShipmentId'] = isset($data['amazonShipmentId']) ? $data['amazonShipmentId'] : null;
        $this->container['returnReasonCode'] = isset($data['returnReasonCode']) ? $data['returnReasonCode'] : null;
        $this->container['returnComment'] = isset($data['returnComment']) ? $data['returnComment'] : null;
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
        if ((mb_strlen($this->container['sellerReturnItemId']) > 80)) {
            $invalidProperties[] = "invalid value for 'sellerReturnItemId', the character length must be smaller than or equal to 80.";
        }

        if ($this->container['sellerFulfillmentOrderItemId'] === null) {
            $invalidProperties[] = "'sellerFulfillmentOrderItemId' can't be null";
        }
        if ($this->container['amazonShipmentId'] === null) {
            $invalidProperties[] = "'amazonShipmentId' can't be null";
        }
        if ($this->container['returnReasonCode'] === null) {
            $invalidProperties[] = "'returnReasonCode' can't be null";
        }
        if (!is_null($this->container['returnComment']) && (mb_strlen($this->container['returnComment']) > 1000)) {
            $invalidProperties[] = "invalid value for 'returnComment', the character length must be smaller than or equal to 1000.";
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
        if ((mb_strlen($sellerReturnItemId) > 80)) {
            throw new \InvalidArgumentException('invalid length for $sellerReturnItemId when calling CreateReturnItem., must be smaller than or equal to 80.');
        }

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
     * Gets amazonShipmentId
     *
     * @return string
     */
    public function getAmazonShipmentId()
    {
        return $this->container['amazonShipmentId'];
    }

    /**
     * Sets amazonShipmentId
     *
     * @param string $amazonShipmentId The identifier for the shipment that is associated with the return item.
     *
     * @return $this
     */
    public function setAmazonShipmentId($amazonShipmentId)
    {
        $this->container['amazonShipmentId'] = $amazonShipmentId;

        return $this;
    }

    /**
     * Gets returnReasonCode
     *
     * @return string
     */
    public function getReturnReasonCode()
    {
        return $this->container['returnReasonCode'];
    }

    /**
     * Sets returnReasonCode
     *
     * @param string $returnReasonCode The return reason code assigned to the return item by the seller.
     *
     * @return $this
     */
    public function setReturnReasonCode($returnReasonCode)
    {
        $this->container['returnReasonCode'] = $returnReasonCode;

        return $this;
    }

    /**
     * Gets returnComment
     *
     * @return string|null
     */
    public function getReturnComment()
    {
        return $this->container['returnComment'];
    }

    /**
     * Sets returnComment
     *
     * @param string|null $returnComment An optional comment about the return item.
     *
     * @return $this
     */
    public function setReturnComment($returnComment)
    {
        if (!is_null($returnComment) && (mb_strlen($returnComment) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $returnComment when calling CreateReturnItem., must be smaller than or equal to 1000.');
        }

        $this->container['returnComment'] = $returnComment;

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


