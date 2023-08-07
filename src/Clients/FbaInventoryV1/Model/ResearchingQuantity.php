<?php
/**
 * ResearchingQuantity
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\FbaInventoryV1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for FBA Inventory
 *
 * The Selling Partner API for FBA Inventory lets you programmatically retrieve information about inventory in Amazon's fulfillment network.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model;

use \ArrayAccess;
use \Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\ObjectSerializer;

/**
 * ResearchingQuantity Class Doc Comment
 *
 * @category Class
 * @description The number of misplaced or warehouse damaged units that are actively being confirmed at our fulfillment centers.
 * @package  Glue\SpApi\OpenAPI\Clients\FbaInventoryV1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ResearchingQuantity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ResearchingQuantity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'totalResearchingQuantity' => 'int',
        'researchingQuantityBreakdown' => '\Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\ResearchingQuantityEntry[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'totalResearchingQuantity' => null,
        'researchingQuantityBreakdown' => null
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
        'totalResearchingQuantity' => 'totalResearchingQuantity',
        'researchingQuantityBreakdown' => 'researchingQuantityBreakdown'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'totalResearchingQuantity' => 'setTotalResearchingQuantity',
        'researchingQuantityBreakdown' => 'setResearchingQuantityBreakdown'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'totalResearchingQuantity' => 'getTotalResearchingQuantity',
        'researchingQuantityBreakdown' => 'getResearchingQuantityBreakdown'
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
        $this->container['totalResearchingQuantity'] = isset($data['totalResearchingQuantity']) ? $data['totalResearchingQuantity'] : null;
        $this->container['researchingQuantityBreakdown'] = isset($data['researchingQuantityBreakdown']) ? $data['researchingQuantityBreakdown'] : null;
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
     * Gets totalResearchingQuantity
     *
     * @return int|null
     */
    public function getTotalResearchingQuantity()
    {
        return $this->container['totalResearchingQuantity'];
    }

    /**
     * Sets totalResearchingQuantity
     *
     * @param int|null $totalResearchingQuantity The total number of units currently being researched in Amazon's fulfillment network.
     *
     * @return $this
     */
    public function setTotalResearchingQuantity($totalResearchingQuantity)
    {
        $this->container['totalResearchingQuantity'] = $totalResearchingQuantity;

        return $this;
    }

    /**
     * Gets researchingQuantityBreakdown
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\ResearchingQuantityEntry[]|null
     */
    public function getResearchingQuantityBreakdown()
    {
        return $this->container['researchingQuantityBreakdown'];
    }

    /**
     * Sets researchingQuantityBreakdown
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\ResearchingQuantityEntry[]|null $researchingQuantityBreakdown A list of quantity details for items currently being researched.
     *
     * @return $this
     */
    public function setResearchingQuantityBreakdown($researchingQuantityBreakdown)
    {
        $this->container['researchingQuantityBreakdown'] = $researchingQuantityBreakdown;

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

