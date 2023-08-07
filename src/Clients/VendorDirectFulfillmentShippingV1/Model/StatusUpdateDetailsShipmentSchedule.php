<?php
/**
 * StatusUpdateDetailsShipmentSchedule
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
 * StatusUpdateDetailsShipmentSchedule Class Doc Comment
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class StatusUpdateDetailsShipmentSchedule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StatusUpdateDetails_shipmentSchedule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'apptWindowStartDateTime' => '\DateTime',
        'estimatedDeliveryDateTime' => '\DateTime',
        'apptWindowEndDateTime' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'apptWindowStartDateTime' => 'date-time',
        'estimatedDeliveryDateTime' => 'date-time',
        'apptWindowEndDateTime' => 'date-time'
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
        'apptWindowStartDateTime' => 'apptWindowStartDateTime',
        'estimatedDeliveryDateTime' => 'estimatedDeliveryDateTime',
        'apptWindowEndDateTime' => 'apptWindowEndDateTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'apptWindowStartDateTime' => 'setApptWindowStartDateTime',
        'estimatedDeliveryDateTime' => 'setEstimatedDeliveryDateTime',
        'apptWindowEndDateTime' => 'setApptWindowEndDateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'apptWindowStartDateTime' => 'getApptWindowStartDateTime',
        'estimatedDeliveryDateTime' => 'getEstimatedDeliveryDateTime',
        'apptWindowEndDateTime' => 'getApptWindowEndDateTime'
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
        $this->container['apptWindowStartDateTime'] = isset($data['apptWindowStartDateTime']) ? $data['apptWindowStartDateTime'] : null;
        $this->container['estimatedDeliveryDateTime'] = isset($data['estimatedDeliveryDateTime']) ? $data['estimatedDeliveryDateTime'] : null;
        $this->container['apptWindowEndDateTime'] = isset($data['apptWindowEndDateTime']) ? $data['apptWindowEndDateTime'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets apptWindowStartDateTime
     *
     * @return \DateTime|null
     */
    public function getApptWindowStartDateTime()
    {
        return $this->container['apptWindowStartDateTime'];
    }

    /**
     * Sets apptWindowStartDateTime
     *
     * @param \DateTime|null $apptWindowStartDateTime This field indicates the date and time at the start of the appointment window scheduled to deliver the shipment. This field is expected to be in ISO-8601 date/time format, with UTC time zone or UTC offset. For example, 2020-07-16T23:00:00Z or 2020-07-16T23:00:00+01:00.
     *
     * @return $this
     */
    public function setApptWindowStartDateTime($apptWindowStartDateTime)
    {
        $this->container['apptWindowStartDateTime'] = $apptWindowStartDateTime;

        return $this;
    }

    /**
     * Gets estimatedDeliveryDateTime
     *
     * @return \DateTime|null
     */
    public function getEstimatedDeliveryDateTime()
    {
        return $this->container['estimatedDeliveryDateTime'];
    }

    /**
     * Sets estimatedDeliveryDateTime
     *
     * @param \DateTime|null $estimatedDeliveryDateTime Date on which the shipment is expected to reach the customer delivery location. This field is expected to be in ISO-8601 date/time format, with UTC time zone or UTC offset. For example, 2020-07-16T23:00:00Z or 2020-07-16T23:00:00+01:00.
     *
     * @return $this
     */
    public function setEstimatedDeliveryDateTime($estimatedDeliveryDateTime)
    {
        $this->container['estimatedDeliveryDateTime'] = $estimatedDeliveryDateTime;

        return $this;
    }

    /**
     * Gets apptWindowEndDateTime
     *
     * @return \DateTime|null
     */
    public function getApptWindowEndDateTime()
    {
        return $this->container['apptWindowEndDateTime'];
    }

    /**
     * Sets apptWindowEndDateTime
     *
     * @param \DateTime|null $apptWindowEndDateTime This field indicates the date and time at the end of the appointment window scheduled to deliver the shipment. This field is expected to be in ISO-8601 date/time format, with UTC time zone or UTC offset. For example, 2020-07-16T23:00:00Z or 2020-07-16T23:00:00+01:00.
     *
     * @return $this
     */
    public function setApptWindowEndDateTime($apptWindowEndDateTime)
    {
        $this->container['apptWindowEndDateTime'] = $apptWindowEndDateTime;

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

