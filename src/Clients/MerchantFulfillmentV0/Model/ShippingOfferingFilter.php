<?php
/**
 * ShippingOfferingFilter
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
 * ShippingOfferingFilter Class Doc Comment
 *
 * @category Class
 * @description Filter for use when requesting eligible shipping services.
 * @package  Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ShippingOfferingFilter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShippingOfferingFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'includePackingSlipWithLabel' => 'bool',
        'includeComplexShippingOptions' => 'bool',
        'carrierWillPickUp' => '\Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Model\CarrierWillPickUpOption',
        'deliveryExperience' => '\Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Model\DeliveryExperienceOption'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'includePackingSlipWithLabel' => null,
        'includeComplexShippingOptions' => null,
        'carrierWillPickUp' => null,
        'deliveryExperience' => null
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
        'includePackingSlipWithLabel' => 'IncludePackingSlipWithLabel',
        'includeComplexShippingOptions' => 'IncludeComplexShippingOptions',
        'carrierWillPickUp' => 'CarrierWillPickUp',
        'deliveryExperience' => 'DeliveryExperience'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'includePackingSlipWithLabel' => 'setIncludePackingSlipWithLabel',
        'includeComplexShippingOptions' => 'setIncludeComplexShippingOptions',
        'carrierWillPickUp' => 'setCarrierWillPickUp',
        'deliveryExperience' => 'setDeliveryExperience'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'includePackingSlipWithLabel' => 'getIncludePackingSlipWithLabel',
        'includeComplexShippingOptions' => 'getIncludeComplexShippingOptions',
        'carrierWillPickUp' => 'getCarrierWillPickUp',
        'deliveryExperience' => 'getDeliveryExperience'
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
        $this->container['includePackingSlipWithLabel'] = isset($data['includePackingSlipWithLabel']) ? $data['includePackingSlipWithLabel'] : null;
        $this->container['includeComplexShippingOptions'] = isset($data['includeComplexShippingOptions']) ? $data['includeComplexShippingOptions'] : null;
        $this->container['carrierWillPickUp'] = isset($data['carrierWillPickUp']) ? $data['carrierWillPickUp'] : null;
        $this->container['deliveryExperience'] = isset($data['deliveryExperience']) ? $data['deliveryExperience'] : null;
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
     * Gets includePackingSlipWithLabel
     *
     * @return bool|null
     */
    public function getIncludePackingSlipWithLabel()
    {
        return $this->container['includePackingSlipWithLabel'];
    }

    /**
     * Sets includePackingSlipWithLabel
     *
     * @param bool|null $includePackingSlipWithLabel When true, include a packing slip with the label.
     *
     * @return $this
     */
    public function setIncludePackingSlipWithLabel($includePackingSlipWithLabel)
    {
        $this->container['includePackingSlipWithLabel'] = $includePackingSlipWithLabel;

        return $this;
    }

    /**
     * Gets includeComplexShippingOptions
     *
     * @return bool|null
     */
    public function getIncludeComplexShippingOptions()
    {
        return $this->container['includeComplexShippingOptions'];
    }

    /**
     * Sets includeComplexShippingOptions
     *
     * @param bool|null $includeComplexShippingOptions When true, include complex shipping options.
     *
     * @return $this
     */
    public function setIncludeComplexShippingOptions($includeComplexShippingOptions)
    {
        $this->container['includeComplexShippingOptions'] = $includeComplexShippingOptions;

        return $this;
    }

    /**
     * Gets carrierWillPickUp
     *
     * @return \Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Model\CarrierWillPickUpOption|null
     */
    public function getCarrierWillPickUp()
    {
        return $this->container['carrierWillPickUp'];
    }

    /**
     * Sets carrierWillPickUp
     *
     * @param \Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Model\CarrierWillPickUpOption|null $carrierWillPickUp carrierWillPickUp
     *
     * @return $this
     */
    public function setCarrierWillPickUp($carrierWillPickUp)
    {
        $this->container['carrierWillPickUp'] = $carrierWillPickUp;

        return $this;
    }

    /**
     * Gets deliveryExperience
     *
     * @return \Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Model\DeliveryExperienceOption|null
     */
    public function getDeliveryExperience()
    {
        return $this->container['deliveryExperience'];
    }

    /**
     * Sets deliveryExperience
     *
     * @param \Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Model\DeliveryExperienceOption|null $deliveryExperience deliveryExperience
     *
     * @return $this
     */
    public function setDeliveryExperience($deliveryExperience)
    {
        $this->container['deliveryExperience'] = $deliveryExperience;

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


