<?php
/**
 * ShipmentDetail
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Shipment Invoicing
 *
 * The Selling Partner API for Shipment Invoicing helps you programmatically retrieve shipment invoice information in the Brazil marketplace for a selling partner’s Fulfillment by Amazon (FBA) orders.
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

namespace Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0\Model;

use \ArrayAccess;
use \Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0\ObjectSerializer;

/**
 * ShipmentDetail Class Doc Comment
 *
 * @category Class
 * @description The information required by a selling partner to issue a shipment invoice.
 * @package  Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ShipmentDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipmentDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'warehouseId' => 'string',
        'amazonOrderId' => 'string',
        'amazonShipmentId' => 'string',
        'purchaseDate' => '\DateTime',
        'shippingAddress' => '\Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0\Model\Address',
        'paymentMethodDetails' => 'string[]',
        'marketplaceId' => 'string',
        'sellerId' => 'string',
        'buyerName' => 'string',
        'buyerCounty' => 'string',
        'buyerTaxInfo' => '\Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0\Model\BuyerTaxInfo',
        'marketplaceTaxInfo' => '\Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0\Model\MarketplaceTaxInfo',
        'sellerDisplayName' => 'string',
        'shipmentItems' => '\Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0\Model\ShipmentItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'warehouseId' => null,
        'amazonOrderId' => null,
        'amazonShipmentId' => null,
        'purchaseDate' => 'date-time',
        'shippingAddress' => null,
        'paymentMethodDetails' => null,
        'marketplaceId' => null,
        'sellerId' => null,
        'buyerName' => null,
        'buyerCounty' => null,
        'buyerTaxInfo' => null,
        'marketplaceTaxInfo' => null,
        'sellerDisplayName' => null,
        'shipmentItems' => null
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
        'warehouseId' => 'WarehouseId',
        'amazonOrderId' => 'AmazonOrderId',
        'amazonShipmentId' => 'AmazonShipmentId',
        'purchaseDate' => 'PurchaseDate',
        'shippingAddress' => 'ShippingAddress',
        'paymentMethodDetails' => 'PaymentMethodDetails',
        'marketplaceId' => 'MarketplaceId',
        'sellerId' => 'SellerId',
        'buyerName' => 'BuyerName',
        'buyerCounty' => 'BuyerCounty',
        'buyerTaxInfo' => 'BuyerTaxInfo',
        'marketplaceTaxInfo' => 'MarketplaceTaxInfo',
        'sellerDisplayName' => 'SellerDisplayName',
        'shipmentItems' => 'ShipmentItems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'warehouseId' => 'setWarehouseId',
        'amazonOrderId' => 'setAmazonOrderId',
        'amazonShipmentId' => 'setAmazonShipmentId',
        'purchaseDate' => 'setPurchaseDate',
        'shippingAddress' => 'setShippingAddress',
        'paymentMethodDetails' => 'setPaymentMethodDetails',
        'marketplaceId' => 'setMarketplaceId',
        'sellerId' => 'setSellerId',
        'buyerName' => 'setBuyerName',
        'buyerCounty' => 'setBuyerCounty',
        'buyerTaxInfo' => 'setBuyerTaxInfo',
        'marketplaceTaxInfo' => 'setMarketplaceTaxInfo',
        'sellerDisplayName' => 'setSellerDisplayName',
        'shipmentItems' => 'setShipmentItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'warehouseId' => 'getWarehouseId',
        'amazonOrderId' => 'getAmazonOrderId',
        'amazonShipmentId' => 'getAmazonShipmentId',
        'purchaseDate' => 'getPurchaseDate',
        'shippingAddress' => 'getShippingAddress',
        'paymentMethodDetails' => 'getPaymentMethodDetails',
        'marketplaceId' => 'getMarketplaceId',
        'sellerId' => 'getSellerId',
        'buyerName' => 'getBuyerName',
        'buyerCounty' => 'getBuyerCounty',
        'buyerTaxInfo' => 'getBuyerTaxInfo',
        'marketplaceTaxInfo' => 'getMarketplaceTaxInfo',
        'sellerDisplayName' => 'getSellerDisplayName',
        'shipmentItems' => 'getShipmentItems'
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
        $this->container['warehouseId'] = isset($data['warehouseId']) ? $data['warehouseId'] : null;
        $this->container['amazonOrderId'] = isset($data['amazonOrderId']) ? $data['amazonOrderId'] : null;
        $this->container['amazonShipmentId'] = isset($data['amazonShipmentId']) ? $data['amazonShipmentId'] : null;
        $this->container['purchaseDate'] = isset($data['purchaseDate']) ? $data['purchaseDate'] : null;
        $this->container['shippingAddress'] = isset($data['shippingAddress']) ? $data['shippingAddress'] : null;
        $this->container['paymentMethodDetails'] = isset($data['paymentMethodDetails']) ? $data['paymentMethodDetails'] : null;
        $this->container['marketplaceId'] = isset($data['marketplaceId']) ? $data['marketplaceId'] : null;
        $this->container['sellerId'] = isset($data['sellerId']) ? $data['sellerId'] : null;
        $this->container['buyerName'] = isset($data['buyerName']) ? $data['buyerName'] : null;
        $this->container['buyerCounty'] = isset($data['buyerCounty']) ? $data['buyerCounty'] : null;
        $this->container['buyerTaxInfo'] = isset($data['buyerTaxInfo']) ? $data['buyerTaxInfo'] : null;
        $this->container['marketplaceTaxInfo'] = isset($data['marketplaceTaxInfo']) ? $data['marketplaceTaxInfo'] : null;
        $this->container['sellerDisplayName'] = isset($data['sellerDisplayName']) ? $data['sellerDisplayName'] : null;
        $this->container['shipmentItems'] = isset($data['shipmentItems']) ? $data['shipmentItems'] : null;
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
     * Gets warehouseId
     *
     * @return string|null
     */
    public function getWarehouseId()
    {
        return $this->container['warehouseId'];
    }

    /**
     * Sets warehouseId
     *
     * @param string|null $warehouseId The Amazon-defined identifier for the warehouse.
     *
     * @return $this
     */
    public function setWarehouseId($warehouseId)
    {
        $this->container['warehouseId'] = $warehouseId;

        return $this;
    }

    /**
     * Gets amazonOrderId
     *
     * @return string|null
     */
    public function getAmazonOrderId()
    {
        return $this->container['amazonOrderId'];
    }

    /**
     * Sets amazonOrderId
     *
     * @param string|null $amazonOrderId The Amazon-defined identifier for the order.
     *
     * @return $this
     */
    public function setAmazonOrderId($amazonOrderId)
    {
        $this->container['amazonOrderId'] = $amazonOrderId;

        return $this;
    }

    /**
     * Gets amazonShipmentId
     *
     * @return string|null
     */
    public function getAmazonShipmentId()
    {
        return $this->container['amazonShipmentId'];
    }

    /**
     * Sets amazonShipmentId
     *
     * @param string|null $amazonShipmentId The Amazon-defined identifier for the shipment.
     *
     * @return $this
     */
    public function setAmazonShipmentId($amazonShipmentId)
    {
        $this->container['amazonShipmentId'] = $amazonShipmentId;

        return $this;
    }

    /**
     * Gets purchaseDate
     *
     * @return \DateTime|null
     */
    public function getPurchaseDate()
    {
        return $this->container['purchaseDate'];
    }

    /**
     * Sets purchaseDate
     *
     * @param \DateTime|null $purchaseDate The date and time when the order was created.
     *
     * @return $this
     */
    public function setPurchaseDate($purchaseDate)
    {
        $this->container['purchaseDate'] = $purchaseDate;

        return $this;
    }

    /**
     * Gets shippingAddress
     *
     * @return \Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0\Model\Address|null
     */
    public function getShippingAddress()
    {
        return $this->container['shippingAddress'];
    }

    /**
     * Sets shippingAddress
     *
     * @param \Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0\Model\Address|null $shippingAddress shippingAddress
     *
     * @return $this
     */
    public function setShippingAddress($shippingAddress)
    {
        $this->container['shippingAddress'] = $shippingAddress;

        return $this;
    }

    /**
     * Gets paymentMethodDetails
     *
     * @return string[]|null
     */
    public function getPaymentMethodDetails()
    {
        return $this->container['paymentMethodDetails'];
    }

    /**
     * Sets paymentMethodDetails
     *
     * @param string[]|null $paymentMethodDetails The list of payment method details.
     *
     * @return $this
     */
    public function setPaymentMethodDetails($paymentMethodDetails)
    {
        $this->container['paymentMethodDetails'] = $paymentMethodDetails;

        return $this;
    }

    /**
     * Gets marketplaceId
     *
     * @return string|null
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplaceId'];
    }

    /**
     * Sets marketplaceId
     *
     * @param string|null $marketplaceId The identifier for the marketplace where the order was placed.
     *
     * @return $this
     */
    public function setMarketplaceId($marketplaceId)
    {
        $this->container['marketplaceId'] = $marketplaceId;

        return $this;
    }

    /**
     * Gets sellerId
     *
     * @return string|null
     */
    public function getSellerId()
    {
        return $this->container['sellerId'];
    }

    /**
     * Sets sellerId
     *
     * @param string|null $sellerId The seller identifier.
     *
     * @return $this
     */
    public function setSellerId($sellerId)
    {
        $this->container['sellerId'] = $sellerId;

        return $this;
    }

    /**
     * Gets buyerName
     *
     * @return string|null
     */
    public function getBuyerName()
    {
        return $this->container['buyerName'];
    }

    /**
     * Sets buyerName
     *
     * @param string|null $buyerName The name of the buyer.
     *
     * @return $this
     */
    public function setBuyerName($buyerName)
    {
        $this->container['buyerName'] = $buyerName;

        return $this;
    }

    /**
     * Gets buyerCounty
     *
     * @return string|null
     */
    public function getBuyerCounty()
    {
        return $this->container['buyerCounty'];
    }

    /**
     * Sets buyerCounty
     *
     * @param string|null $buyerCounty The county of the buyer.
     *
     * @return $this
     */
    public function setBuyerCounty($buyerCounty)
    {
        $this->container['buyerCounty'] = $buyerCounty;

        return $this;
    }

    /**
     * Gets buyerTaxInfo
     *
     * @return \Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0\Model\BuyerTaxInfo|null
     */
    public function getBuyerTaxInfo()
    {
        return $this->container['buyerTaxInfo'];
    }

    /**
     * Sets buyerTaxInfo
     *
     * @param \Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0\Model\BuyerTaxInfo|null $buyerTaxInfo buyerTaxInfo
     *
     * @return $this
     */
    public function setBuyerTaxInfo($buyerTaxInfo)
    {
        $this->container['buyerTaxInfo'] = $buyerTaxInfo;

        return $this;
    }

    /**
     * Gets marketplaceTaxInfo
     *
     * @return \Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0\Model\MarketplaceTaxInfo|null
     */
    public function getMarketplaceTaxInfo()
    {
        return $this->container['marketplaceTaxInfo'];
    }

    /**
     * Sets marketplaceTaxInfo
     *
     * @param \Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0\Model\MarketplaceTaxInfo|null $marketplaceTaxInfo marketplaceTaxInfo
     *
     * @return $this
     */
    public function setMarketplaceTaxInfo($marketplaceTaxInfo)
    {
        $this->container['marketplaceTaxInfo'] = $marketplaceTaxInfo;

        return $this;
    }

    /**
     * Gets sellerDisplayName
     *
     * @return string|null
     */
    public function getSellerDisplayName()
    {
        return $this->container['sellerDisplayName'];
    }

    /**
     * Sets sellerDisplayName
     *
     * @param string|null $sellerDisplayName The seller’s friendly name registered in the marketplace.
     *
     * @return $this
     */
    public function setSellerDisplayName($sellerDisplayName)
    {
        $this->container['sellerDisplayName'] = $sellerDisplayName;

        return $this;
    }

    /**
     * Gets shipmentItems
     *
     * @return \Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0\Model\ShipmentItem[]|null
     */
    public function getShipmentItems()
    {
        return $this->container['shipmentItems'];
    }

    /**
     * Sets shipmentItems
     *
     * @param \Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0\Model\ShipmentItem[]|null $shipmentItems A list of shipment items.
     *
     * @return $this
     */
    public function setShipmentItems($shipmentItems)
    {
        $this->container['shipmentItems'] = $shipmentItems;

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


