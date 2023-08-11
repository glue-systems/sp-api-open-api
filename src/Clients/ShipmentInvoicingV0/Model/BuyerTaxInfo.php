<?php
/**
 * BuyerTaxInfo
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
 * BuyerTaxInfo Class Doc Comment
 *
 * @category Class
 * @description Tax information about the buyer.
 * @package  Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BuyerTaxInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BuyerTaxInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'companyLegalName' => 'string',
        'taxingRegion' => 'string',
        'taxClassifications' => '\Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0\Model\TaxClassification[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'companyLegalName' => null,
        'taxingRegion' => null,
        'taxClassifications' => null
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
        'companyLegalName' => 'CompanyLegalName',
        'taxingRegion' => 'TaxingRegion',
        'taxClassifications' => 'TaxClassifications'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'companyLegalName' => 'setCompanyLegalName',
        'taxingRegion' => 'setTaxingRegion',
        'taxClassifications' => 'setTaxClassifications'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'companyLegalName' => 'getCompanyLegalName',
        'taxingRegion' => 'getTaxingRegion',
        'taxClassifications' => 'getTaxClassifications'
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
        $this->container['companyLegalName'] = isset($data['companyLegalName']) ? $data['companyLegalName'] : null;
        $this->container['taxingRegion'] = isset($data['taxingRegion']) ? $data['taxingRegion'] : null;
        $this->container['taxClassifications'] = isset($data['taxClassifications']) ? $data['taxClassifications'] : null;
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
     * Gets companyLegalName
     *
     * @return string|null
     */
    public function getCompanyLegalName()
    {
        return $this->container['companyLegalName'];
    }

    /**
     * Sets companyLegalName
     *
     * @param string|null $companyLegalName The legal name of the company.
     *
     * @return $this
     */
    public function setCompanyLegalName($companyLegalName)
    {
        $this->container['companyLegalName'] = $companyLegalName;

        return $this;
    }

    /**
     * Gets taxingRegion
     *
     * @return string|null
     */
    public function getTaxingRegion()
    {
        return $this->container['taxingRegion'];
    }

    /**
     * Sets taxingRegion
     *
     * @param string|null $taxingRegion The country or region imposing the tax.
     *
     * @return $this
     */
    public function setTaxingRegion($taxingRegion)
    {
        $this->container['taxingRegion'] = $taxingRegion;

        return $this;
    }

    /**
     * Gets taxClassifications
     *
     * @return \Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0\Model\TaxClassification[]|null
     */
    public function getTaxClassifications()
    {
        return $this->container['taxClassifications'];
    }

    /**
     * Sets taxClassifications
     *
     * @param \Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0\Model\TaxClassification[]|null $taxClassifications The list of tax classifications.
     *
     * @return $this
     */
    public function setTaxClassifications($taxClassifications)
    {
        $this->container['taxClassifications'] = $taxClassifications;

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


