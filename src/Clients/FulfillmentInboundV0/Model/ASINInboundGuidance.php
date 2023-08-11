<?php
/**
 * ASINInboundGuidance
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Fulfillment Inbound
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
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

namespace Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model;

use \ArrayAccess;
use \Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\ObjectSerializer;

/**
 * ASINInboundGuidance Class Doc Comment
 *
 * @category Class
 * @description Reasons why a given ASIN is not recommended for shipment to Amazon&#39;s fulfillment network.
 * @package  Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ASINInboundGuidance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ASINInboundGuidance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'aSIN' => 'string',
        'inboundGuidance' => '\Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\InboundGuidance',
        'guidanceReasonList' => '\Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\GuidanceReason[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'aSIN' => null,
        'inboundGuidance' => null,
        'guidanceReasonList' => null
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
        'aSIN' => 'ASIN',
        'inboundGuidance' => 'InboundGuidance',
        'guidanceReasonList' => 'GuidanceReasonList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aSIN' => 'setASIN',
        'inboundGuidance' => 'setInboundGuidance',
        'guidanceReasonList' => 'setGuidanceReasonList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aSIN' => 'getASIN',
        'inboundGuidance' => 'getInboundGuidance',
        'guidanceReasonList' => 'getGuidanceReasonList'
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
        $this->container['aSIN'] = isset($data['aSIN']) ? $data['aSIN'] : null;
        $this->container['inboundGuidance'] = isset($data['inboundGuidance']) ? $data['inboundGuidance'] : null;
        $this->container['guidanceReasonList'] = isset($data['guidanceReasonList']) ? $data['guidanceReasonList'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['aSIN'] === null) {
            $invalidProperties[] = "'aSIN' can't be null";
        }
        if ($this->container['inboundGuidance'] === null) {
            $invalidProperties[] = "'inboundGuidance' can't be null";
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
     * Gets aSIN
     *
     * @return string
     */
    public function getASIN()
    {
        return $this->container['aSIN'];
    }

    /**
     * Sets aSIN
     *
     * @param string $aSIN The Amazon Standard Identification Number (ASIN) of the item.
     *
     * @return $this
     */
    public function setASIN($aSIN)
    {
        $this->container['aSIN'] = $aSIN;

        return $this;
    }

    /**
     * Gets inboundGuidance
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\InboundGuidance
     */
    public function getInboundGuidance()
    {
        return $this->container['inboundGuidance'];
    }

    /**
     * Sets inboundGuidance
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\InboundGuidance $inboundGuidance inboundGuidance
     *
     * @return $this
     */
    public function setInboundGuidance($inboundGuidance)
    {
        $this->container['inboundGuidance'] = $inboundGuidance;

        return $this;
    }

    /**
     * Gets guidanceReasonList
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\GuidanceReason[]|null
     */
    public function getGuidanceReasonList()
    {
        return $this->container['guidanceReasonList'];
    }

    /**
     * Sets guidanceReasonList
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\GuidanceReason[]|null $guidanceReasonList A list of inbound guidance reason information.
     *
     * @return $this
     */
    public function setGuidanceReasonList($guidanceReasonList)
    {
        $this->container['guidanceReasonList'] = $guidanceReasonList;

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


