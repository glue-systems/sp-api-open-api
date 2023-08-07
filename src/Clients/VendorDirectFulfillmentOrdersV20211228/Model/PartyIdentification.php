<?php
/**
 * PartyIdentification
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
 * PartyIdentification Class Doc Comment
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PartyIdentification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PartyIdentification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'partyId' => 'string',
        'address' => '\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\Model\Address',
        'taxInfo' => '\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\Model\TaxRegistrationDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'partyId' => null,
        'address' => null,
        'taxInfo' => null
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
        'partyId' => 'partyId',
        'address' => 'address',
        'taxInfo' => 'taxInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'partyId' => 'setPartyId',
        'address' => 'setAddress',
        'taxInfo' => 'setTaxInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'partyId' => 'getPartyId',
        'address' => 'getAddress',
        'taxInfo' => 'getTaxInfo'
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
        $this->container['partyId'] = isset($data['partyId']) ? $data['partyId'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['taxInfo'] = isset($data['taxInfo']) ? $data['taxInfo'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['partyId'] === null) {
            $invalidProperties[] = "'partyId' can't be null";
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
     * Gets partyId
     *
     * @return string
     */
    public function getPartyId()
    {
        return $this->container['partyId'];
    }

    /**
     * Sets partyId
     *
     * @param string $partyId Assigned identification for the party. For example, warehouse code or vendor code. Please refer to specific party for more details.
     *
     * @return $this
     */
    public function setPartyId($partyId)
    {
        $this->container['partyId'] = $partyId;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\Model\Address|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\Model\Address|null $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets taxInfo
     *
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\Model\TaxRegistrationDetails|null
     */
    public function getTaxInfo()
    {
        return $this->container['taxInfo'];
    }

    /**
     * Sets taxInfo
     *
     * @param \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\Model\TaxRegistrationDetails|null $taxInfo taxInfo
     *
     * @return $this
     */
    public function setTaxInfo($taxInfo)
    {
        $this->container['taxInfo'] = $taxInfo;

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

