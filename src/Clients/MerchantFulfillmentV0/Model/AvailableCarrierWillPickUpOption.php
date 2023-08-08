<?php
/**
 * AvailableCarrierWillPickUpOption
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Merchant Fulfillment
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
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

namespace Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Model;

use \ArrayAccess;
use \Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\ObjectSerializer;

/**
 * AvailableCarrierWillPickUpOption Class Doc Comment
 *
 * @category Class
 * @description Indicates whether the carrier will pick up the package, and what fee is charged, if any.
 * @package  Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AvailableCarrierWillPickUpOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AvailableCarrierWillPickUpOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'carrierWillPickUpOption' => '\Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Model\CarrierWillPickUpOption',
        'charge' => '\Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Model\CurrencyAmount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'carrierWillPickUpOption' => null,
        'charge' => null
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
        'carrierWillPickUpOption' => 'CarrierWillPickUpOption',
        'charge' => 'Charge'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'carrierWillPickUpOption' => 'setCarrierWillPickUpOption',
        'charge' => 'setCharge'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'carrierWillPickUpOption' => 'getCarrierWillPickUpOption',
        'charge' => 'getCharge'
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
        $this->container['carrierWillPickUpOption'] = isset($data['carrierWillPickUpOption']) ? $data['carrierWillPickUpOption'] : null;
        $this->container['charge'] = isset($data['charge']) ? $data['charge'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['carrierWillPickUpOption'] === null) {
            $invalidProperties[] = "'carrierWillPickUpOption' can't be null";
        }
        if ($this->container['charge'] === null) {
            $invalidProperties[] = "'charge' can't be null";
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
     * Gets carrierWillPickUpOption
     *
     * @return \Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Model\CarrierWillPickUpOption
     */
    public function getCarrierWillPickUpOption()
    {
        return $this->container['carrierWillPickUpOption'];
    }

    /**
     * Sets carrierWillPickUpOption
     *
     * @param \Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Model\CarrierWillPickUpOption $carrierWillPickUpOption carrierWillPickUpOption
     *
     * @return $this
     */
    public function setCarrierWillPickUpOption($carrierWillPickUpOption)
    {
        $this->container['carrierWillPickUpOption'] = $carrierWillPickUpOption;

        return $this;
    }

    /**
     * Gets charge
     *
     * @return \Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Model\CurrencyAmount
     */
    public function getCharge()
    {
        return $this->container['charge'];
    }

    /**
     * Sets charge
     *
     * @param \Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Model\CurrencyAmount $charge charge
     *
     * @return $this
     */
    public function setCharge($charge)
    {
        $this->container['charge'] = $charge;

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


