<?php
/**
 * LabelCustomization
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
 * LabelCustomization Class Doc Comment
 *
 * @category Class
 * @description Custom text for shipping labels.
 * @package  Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LabelCustomization implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LabelCustomization';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'customTextForLabel' => 'string',
        'standardIdForLabel' => '\Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Model\StandardIdForLabel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'customTextForLabel' => null,
        'standardIdForLabel' => null
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
        'customTextForLabel' => 'CustomTextForLabel',
        'standardIdForLabel' => 'StandardIdForLabel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customTextForLabel' => 'setCustomTextForLabel',
        'standardIdForLabel' => 'setStandardIdForLabel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customTextForLabel' => 'getCustomTextForLabel',
        'standardIdForLabel' => 'getStandardIdForLabel'
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
        $this->container['customTextForLabel'] = isset($data['customTextForLabel']) ? $data['customTextForLabel'] : null;
        $this->container['standardIdForLabel'] = isset($data['standardIdForLabel']) ? $data['standardIdForLabel'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['customTextForLabel']) && (mb_strlen($this->container['customTextForLabel']) > 14)) {
            $invalidProperties[] = "invalid value for 'customTextForLabel', the character length must be smaller than or equal to 14.";
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
     * Gets customTextForLabel
     *
     * @return string|null
     */
    public function getCustomTextForLabel()
    {
        return $this->container['customTextForLabel'];
    }

    /**
     * Sets customTextForLabel
     *
     * @param string|null $customTextForLabel Custom text to print on the label.  Note: Custom text is only included on labels that are in ZPL format (ZPL203). FedEx does not support CustomTextForLabel.
     *
     * @return $this
     */
    public function setCustomTextForLabel($customTextForLabel)
    {
        if (!is_null($customTextForLabel) && (mb_strlen($customTextForLabel) > 14)) {
            throw new \InvalidArgumentException('invalid length for $customTextForLabel when calling LabelCustomization., must be smaller than or equal to 14.');
        }

        $this->container['customTextForLabel'] = $customTextForLabel;

        return $this;
    }

    /**
     * Gets standardIdForLabel
     *
     * @return \Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Model\StandardIdForLabel|null
     */
    public function getStandardIdForLabel()
    {
        return $this->container['standardIdForLabel'];
    }

    /**
     * Sets standardIdForLabel
     *
     * @param \Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Model\StandardIdForLabel|null $standardIdForLabel standardIdForLabel
     *
     * @return $this
     */
    public function setStandardIdForLabel($standardIdForLabel)
    {
        $this->container['standardIdForLabel'] = $standardIdForLabel;

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


