<?php
/**
 * OrderAcknowledgementItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Direct Fulfillment Orders
 *
 * The Selling Partner API for Direct Fulfillment Orders provides programmatic access to a direct fulfillment vendor's order data.
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

namespace Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\Model;

use \ArrayAccess;
use \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\ObjectSerializer;

/**
 * OrderAcknowledgementItem Class Doc Comment
 *
 * @category Class
 * @description Details of an individual order being acknowledged.
 * @package  Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderAcknowledgementItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderAcknowledgementItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'purchaseOrderNumber' => 'string',
        'vendorOrderNumber' => 'string',
        'acknowledgementDate' => '\DateTime',
        'acknowledgementStatus' => '\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\Model\AcknowledgementStatus',
        'sellingParty' => '\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\Model\PartyIdentification',
        'shipFromParty' => '\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\Model\PartyIdentification',
        'itemAcknowledgements' => '\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\Model\OrderItemAcknowledgement[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'purchaseOrderNumber' => null,
        'vendorOrderNumber' => null,
        'acknowledgementDate' => 'date-time',
        'acknowledgementStatus' => null,
        'sellingParty' => null,
        'shipFromParty' => null,
        'itemAcknowledgements' => null
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
        'purchaseOrderNumber' => 'purchaseOrderNumber',
        'vendorOrderNumber' => 'vendorOrderNumber',
        'acknowledgementDate' => 'acknowledgementDate',
        'acknowledgementStatus' => 'acknowledgementStatus',
        'sellingParty' => 'sellingParty',
        'shipFromParty' => 'shipFromParty',
        'itemAcknowledgements' => 'itemAcknowledgements'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'purchaseOrderNumber' => 'setPurchaseOrderNumber',
        'vendorOrderNumber' => 'setVendorOrderNumber',
        'acknowledgementDate' => 'setAcknowledgementDate',
        'acknowledgementStatus' => 'setAcknowledgementStatus',
        'sellingParty' => 'setSellingParty',
        'shipFromParty' => 'setShipFromParty',
        'itemAcknowledgements' => 'setItemAcknowledgements'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'purchaseOrderNumber' => 'getPurchaseOrderNumber',
        'vendorOrderNumber' => 'getVendorOrderNumber',
        'acknowledgementDate' => 'getAcknowledgementDate',
        'acknowledgementStatus' => 'getAcknowledgementStatus',
        'sellingParty' => 'getSellingParty',
        'shipFromParty' => 'getShipFromParty',
        'itemAcknowledgements' => 'getItemAcknowledgements'
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
        $this->container['purchaseOrderNumber'] = isset($data['purchaseOrderNumber']) ? $data['purchaseOrderNumber'] : null;
        $this->container['vendorOrderNumber'] = isset($data['vendorOrderNumber']) ? $data['vendorOrderNumber'] : null;
        $this->container['acknowledgementDate'] = isset($data['acknowledgementDate']) ? $data['acknowledgementDate'] : null;
        $this->container['acknowledgementStatus'] = isset($data['acknowledgementStatus']) ? $data['acknowledgementStatus'] : null;
        $this->container['sellingParty'] = isset($data['sellingParty']) ? $data['sellingParty'] : null;
        $this->container['shipFromParty'] = isset($data['shipFromParty']) ? $data['shipFromParty'] : null;
        $this->container['itemAcknowledgements'] = isset($data['itemAcknowledgements']) ? $data['itemAcknowledgements'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['purchaseOrderNumber'] === null) {
            $invalidProperties[] = "'purchaseOrderNumber' can't be null";
        }
        if ($this->container['vendorOrderNumber'] === null) {
            $invalidProperties[] = "'vendorOrderNumber' can't be null";
        }
        if ($this->container['acknowledgementDate'] === null) {
            $invalidProperties[] = "'acknowledgementDate' can't be null";
        }
        if ($this->container['acknowledgementStatus'] === null) {
            $invalidProperties[] = "'acknowledgementStatus' can't be null";
        }
        if ($this->container['sellingParty'] === null) {
            $invalidProperties[] = "'sellingParty' can't be null";
        }
        if ($this->container['shipFromParty'] === null) {
            $invalidProperties[] = "'shipFromParty' can't be null";
        }
        if ($this->container['itemAcknowledgements'] === null) {
            $invalidProperties[] = "'itemAcknowledgements' can't be null";
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
     * Gets purchaseOrderNumber
     *
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->container['purchaseOrderNumber'];
    }

    /**
     * Sets purchaseOrderNumber
     *
     * @param string $purchaseOrderNumber The purchase order number for this order. Formatting Notes: alpha-numeric code.
     *
     * @return $this
     */
    public function setPurchaseOrderNumber($purchaseOrderNumber)
    {
        $this->container['purchaseOrderNumber'] = $purchaseOrderNumber;

        return $this;
    }

    /**
     * Gets vendorOrderNumber
     *
     * @return string
     */
    public function getVendorOrderNumber()
    {
        return $this->container['vendorOrderNumber'];
    }

    /**
     * Sets vendorOrderNumber
     *
     * @param string $vendorOrderNumber The vendor's order number for this order.
     *
     * @return $this
     */
    public function setVendorOrderNumber($vendorOrderNumber)
    {
        $this->container['vendorOrderNumber'] = $vendorOrderNumber;

        return $this;
    }

    /**
     * Gets acknowledgementDate
     *
     * @return \DateTime
     */
    public function getAcknowledgementDate()
    {
        return $this->container['acknowledgementDate'];
    }

    /**
     * Sets acknowledgementDate
     *
     * @param \DateTime $acknowledgementDate The date and time when the order is acknowledged, in ISO-8601 date/time format. For example: 2018-07-16T23:00:00Z / 2018-07-16T23:00:00-05:00 / 2018-07-16T23:00:00-08:00.
     *
     * @return $this
     */
    public function setAcknowledgementDate($acknowledgementDate)
    {
        $this->container['acknowledgementDate'] = $acknowledgementDate;

        return $this;
    }

    /**
     * Gets acknowledgementStatus
     *
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\Model\AcknowledgementStatus
     */
    public function getAcknowledgementStatus()
    {
        return $this->container['acknowledgementStatus'];
    }

    /**
     * Sets acknowledgementStatus
     *
     * @param \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\Model\AcknowledgementStatus $acknowledgementStatus acknowledgementStatus
     *
     * @return $this
     */
    public function setAcknowledgementStatus($acknowledgementStatus)
    {
        $this->container['acknowledgementStatus'] = $acknowledgementStatus;

        return $this;
    }

    /**
     * Gets sellingParty
     *
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\Model\PartyIdentification
     */
    public function getSellingParty()
    {
        return $this->container['sellingParty'];
    }

    /**
     * Sets sellingParty
     *
     * @param \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\Model\PartyIdentification $sellingParty sellingParty
     *
     * @return $this
     */
    public function setSellingParty($sellingParty)
    {
        $this->container['sellingParty'] = $sellingParty;

        return $this;
    }

    /**
     * Gets shipFromParty
     *
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\Model\PartyIdentification
     */
    public function getShipFromParty()
    {
        return $this->container['shipFromParty'];
    }

    /**
     * Sets shipFromParty
     *
     * @param \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\Model\PartyIdentification $shipFromParty shipFromParty
     *
     * @return $this
     */
    public function setShipFromParty($shipFromParty)
    {
        $this->container['shipFromParty'] = $shipFromParty;

        return $this;
    }

    /**
     * Gets itemAcknowledgements
     *
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\Model\OrderItemAcknowledgement[]
     */
    public function getItemAcknowledgements()
    {
        return $this->container['itemAcknowledgements'];
    }

    /**
     * Sets itemAcknowledgements
     *
     * @param \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\Model\OrderItemAcknowledgement[] $itemAcknowledgements Item details including acknowledged quantity.
     *
     * @return $this
     */
    public function setItemAcknowledgements($itemAcknowledgements)
    {
        $this->container['itemAcknowledgements'] = $itemAcknowledgements;

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


