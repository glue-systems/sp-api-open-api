<?php
/**
 * Address
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\OrdersV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Orders
 *
 * The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools. The Orders API only supports orders that are less than two years old. Orders more than two years old will not show in the API response.
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

namespace Glue\SpApi\OpenAPI\Clients\OrdersV0\Model;

use \ArrayAccess;
use \Glue\SpApi\OpenAPI\Clients\OrdersV0\ObjectSerializer;

/**
 * Address Class Doc Comment
 *
 * @category Class
 * @description The shipping address for the order.
 * @package  Glue\SpApi\OpenAPI\Clients\OrdersV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Address implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'addressLine1' => 'string',
        'addressLine2' => 'string',
        'addressLine3' => 'string',
        'city' => 'string',
        'county' => 'string',
        'district' => 'string',
        'stateOrRegion' => 'string',
        'municipality' => 'string',
        'postalCode' => 'string',
        'countryCode' => 'string',
        'phone' => 'string',
        'addressType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'addressLine1' => null,
        'addressLine2' => null,
        'addressLine3' => null,
        'city' => null,
        'county' => null,
        'district' => null,
        'stateOrRegion' => null,
        'municipality' => null,
        'postalCode' => null,
        'countryCode' => null,
        'phone' => null,
        'addressType' => null
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
        'name' => 'Name',
        'addressLine1' => 'AddressLine1',
        'addressLine2' => 'AddressLine2',
        'addressLine3' => 'AddressLine3',
        'city' => 'City',
        'county' => 'County',
        'district' => 'District',
        'stateOrRegion' => 'StateOrRegion',
        'municipality' => 'Municipality',
        'postalCode' => 'PostalCode',
        'countryCode' => 'CountryCode',
        'phone' => 'Phone',
        'addressType' => 'AddressType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'addressLine1' => 'setAddressLine1',
        'addressLine2' => 'setAddressLine2',
        'addressLine3' => 'setAddressLine3',
        'city' => 'setCity',
        'county' => 'setCounty',
        'district' => 'setDistrict',
        'stateOrRegion' => 'setStateOrRegion',
        'municipality' => 'setMunicipality',
        'postalCode' => 'setPostalCode',
        'countryCode' => 'setCountryCode',
        'phone' => 'setPhone',
        'addressType' => 'setAddressType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'addressLine1' => 'getAddressLine1',
        'addressLine2' => 'getAddressLine2',
        'addressLine3' => 'getAddressLine3',
        'city' => 'getCity',
        'county' => 'getCounty',
        'district' => 'getDistrict',
        'stateOrRegion' => 'getStateOrRegion',
        'municipality' => 'getMunicipality',
        'postalCode' => 'getPostalCode',
        'countryCode' => 'getCountryCode',
        'phone' => 'getPhone',
        'addressType' => 'getAddressType'
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

    const ADDRESS_TYPE_RESIDENTIAL = 'Residential';
    const ADDRESS_TYPE_COMMERCIAL = 'Commercial';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAddressTypeAllowableValues()
    {
        return [
            self::ADDRESS_TYPE_RESIDENTIAL,
            self::ADDRESS_TYPE_COMMERCIAL,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['addressLine1'] = isset($data['addressLine1']) ? $data['addressLine1'] : null;
        $this->container['addressLine2'] = isset($data['addressLine2']) ? $data['addressLine2'] : null;
        $this->container['addressLine3'] = isset($data['addressLine3']) ? $data['addressLine3'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['county'] = isset($data['county']) ? $data['county'] : null;
        $this->container['district'] = isset($data['district']) ? $data['district'] : null;
        $this->container['stateOrRegion'] = isset($data['stateOrRegion']) ? $data['stateOrRegion'] : null;
        $this->container['municipality'] = isset($data['municipality']) ? $data['municipality'] : null;
        $this->container['postalCode'] = isset($data['postalCode']) ? $data['postalCode'] : null;
        $this->container['countryCode'] = isset($data['countryCode']) ? $data['countryCode'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['addressType'] = isset($data['addressType']) ? $data['addressType'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        $allowedValues = $this->getAddressTypeAllowableValues();
        if (!is_null($this->container['addressType']) && !in_array($this->container['addressType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'addressType', must be one of '%s'",
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets addressLine1
     *
     * @return string|null
     */
    public function getAddressLine1()
    {
        return $this->container['addressLine1'];
    }

    /**
     * Sets addressLine1
     *
     * @param string|null $addressLine1 The street address.
     *
     * @return $this
     */
    public function setAddressLine1($addressLine1)
    {
        $this->container['addressLine1'] = $addressLine1;

        return $this;
    }

    /**
     * Gets addressLine2
     *
     * @return string|null
     */
    public function getAddressLine2()
    {
        return $this->container['addressLine2'];
    }

    /**
     * Sets addressLine2
     *
     * @param string|null $addressLine2 Additional street address information, if required.
     *
     * @return $this
     */
    public function setAddressLine2($addressLine2)
    {
        $this->container['addressLine2'] = $addressLine2;

        return $this;
    }

    /**
     * Gets addressLine3
     *
     * @return string|null
     */
    public function getAddressLine3()
    {
        return $this->container['addressLine3'];
    }

    /**
     * Sets addressLine3
     *
     * @param string|null $addressLine3 Additional street address information, if required.
     *
     * @return $this
     */
    public function setAddressLine3($addressLine3)
    {
        $this->container['addressLine3'] = $addressLine3;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city The city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets county
     *
     * @return string|null
     */
    public function getCounty()
    {
        return $this->container['county'];
    }

    /**
     * Sets county
     *
     * @param string|null $county The county.
     *
     * @return $this
     */
    public function setCounty($county)
    {
        $this->container['county'] = $county;

        return $this;
    }

    /**
     * Gets district
     *
     * @return string|null
     */
    public function getDistrict()
    {
        return $this->container['district'];
    }

    /**
     * Sets district
     *
     * @param string|null $district The district.
     *
     * @return $this
     */
    public function setDistrict($district)
    {
        $this->container['district'] = $district;

        return $this;
    }

    /**
     * Gets stateOrRegion
     *
     * @return string|null
     */
    public function getStateOrRegion()
    {
        return $this->container['stateOrRegion'];
    }

    /**
     * Sets stateOrRegion
     *
     * @param string|null $stateOrRegion The state or region.
     *
     * @return $this
     */
    public function setStateOrRegion($stateOrRegion)
    {
        $this->container['stateOrRegion'] = $stateOrRegion;

        return $this;
    }

    /**
     * Gets municipality
     *
     * @return string|null
     */
    public function getMunicipality()
    {
        return $this->container['municipality'];
    }

    /**
     * Sets municipality
     *
     * @param string|null $municipality The municipality.
     *
     * @return $this
     */
    public function setMunicipality($municipality)
    {
        $this->container['municipality'] = $municipality;

        return $this;
    }

    /**
     * Gets postalCode
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postalCode'];
    }

    /**
     * Sets postalCode
     *
     * @param string|null $postalCode The postal code.
     *
     * @return $this
     */
    public function setPostalCode($postalCode)
    {
        $this->container['postalCode'] = $postalCode;

        return $this;
    }

    /**
     * Gets countryCode
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->container['countryCode'];
    }

    /**
     * Sets countryCode
     *
     * @param string|null $countryCode The country code. A two-character country code, in ISO 3166-1 alpha-2 format.
     *
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->container['countryCode'] = $countryCode;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone The phone number. Not returned for Fulfillment by Amazon (FBA) orders.
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets addressType
     *
     * @return string|null
     */
    public function getAddressType()
    {
        return $this->container['addressType'];
    }

    /**
     * Sets addressType
     *
     * @param string|null $addressType The address type of the shipping address.
     *
     * @return $this
     */
    public function setAddressType($addressType)
    {
        $allowedValues = $this->getAddressTypeAllowableValues();
        if (!is_null($addressType) && !in_array($addressType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'addressType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['addressType'] = $addressType;

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


