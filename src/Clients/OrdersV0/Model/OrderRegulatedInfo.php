<?php
/**
 * OrderRegulatedInfo
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
 * OrderRegulatedInfo Class Doc Comment
 *
 * @category Class
 * @description The order&#39;s regulated information along with its verification status.
 * @package  Glue\SpApi\OpenAPI\Clients\OrdersV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderRegulatedInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderRegulatedInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amazonOrderId' => 'string',
        'regulatedInformation' => '\Glue\SpApi\OpenAPI\Clients\OrdersV0\Model\RegulatedInformation',
        'requiresDosageLabel' => 'bool',
        'regulatedOrderVerificationStatus' => '\Glue\SpApi\OpenAPI\Clients\OrdersV0\Model\RegulatedOrderVerificationStatus'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'amazonOrderId' => null,
        'regulatedInformation' => null,
        'requiresDosageLabel' => null,
        'regulatedOrderVerificationStatus' => null
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
        'amazonOrderId' => 'AmazonOrderId',
        'regulatedInformation' => 'RegulatedInformation',
        'requiresDosageLabel' => 'RequiresDosageLabel',
        'regulatedOrderVerificationStatus' => 'RegulatedOrderVerificationStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amazonOrderId' => 'setAmazonOrderId',
        'regulatedInformation' => 'setRegulatedInformation',
        'requiresDosageLabel' => 'setRequiresDosageLabel',
        'regulatedOrderVerificationStatus' => 'setRegulatedOrderVerificationStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amazonOrderId' => 'getAmazonOrderId',
        'regulatedInformation' => 'getRegulatedInformation',
        'requiresDosageLabel' => 'getRequiresDosageLabel',
        'regulatedOrderVerificationStatus' => 'getRegulatedOrderVerificationStatus'
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
        $this->container['amazonOrderId'] = isset($data['amazonOrderId']) ? $data['amazonOrderId'] : null;
        $this->container['regulatedInformation'] = isset($data['regulatedInformation']) ? $data['regulatedInformation'] : null;
        $this->container['requiresDosageLabel'] = isset($data['requiresDosageLabel']) ? $data['requiresDosageLabel'] : null;
        $this->container['regulatedOrderVerificationStatus'] = isset($data['regulatedOrderVerificationStatus']) ? $data['regulatedOrderVerificationStatus'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['amazonOrderId'] === null) {
            $invalidProperties[] = "'amazonOrderId' can't be null";
        }
        if ($this->container['regulatedInformation'] === null) {
            $invalidProperties[] = "'regulatedInformation' can't be null";
        }
        if ($this->container['requiresDosageLabel'] === null) {
            $invalidProperties[] = "'requiresDosageLabel' can't be null";
        }
        if ($this->container['regulatedOrderVerificationStatus'] === null) {
            $invalidProperties[] = "'regulatedOrderVerificationStatus' can't be null";
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
     * Gets amazonOrderId
     *
     * @return string
     */
    public function getAmazonOrderId()
    {
        return $this->container['amazonOrderId'];
    }

    /**
     * Sets amazonOrderId
     *
     * @param string $amazonOrderId An Amazon-defined order identifier, in 3-7-7 format.
     *
     * @return $this
     */
    public function setAmazonOrderId($amazonOrderId)
    {
        $this->container['amazonOrderId'] = $amazonOrderId;

        return $this;
    }

    /**
     * Gets regulatedInformation
     *
     * @return \Glue\SpApi\OpenAPI\Clients\OrdersV0\Model\RegulatedInformation
     */
    public function getRegulatedInformation()
    {
        return $this->container['regulatedInformation'];
    }

    /**
     * Sets regulatedInformation
     *
     * @param \Glue\SpApi\OpenAPI\Clients\OrdersV0\Model\RegulatedInformation $regulatedInformation regulatedInformation
     *
     * @return $this
     */
    public function setRegulatedInformation($regulatedInformation)
    {
        $this->container['regulatedInformation'] = $regulatedInformation;

        return $this;
    }

    /**
     * Gets requiresDosageLabel
     *
     * @return bool
     */
    public function getRequiresDosageLabel()
    {
        return $this->container['requiresDosageLabel'];
    }

    /**
     * Sets requiresDosageLabel
     *
     * @param bool $requiresDosageLabel When true, the order requires attaching a dosage information label when shipped.
     *
     * @return $this
     */
    public function setRequiresDosageLabel($requiresDosageLabel)
    {
        $this->container['requiresDosageLabel'] = $requiresDosageLabel;

        return $this;
    }

    /**
     * Gets regulatedOrderVerificationStatus
     *
     * @return \Glue\SpApi\OpenAPI\Clients\OrdersV0\Model\RegulatedOrderVerificationStatus
     */
    public function getRegulatedOrderVerificationStatus()
    {
        return $this->container['regulatedOrderVerificationStatus'];
    }

    /**
     * Sets regulatedOrderVerificationStatus
     *
     * @param \Glue\SpApi\OpenAPI\Clients\OrdersV0\Model\RegulatedOrderVerificationStatus $regulatedOrderVerificationStatus regulatedOrderVerificationStatus
     *
     * @return $this
     */
    public function setRegulatedOrderVerificationStatus($regulatedOrderVerificationStatus)
    {
        $this->container['regulatedOrderVerificationStatus'] = $regulatedOrderVerificationStatus;

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


