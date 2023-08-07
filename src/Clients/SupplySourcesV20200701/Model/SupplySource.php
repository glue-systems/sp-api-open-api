<?php
/**
 * SupplySource
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Supply Sources
 *
 * Manage configurations and capabilities of seller supply sources.
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

namespace Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model;

use \ArrayAccess;
use \Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\ObjectSerializer;

/**
 * SupplySource Class Doc Comment
 *
 * @category Class
 * @description Supply source details, including configurations and capabilities.
 * @package  Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SupplySource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SupplySource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'supplySourceId' => 'string',
        'supplySourceCode' => 'string',
        'alias' => 'string',
        'status' => '\Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\SupplySourceStatusReadOnly',
        'address' => '\Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\Address',
        'configuration' => '\Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\SupplySourceConfiguration',
        'capabilities' => '\Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\SupplySourceCapabilities',
        'createdAt' => 'string',
        'updatedAt' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'supplySourceId' => null,
        'supplySourceCode' => null,
        'alias' => null,
        'status' => null,
        'address' => null,
        'configuration' => null,
        'capabilities' => null,
        'createdAt' => null,
        'updatedAt' => null
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
        'supplySourceId' => 'supplySourceId',
        'supplySourceCode' => 'supplySourceCode',
        'alias' => 'alias',
        'status' => 'status',
        'address' => 'address',
        'configuration' => 'configuration',
        'capabilities' => 'capabilities',
        'createdAt' => 'createdAt',
        'updatedAt' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'supplySourceId' => 'setSupplySourceId',
        'supplySourceCode' => 'setSupplySourceCode',
        'alias' => 'setAlias',
        'status' => 'setStatus',
        'address' => 'setAddress',
        'configuration' => 'setConfiguration',
        'capabilities' => 'setCapabilities',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'supplySourceId' => 'getSupplySourceId',
        'supplySourceCode' => 'getSupplySourceCode',
        'alias' => 'getAlias',
        'status' => 'getStatus',
        'address' => 'getAddress',
        'configuration' => 'getConfiguration',
        'capabilities' => 'getCapabilities',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt'
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
        $this->container['supplySourceId'] = isset($data['supplySourceId']) ? $data['supplySourceId'] : null;
        $this->container['supplySourceCode'] = isset($data['supplySourceCode']) ? $data['supplySourceCode'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['configuration'] = isset($data['configuration']) ? $data['configuration'] : null;
        $this->container['capabilities'] = isset($data['capabilities']) ? $data['capabilities'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
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
     * Gets supplySourceId
     *
     * @return string|null
     */
    public function getSupplySourceId()
    {
        return $this->container['supplySourceId'];
    }

    /**
     * Sets supplySourceId
     *
     * @param string|null $supplySourceId Amazon generated unique supply source id.
     *
     * @return $this
     */
    public function setSupplySourceId($supplySourceId)
    {
        $this->container['supplySourceId'] = $supplySourceId;

        return $this;
    }

    /**
     * Gets supplySourceCode
     *
     * @return string|null
     */
    public function getSupplySourceCode()
    {
        return $this->container['supplySourceCode'];
    }

    /**
     * Sets supplySourceCode
     *
     * @param string|null $supplySourceCode Seller provided unique supply source code.
     *
     * @return $this
     */
    public function setSupplySourceCode($supplySourceCode)
    {
        $this->container['supplySourceCode'] = $supplySourceCode;

        return $this;
    }

    /**
     * Gets alias
     *
     * @return string|null
     */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
     * Sets alias
     *
     * @param string|null $alias Custom alias for this supply source
     *
     * @return $this
     */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\SupplySourceStatusReadOnly|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\SupplySourceStatusReadOnly|null $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\Address|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\Address|null $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets configuration
     *
     * @return \Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\SupplySourceConfiguration|null
     */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
     * Sets configuration
     *
     * @param \Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\SupplySourceConfiguration|null $configuration configuration
     *
     * @return $this
     */
    public function setConfiguration($configuration)
    {
        $this->container['configuration'] = $configuration;

        return $this;
    }

    /**
     * Gets capabilities
     *
     * @return \Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\SupplySourceCapabilities|null
     */
    public function getCapabilities()
    {
        return $this->container['capabilities'];
    }

    /**
     * Sets capabilities
     *
     * @param \Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\SupplySourceCapabilities|null $capabilities capabilities
     *
     * @return $this
     */
    public function setCapabilities($capabilities)
    {
        $this->container['capabilities'] = $capabilities;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param string|null $createdAt A date and time in the rfc3339 format.
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param string|null $updatedAt A date and time in the rfc3339 format.
     *
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

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


