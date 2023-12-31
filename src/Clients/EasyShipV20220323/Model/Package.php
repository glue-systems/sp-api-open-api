<?php
/**
 * Package
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\EasyShipV20220323
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Easy Ship
 *
 * The Selling Partner API for Easy Ship helps you build applications that help sellers manage and ship Amazon Easy Ship orders.  Your Easy Ship applications can:  * Get available time slots for packages to be scheduled for delivery.  * Schedule, reschedule, and cancel Easy Ship orders.  * Print labels, invoices, and warranties.  See the [Marketplace Support Table](doc:easyship-api-v2022-03-23-use-case-guide#marketplace-support-table) for the differences in Easy Ship operations by marketplace.
 *
 * OpenAPI spec version: 2022-03-23
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model;

use \ArrayAccess;
use \Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\ObjectSerializer;

/**
 * Package Class Doc Comment
 *
 * @category Class
 * @description A package. This object contains all the details of the scheduled Easy Ship package including the package identifier, physical attributes such as dimensions and weight, selected time slot to handover the package to carrier, status of the package, and tracking/invoice details.
 * @package  Glue\SpApi\OpenAPI\Clients\EasyShipV20220323
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Package implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Package';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'scheduledPackageId' => '\Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model\ScheduledPackageId',
        'packageDimensions' => '\Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model\Dimensions',
        'packageWeight' => '\Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model\Weight',
        'packageItems' => '\Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model\Item[]',
        'packageTimeSlot' => '\Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model\TimeSlot',
        'packageIdentifier' => 'string',
        'invoice' => '\Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model\InvoiceData',
        'packageStatus' => '\Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model\PackageStatus',
        'trackingDetails' => '\Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model\TrackingDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'scheduledPackageId' => null,
        'packageDimensions' => null,
        'packageWeight' => null,
        'packageItems' => null,
        'packageTimeSlot' => null,
        'packageIdentifier' => null,
        'invoice' => null,
        'packageStatus' => null,
        'trackingDetails' => null
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
        'scheduledPackageId' => 'scheduledPackageId',
        'packageDimensions' => 'packageDimensions',
        'packageWeight' => 'packageWeight',
        'packageItems' => 'packageItems',
        'packageTimeSlot' => 'packageTimeSlot',
        'packageIdentifier' => 'packageIdentifier',
        'invoice' => 'invoice',
        'packageStatus' => 'packageStatus',
        'trackingDetails' => 'trackingDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'scheduledPackageId' => 'setScheduledPackageId',
        'packageDimensions' => 'setPackageDimensions',
        'packageWeight' => 'setPackageWeight',
        'packageItems' => 'setPackageItems',
        'packageTimeSlot' => 'setPackageTimeSlot',
        'packageIdentifier' => 'setPackageIdentifier',
        'invoice' => 'setInvoice',
        'packageStatus' => 'setPackageStatus',
        'trackingDetails' => 'setTrackingDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'scheduledPackageId' => 'getScheduledPackageId',
        'packageDimensions' => 'getPackageDimensions',
        'packageWeight' => 'getPackageWeight',
        'packageItems' => 'getPackageItems',
        'packageTimeSlot' => 'getPackageTimeSlot',
        'packageIdentifier' => 'getPackageIdentifier',
        'invoice' => 'getInvoice',
        'packageStatus' => 'getPackageStatus',
        'trackingDetails' => 'getTrackingDetails'
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
        $this->container['scheduledPackageId'] = isset($data['scheduledPackageId']) ? $data['scheduledPackageId'] : null;
        $this->container['packageDimensions'] = isset($data['packageDimensions']) ? $data['packageDimensions'] : null;
        $this->container['packageWeight'] = isset($data['packageWeight']) ? $data['packageWeight'] : null;
        $this->container['packageItems'] = isset($data['packageItems']) ? $data['packageItems'] : null;
        $this->container['packageTimeSlot'] = isset($data['packageTimeSlot']) ? $data['packageTimeSlot'] : null;
        $this->container['packageIdentifier'] = isset($data['packageIdentifier']) ? $data['packageIdentifier'] : null;
        $this->container['invoice'] = isset($data['invoice']) ? $data['invoice'] : null;
        $this->container['packageStatus'] = isset($data['packageStatus']) ? $data['packageStatus'] : null;
        $this->container['trackingDetails'] = isset($data['trackingDetails']) ? $data['trackingDetails'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['scheduledPackageId'] === null) {
            $invalidProperties[] = "'scheduledPackageId' can't be null";
        }
        if ($this->container['packageDimensions'] === null) {
            $invalidProperties[] = "'packageDimensions' can't be null";
        }
        if ($this->container['packageWeight'] === null) {
            $invalidProperties[] = "'packageWeight' can't be null";
        }
        if ($this->container['packageTimeSlot'] === null) {
            $invalidProperties[] = "'packageTimeSlot' can't be null";
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
     * Gets scheduledPackageId
     *
     * @return \Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model\ScheduledPackageId
     */
    public function getScheduledPackageId()
    {
        return $this->container['scheduledPackageId'];
    }

    /**
     * Sets scheduledPackageId
     *
     * @param \Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model\ScheduledPackageId $scheduledPackageId scheduledPackageId
     *
     * @return $this
     */
    public function setScheduledPackageId($scheduledPackageId)
    {
        $this->container['scheduledPackageId'] = $scheduledPackageId;

        return $this;
    }

    /**
     * Gets packageDimensions
     *
     * @return \Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model\Dimensions
     */
    public function getPackageDimensions()
    {
        return $this->container['packageDimensions'];
    }

    /**
     * Sets packageDimensions
     *
     * @param \Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model\Dimensions $packageDimensions packageDimensions
     *
     * @return $this
     */
    public function setPackageDimensions($packageDimensions)
    {
        $this->container['packageDimensions'] = $packageDimensions;

        return $this;
    }

    /**
     * Gets packageWeight
     *
     * @return \Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model\Weight
     */
    public function getPackageWeight()
    {
        return $this->container['packageWeight'];
    }

    /**
     * Sets packageWeight
     *
     * @param \Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model\Weight $packageWeight packageWeight
     *
     * @return $this
     */
    public function setPackageWeight($packageWeight)
    {
        $this->container['packageWeight'] = $packageWeight;

        return $this;
    }

    /**
     * Gets packageItems
     *
     * @return \Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model\Item[]|null
     */
    public function getPackageItems()
    {
        return $this->container['packageItems'];
    }

    /**
     * Sets packageItems
     *
     * @param \Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model\Item[]|null $packageItems A list of items contained in the package.
     *
     * @return $this
     */
    public function setPackageItems($packageItems)
    {
        $this->container['packageItems'] = $packageItems;

        return $this;
    }

    /**
     * Gets packageTimeSlot
     *
     * @return \Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model\TimeSlot
     */
    public function getPackageTimeSlot()
    {
        return $this->container['packageTimeSlot'];
    }

    /**
     * Sets packageTimeSlot
     *
     * @param \Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model\TimeSlot $packageTimeSlot packageTimeSlot
     *
     * @return $this
     */
    public function setPackageTimeSlot($packageTimeSlot)
    {
        $this->container['packageTimeSlot'] = $packageTimeSlot;

        return $this;
    }

    /**
     * Gets packageIdentifier
     *
     * @return string|null
     */
    public function getPackageIdentifier()
    {
        return $this->container['packageIdentifier'];
    }

    /**
     * Sets packageIdentifier
     *
     * @param string|null $packageIdentifier Optional seller-created identifier that is printed on the shipping label to help the seller identify the package.
     *
     * @return $this
     */
    public function setPackageIdentifier($packageIdentifier)
    {
        $this->container['packageIdentifier'] = $packageIdentifier;

        return $this;
    }

    /**
     * Gets invoice
     *
     * @return \Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model\InvoiceData|null
     */
    public function getInvoice()
    {
        return $this->container['invoice'];
    }

    /**
     * Sets invoice
     *
     * @param \Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model\InvoiceData|null $invoice invoice
     *
     * @return $this
     */
    public function setInvoice($invoice)
    {
        $this->container['invoice'] = $invoice;

        return $this;
    }

    /**
     * Gets packageStatus
     *
     * @return \Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model\PackageStatus|null
     */
    public function getPackageStatus()
    {
        return $this->container['packageStatus'];
    }

    /**
     * Sets packageStatus
     *
     * @param \Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model\PackageStatus|null $packageStatus packageStatus
     *
     * @return $this
     */
    public function setPackageStatus($packageStatus)
    {
        $this->container['packageStatus'] = $packageStatus;

        return $this;
    }

    /**
     * Gets trackingDetails
     *
     * @return \Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model\TrackingDetails|null
     */
    public function getTrackingDetails()
    {
        return $this->container['trackingDetails'];
    }

    /**
     * Sets trackingDetails
     *
     * @param \Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model\TrackingDetails|null $trackingDetails trackingDetails
     *
     * @return $this
     */
    public function setTrackingDetails($trackingDetails)
    {
        $this->container['trackingDetails'] = $trackingDetails;

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


