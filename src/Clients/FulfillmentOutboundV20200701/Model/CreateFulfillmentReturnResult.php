<?php
/**
 * CreateFulfillmentReturnResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner APIs for Fulfillment Outbound
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * OpenAPI spec version: 2020-07-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model;

use \ArrayAccess;
use \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\ObjectSerializer;

/**
 * CreateFulfillmentReturnResult Class Doc Comment
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CreateFulfillmentReturnResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateFulfillmentReturnResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'returnItems' => '\Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\ReturnItem[]',
        'invalidReturnItems' => '\Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\InvalidReturnItem[]',
        'returnAuthorizations' => '\Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\ReturnAuthorization[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'returnItems' => null,
        'invalidReturnItems' => null,
        'returnAuthorizations' => null
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
        'returnItems' => 'returnItems',
        'invalidReturnItems' => 'invalidReturnItems',
        'returnAuthorizations' => 'returnAuthorizations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'returnItems' => 'setReturnItems',
        'invalidReturnItems' => 'setInvalidReturnItems',
        'returnAuthorizations' => 'setReturnAuthorizations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'returnItems' => 'getReturnItems',
        'invalidReturnItems' => 'getInvalidReturnItems',
        'returnAuthorizations' => 'getReturnAuthorizations'
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
        $this->container['returnItems'] = isset($data['returnItems']) ? $data['returnItems'] : null;
        $this->container['invalidReturnItems'] = isset($data['invalidReturnItems']) ? $data['invalidReturnItems'] : null;
        $this->container['returnAuthorizations'] = isset($data['returnAuthorizations']) ? $data['returnAuthorizations'] : null;
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
     * Gets returnItems
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\ReturnItem[]|null
     */
    public function getReturnItems()
    {
        return $this->container['returnItems'];
    }

    /**
     * Sets returnItems
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\ReturnItem[]|null $returnItems An array of items that Amazon accepted for return. Returns empty if no items were accepted for return.
     *
     * @return $this
     */
    public function setReturnItems($returnItems)
    {
        $this->container['returnItems'] = $returnItems;

        return $this;
    }

    /**
     * Gets invalidReturnItems
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\InvalidReturnItem[]|null
     */
    public function getInvalidReturnItems()
    {
        return $this->container['invalidReturnItems'];
    }

    /**
     * Sets invalidReturnItems
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\InvalidReturnItem[]|null $invalidReturnItems An array of invalid return item information.
     *
     * @return $this
     */
    public function setInvalidReturnItems($invalidReturnItems)
    {
        $this->container['invalidReturnItems'] = $invalidReturnItems;

        return $this;
    }

    /**
     * Gets returnAuthorizations
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\ReturnAuthorization[]|null
     */
    public function getReturnAuthorizations()
    {
        return $this->container['returnAuthorizations'];
    }

    /**
     * Sets returnAuthorizations
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\ReturnAuthorization[]|null $returnAuthorizations An array of return authorization information.
     *
     * @return $this
     */
    public function setReturnAuthorizations($returnAuthorizations)
    {
        $this->container['returnAuthorizations'] = $returnAuthorizations;

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


