<?php
/**
 * InboundShipmentPlan
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
 * InboundShipmentPlan Class Doc Comment
 *
 * @category Class
 * @description Inbound shipment information used to create an inbound shipment. Returned by the createInboundShipmentPlan operation.
 * @package  Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InboundShipmentPlan implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InboundShipmentPlan';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shipmentId' => 'string',
        'destinationFulfillmentCenterId' => 'string',
        'shipToAddress' => '\Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\Address',
        'labelPrepType' => '\Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\LabelPrepType',
        'items' => '\Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\InboundShipmentPlanItem[]',
        'estimatedBoxContentsFee' => '\Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\BoxContentsFeeDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'shipmentId' => null,
        'destinationFulfillmentCenterId' => null,
        'shipToAddress' => null,
        'labelPrepType' => null,
        'items' => null,
        'estimatedBoxContentsFee' => null
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
        'shipmentId' => 'ShipmentId',
        'destinationFulfillmentCenterId' => 'DestinationFulfillmentCenterId',
        'shipToAddress' => 'ShipToAddress',
        'labelPrepType' => 'LabelPrepType',
        'items' => 'Items',
        'estimatedBoxContentsFee' => 'EstimatedBoxContentsFee'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipmentId' => 'setShipmentId',
        'destinationFulfillmentCenterId' => 'setDestinationFulfillmentCenterId',
        'shipToAddress' => 'setShipToAddress',
        'labelPrepType' => 'setLabelPrepType',
        'items' => 'setItems',
        'estimatedBoxContentsFee' => 'setEstimatedBoxContentsFee'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipmentId' => 'getShipmentId',
        'destinationFulfillmentCenterId' => 'getDestinationFulfillmentCenterId',
        'shipToAddress' => 'getShipToAddress',
        'labelPrepType' => 'getLabelPrepType',
        'items' => 'getItems',
        'estimatedBoxContentsFee' => 'getEstimatedBoxContentsFee'
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
        $this->container['shipmentId'] = isset($data['shipmentId']) ? $data['shipmentId'] : null;
        $this->container['destinationFulfillmentCenterId'] = isset($data['destinationFulfillmentCenterId']) ? $data['destinationFulfillmentCenterId'] : null;
        $this->container['shipToAddress'] = isset($data['shipToAddress']) ? $data['shipToAddress'] : null;
        $this->container['labelPrepType'] = isset($data['labelPrepType']) ? $data['labelPrepType'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['estimatedBoxContentsFee'] = isset($data['estimatedBoxContentsFee']) ? $data['estimatedBoxContentsFee'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shipmentId'] === null) {
            $invalidProperties[] = "'shipmentId' can't be null";
        }
        if ($this->container['destinationFulfillmentCenterId'] === null) {
            $invalidProperties[] = "'destinationFulfillmentCenterId' can't be null";
        }
        if ($this->container['shipToAddress'] === null) {
            $invalidProperties[] = "'shipToAddress' can't be null";
        }
        if ($this->container['labelPrepType'] === null) {
            $invalidProperties[] = "'labelPrepType' can't be null";
        }
        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
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
     * Gets shipmentId
     *
     * @return string
     */
    public function getShipmentId()
    {
        return $this->container['shipmentId'];
    }

    /**
     * Sets shipmentId
     *
     * @param string $shipmentId A shipment identifier originally returned by the createInboundShipmentPlan operation.
     *
     * @return $this
     */
    public function setShipmentId($shipmentId)
    {
        $this->container['shipmentId'] = $shipmentId;

        return $this;
    }

    /**
     * Gets destinationFulfillmentCenterId
     *
     * @return string
     */
    public function getDestinationFulfillmentCenterId()
    {
        return $this->container['destinationFulfillmentCenterId'];
    }

    /**
     * Sets destinationFulfillmentCenterId
     *
     * @param string $destinationFulfillmentCenterId An Amazon fulfillment center identifier created by Amazon.
     *
     * @return $this
     */
    public function setDestinationFulfillmentCenterId($destinationFulfillmentCenterId)
    {
        $this->container['destinationFulfillmentCenterId'] = $destinationFulfillmentCenterId;

        return $this;
    }

    /**
     * Gets shipToAddress
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\Address
     */
    public function getShipToAddress()
    {
        return $this->container['shipToAddress'];
    }

    /**
     * Sets shipToAddress
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\Address $shipToAddress shipToAddress
     *
     * @return $this
     */
    public function setShipToAddress($shipToAddress)
    {
        $this->container['shipToAddress'] = $shipToAddress;

        return $this;
    }

    /**
     * Gets labelPrepType
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\LabelPrepType
     */
    public function getLabelPrepType()
    {
        return $this->container['labelPrepType'];
    }

    /**
     * Sets labelPrepType
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\LabelPrepType $labelPrepType labelPrepType
     *
     * @return $this
     */
    public function setLabelPrepType($labelPrepType)
    {
        $this->container['labelPrepType'] = $labelPrepType;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\InboundShipmentPlanItem[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\InboundShipmentPlanItem[] $items A list of inbound shipment plan item information.
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets estimatedBoxContentsFee
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\BoxContentsFeeDetails|null
     */
    public function getEstimatedBoxContentsFee()
    {
        return $this->container['estimatedBoxContentsFee'];
    }

    /**
     * Sets estimatedBoxContentsFee
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\BoxContentsFeeDetails|null $estimatedBoxContentsFee estimatedBoxContentsFee
     *
     * @return $this
     */
    public function setEstimatedBoxContentsFee($estimatedBoxContentsFee)
    {
        $this->container['estimatedBoxContentsFee'] = $estimatedBoxContentsFee;

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

