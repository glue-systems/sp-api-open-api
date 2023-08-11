<?php
/**
 * CreateScheduledPackagesRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\EasyShipV20220323
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Easy Ship
 *
 * The Selling Partner API for Easy Ship helps you build applications that help sellers manage and ship Amazon Easy Ship orders.  Your Easy Ship applications can:  * Get available time slots for packages to be scheduled for delivery.  * Schedule, reschedule, and cancel Easy Ship orders.  * Print labels, invoices, and warranties.  See the [Marketplace Support Table](doc:easyship-api-v2022-03-23-use-case-guide#marketplace-support-table) for the differences in Easy Ship operations by marketplace.
 *
 * OpenAPI spec version: 2022-03-23
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model;

use \ArrayAccess;
use \Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\ObjectSerializer;

/**
 * CreateScheduledPackagesRequest Class Doc Comment
 *
 * @category Class
 * @description The request body for the POST /easyShip/2022-03-23/packages/bulk API.
 * @package  Glue\SpApi\OpenAPI\Clients\EasyShipV20220323
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CreateScheduledPackagesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateScheduledPackagesRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'marketplaceId' => 'string',
        'orderScheduleDetailsList' => '\Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model\OrderScheduleDetails[]',
        'labelFormat' => '\Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model\LabelFormat'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'marketplaceId' => null,
        'orderScheduleDetailsList' => null,
        'labelFormat' => null
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
        'marketplaceId' => 'marketplaceId',
        'orderScheduleDetailsList' => 'orderScheduleDetailsList',
        'labelFormat' => 'labelFormat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplaceId' => 'setMarketplaceId',
        'orderScheduleDetailsList' => 'setOrderScheduleDetailsList',
        'labelFormat' => 'setLabelFormat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplaceId' => 'getMarketplaceId',
        'orderScheduleDetailsList' => 'getOrderScheduleDetailsList',
        'labelFormat' => 'getLabelFormat'
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
        $this->container['marketplaceId'] = isset($data['marketplaceId']) ? $data['marketplaceId'] : null;
        $this->container['orderScheduleDetailsList'] = isset($data['orderScheduleDetailsList']) ? $data['orderScheduleDetailsList'] : null;
        $this->container['labelFormat'] = isset($data['labelFormat']) ? $data['labelFormat'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['marketplaceId'] === null) {
            $invalidProperties[] = "'marketplaceId' can't be null";
        }
        if ((mb_strlen($this->container['marketplaceId']) > 255)) {
            $invalidProperties[] = "invalid value for 'marketplaceId', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['marketplaceId']) < 1)) {
            $invalidProperties[] = "invalid value for 'marketplaceId', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['orderScheduleDetailsList'] === null) {
            $invalidProperties[] = "'orderScheduleDetailsList' can't be null";
        }
        if ($this->container['labelFormat'] === null) {
            $invalidProperties[] = "'labelFormat' can't be null";
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
     * Gets marketplaceId
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplaceId'];
    }

    /**
     * Sets marketplaceId
     *
     * @param string $marketplaceId A string of up to 255 characters.
     *
     * @return $this
     */
    public function setMarketplaceId($marketplaceId)
    {
        if ((mb_strlen($marketplaceId) > 255)) {
            throw new \InvalidArgumentException('invalid length for $marketplaceId when calling CreateScheduledPackagesRequest., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($marketplaceId) < 1)) {
            throw new \InvalidArgumentException('invalid length for $marketplaceId when calling CreateScheduledPackagesRequest., must be bigger than or equal to 1.');
        }

        $this->container['marketplaceId'] = $marketplaceId;

        return $this;
    }

    /**
     * Gets orderScheduleDetailsList
     *
     * @return \Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model\OrderScheduleDetails[]
     */
    public function getOrderScheduleDetailsList()
    {
        return $this->container['orderScheduleDetailsList'];
    }

    /**
     * Sets orderScheduleDetailsList
     *
     * @param \Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model\OrderScheduleDetails[] $orderScheduleDetailsList An array allowing users to specify orders to be scheduled.
     *
     * @return $this
     */
    public function setOrderScheduleDetailsList($orderScheduleDetailsList)
    {
        $this->container['orderScheduleDetailsList'] = $orderScheduleDetailsList;

        return $this;
    }

    /**
     * Gets labelFormat
     *
     * @return \Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model\LabelFormat
     */
    public function getLabelFormat()
    {
        return $this->container['labelFormat'];
    }

    /**
     * Sets labelFormat
     *
     * @param \Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model\LabelFormat $labelFormat labelFormat
     *
     * @return $this
     */
    public function setLabelFormat($labelFormat)
    {
        $this->container['labelFormat'] = $labelFormat;

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


