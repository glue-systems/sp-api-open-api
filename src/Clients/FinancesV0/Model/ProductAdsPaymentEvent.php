<?php
/**
 * ProductAdsPaymentEvent
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
 * ProductAdsPaymentEvent Class Doc Comment
 *
 * @category Class
 * @description A Sponsored Products payment event.
 * @package  Glue\SpApi\OpenAPI\Clients\FinancesV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProductAdsPaymentEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductAdsPaymentEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'postedDate' => '\DateTime',
        'transactionType' => 'string',
        'invoiceId' => 'string',
        'baseValue' => '\Glue\SpApi\OpenAPI\Clients\FinancesV0\Model\Currency',
        'taxValue' => '\Glue\SpApi\OpenAPI\Clients\FinancesV0\Model\Currency',
        'transactionValue' => '\Glue\SpApi\OpenAPI\Clients\FinancesV0\Model\Currency'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'postedDate' => 'date-time',
        'transactionType' => null,
        'invoiceId' => null,
        'baseValue' => null,
        'taxValue' => null,
        'transactionValue' => null
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
        'postedDate' => 'postedDate',
        'transactionType' => 'transactionType',
        'invoiceId' => 'invoiceId',
        'baseValue' => 'baseValue',
        'taxValue' => 'taxValue',
        'transactionValue' => 'transactionValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'postedDate' => 'setPostedDate',
        'transactionType' => 'setTransactionType',
        'invoiceId' => 'setInvoiceId',
        'baseValue' => 'setBaseValue',
        'taxValue' => 'setTaxValue',
        'transactionValue' => 'setTransactionValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'postedDate' => 'getPostedDate',
        'transactionType' => 'getTransactionType',
        'invoiceId' => 'getInvoiceId',
        'baseValue' => 'getBaseValue',
        'taxValue' => 'getTaxValue',
        'transactionValue' => 'getTransactionValue'
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
        $this->container['postedDate'] = isset($data['postedDate']) ? $data['postedDate'] : null;
        $this->container['transactionType'] = isset($data['transactionType']) ? $data['transactionType'] : null;
        $this->container['invoiceId'] = isset($data['invoiceId']) ? $data['invoiceId'] : null;
        $this->container['baseValue'] = isset($data['baseValue']) ? $data['baseValue'] : null;
        $this->container['taxValue'] = isset($data['taxValue']) ? $data['taxValue'] : null;
        $this->container['transactionValue'] = isset($data['transactionValue']) ? $data['transactionValue'] : null;
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
     * Gets postedDate
     *
     * @return \DateTime|null
     */
    public function getPostedDate()
    {
        return $this->container['postedDate'];
    }

    /**
     * Sets postedDate
     *
     * @param \DateTime|null $postedDate postedDate
     *
     * @return $this
     */
    public function setPostedDate($postedDate)
    {
        $this->container['postedDate'] = $postedDate;

        return $this;
    }

    /**
     * Gets transactionType
     *
     * @return string|null
     */
    public function getTransactionType()
    {
        return $this->container['transactionType'];
    }

    /**
     * Sets transactionType
     *
     * @param string|null $transactionType Indicates if the transaction is for a charge or a refund.  Possible values:  * charge - Charge  * refund - Refund
     *
     * @return $this
     */
    public function setTransactionType($transactionType)
    {
        $this->container['transactionType'] = $transactionType;

        return $this;
    }

    /**
     * Gets invoiceId
     *
     * @return string|null
     */
    public function getInvoiceId()
    {
        return $this->container['invoiceId'];
    }

    /**
     * Sets invoiceId
     *
     * @param string|null $invoiceId Identifier for the invoice that the transaction appears in.
     *
     * @return $this
     */
    public function setInvoiceId($invoiceId)
    {
        $this->container['invoiceId'] = $invoiceId;

        return $this;
    }

    /**
     * Gets baseValue
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FinancesV0\Model\Currency|null
     */
    public function getBaseValue()
    {
        return $this->container['baseValue'];
    }

    /**
     * Sets baseValue
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FinancesV0\Model\Currency|null $baseValue baseValue
     *
     * @return $this
     */
    public function setBaseValue($baseValue)
    {
        $this->container['baseValue'] = $baseValue;

        return $this;
    }

    /**
     * Gets taxValue
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FinancesV0\Model\Currency|null
     */
    public function getTaxValue()
    {
        return $this->container['taxValue'];
    }

    /**
     * Sets taxValue
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FinancesV0\Model\Currency|null $taxValue taxValue
     *
     * @return $this
     */
    public function setTaxValue($taxValue)
    {
        $this->container['taxValue'] = $taxValue;

        return $this;
    }

    /**
     * Gets transactionValue
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FinancesV0\Model\Currency|null
     */
    public function getTransactionValue()
    {
        return $this->container['transactionValue'];
    }

    /**
     * Sets transactionValue
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FinancesV0\Model\Currency|null $transactionValue transactionValue
     *
     * @return $this
     */
    public function setTransactionValue($transactionValue)
    {
        $this->container['transactionValue'] = $transactionValue;

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

