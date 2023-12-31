<?php
/**
 * PartneredSmallParcelPackageOutput
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
 * PartneredSmallParcelPackageOutput Class Doc Comment
 *
 * @category Class
 * @description Dimension, weight, and shipping information for the package.
 * @package  Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PartneredSmallParcelPackageOutput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PartneredSmallParcelPackageOutput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'dimensions' => '\Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\Dimensions',
        'weight' => '\Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\Weight',
        'carrierName' => 'string',
        'trackingId' => 'string',
        'packageStatus' => '\Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\PackageStatus'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'dimensions' => null,
        'weight' => null,
        'carrierName' => null,
        'trackingId' => null,
        'packageStatus' => null
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
        'dimensions' => 'Dimensions',
        'weight' => 'Weight',
        'carrierName' => 'CarrierName',
        'trackingId' => 'TrackingId',
        'packageStatus' => 'PackageStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dimensions' => 'setDimensions',
        'weight' => 'setWeight',
        'carrierName' => 'setCarrierName',
        'trackingId' => 'setTrackingId',
        'packageStatus' => 'setPackageStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dimensions' => 'getDimensions',
        'weight' => 'getWeight',
        'carrierName' => 'getCarrierName',
        'trackingId' => 'getTrackingId',
        'packageStatus' => 'getPackageStatus'
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
        $this->container['dimensions'] = isset($data['dimensions']) ? $data['dimensions'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['carrierName'] = isset($data['carrierName']) ? $data['carrierName'] : null;
        $this->container['trackingId'] = isset($data['trackingId']) ? $data['trackingId'] : null;
        $this->container['packageStatus'] = isset($data['packageStatus']) ? $data['packageStatus'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['dimensions'] === null) {
            $invalidProperties[] = "'dimensions' can't be null";
        }
        if ($this->container['weight'] === null) {
            $invalidProperties[] = "'weight' can't be null";
        }
        if ($this->container['carrierName'] === null) {
            $invalidProperties[] = "'carrierName' can't be null";
        }
        if ($this->container['trackingId'] === null) {
            $invalidProperties[] = "'trackingId' can't be null";
        }
        if ($this->container['packageStatus'] === null) {
            $invalidProperties[] = "'packageStatus' can't be null";
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
     * Gets dimensions
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\Dimensions
     */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\Dimensions $dimensions dimensions
     *
     * @return $this
     */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\Weight
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\Weight $weight weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets carrierName
     *
     * @return string
     */
    public function getCarrierName()
    {
        return $this->container['carrierName'];
    }

    /**
     * Sets carrierName
     *
     * @param string $carrierName The carrier specified with a previous call to putTransportDetails.
     *
     * @return $this
     */
    public function setCarrierName($carrierName)
    {
        $this->container['carrierName'] = $carrierName;

        return $this;
    }

    /**
     * Gets trackingId
     *
     * @return string
     */
    public function getTrackingId()
    {
        return $this->container['trackingId'];
    }

    /**
     * Sets trackingId
     *
     * @param string $trackingId The tracking number of the package, provided by the carrier.
     *
     * @return $this
     */
    public function setTrackingId($trackingId)
    {
        $this->container['trackingId'] = $trackingId;

        return $this;
    }

    /**
     * Gets packageStatus
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\PackageStatus
     */
    public function getPackageStatus()
    {
        return $this->container['packageStatus'];
    }

    /**
     * Sets packageStatus
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\PackageStatus $packageStatus packageStatus
     *
     * @return $this
     */
    public function setPackageStatus($packageStatus)
    {
        $this->container['packageStatus'] = $packageStatus;

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


