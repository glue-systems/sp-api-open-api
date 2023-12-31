<?php
/**
 * RemovalShipmentItemAdjustment
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\FinancesV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Finances
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
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

namespace Glue\SpApi\OpenAPI\Clients\FinancesV0\Model;

use \ArrayAccess;
use \Glue\SpApi\OpenAPI\Clients\FinancesV0\ObjectSerializer;

/**
 * RemovalShipmentItemAdjustment Class Doc Comment
 *
 * @category Class
 * @description Item-level information for a removal shipment item adjustment.
 * @package  Glue\SpApi\OpenAPI\Clients\FinancesV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RemovalShipmentItemAdjustment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RemovalShipmentItemAdjustment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'removalShipmentItemId' => 'string',
        'taxCollectionModel' => 'string',
        'fulfillmentNetworkSKU' => 'string',
        'adjustedQuantity' => 'int',
        'revenueAdjustment' => '\Glue\SpApi\OpenAPI\Clients\FinancesV0\Model\Currency',
        'taxAmountAdjustment' => '\Glue\SpApi\OpenAPI\Clients\FinancesV0\Model\Currency',
        'taxWithheldAdjustment' => '\Glue\SpApi\OpenAPI\Clients\FinancesV0\Model\Currency'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'removalShipmentItemId' => null,
        'taxCollectionModel' => null,
        'fulfillmentNetworkSKU' => null,
        'adjustedQuantity' => 'int32',
        'revenueAdjustment' => null,
        'taxAmountAdjustment' => null,
        'taxWithheldAdjustment' => null
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
        'removalShipmentItemId' => 'RemovalShipmentItemId',
        'taxCollectionModel' => 'TaxCollectionModel',
        'fulfillmentNetworkSKU' => 'FulfillmentNetworkSKU',
        'adjustedQuantity' => 'AdjustedQuantity',
        'revenueAdjustment' => 'RevenueAdjustment',
        'taxAmountAdjustment' => 'TaxAmountAdjustment',
        'taxWithheldAdjustment' => 'TaxWithheldAdjustment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'removalShipmentItemId' => 'setRemovalShipmentItemId',
        'taxCollectionModel' => 'setTaxCollectionModel',
        'fulfillmentNetworkSKU' => 'setFulfillmentNetworkSKU',
        'adjustedQuantity' => 'setAdjustedQuantity',
        'revenueAdjustment' => 'setRevenueAdjustment',
        'taxAmountAdjustment' => 'setTaxAmountAdjustment',
        'taxWithheldAdjustment' => 'setTaxWithheldAdjustment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'removalShipmentItemId' => 'getRemovalShipmentItemId',
        'taxCollectionModel' => 'getTaxCollectionModel',
        'fulfillmentNetworkSKU' => 'getFulfillmentNetworkSKU',
        'adjustedQuantity' => 'getAdjustedQuantity',
        'revenueAdjustment' => 'getRevenueAdjustment',
        'taxAmountAdjustment' => 'getTaxAmountAdjustment',
        'taxWithheldAdjustment' => 'getTaxWithheldAdjustment'
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
        $this->container['removalShipmentItemId'] = isset($data['removalShipmentItemId']) ? $data['removalShipmentItemId'] : null;
        $this->container['taxCollectionModel'] = isset($data['taxCollectionModel']) ? $data['taxCollectionModel'] : null;
        $this->container['fulfillmentNetworkSKU'] = isset($data['fulfillmentNetworkSKU']) ? $data['fulfillmentNetworkSKU'] : null;
        $this->container['adjustedQuantity'] = isset($data['adjustedQuantity']) ? $data['adjustedQuantity'] : null;
        $this->container['revenueAdjustment'] = isset($data['revenueAdjustment']) ? $data['revenueAdjustment'] : null;
        $this->container['taxAmountAdjustment'] = isset($data['taxAmountAdjustment']) ? $data['taxAmountAdjustment'] : null;
        $this->container['taxWithheldAdjustment'] = isset($data['taxWithheldAdjustment']) ? $data['taxWithheldAdjustment'] : null;
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
     * Gets removalShipmentItemId
     *
     * @return string|null
     */
    public function getRemovalShipmentItemId()
    {
        return $this->container['removalShipmentItemId'];
    }

    /**
     * Sets removalShipmentItemId
     *
     * @param string|null $removalShipmentItemId An identifier for an item in a removal shipment.
     *
     * @return $this
     */
    public function setRemovalShipmentItemId($removalShipmentItemId)
    {
        $this->container['removalShipmentItemId'] = $removalShipmentItemId;

        return $this;
    }

    /**
     * Gets taxCollectionModel
     *
     * @return string|null
     */
    public function getTaxCollectionModel()
    {
        return $this->container['taxCollectionModel'];
    }

    /**
     * Sets taxCollectionModel
     *
     * @param string|null $taxCollectionModel The tax collection model applied to the item.  Possible values:  * MarketplaceFacilitator - Tax is withheld and remitted to the taxing authority by Amazon on behalf of the seller.  * Standard - Tax is paid to the seller and not remitted to the taxing authority by Amazon.
     *
     * @return $this
     */
    public function setTaxCollectionModel($taxCollectionModel)
    {
        $this->container['taxCollectionModel'] = $taxCollectionModel;

        return $this;
    }

    /**
     * Gets fulfillmentNetworkSKU
     *
     * @return string|null
     */
    public function getFulfillmentNetworkSKU()
    {
        return $this->container['fulfillmentNetworkSKU'];
    }

    /**
     * Sets fulfillmentNetworkSKU
     *
     * @param string|null $fulfillmentNetworkSKU The Amazon fulfillment network SKU for the item.
     *
     * @return $this
     */
    public function setFulfillmentNetworkSKU($fulfillmentNetworkSKU)
    {
        $this->container['fulfillmentNetworkSKU'] = $fulfillmentNetworkSKU;

        return $this;
    }

    /**
     * Gets adjustedQuantity
     *
     * @return int|null
     */
    public function getAdjustedQuantity()
    {
        return $this->container['adjustedQuantity'];
    }

    /**
     * Sets adjustedQuantity
     *
     * @param int|null $adjustedQuantity Adjusted quantity of removal shipmentItemAdjustment items.
     *
     * @return $this
     */
    public function setAdjustedQuantity($adjustedQuantity)
    {
        $this->container['adjustedQuantity'] = $adjustedQuantity;

        return $this;
    }

    /**
     * Gets revenueAdjustment
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FinancesV0\Model\Currency|null
     */
    public function getRevenueAdjustment()
    {
        return $this->container['revenueAdjustment'];
    }

    /**
     * Sets revenueAdjustment
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FinancesV0\Model\Currency|null $revenueAdjustment revenueAdjustment
     *
     * @return $this
     */
    public function setRevenueAdjustment($revenueAdjustment)
    {
        $this->container['revenueAdjustment'] = $revenueAdjustment;

        return $this;
    }

    /**
     * Gets taxAmountAdjustment
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FinancesV0\Model\Currency|null
     */
    public function getTaxAmountAdjustment()
    {
        return $this->container['taxAmountAdjustment'];
    }

    /**
     * Sets taxAmountAdjustment
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FinancesV0\Model\Currency|null $taxAmountAdjustment taxAmountAdjustment
     *
     * @return $this
     */
    public function setTaxAmountAdjustment($taxAmountAdjustment)
    {
        $this->container['taxAmountAdjustment'] = $taxAmountAdjustment;

        return $this;
    }

    /**
     * Gets taxWithheldAdjustment
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FinancesV0\Model\Currency|null
     */
    public function getTaxWithheldAdjustment()
    {
        return $this->container['taxWithheldAdjustment'];
    }

    /**
     * Sets taxWithheldAdjustment
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FinancesV0\Model\Currency|null $taxWithheldAdjustment taxWithheldAdjustment
     *
     * @return $this
     */
    public function setTaxWithheldAdjustment($taxWithheldAdjustment)
    {
        $this->container['taxWithheldAdjustment'] = $taxWithheldAdjustment;

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


