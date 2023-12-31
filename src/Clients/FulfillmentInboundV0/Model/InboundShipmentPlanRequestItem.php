<?php
/**
 * InboundShipmentPlanRequestItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Fulfillment Inbound
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
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

namespace Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model;

use \ArrayAccess;
use \Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\ObjectSerializer;

/**
 * InboundShipmentPlanRequestItem Class Doc Comment
 *
 * @category Class
 * @description Item information for creating an inbound shipment plan. Submitted with a call to the createInboundShipmentPlan operation.
 * @package  Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InboundShipmentPlanRequestItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InboundShipmentPlanRequestItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sellerSKU' => 'string',
        'aSIN' => 'string',
        'condition' => '\Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\Condition',
        'quantity' => 'int',
        'quantityInCase' => 'int',
        'prepDetailsList' => '\Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\PrepDetails[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'sellerSKU' => null,
        'aSIN' => null,
        'condition' => null,
        'quantity' => 'int32',
        'quantityInCase' => 'int32',
        'prepDetailsList' => null
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
        'sellerSKU' => 'SellerSKU',
        'aSIN' => 'ASIN',
        'condition' => 'Condition',
        'quantity' => 'Quantity',
        'quantityInCase' => 'QuantityInCase',
        'prepDetailsList' => 'PrepDetailsList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sellerSKU' => 'setSellerSKU',
        'aSIN' => 'setASIN',
        'condition' => 'setCondition',
        'quantity' => 'setQuantity',
        'quantityInCase' => 'setQuantityInCase',
        'prepDetailsList' => 'setPrepDetailsList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sellerSKU' => 'getSellerSKU',
        'aSIN' => 'getASIN',
        'condition' => 'getCondition',
        'quantity' => 'getQuantity',
        'quantityInCase' => 'getQuantityInCase',
        'prepDetailsList' => 'getPrepDetailsList'
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
        $this->container['sellerSKU'] = isset($data['sellerSKU']) ? $data['sellerSKU'] : null;
        $this->container['aSIN'] = isset($data['aSIN']) ? $data['aSIN'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['quantityInCase'] = isset($data['quantityInCase']) ? $data['quantityInCase'] : null;
        $this->container['prepDetailsList'] = isset($data['prepDetailsList']) ? $data['prepDetailsList'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sellerSKU'] === null) {
            $invalidProperties[] = "'sellerSKU' can't be null";
        }
        if ($this->container['aSIN'] === null) {
            $invalidProperties[] = "'aSIN' can't be null";
        }
        if ($this->container['condition'] === null) {
            $invalidProperties[] = "'condition' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
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
     * Gets sellerSKU
     *
     * @return string
     */
    public function getSellerSKU()
    {
        return $this->container['sellerSKU'];
    }

    /**
     * Sets sellerSKU
     *
     * @param string $sellerSKU The seller SKU of the item.
     *
     * @return $this
     */
    public function setSellerSKU($sellerSKU)
    {
        $this->container['sellerSKU'] = $sellerSKU;

        return $this;
    }

    /**
     * Gets aSIN
     *
     * @return string
     */
    public function getASIN()
    {
        return $this->container['aSIN'];
    }

    /**
     * Sets aSIN
     *
     * @param string $aSIN The Amazon Standard Identification Number (ASIN) of the item.
     *
     * @return $this
     */
    public function setASIN($aSIN)
    {
        $this->container['aSIN'] = $aSIN;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\Condition
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\Condition $condition condition
     *
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity The item quantity.
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets quantityInCase
     *
     * @return int|null
     */
    public function getQuantityInCase()
    {
        return $this->container['quantityInCase'];
    }

    /**
     * Sets quantityInCase
     *
     * @param int|null $quantityInCase The item quantity.
     *
     * @return $this
     */
    public function setQuantityInCase($quantityInCase)
    {
        $this->container['quantityInCase'] = $quantityInCase;

        return $this;
    }

    /**
     * Gets prepDetailsList
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\PrepDetails[]|null
     */
    public function getPrepDetailsList()
    {
        return $this->container['prepDetailsList'];
    }

    /**
     * Sets prepDetailsList
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\PrepDetails[]|null $prepDetailsList A list of preparation instructions and who is responsible for that preparation.
     *
     * @return $this
     */
    public function setPrepDetailsList($prepDetailsList)
    {
        $this->container['prepDetailsList'] = $prepDetailsList;

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


