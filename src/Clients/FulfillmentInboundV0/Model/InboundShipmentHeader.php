<?php
/**
 * InboundShipmentHeader
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
 * InboundShipmentHeader Class Doc Comment
 *
 * @category Class
 * @description Inbound shipment information used to create and update inbound shipments.
 * @package  Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InboundShipmentHeader implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InboundShipmentHeader';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shipmentName' => 'string',
        'shipFromAddress' => '\Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\Address',
        'destinationFulfillmentCenterId' => 'string',
        'areCasesRequired' => 'bool',
        'shipmentStatus' => '\Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\ShipmentStatus',
        'labelPrepPreference' => '\Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\LabelPrepPreference',
        'intendedBoxContentsSource' => '\Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\IntendedBoxContentsSource'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'shipmentName' => null,
        'shipFromAddress' => null,
        'destinationFulfillmentCenterId' => null,
        'areCasesRequired' => null,
        'shipmentStatus' => null,
        'labelPrepPreference' => null,
        'intendedBoxContentsSource' => null
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
        'shipmentName' => 'ShipmentName',
        'shipFromAddress' => 'ShipFromAddress',
        'destinationFulfillmentCenterId' => 'DestinationFulfillmentCenterId',
        'areCasesRequired' => 'AreCasesRequired',
        'shipmentStatus' => 'ShipmentStatus',
        'labelPrepPreference' => 'LabelPrepPreference',
        'intendedBoxContentsSource' => 'IntendedBoxContentsSource'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipmentName' => 'setShipmentName',
        'shipFromAddress' => 'setShipFromAddress',
        'destinationFulfillmentCenterId' => 'setDestinationFulfillmentCenterId',
        'areCasesRequired' => 'setAreCasesRequired',
        'shipmentStatus' => 'setShipmentStatus',
        'labelPrepPreference' => 'setLabelPrepPreference',
        'intendedBoxContentsSource' => 'setIntendedBoxContentsSource'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipmentName' => 'getShipmentName',
        'shipFromAddress' => 'getShipFromAddress',
        'destinationFulfillmentCenterId' => 'getDestinationFulfillmentCenterId',
        'areCasesRequired' => 'getAreCasesRequired',
        'shipmentStatus' => 'getShipmentStatus',
        'labelPrepPreference' => 'getLabelPrepPreference',
        'intendedBoxContentsSource' => 'getIntendedBoxContentsSource'
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
        $this->container['shipmentName'] = isset($data['shipmentName']) ? $data['shipmentName'] : null;
        $this->container['shipFromAddress'] = isset($data['shipFromAddress']) ? $data['shipFromAddress'] : null;
        $this->container['destinationFulfillmentCenterId'] = isset($data['destinationFulfillmentCenterId']) ? $data['destinationFulfillmentCenterId'] : null;
        $this->container['areCasesRequired'] = isset($data['areCasesRequired']) ? $data['areCasesRequired'] : null;
        $this->container['shipmentStatus'] = isset($data['shipmentStatus']) ? $data['shipmentStatus'] : null;
        $this->container['labelPrepPreference'] = isset($data['labelPrepPreference']) ? $data['labelPrepPreference'] : null;
        $this->container['intendedBoxContentsSource'] = isset($data['intendedBoxContentsSource']) ? $data['intendedBoxContentsSource'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shipmentName'] === null) {
            $invalidProperties[] = "'shipmentName' can't be null";
        }
        if ($this->container['shipFromAddress'] === null) {
            $invalidProperties[] = "'shipFromAddress' can't be null";
        }
        if ($this->container['destinationFulfillmentCenterId'] === null) {
            $invalidProperties[] = "'destinationFulfillmentCenterId' can't be null";
        }
        if ($this->container['shipmentStatus'] === null) {
            $invalidProperties[] = "'shipmentStatus' can't be null";
        }
        if ($this->container['labelPrepPreference'] === null) {
            $invalidProperties[] = "'labelPrepPreference' can't be null";
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
     * Gets shipmentName
     *
     * @return string
     */
    public function getShipmentName()
    {
        return $this->container['shipmentName'];
    }

    /**
     * Sets shipmentName
     *
     * @param string $shipmentName The name for the shipment. Use a naming convention that helps distinguish between shipments over time, such as the date the shipment was created.
     *
     * @return $this
     */
    public function setShipmentName($shipmentName)
    {
        $this->container['shipmentName'] = $shipmentName;

        return $this;
    }

    /**
     * Gets shipFromAddress
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\Address
     */
    public function getShipFromAddress()
    {
        return $this->container['shipFromAddress'];
    }

    /**
     * Sets shipFromAddress
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\Address $shipFromAddress shipFromAddress
     *
     * @return $this
     */
    public function setShipFromAddress($shipFromAddress)
    {
        $this->container['shipFromAddress'] = $shipFromAddress;

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
     * @param string $destinationFulfillmentCenterId The identifier for the fulfillment center to which the shipment will be shipped. Get this value from the InboundShipmentPlan object in the response returned by the createInboundShipmentPlan operation.
     *
     * @return $this
     */
    public function setDestinationFulfillmentCenterId($destinationFulfillmentCenterId)
    {
        $this->container['destinationFulfillmentCenterId'] = $destinationFulfillmentCenterId;

        return $this;
    }

    /**
     * Gets areCasesRequired
     *
     * @return bool|null
     */
    public function getAreCasesRequired()
    {
        return $this->container['areCasesRequired'];
    }

    /**
     * Sets areCasesRequired
     *
     * @param bool|null $areCasesRequired Indicates whether or not an inbound shipment contains case-packed boxes. Note: A shipment must contain either all case-packed boxes or all individually packed boxes.  Possible values:  true - All boxes in the shipment must be case packed.  false - All boxes in the shipment must be individually packed.  Note: If AreCasesRequired = true for an inbound shipment, then the value of QuantityInCase must be greater than zero for every item in the shipment. Otherwise the service returns an error.
     *
     * @return $this
     */
    public function setAreCasesRequired($areCasesRequired)
    {
        $this->container['areCasesRequired'] = $areCasesRequired;

        return $this;
    }

    /**
     * Gets shipmentStatus
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\ShipmentStatus
     */
    public function getShipmentStatus()
    {
        return $this->container['shipmentStatus'];
    }

    /**
     * Sets shipmentStatus
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\ShipmentStatus $shipmentStatus shipmentStatus
     *
     * @return $this
     */
    public function setShipmentStatus($shipmentStatus)
    {
        $this->container['shipmentStatus'] = $shipmentStatus;

        return $this;
    }

    /**
     * Gets labelPrepPreference
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\LabelPrepPreference
     */
    public function getLabelPrepPreference()
    {
        return $this->container['labelPrepPreference'];
    }

    /**
     * Sets labelPrepPreference
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\LabelPrepPreference $labelPrepPreference labelPrepPreference
     *
     * @return $this
     */
    public function setLabelPrepPreference($labelPrepPreference)
    {
        $this->container['labelPrepPreference'] = $labelPrepPreference;

        return $this;
    }

    /**
     * Gets intendedBoxContentsSource
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\IntendedBoxContentsSource|null
     */
    public function getIntendedBoxContentsSource()
    {
        return $this->container['intendedBoxContentsSource'];
    }

    /**
     * Sets intendedBoxContentsSource
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\IntendedBoxContentsSource|null $intendedBoxContentsSource intendedBoxContentsSource
     *
     * @return $this
     */
    public function setIntendedBoxContentsSource($intendedBoxContentsSource)
    {
        $this->container['intendedBoxContentsSource'] = $intendedBoxContentsSource;

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


