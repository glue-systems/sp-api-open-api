<?php
/**
 * AssociatedItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\ServicesV1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Services
 *
 * With the Services API, you can build applications that help service providers get and modify their service orders and manage their resources.
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

namespace Glue\SpApi\OpenAPI\Clients\ServicesV1\Model;

use \ArrayAccess;
use \Glue\SpApi\OpenAPI\Clients\ServicesV1\ObjectSerializer;

/**
 * AssociatedItem Class Doc Comment
 *
 * @category Class
 * @description Information about an item associated with the service job.
 * @package  Glue\SpApi\OpenAPI\Clients\ServicesV1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AssociatedItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AssociatedItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'asin' => 'string',
        'title' => 'string',
        'quantity' => 'int',
        'orderId' => 'string',
        'itemStatus' => 'string',
        'brandName' => 'string',
        'itemDelivery' => '\Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\ItemDelivery'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'asin' => null,
        'title' => null,
        'quantity' => null,
        'orderId' => null,
        'itemStatus' => null,
        'brandName' => null,
        'itemDelivery' => null
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
        'asin' => 'asin',
        'title' => 'title',
        'quantity' => 'quantity',
        'orderId' => 'orderId',
        'itemStatus' => 'itemStatus',
        'brandName' => 'brandName',
        'itemDelivery' => 'itemDelivery'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'asin' => 'setAsin',
        'title' => 'setTitle',
        'quantity' => 'setQuantity',
        'orderId' => 'setOrderId',
        'itemStatus' => 'setItemStatus',
        'brandName' => 'setBrandName',
        'itemDelivery' => 'setItemDelivery'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asin' => 'getAsin',
        'title' => 'getTitle',
        'quantity' => 'getQuantity',
        'orderId' => 'getOrderId',
        'itemStatus' => 'getItemStatus',
        'brandName' => 'getBrandName',
        'itemDelivery' => 'getItemDelivery'
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

    const ITEM_STATUS_ACTIVE = 'ACTIVE';
    const ITEM_STATUS_CANCELLED = 'CANCELLED';
    const ITEM_STATUS_SHIPPED = 'SHIPPED';
    const ITEM_STATUS_DELIVERED = 'DELIVERED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getItemStatusAllowableValues()
    {
        return [
            self::ITEM_STATUS_ACTIVE,
            self::ITEM_STATUS_CANCELLED,
            self::ITEM_STATUS_SHIPPED,
            self::ITEM_STATUS_DELIVERED,
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
        $this->container['asin'] = isset($data['asin']) ? $data['asin'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['itemStatus'] = isset($data['itemStatus']) ? $data['itemStatus'] : null;
        $this->container['brandName'] = isset($data['brandName']) ? $data['brandName'] : null;
        $this->container['itemDelivery'] = isset($data['itemDelivery']) ? $data['itemDelivery'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) > 20)) {
            $invalidProperties[] = "invalid value for 'orderId', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) < 5)) {
            $invalidProperties[] = "invalid value for 'orderId', the character length must be bigger than or equal to 5.";
        }

        $allowedValues = $this->getItemStatusAllowableValues();
        if (!is_null($this->container['itemStatus']) && !in_array($this->container['itemStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'itemStatus', must be one of '%s'",
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
     * Gets asin
     *
     * @return string|null
     */
    public function getAsin()
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin
     *
     * @param string|null $asin The Amazon Standard Identification Number (ASIN) of the item.
     *
     * @return $this
     */
    public function setAsin($asin)
    {
        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title The title of the item.
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity The total number of items included in the order.
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets orderId
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId
     *
     * @param string|null $orderId The Amazon-defined identifier for an order placed by the buyer, in 3-7-7 format.
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        if (!is_null($orderId) && (mb_strlen($orderId) > 20)) {
            throw new \InvalidArgumentException('invalid length for $orderId when calling AssociatedItem., must be smaller than or equal to 20.');
        }
        if (!is_null($orderId) && (mb_strlen($orderId) < 5)) {
            throw new \InvalidArgumentException('invalid length for $orderId when calling AssociatedItem., must be bigger than or equal to 5.');
        }

        $this->container['orderId'] = $orderId;

        return $this;
    }

    /**
     * Gets itemStatus
     *
     * @return string|null
     */
    public function getItemStatus()
    {
        return $this->container['itemStatus'];
    }

    /**
     * Sets itemStatus
     *
     * @param string|null $itemStatus The status of the item.
     *
     * @return $this
     */
    public function setItemStatus($itemStatus)
    {
        $allowedValues = $this->getItemStatusAllowableValues();
        if (!is_null($itemStatus) && !in_array($itemStatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'itemStatus', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['itemStatus'] = $itemStatus;

        return $this;
    }

    /**
     * Gets brandName
     *
     * @return string|null
     */
    public function getBrandName()
    {
        return $this->container['brandName'];
    }

    /**
     * Sets brandName
     *
     * @param string|null $brandName The brand name of the item.
     *
     * @return $this
     */
    public function setBrandName($brandName)
    {
        $this->container['brandName'] = $brandName;

        return $this;
    }

    /**
     * Gets itemDelivery
     *
     * @return \Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\ItemDelivery|null
     */
    public function getItemDelivery()
    {
        return $this->container['itemDelivery'];
    }

    /**
     * Sets itemDelivery
     *
     * @param \Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\ItemDelivery|null $itemDelivery itemDelivery
     *
     * @return $this
     */
    public function setItemDelivery($itemDelivery)
    {
        $this->container['itemDelivery'] = $itemDelivery;

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

