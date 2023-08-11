<?php
/**
 * Points
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\ProductFeesV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Product Fees
 *
 * The Selling Partner API for Product Fees lets you programmatically retrieve estimated fees for a product. You can then account for those fees in your pricing.
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

namespace Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Model;

use \ArrayAccess;
use \Glue\SpApi\OpenAPI\Clients\ProductFeesV0\ObjectSerializer;

/**
 * Points Class Doc Comment
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\ProductFeesV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Points implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Points';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pointsNumber' => 'int',
        'pointsMonetaryValue' => '\Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Model\MoneyType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'pointsNumber' => 'int32',
        'pointsMonetaryValue' => null
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
        'pointsNumber' => 'PointsNumber',
        'pointsMonetaryValue' => 'PointsMonetaryValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pointsNumber' => 'setPointsNumber',
        'pointsMonetaryValue' => 'setPointsMonetaryValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pointsNumber' => 'getPointsNumber',
        'pointsMonetaryValue' => 'getPointsMonetaryValue'
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
        $this->container['pointsNumber'] = isset($data['pointsNumber']) ? $data['pointsNumber'] : null;
        $this->container['pointsMonetaryValue'] = isset($data['pointsMonetaryValue']) ? $data['pointsMonetaryValue'] : null;
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
     * Gets pointsNumber
     *
     * @return int|null
     */
    public function getPointsNumber()
    {
        return $this->container['pointsNumber'];
    }

    /**
     * Sets pointsNumber
     *
     * @param int|null $pointsNumber pointsNumber
     *
     * @return $this
     */
    public function setPointsNumber($pointsNumber)
    {
        $this->container['pointsNumber'] = $pointsNumber;

        return $this;
    }

    /**
     * Gets pointsMonetaryValue
     *
     * @return \Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Model\MoneyType|null
     */
    public function getPointsMonetaryValue()
    {
        return $this->container['pointsMonetaryValue'];
    }

    /**
     * Sets pointsMonetaryValue
     *
     * @param \Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Model\MoneyType|null $pointsMonetaryValue pointsMonetaryValue
     *
     * @return $this
     */
    public function setPointsMonetaryValue($pointsMonetaryValue)
    {
        $this->container['pointsMonetaryValue'] = $pointsMonetaryValue;

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


