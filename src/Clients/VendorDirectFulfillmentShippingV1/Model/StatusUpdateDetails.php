<?php
/**
 * StatusUpdateDetails
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
 * StatusUpdateDetails Class Doc Comment
 *
 * @category Class
 * @description Details for the shipment status update given by the vendor for the specific package.
 * @package  Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class StatusUpdateDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StatusUpdateDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'trackingNumber' => 'string',
        'statusCode' => 'string',
        'reasonCode' => 'string',
        'statusDateTime' => '\DateTime',
        'statusLocationAddress' => '\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Model\Address',
        'shipmentSchedule' => '\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Model\StatusUpdateDetailsShipmentSchedule'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'trackingNumber' => null,
        'statusCode' => null,
        'reasonCode' => null,
        'statusDateTime' => 'date-time',
        'statusLocationAddress' => null,
        'shipmentSchedule' => null
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
        'trackingNumber' => 'trackingNumber',
        'statusCode' => 'statusCode',
        'reasonCode' => 'reasonCode',
        'statusDateTime' => 'statusDateTime',
        'statusLocationAddress' => 'statusLocationAddress',
        'shipmentSchedule' => 'shipmentSchedule'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'trackingNumber' => 'setTrackingNumber',
        'statusCode' => 'setStatusCode',
        'reasonCode' => 'setReasonCode',
        'statusDateTime' => 'setStatusDateTime',
        'statusLocationAddress' => 'setStatusLocationAddress',
        'shipmentSchedule' => 'setShipmentSchedule'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'trackingNumber' => 'getTrackingNumber',
        'statusCode' => 'getStatusCode',
        'reasonCode' => 'getReasonCode',
        'statusDateTime' => 'getStatusDateTime',
        'statusLocationAddress' => 'getStatusLocationAddress',
        'shipmentSchedule' => 'getShipmentSchedule'
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
        $this->container['trackingNumber'] = isset($data['trackingNumber']) ? $data['trackingNumber'] : null;
        $this->container['statusCode'] = isset($data['statusCode']) ? $data['statusCode'] : null;
        $this->container['reasonCode'] = isset($data['reasonCode']) ? $data['reasonCode'] : null;
        $this->container['statusDateTime'] = isset($data['statusDateTime']) ? $data['statusDateTime'] : null;
        $this->container['statusLocationAddress'] = isset($data['statusLocationAddress']) ? $data['statusLocationAddress'] : null;
        $this->container['shipmentSchedule'] = isset($data['shipmentSchedule']) ? $data['shipmentSchedule'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['trackingNumber'] === null) {
            $invalidProperties[] = "'trackingNumber' can't be null";
        }
        if ($this->container['statusCode'] === null) {
            $invalidProperties[] = "'statusCode' can't be null";
        }
        if ($this->container['reasonCode'] === null) {
            $invalidProperties[] = "'reasonCode' can't be null";
        }
        if ($this->container['statusDateTime'] === null) {
            $invalidProperties[] = "'statusDateTime' can't be null";
        }
        if ($this->container['statusLocationAddress'] === null) {
            $invalidProperties[] = "'statusLocationAddress' can't be null";
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
     * Gets trackingNumber
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->container['trackingNumber'];
    }

    /**
     * Sets trackingNumber
     *
     * @param string $trackingNumber This is required to be provided for every package and should match with the trackingNumber sent for the shipment confirmation.
     *
     * @return $this
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->container['trackingNumber'] = $trackingNumber;

        return $this;
    }

    /**
     * Gets statusCode
     *
     * @return string
     */
    public function getStatusCode()
    {
        return $this->container['statusCode'];
    }

    /**
     * Sets statusCode
     *
     * @param string $statusCode Indicates the shipment status code of the package that provides transportation information for Amazon tracking systems and ultimately for the final customer.
     *
     * @return $this
     */
    public function setStatusCode($statusCode)
    {
        $this->container['statusCode'] = $statusCode;

        return $this;
    }

    /**
     * Gets reasonCode
     *
     * @return string
     */
    public function getReasonCode()
    {
        return $this->container['reasonCode'];
    }

    /**
     * Sets reasonCode
     *
     * @param string $reasonCode Provides a reason code for the status of the package that will provide additional information about the transportation status.
     *
     * @return $this
     */
    public function setReasonCode($reasonCode)
    {
        $this->container['reasonCode'] = $reasonCode;

        return $this;
    }

    /**
     * Gets statusDateTime
     *
     * @return \DateTime
     */
    public function getStatusDateTime()
    {
        return $this->container['statusDateTime'];
    }

    /**
     * Sets statusDateTime
     *
     * @param \DateTime $statusDateTime The date and time when the shipment status was updated. This field is expected to be in ISO-8601 date/time format, with UTC time zone or UTC offset. For example, 2020-07-16T23:00:00Z or 2020-07-16T23:00:00+01:00.
     *
     * @return $this
     */
    public function setStatusDateTime($statusDateTime)
    {
        $this->container['statusDateTime'] = $statusDateTime;

        return $this;
    }

    /**
     * Gets statusLocationAddress
     *
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Model\Address
     */
    public function getStatusLocationAddress()
    {
        return $this->container['statusLocationAddress'];
    }

    /**
     * Sets statusLocationAddress
     *
     * @param \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Model\Address $statusLocationAddress statusLocationAddress
     *
     * @return $this
     */
    public function setStatusLocationAddress($statusLocationAddress)
    {
        $this->container['statusLocationAddress'] = $statusLocationAddress;

        return $this;
    }

    /**
     * Gets shipmentSchedule
     *
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Model\StatusUpdateDetailsShipmentSchedule|null
     */
    public function getShipmentSchedule()
    {
        return $this->container['shipmentSchedule'];
    }

    /**
     * Sets shipmentSchedule
     *
     * @param \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Model\StatusUpdateDetailsShipmentSchedule|null $shipmentSchedule shipmentSchedule
     *
     * @return $this
     */
    public function setShipmentSchedule($shipmentSchedule)
    {
        $this->container['shipmentSchedule'] = $shipmentSchedule;

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


