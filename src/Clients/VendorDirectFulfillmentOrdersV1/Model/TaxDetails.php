<?php
/**
 * TaxDetails
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
 * TaxDetails Class Doc Comment
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TaxDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TaxDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'taxRate' => 'string',
        'taxAmount' => '\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Model\Money',
        'taxableAmount' => '\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Model\Money',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'taxRate' => null,
        'taxAmount' => null,
        'taxableAmount' => null,
        'type' => null
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
        'taxRate' => 'taxRate',
        'taxAmount' => 'taxAmount',
        'taxableAmount' => 'taxableAmount',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'taxRate' => 'setTaxRate',
        'taxAmount' => 'setTaxAmount',
        'taxableAmount' => 'setTaxableAmount',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'taxRate' => 'getTaxRate',
        'taxAmount' => 'getTaxAmount',
        'taxableAmount' => 'getTaxableAmount',
        'type' => 'getType'
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

    const TYPE_CONSUMPTION = 'CONSUMPTION';
    const TYPE_GST = 'GST';
    const TYPE_MW_ST = 'MwSt.';
    const TYPE_PST = 'PST';
    const TYPE_TOTAL = 'TOTAL';
    const TYPE_TVA = 'TVA';
    const TYPE_VAT = 'VAT';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CONSUMPTION,
            self::TYPE_GST,
            self::TYPE_MW_ST,
            self::TYPE_PST,
            self::TYPE_TOTAL,
            self::TYPE_TVA,
            self::TYPE_VAT,
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
        $this->container['taxRate'] = isset($data['taxRate']) ? $data['taxRate'] : null;
        $this->container['taxAmount'] = isset($data['taxAmount']) ? $data['taxAmount'] : null;
        $this->container['taxableAmount'] = isset($data['taxableAmount']) ? $data['taxableAmount'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['taxAmount'] === null) {
            $invalidProperties[] = "'taxAmount' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
     * Gets taxRate
     *
     * @return string|null
     */
    public function getTaxRate()
    {
        return $this->container['taxRate'];
    }

    /**
     * Sets taxRate
     *
     * @param string|null $taxRate A decimal number with no loss of precision. Useful when precision loss is unacceptable, as with currencies. Follows RFC7159 for number representation.
     *
     * @return $this
     */
    public function setTaxRate($taxRate)
    {
        $this->container['taxRate'] = $taxRate;

        return $this;
    }

    /**
     * Gets taxAmount
     *
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Model\Money
     */
    public function getTaxAmount()
    {
        return $this->container['taxAmount'];
    }

    /**
     * Sets taxAmount
     *
     * @param \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Model\Money $taxAmount taxAmount
     *
     * @return $this
     */
    public function setTaxAmount($taxAmount)
    {
        $this->container['taxAmount'] = $taxAmount;

        return $this;
    }

    /**
     * Gets taxableAmount
     *
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Model\Money|null
     */
    public function getTaxableAmount()
    {
        return $this->container['taxableAmount'];
    }

    /**
     * Sets taxableAmount
     *
     * @param \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Model\Money|null $taxableAmount taxableAmount
     *
     * @return $this
     */
    public function setTaxableAmount($taxableAmount)
    {
        $this->container['taxableAmount'] = $taxableAmount;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Tax type.
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

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


