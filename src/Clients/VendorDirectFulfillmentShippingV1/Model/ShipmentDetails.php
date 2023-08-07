<?php
/**
 * ShipmentDetails
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Direct Fulfillment Shipping
 *
 * The Selling Partner API for Direct Fulfillment Shipping provides programmatic access to a direct fulfillment vendor's shipping data.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Model;

use \ArrayAccess;
use \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\ObjectSerializer;

/**
 * ShipmentDetails Class Doc Comment
 *
 * @category Class
 * @description Details about a shipment.
 * @package  Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ShipmentDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipmentDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shippedDate' => '\DateTime',
        'shipmentStatus' => 'string',
        'isPriorityShipment' => 'bool',
        'vendorOrderNumber' => 'string',
        'estimatedDeliveryDate' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'shippedDate' => 'date-time',
        'shipmentStatus' => null,
        'isPriorityShipment' => null,
        'vendorOrderNumber' => null,
        'estimatedDeliveryDate' => 'date-time'
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
        'shippedDate' => 'shippedDate',
        'shipmentStatus' => 'shipmentStatus',
        'isPriorityShipment' => 'isPriorityShipment',
        'vendorOrderNumber' => 'vendorOrderNumber',
        'estimatedDeliveryDate' => 'estimatedDeliveryDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shippedDate' => 'setShippedDate',
        'shipmentStatus' => 'setShipmentStatus',
        'isPriorityShipment' => 'setIsPriorityShipment',
        'vendorOrderNumber' => 'setVendorOrderNumber',
        'estimatedDeliveryDate' => 'setEstimatedDeliveryDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shippedDate' => 'getShippedDate',
        'shipmentStatus' => 'getShipmentStatus',
        'isPriorityShipment' => 'getIsPriorityShipment',
        'vendorOrderNumber' => 'getVendorOrderNumber',
        'estimatedDeliveryDate' => 'getEstimatedDeliveryDate'
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

    const SHIPMENT_STATUS_SHIPPED = 'SHIPPED';
    const SHIPMENT_STATUS_FLOOR_DENIAL = 'FLOOR_DENIAL';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShipmentStatusAllowableValues()
    {
        return [
            self::SHIPMENT_STATUS_SHIPPED,
            self::SHIPMENT_STATUS_FLOOR_DENIAL,
        ];
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
        $this->container['shippedDate'] = isset($data['shippedDate']) ? $data['shippedDate'] : null;
        $this->container['shipmentStatus'] = isset($data['shipmentStatus']) ? $data['shipmentStatus'] : null;
        $this->container['isPriorityShipment'] = isset($data['isPriorityShipment']) ? $data['isPriorityShipment'] : null;
        $this->container['vendorOrderNumber'] = isset($data['vendorOrderNumber']) ? $data['vendorOrderNumber'] : null;
        $this->container['estimatedDeliveryDate'] = isset($data['estimatedDeliveryDate']) ? $data['estimatedDeliveryDate'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shippedDate'] === null) {
            $invalidProperties[] = "'shippedDate' can't be null";
        }
        if ($this->container['shipmentStatus'] === null) {
            $invalidProperties[] = "'shipmentStatus' can't be null";
        }
        $allowedValues = $this->getShipmentStatusAllowableValues();
        if (!is_null($this->container['shipmentStatus']) && !in_array($this->container['shipmentStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'shipmentStatus', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets shippedDate
     *
     * @return \DateTime
     */
    public function getShippedDate()
    {
        return $this->container['shippedDate'];
    }

    /**
     * Sets shippedDate
     *
     * @param \DateTime $shippedDate This field indicates the date of the departure of the shipment from vendor's location. Vendors are requested to send ASNs within 30 minutes of departure from their warehouse/distribution center or at least 6 hours prior to the appointment time at the Amazon destination warehouse, whichever is sooner. Shipped date mentioned in the Shipment Confirmation should not be in the future.
     *
     * @return $this
     */
    public function setShippedDate($shippedDate)
    {
        $this->container['shippedDate'] = $shippedDate;

        return $this;
    }

    /**
     * Gets shipmentStatus
     *
     * @return string
     */
    public function getShipmentStatus()
    {
        return $this->container['shipmentStatus'];
    }

    /**
     * Sets shipmentStatus
     *
     * @param string $shipmentStatus Indicate the shipment status.
     *
     * @return $this
     */
    public function setShipmentStatus($shipmentStatus)
    {
        $allowedValues = $this->getShipmentStatusAllowableValues();
        if (!in_array($shipmentStatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'shipmentStatus', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['shipmentStatus'] = $shipmentStatus;

        return $this;
    }

    /**
     * Gets isPriorityShipment
     *
     * @return bool|null
     */
    public function getIsPriorityShipment()
    {
        return $this->container['isPriorityShipment'];
    }

    /**
     * Sets isPriorityShipment
     *
     * @param bool|null $isPriorityShipment Provide the priority of the shipment.
     *
     * @return $this
     */
    public function setIsPriorityShipment($isPriorityShipment)
    {
        $this->container['isPriorityShipment'] = $isPriorityShipment;

        return $this;
    }

    /**
     * Gets vendorOrderNumber
     *
     * @return string|null
     */
    public function getVendorOrderNumber()
    {
        return $this->container['vendorOrderNumber'];
    }

    /**
     * Sets vendorOrderNumber
     *
     * @param string|null $vendorOrderNumber The vendor order number is a unique identifier generated by a vendor for their reference.
     *
     * @return $this
     */
    public function setVendorOrderNumber($vendorOrderNumber)
    {
        $this->container['vendorOrderNumber'] = $vendorOrderNumber;

        return $this;
    }

    /**
     * Gets estimatedDeliveryDate
     *
     * @return \DateTime|null
     */
    public function getEstimatedDeliveryDate()
    {
        return $this->container['estimatedDeliveryDate'];
    }

    /**
     * Sets estimatedDeliveryDate
     *
     * @param \DateTime|null $estimatedDeliveryDate Date on which the shipment is expected to reach the buyer's warehouse. It needs to be an estimate based on the average transit time between the ship-from location and the destination. The exact appointment time will be provided by buyer and is potentially not known when creating the shipment confirmation.
     *
     * @return $this
     */
    public function setEstimatedDeliveryDate($estimatedDeliveryDate)
    {
        $this->container['estimatedDeliveryDate'] = $estimatedDeliveryDate;

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

