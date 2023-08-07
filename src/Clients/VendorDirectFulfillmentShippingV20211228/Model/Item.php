<?php
/**
 * Item
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Direct Fulfillment Shipping
 *
 * The Selling Partner API for Direct Fulfillment Shipping provides programmatic access to a direct fulfillment vendor's shipping data.
 *
 * OpenAPI spec version: 2021-12-28
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Model;

use \ArrayAccess;
use \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\ObjectSerializer;

/**
 * Item Class Doc Comment
 *
 * @category Class
 * @description Details of the item being shipped.
 * @package  Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Item implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'itemSequenceNumber' => 'int',
        'buyerProductIdentifier' => 'string',
        'vendorProductIdentifier' => 'string',
        'shippedQuantity' => '\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Model\ItemQuantity'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'itemSequenceNumber' => null,
        'buyerProductIdentifier' => null,
        'vendorProductIdentifier' => null,
        'shippedQuantity' => null
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
        'itemSequenceNumber' => 'itemSequenceNumber',
        'buyerProductIdentifier' => 'buyerProductIdentifier',
        'vendorProductIdentifier' => 'vendorProductIdentifier',
        'shippedQuantity' => 'shippedQuantity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'itemSequenceNumber' => 'setItemSequenceNumber',
        'buyerProductIdentifier' => 'setBuyerProductIdentifier',
        'vendorProductIdentifier' => 'setVendorProductIdentifier',
        'shippedQuantity' => 'setShippedQuantity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'itemSequenceNumber' => 'getItemSequenceNumber',
        'buyerProductIdentifier' => 'getBuyerProductIdentifier',
        'vendorProductIdentifier' => 'getVendorProductIdentifier',
        'shippedQuantity' => 'getShippedQuantity'
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
        $this->container['itemSequenceNumber'] = isset($data['itemSequenceNumber']) ? $data['itemSequenceNumber'] : null;
        $this->container['buyerProductIdentifier'] = isset($data['buyerProductIdentifier']) ? $data['buyerProductIdentifier'] : null;
        $this->container['vendorProductIdentifier'] = isset($data['vendorProductIdentifier']) ? $data['vendorProductIdentifier'] : null;
        $this->container['shippedQuantity'] = isset($data['shippedQuantity']) ? $data['shippedQuantity'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['itemSequenceNumber'] === null) {
            $invalidProperties[] = "'itemSequenceNumber' can't be null";
        }
        if ($this->container['shippedQuantity'] === null) {
            $invalidProperties[] = "'shippedQuantity' can't be null";
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
     * Gets itemSequenceNumber
     *
     * @return int
     */
    public function getItemSequenceNumber()
    {
        return $this->container['itemSequenceNumber'];
    }

    /**
     * Sets itemSequenceNumber
     *
     * @param int $itemSequenceNumber Item Sequence Number for the item. This must be the same value as sent in order for a given item.
     *
     * @return $this
     */
    public function setItemSequenceNumber($itemSequenceNumber)
    {
        $this->container['itemSequenceNumber'] = $itemSequenceNumber;

        return $this;
    }

    /**
     * Gets buyerProductIdentifier
     *
     * @return string|null
     */
    public function getBuyerProductIdentifier()
    {
        return $this->container['buyerProductIdentifier'];
    }

    /**
     * Sets buyerProductIdentifier
     *
     * @param string|null $buyerProductIdentifier Buyer's Standard Identification Number (ASIN) of an item. Either buyerProductIdentifier or vendorProductIdentifier is required.
     *
     * @return $this
     */
    public function setBuyerProductIdentifier($buyerProductIdentifier)
    {
        $this->container['buyerProductIdentifier'] = $buyerProductIdentifier;

        return $this;
    }

    /**
     * Gets vendorProductIdentifier
     *
     * @return string|null
     */
    public function getVendorProductIdentifier()
    {
        return $this->container['vendorProductIdentifier'];
    }

    /**
     * Sets vendorProductIdentifier
     *
     * @param string|null $vendorProductIdentifier The vendor selected product identification of the item. Should be the same as was sent in the purchase order, like SKU Number.
     *
     * @return $this
     */
    public function setVendorProductIdentifier($vendorProductIdentifier)
    {
        $this->container['vendorProductIdentifier'] = $vendorProductIdentifier;

        return $this;
    }

    /**
     * Gets shippedQuantity
     *
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Model\ItemQuantity
     */
    public function getShippedQuantity()
    {
        return $this->container['shippedQuantity'];
    }

    /**
     * Sets shippedQuantity
     *
     * @param \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Model\ItemQuantity $shippedQuantity shippedQuantity
     *
     * @return $this
     */
    public function setShippedQuantity($shippedQuantity)
    {
        $this->container['shippedQuantity'] = $shippedQuantity;

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


