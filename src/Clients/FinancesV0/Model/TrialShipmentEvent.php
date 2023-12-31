<?php
/**
 * TrialShipmentEvent
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\FinancesV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Finances
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
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

namespace Glue\SpApi\OpenAPI\Clients\FinancesV0\Model;

use \ArrayAccess;
use \Glue\SpApi\OpenAPI\Clients\FinancesV0\ObjectSerializer;

/**
 * TrialShipmentEvent Class Doc Comment
 *
 * @category Class
 * @description An event related to a trial shipment.
 * @package  Glue\SpApi\OpenAPI\Clients\FinancesV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TrialShipmentEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TrialShipmentEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amazonOrderId' => 'string',
        'financialEventGroupId' => 'string',
        'postedDate' => '\DateTime',
        'sKU' => 'string',
        'feeList' => '\Glue\SpApi\OpenAPI\Clients\FinancesV0\Model\FeeComponent[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'amazonOrderId' => null,
        'financialEventGroupId' => null,
        'postedDate' => 'date-time',
        'sKU' => null,
        'feeList' => null
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
        'financialEventGroupId' => 'FinancialEventGroupId',
        'postedDate' => 'PostedDate',
        'sKU' => 'SKU',
        'feeList' => 'FeeList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amazonOrderId' => 'setAmazonOrderId',
        'financialEventGroupId' => 'setFinancialEventGroupId',
        'postedDate' => 'setPostedDate',
        'sKU' => 'setSKU',
        'feeList' => 'setFeeList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amazonOrderId' => 'getAmazonOrderId',
        'financialEventGroupId' => 'getFinancialEventGroupId',
        'postedDate' => 'getPostedDate',
        'sKU' => 'getSKU',
        'feeList' => 'getFeeList'
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
        $this->container['financialEventGroupId'] = isset($data['financialEventGroupId']) ? $data['financialEventGroupId'] : null;
        $this->container['postedDate'] = isset($data['postedDate']) ? $data['postedDate'] : null;
        $this->container['sKU'] = isset($data['sKU']) ? $data['sKU'] : null;
        $this->container['feeList'] = isset($data['feeList']) ? $data['feeList'] : null;
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
     * Gets amazonOrderId
     *
     * @return string|null
     */
    public function getAmazonOrderId()
    {
        return $this->container['amazonOrderId'];
    }

    /**
     * Sets amazonOrderId
     *
     * @param string|null $amazonOrderId An Amazon-defined identifier for an order.
     *
     * @return $this
     */
    public function setAmazonOrderId($amazonOrderId)
    {
        $this->container['amazonOrderId'] = $amazonOrderId;

        return $this;
    }

    /**
     * Gets financialEventGroupId
     *
     * @return string|null
     */
    public function getFinancialEventGroupId()
    {
        return $this->container['financialEventGroupId'];
    }

    /**
     * Sets financialEventGroupId
     *
     * @param string|null $financialEventGroupId The identifier of the financial event group.
     *
     * @return $this
     */
    public function setFinancialEventGroupId($financialEventGroupId)
    {
        $this->container['financialEventGroupId'] = $financialEventGroupId;

        return $this;
    }

    /**
     * Gets postedDate
     *
     * @return \DateTime|null
     */
    public function getPostedDate()
    {
        return $this->container['postedDate'];
    }

    /**
     * Sets postedDate
     *
     * @param \DateTime|null $postedDate postedDate
     *
     * @return $this
     */
    public function setPostedDate($postedDate)
    {
        $this->container['postedDate'] = $postedDate;

        return $this;
    }

    /**
     * Gets sKU
     *
     * @return string|null
     */
    public function getSKU()
    {
        return $this->container['sKU'];
    }

    /**
     * Sets sKU
     *
     * @param string|null $sKU The seller SKU of the item. The seller SKU is qualified by the seller's seller ID, which is included with every call to the Selling Partner API.
     *
     * @return $this
     */
    public function setSKU($sKU)
    {
        $this->container['sKU'] = $sKU;

        return $this;
    }

    /**
     * Gets feeList
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FinancesV0\Model\FeeComponent[]|null
     */
    public function getFeeList()
    {
        return $this->container['feeList'];
    }

    /**
     * Sets feeList
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FinancesV0\Model\FeeComponent[]|null $feeList A list of fee component information.
     *
     * @return $this
     */
    public function setFeeList($feeList)
    {
        $this->container['feeList'] = $feeList;

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


