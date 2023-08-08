<?php
/**
 * FeesEstimate
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
 * FeesEstimate Class Doc Comment
 *
 * @category Class
 * @description The total estimated fees for an item and a list of details.
 * @package  Glue\SpApi\OpenAPI\Clients\ProductFeesV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FeesEstimate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FeesEstimate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'timeOfFeesEstimation' => '\DateTime',
        'totalFeesEstimate' => '\Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Model\MoneyType',
        'feeDetailList' => '\Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Model\FeeDetail[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'timeOfFeesEstimation' => 'date-time',
        'totalFeesEstimate' => null,
        'feeDetailList' => null
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
        'timeOfFeesEstimation' => 'TimeOfFeesEstimation',
        'totalFeesEstimate' => 'TotalFeesEstimate',
        'feeDetailList' => 'FeeDetailList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'timeOfFeesEstimation' => 'setTimeOfFeesEstimation',
        'totalFeesEstimate' => 'setTotalFeesEstimate',
        'feeDetailList' => 'setFeeDetailList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'timeOfFeesEstimation' => 'getTimeOfFeesEstimation',
        'totalFeesEstimate' => 'getTotalFeesEstimate',
        'feeDetailList' => 'getFeeDetailList'
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
        $this->container['timeOfFeesEstimation'] = isset($data['timeOfFeesEstimation']) ? $data['timeOfFeesEstimation'] : null;
        $this->container['totalFeesEstimate'] = isset($data['totalFeesEstimate']) ? $data['totalFeesEstimate'] : null;
        $this->container['feeDetailList'] = isset($data['feeDetailList']) ? $data['feeDetailList'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['timeOfFeesEstimation'] === null) {
            $invalidProperties[] = "'timeOfFeesEstimation' can't be null";
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
     * Gets timeOfFeesEstimation
     *
     * @return \DateTime
     */
    public function getTimeOfFeesEstimation()
    {
        return $this->container['timeOfFeesEstimation'];
    }

    /**
     * Sets timeOfFeesEstimation
     *
     * @param \DateTime $timeOfFeesEstimation The time at which the fees were estimated. This defaults to the time the request is made.
     *
     * @return $this
     */
    public function setTimeOfFeesEstimation($timeOfFeesEstimation)
    {
        $this->container['timeOfFeesEstimation'] = $timeOfFeesEstimation;

        return $this;
    }

    /**
     * Gets totalFeesEstimate
     *
     * @return \Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Model\MoneyType|null
     */
    public function getTotalFeesEstimate()
    {
        return $this->container['totalFeesEstimate'];
    }

    /**
     * Sets totalFeesEstimate
     *
     * @param \Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Model\MoneyType|null $totalFeesEstimate totalFeesEstimate
     *
     * @return $this
     */
    public function setTotalFeesEstimate($totalFeesEstimate)
    {
        $this->container['totalFeesEstimate'] = $totalFeesEstimate;

        return $this;
    }

    /**
     * Gets feeDetailList
     *
     * @return \Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Model\FeeDetail[]|null
     */
    public function getFeeDetailList()
    {
        return $this->container['feeDetailList'];
    }

    /**
     * Sets feeDetailList
     *
     * @param \Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Model\FeeDetail[]|null $feeDetailList A list of other fees that contribute to a given fee.
     *
     * @return $this
     */
    public function setFeeDetailList($feeDetailList)
    {
        $this->container['feeDetailList'] = $feeDetailList;

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

