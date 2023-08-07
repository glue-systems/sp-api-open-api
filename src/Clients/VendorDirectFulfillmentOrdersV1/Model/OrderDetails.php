<?php
/**
 * OrderDetails
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Direct Fulfillment Orders
 *
 * The Selling Partner API for Direct Fulfillment Orders provides programmatic access to a direct fulfillment vendor's order data.
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

namespace Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Model;

use \ArrayAccess;
use \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\ObjectSerializer;

/**
 * OrderDetails Class Doc Comment
 *
 * @category Class
 * @description Details of an order.
 * @package  Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'customerOrderNumber' => 'string',
        'orderDate' => '\DateTime',
        'orderStatus' => 'string',
        'shipmentDetails' => '\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Model\ShipmentDetails',
        'taxTotal' => '\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Model\OrderDetailsTaxTotal',
        'sellingParty' => '\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Model\PartyIdentification',
        'shipFromParty' => '\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Model\PartyIdentification',
        'shipToParty' => '\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Model\Address',
        'billToParty' => '\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Model\PartyIdentification',
        'items' => '\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Model\OrderItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'customerOrderNumber' => null,
        'orderDate' => 'date-time',
        'orderStatus' => null,
        'shipmentDetails' => null,
        'taxTotal' => null,
        'sellingParty' => null,
        'shipFromParty' => null,
        'shipToParty' => null,
        'billToParty' => null,
        'items' => null
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
        'customerOrderNumber' => 'customerOrderNumber',
        'orderDate' => 'orderDate',
        'orderStatus' => 'orderStatus',
        'shipmentDetails' => 'shipmentDetails',
        'taxTotal' => 'taxTotal',
        'sellingParty' => 'sellingParty',
        'shipFromParty' => 'shipFromParty',
        'shipToParty' => 'shipToParty',
        'billToParty' => 'billToParty',
        'items' => 'items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customerOrderNumber' => 'setCustomerOrderNumber',
        'orderDate' => 'setOrderDate',
        'orderStatus' => 'setOrderStatus',
        'shipmentDetails' => 'setShipmentDetails',
        'taxTotal' => 'setTaxTotal',
        'sellingParty' => 'setSellingParty',
        'shipFromParty' => 'setShipFromParty',
        'shipToParty' => 'setShipToParty',
        'billToParty' => 'setBillToParty',
        'items' => 'setItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customerOrderNumber' => 'getCustomerOrderNumber',
        'orderDate' => 'getOrderDate',
        'orderStatus' => 'getOrderStatus',
        'shipmentDetails' => 'getShipmentDetails',
        'taxTotal' => 'getTaxTotal',
        'sellingParty' => 'getSellingParty',
        'shipFromParty' => 'getShipFromParty',
        'shipToParty' => 'getShipToParty',
        'billToParty' => 'getBillToParty',
        'items' => 'getItems'
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

    const ORDER_STATUS__NEW = 'NEW';
    const ORDER_STATUS_SHIPPED = 'SHIPPED';
    const ORDER_STATUS_ACCEPTED = 'ACCEPTED';
    const ORDER_STATUS_CANCELLED = 'CANCELLED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrderStatusAllowableValues()
    {
        return [
            self::ORDER_STATUS__NEW,
            self::ORDER_STATUS_SHIPPED,
            self::ORDER_STATUS_ACCEPTED,
            self::ORDER_STATUS_CANCELLED,
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
        $this->container['customerOrderNumber'] = isset($data['customerOrderNumber']) ? $data['customerOrderNumber'] : null;
        $this->container['orderDate'] = isset($data['orderDate']) ? $data['orderDate'] : null;
        $this->container['orderStatus'] = isset($data['orderStatus']) ? $data['orderStatus'] : null;
        $this->container['shipmentDetails'] = isset($data['shipmentDetails']) ? $data['shipmentDetails'] : null;
        $this->container['taxTotal'] = isset($data['taxTotal']) ? $data['taxTotal'] : null;
        $this->container['sellingParty'] = isset($data['sellingParty']) ? $data['sellingParty'] : null;
        $this->container['shipFromParty'] = isset($data['shipFromParty']) ? $data['shipFromParty'] : null;
        $this->container['shipToParty'] = isset($data['shipToParty']) ? $data['shipToParty'] : null;
        $this->container['billToParty'] = isset($data['billToParty']) ? $data['billToParty'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['customerOrderNumber'] === null) {
            $invalidProperties[] = "'customerOrderNumber' can't be null";
        }
        if ($this->container['orderDate'] === null) {
            $invalidProperties[] = "'orderDate' can't be null";
        }
        $allowedValues = $this->getOrderStatusAllowableValues();
        if (!is_null($this->container['orderStatus']) && !in_array($this->container['orderStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'orderStatus', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['shipmentDetails'] === null) {
            $invalidProperties[] = "'shipmentDetails' can't be null";
        }
        if ($this->container['sellingParty'] === null) {
            $invalidProperties[] = "'sellingParty' can't be null";
        }
        if ($this->container['shipFromParty'] === null) {
            $invalidProperties[] = "'shipFromParty' can't be null";
        }
        if ($this->container['shipToParty'] === null) {
            $invalidProperties[] = "'shipToParty' can't be null";
        }
        if ($this->container['billToParty'] === null) {
            $invalidProperties[] = "'billToParty' can't be null";
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
     * Gets customerOrderNumber
     *
     * @return string
     */
    public function getCustomerOrderNumber()
    {
        return $this->container['customerOrderNumber'];
    }

    /**
     * Sets customerOrderNumber
     *
     * @param string $customerOrderNumber The customer order number.
     *
     * @return $this
     */
    public function setCustomerOrderNumber($customerOrderNumber)
    {
        $this->container['customerOrderNumber'] = $customerOrderNumber;

        return $this;
    }

    /**
     * Gets orderDate
     *
     * @return \DateTime
     */
    public function getOrderDate()
    {
        return $this->container['orderDate'];
    }

    /**
     * Sets orderDate
     *
     * @param \DateTime $orderDate The date the order was placed. This field is expected to be in ISO-8601 date/time format, for example:2018-07-16T23:00:00Z/ 2018-07-16T23:00:00-05:00 /2018-07-16T23:00:00-08:00. If no time zone is specified, UTC should be assumed.
     *
     * @return $this
     */
    public function setOrderDate($orderDate)
    {
        $this->container['orderDate'] = $orderDate;

        return $this;
    }

    /**
     * Gets orderStatus
     *
     * @return string|null
     */
    public function getOrderStatus()
    {
        return $this->container['orderStatus'];
    }

    /**
     * Sets orderStatus
     *
     * @param string|null $orderStatus Current status of the order.
     *
     * @return $this
     */
    public function setOrderStatus($orderStatus)
    {
        $allowedValues = $this->getOrderStatusAllowableValues();
        if (!is_null($orderStatus) && !in_array($orderStatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'orderStatus', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['orderStatus'] = $orderStatus;

        return $this;
    }

    /**
     * Gets shipmentDetails
     *
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Model\ShipmentDetails
     */
    public function getShipmentDetails()
    {
        return $this->container['shipmentDetails'];
    }

    /**
     * Sets shipmentDetails
     *
     * @param \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Model\ShipmentDetails $shipmentDetails shipmentDetails
     *
     * @return $this
     */
    public function setShipmentDetails($shipmentDetails)
    {
        $this->container['shipmentDetails'] = $shipmentDetails;

        return $this;
    }

    /**
     * Gets taxTotal
     *
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Model\OrderDetailsTaxTotal|null
     */
    public function getTaxTotal()
    {
        return $this->container['taxTotal'];
    }

    /**
     * Sets taxTotal
     *
     * @param \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Model\OrderDetailsTaxTotal|null $taxTotal taxTotal
     *
     * @return $this
     */
    public function setTaxTotal($taxTotal)
    {
        $this->container['taxTotal'] = $taxTotal;

        return $this;
    }

    /**
     * Gets sellingParty
     *
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Model\PartyIdentification
     */
    public function getSellingParty()
    {
        return $this->container['sellingParty'];
    }

    /**
     * Sets sellingParty
     *
     * @param \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Model\PartyIdentification $sellingParty sellingParty
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
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Model\PartyIdentification
     */
    public function getShipFromParty()
    {
        return $this->container['shipFromParty'];
    }

    /**
     * Sets shipFromParty
     *
     * @param \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Model\PartyIdentification $shipFromParty shipFromParty
     *
     * @return $this
     */
    public function setShipFromParty($shipFromParty)
    {
        $this->container['shipFromParty'] = $shipFromParty;

        return $this;
    }

    /**
     * Gets shipToParty
     *
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Model\Address
     */
    public function getShipToParty()
    {
        return $this->container['shipToParty'];
    }

    /**
     * Sets shipToParty
     *
     * @param \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Model\Address $shipToParty shipToParty
     *
     * @return $this
     */
    public function setShipToParty($shipToParty)
    {
        $this->container['shipToParty'] = $shipToParty;

        return $this;
    }

    /**
     * Gets billToParty
     *
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Model\PartyIdentification
     */
    public function getBillToParty()
    {
        return $this->container['billToParty'];
    }

    /**
     * Sets billToParty
     *
     * @param \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Model\PartyIdentification $billToParty billToParty
     *
     * @return $this
     */
    public function setBillToParty($billToParty)
    {
        $this->container['billToParty'] = $billToParty;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Model\OrderItem[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Model\OrderItem[] $items A list of items in this purchase order.
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

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


