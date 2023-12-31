<?php
/**
 * GetOffersHttpStatusLine
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\ProductPricingV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Pricing
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
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

namespace Glue\SpApi\OpenAPI\Clients\ProductPricingV0\Model;

use \ArrayAccess;
use \Glue\SpApi\OpenAPI\Clients\ProductPricingV0\ObjectSerializer;

/**
 * GetOffersHttpStatusLine Class Doc Comment
 *
 * @category Class
 * @description The HTTP status line associated with the response.  For more information, consult [RFC 2616](https://www.w3.org/Protocols/rfc2616/rfc2616-sec6.html).
 * @package  Glue\SpApi\OpenAPI\Clients\ProductPricingV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GetOffersHttpStatusLine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetOffersHttpStatusLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'statusCode' => 'int',
        'reasonPhrase' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'statusCode' => null,
        'reasonPhrase' => null
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
        'statusCode' => 'statusCode',
        'reasonPhrase' => 'reasonPhrase'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'statusCode' => 'setStatusCode',
        'reasonPhrase' => 'setReasonPhrase'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'statusCode' => 'getStatusCode',
        'reasonPhrase' => 'getReasonPhrase'
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
        $this->container['statusCode'] = isset($data['statusCode']) ? $data['statusCode'] : null;
        $this->container['reasonPhrase'] = isset($data['reasonPhrase']) ? $data['reasonPhrase'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['statusCode']) && ($this->container['statusCode'] > 599)) {
            $invalidProperties[] = "invalid value for 'statusCode', must be smaller than or equal to 599.";
        }

        if (!is_null($this->container['statusCode']) && ($this->container['statusCode'] < 100)) {
            $invalidProperties[] = "invalid value for 'statusCode', must be bigger than or equal to 100.";
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
     * Gets statusCode
     *
     * @return int|null
     */
    public function getStatusCode()
    {
        return $this->container['statusCode'];
    }

    /**
     * Sets statusCode
     *
     * @param int|null $statusCode The HTTP response Status Code.
     *
     * @return $this
     */
    public function setStatusCode($statusCode)
    {

        if (!is_null($statusCode) && ($statusCode > 599)) {
            throw new \InvalidArgumentException('invalid value for $statusCode when calling GetOffersHttpStatusLine., must be smaller than or equal to 599.');
        }
        if (!is_null($statusCode) && ($statusCode < 100)) {
            throw new \InvalidArgumentException('invalid value for $statusCode when calling GetOffersHttpStatusLine., must be bigger than or equal to 100.');
        }

        $this->container['statusCode'] = $statusCode;

        return $this;
    }

    /**
     * Gets reasonPhrase
     *
     * @return string|null
     */
    public function getReasonPhrase()
    {
        return $this->container['reasonPhrase'];
    }

    /**
     * Sets reasonPhrase
     *
     * @param string|null $reasonPhrase The HTTP response Reason-Phase.
     *
     * @return $this
     */
    public function setReasonPhrase($reasonPhrase)
    {
        $this->container['reasonPhrase'] = $reasonPhrase;

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


