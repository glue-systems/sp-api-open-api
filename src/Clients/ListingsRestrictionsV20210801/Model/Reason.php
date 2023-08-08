<?php
/**
 * Reason
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\ListingsRestrictionsV20210801
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Listings Restrictions
 *
 * The Selling Partner API for Listings Restrictions provides programmatic access to restrictions on Amazon catalog listings.  For more information, see the [Listings Restrictions API Use Case Guide](doc:listings-restrictions-api-v2021-08-01-use-case-guide).
 *
 * OpenAPI spec version: 2021-08-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Glue\SpApi\OpenAPI\Clients\ListingsRestrictionsV20210801\Model;

use \ArrayAccess;
use \Glue\SpApi\OpenAPI\Clients\ListingsRestrictionsV20210801\ObjectSerializer;

/**
 * Reason Class Doc Comment
 *
 * @category Class
 * @description A reason for the restriction, including path forward links that may allow Selling Partners to remove the restriction, if available.
 * @package  Glue\SpApi\OpenAPI\Clients\ListingsRestrictionsV20210801
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Reason implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Reason';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'message' => 'string',
        'reasonCode' => 'string',
        'links' => '\Glue\SpApi\OpenAPI\Clients\ListingsRestrictionsV20210801\Model\Link[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'message' => null,
        'reasonCode' => null,
        'links' => null
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
        'message' => 'message',
        'reasonCode' => 'reasonCode',
        'links' => 'links'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'message' => 'setMessage',
        'reasonCode' => 'setReasonCode',
        'links' => 'setLinks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'message' => 'getMessage',
        'reasonCode' => 'getReasonCode',
        'links' => 'getLinks'
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

    const REASON_CODE_APPROVAL_REQUIRED = 'APPROVAL_REQUIRED';
    const REASON_CODE_ASIN_NOT_FOUND = 'ASIN_NOT_FOUND';
    const REASON_CODE_NOT_ELIGIBLE = 'NOT_ELIGIBLE';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReasonCodeAllowableValues()
    {
        return [
            self::REASON_CODE_APPROVAL_REQUIRED,
            self::REASON_CODE_ASIN_NOT_FOUND,
            self::REASON_CODE_NOT_ELIGIBLE,
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
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['reasonCode'] = isset($data['reasonCode']) ? $data['reasonCode'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
        }
        $allowedValues = $this->getReasonCodeAllowableValues();
        if (!is_null($this->container['reasonCode']) && !in_array($this->container['reasonCode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'reasonCode', must be one of '%s'",
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
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message A message describing the reason for the restriction.
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets reasonCode
     *
     * @return string|null
     */
    public function getReasonCode()
    {
        return $this->container['reasonCode'];
    }

    /**
     * Sets reasonCode
     *
     * @param string|null $reasonCode A code indicating why the listing is restricted.
     *
     * @return $this
     */
    public function setReasonCode($reasonCode)
    {
        $allowedValues = $this->getReasonCodeAllowableValues();
        if (!is_null($reasonCode) && !in_array($reasonCode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'reasonCode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['reasonCode'] = $reasonCode;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \Glue\SpApi\OpenAPI\Clients\ListingsRestrictionsV20210801\Model\Link[]|null
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \Glue\SpApi\OpenAPI\Clients\ListingsRestrictionsV20210801\Model\Link[]|null $links A list of path forward links that may allow Selling Partners to remove the restriction.
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

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


