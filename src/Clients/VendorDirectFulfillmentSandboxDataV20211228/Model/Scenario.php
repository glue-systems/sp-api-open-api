<?php
/**
 * Scenario
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Vendor Direct Fulfillment Sandbox Test Data
 *
 * The Selling Partner API for Vendor Direct Fulfillment Sandbox Test Data provides programmatic access to vendor direct fulfillment sandbox test data.
 *
 * OpenAPI spec version: 2021-10-28
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228\Model;

use \ArrayAccess;
use \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228\ObjectSerializer;

/**
 * Scenario Class Doc Comment
 *
 * @category Class
 * @description A scenario test case response returned when the request is successful.
 * @package  Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Scenario implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Scenario';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'scenarioId' => 'string',
        'orders' => '\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228\Model\TestOrder[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'scenarioId' => null,
        'orders' => null
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
        'scenarioId' => 'scenarioId',
        'orders' => 'orders'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'scenarioId' => 'setScenarioId',
        'orders' => 'setOrders'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'scenarioId' => 'getScenarioId',
        'orders' => 'getOrders'
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
        $this->container['scenarioId'] = isset($data['scenarioId']) ? $data['scenarioId'] : null;
        $this->container['orders'] = isset($data['orders']) ? $data['orders'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['scenarioId'] === null) {
            $invalidProperties[] = "'scenarioId' can't be null";
        }
        if ($this->container['orders'] === null) {
            $invalidProperties[] = "'orders' can't be null";
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
     * Gets scenarioId
     *
     * @return string
     */
    public function getScenarioId()
    {
        return $this->container['scenarioId'];
    }

    /**
     * Sets scenarioId
     *
     * @param string $scenarioId An identifier that identifies the type of scenario that user can use for testing.
     *
     * @return $this
     */
    public function setScenarioId($scenarioId)
    {
        $this->container['scenarioId'] = $scenarioId;

        return $this;
    }

    /**
     * Gets orders
     *
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228\Model\TestOrder[]
     */
    public function getOrders()
    {
        return $this->container['orders'];
    }

    /**
     * Sets orders
     *
     * @param \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228\Model\TestOrder[] $orders A list of orders that can be used by the caller to test each life cycle or scenario.
     *
     * @return $this
     */
    public function setOrders($orders)
    {
        $this->container['orders'] = $orders;

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

