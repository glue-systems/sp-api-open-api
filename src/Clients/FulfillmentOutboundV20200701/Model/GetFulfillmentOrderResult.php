<?php
/**
 * GetFulfillmentOrderResult
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
 * GetFulfillmentOrderResult Class Doc Comment
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GetFulfillmentOrderResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetFulfillmentOrderResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fulfillmentOrder' => '\Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\FulfillmentOrder',
        'fulfillmentOrderItems' => '\Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\FulfillmentOrderItem[]',
        'fulfillmentShipments' => '\Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\FulfillmentShipment[]',
        'returnItems' => '\Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\ReturnItem[]',
        'returnAuthorizations' => '\Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\ReturnAuthorization[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'fulfillmentOrder' => null,
        'fulfillmentOrderItems' => null,
        'fulfillmentShipments' => null,
        'returnItems' => null,
        'returnAuthorizations' => null
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
        'fulfillmentOrder' => 'fulfillmentOrder',
        'fulfillmentOrderItems' => 'fulfillmentOrderItems',
        'fulfillmentShipments' => 'fulfillmentShipments',
        'returnItems' => 'returnItems',
        'returnAuthorizations' => 'returnAuthorizations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fulfillmentOrder' => 'setFulfillmentOrder',
        'fulfillmentOrderItems' => 'setFulfillmentOrderItems',
        'fulfillmentShipments' => 'setFulfillmentShipments',
        'returnItems' => 'setReturnItems',
        'returnAuthorizations' => 'setReturnAuthorizations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fulfillmentOrder' => 'getFulfillmentOrder',
        'fulfillmentOrderItems' => 'getFulfillmentOrderItems',
        'fulfillmentShipments' => 'getFulfillmentShipments',
        'returnItems' => 'getReturnItems',
        'returnAuthorizations' => 'getReturnAuthorizations'
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
        $this->container['fulfillmentOrder'] = isset($data['fulfillmentOrder']) ? $data['fulfillmentOrder'] : null;
        $this->container['fulfillmentOrderItems'] = isset($data['fulfillmentOrderItems']) ? $data['fulfillmentOrderItems'] : null;
        $this->container['fulfillmentShipments'] = isset($data['fulfillmentShipments']) ? $data['fulfillmentShipments'] : null;
        $this->container['returnItems'] = isset($data['returnItems']) ? $data['returnItems'] : null;
        $this->container['returnAuthorizations'] = isset($data['returnAuthorizations']) ? $data['returnAuthorizations'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['fulfillmentOrder'] === null) {
            $invalidProperties[] = "'fulfillmentOrder' can't be null";
        }
        if ($this->container['fulfillmentOrderItems'] === null) {
            $invalidProperties[] = "'fulfillmentOrderItems' can't be null";
        }
        if ($this->container['returnItems'] === null) {
            $invalidProperties[] = "'returnItems' can't be null";
        }
        if ($this->container['returnAuthorizations'] === null) {
            $invalidProperties[] = "'returnAuthorizations' can't be null";
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
     * Gets fulfillmentOrder
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\FulfillmentOrder
     */
    public function getFulfillmentOrder()
    {
        return $this->container['fulfillmentOrder'];
    }

    /**
     * Sets fulfillmentOrder
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\FulfillmentOrder $fulfillmentOrder fulfillmentOrder
     *
     * @return $this
     */
    public function setFulfillmentOrder($fulfillmentOrder)
    {
        $this->container['fulfillmentOrder'] = $fulfillmentOrder;

        return $this;
    }

    /**
     * Gets fulfillmentOrderItems
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\FulfillmentOrderItem[]
     */
    public function getFulfillmentOrderItems()
    {
        return $this->container['fulfillmentOrderItems'];
    }

    /**
     * Sets fulfillmentOrderItems
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\FulfillmentOrderItem[] $fulfillmentOrderItems An array of fulfillment order item information.
     *
     * @return $this
     */
    public function setFulfillmentOrderItems($fulfillmentOrderItems)
    {
        $this->container['fulfillmentOrderItems'] = $fulfillmentOrderItems;

        return $this;
    }

    /**
     * Gets fulfillmentShipments
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\FulfillmentShipment[]|null
     */
    public function getFulfillmentShipments()
    {
        return $this->container['fulfillmentShipments'];
    }

    /**
     * Sets fulfillmentShipments
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\FulfillmentShipment[]|null $fulfillmentShipments An array of fulfillment shipment information.
     *
     * @return $this
     */
    public function setFulfillmentShipments($fulfillmentShipments)
    {
        $this->container['fulfillmentShipments'] = $fulfillmentShipments;

        return $this;
    }

    /**
     * Gets returnItems
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\ReturnItem[]
     */
    public function getReturnItems()
    {
        return $this->container['returnItems'];
    }

    /**
     * Sets returnItems
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\ReturnItem[] $returnItems An array of items that Amazon accepted for return. Returns empty if no items were accepted for return.
     *
     * @return $this
     */
    public function setReturnItems($returnItems)
    {
        $this->container['returnItems'] = $returnItems;

        return $this;
    }

    /**
     * Gets returnAuthorizations
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\ReturnAuthorization[]
     */
    public function getReturnAuthorizations()
    {
        return $this->container['returnAuthorizations'];
    }

    /**
     * Sets returnAuthorizations
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\ReturnAuthorization[] $returnAuthorizations An array of return authorization information.
     *
     * @return $this
     */
    public function setReturnAuthorizations($returnAuthorizations)
    {
        $this->container['returnAuthorizations'] = $returnAuthorizations;

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


