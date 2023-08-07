<?php
/**
 * Feed
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\FeedsV20210630
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Feeds
 *
 * The Selling Partner API for Feeds lets you upload data to Amazon on behalf of a selling partner.
 *
 * OpenAPI spec version: 2021-06-30
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Glue\SpApi\OpenAPI\Clients\FeedsV20210630\Model;

use \ArrayAccess;
use \Glue\SpApi\OpenAPI\Clients\FeedsV20210630\ObjectSerializer;

/**
 * Feed Class Doc Comment
 *
 * @category Class
 * @description Detailed information about the feed.
 * @package  Glue\SpApi\OpenAPI\Clients\FeedsV20210630
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Feed implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Feed';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'feed_id' => 'string',
        'feed_type' => 'string',
        'marketplace_ids' => 'string[]',
        'created_time' => '\DateTime',
        'processing_status' => 'string',
        'processing_start_time' => '\DateTime',
        'processing_end_time' => '\DateTime',
        'result_feed_document_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'feed_id' => null,
        'feed_type' => null,
        'marketplace_ids' => null,
        'created_time' => 'date-time',
        'processing_status' => null,
        'processing_start_time' => 'date-time',
        'processing_end_time' => 'date-time',
        'result_feed_document_id' => null
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
        'feed_id' => 'feedId',
        'feed_type' => 'feedType',
        'marketplace_ids' => 'marketplaceIds',
        'created_time' => 'createdTime',
        'processing_status' => 'processingStatus',
        'processing_start_time' => 'processingStartTime',
        'processing_end_time' => 'processingEndTime',
        'result_feed_document_id' => 'resultFeedDocumentId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'feed_id' => 'setFeedId',
        'feed_type' => 'setFeedType',
        'marketplace_ids' => 'setMarketplaceIds',
        'created_time' => 'setCreatedTime',
        'processing_status' => 'setProcessingStatus',
        'processing_start_time' => 'setProcessingStartTime',
        'processing_end_time' => 'setProcessingEndTime',
        'result_feed_document_id' => 'setResultFeedDocumentId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'feed_id' => 'getFeedId',
        'feed_type' => 'getFeedType',
        'marketplace_ids' => 'getMarketplaceIds',
        'created_time' => 'getCreatedTime',
        'processing_status' => 'getProcessingStatus',
        'processing_start_time' => 'getProcessingStartTime',
        'processing_end_time' => 'getProcessingEndTime',
        'result_feed_document_id' => 'getResultFeedDocumentId'
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

    const PROCESSING_STATUS_CANCELLED = 'CANCELLED';
    const PROCESSING_STATUS_DONE = 'DONE';
    const PROCESSING_STATUS_FATAL = 'FATAL';
    const PROCESSING_STATUS_IN_PROGRESS = 'IN_PROGRESS';
    const PROCESSING_STATUS_IN_QUEUE = 'IN_QUEUE';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProcessingStatusAllowableValues()
    {
        return [
            self::PROCESSING_STATUS_CANCELLED,
            self::PROCESSING_STATUS_DONE,
            self::PROCESSING_STATUS_FATAL,
            self::PROCESSING_STATUS_IN_PROGRESS,
            self::PROCESSING_STATUS_IN_QUEUE,
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
        $this->container['feed_id'] = isset($data['feed_id']) ? $data['feed_id'] : null;
        $this->container['feed_type'] = isset($data['feed_type']) ? $data['feed_type'] : null;
        $this->container['marketplace_ids'] = isset($data['marketplace_ids']) ? $data['marketplace_ids'] : null;
        $this->container['created_time'] = isset($data['created_time']) ? $data['created_time'] : null;
        $this->container['processing_status'] = isset($data['processing_status']) ? $data['processing_status'] : null;
        $this->container['processing_start_time'] = isset($data['processing_start_time']) ? $data['processing_start_time'] : null;
        $this->container['processing_end_time'] = isset($data['processing_end_time']) ? $data['processing_end_time'] : null;
        $this->container['result_feed_document_id'] = isset($data['result_feed_document_id']) ? $data['result_feed_document_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['feed_id'] === null) {
            $invalidProperties[] = "'feed_id' can't be null";
        }
        if ($this->container['feed_type'] === null) {
            $invalidProperties[] = "'feed_type' can't be null";
        }
        if ($this->container['created_time'] === null) {
            $invalidProperties[] = "'created_time' can't be null";
        }
        if ($this->container['processing_status'] === null) {
            $invalidProperties[] = "'processing_status' can't be null";
        }
        $allowedValues = $this->getProcessingStatusAllowableValues();
        if (!is_null($this->container['processing_status']) && !in_array($this->container['processing_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'processing_status', must be one of '%s'",
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
     * Gets feed_id
     *
     * @return string
     */
    public function getFeedId()
    {
        return $this->container['feed_id'];
    }

    /**
     * Sets feed_id
     *
     * @param string $feed_id The identifier for the feed. This identifier is unique only in combination with a seller ID.
     *
     * @return $this
     */
    public function setFeedId($feed_id)
    {
        $this->container['feed_id'] = $feed_id;

        return $this;
    }

    /**
     * Gets feed_type
     *
     * @return string
     */
    public function getFeedType()
    {
        return $this->container['feed_type'];
    }

    /**
     * Sets feed_type
     *
     * @param string $feed_type The feed type.
     *
     * @return $this
     */
    public function setFeedType($feed_type)
    {
        $this->container['feed_type'] = $feed_type;

        return $this;
    }

    /**
     * Gets marketplace_ids
     *
     * @return string[]|null
     */
    public function getMarketplaceIds()
    {
        return $this->container['marketplace_ids'];
    }

    /**
     * Sets marketplace_ids
     *
     * @param string[]|null $marketplace_ids A list of identifiers for the marketplaces that the feed is applied to.
     *
     * @return $this
     */
    public function setMarketplaceIds($marketplace_ids)
    {
        $this->container['marketplace_ids'] = $marketplace_ids;

        return $this;
    }

    /**
     * Gets created_time
     *
     * @return \DateTime
     */
    public function getCreatedTime()
    {
        return $this->container['created_time'];
    }

    /**
     * Sets created_time
     *
     * @param \DateTime $created_time The date and time when the feed was created, in ISO 8601 date time format.
     *
     * @return $this
     */
    public function setCreatedTime($created_time)
    {
        $this->container['created_time'] = $created_time;

        return $this;
    }

    /**
     * Gets processing_status
     *
     * @return string
     */
    public function getProcessingStatus()
    {
        return $this->container['processing_status'];
    }

    /**
     * Sets processing_status
     *
     * @param string $processing_status The processing status of the feed.
     *
     * @return $this
     */
    public function setProcessingStatus($processing_status)
    {
        $allowedValues = $this->getProcessingStatusAllowableValues();
        if (!in_array($processing_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'processing_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['processing_status'] = $processing_status;

        return $this;
    }

    /**
     * Gets processing_start_time
     *
     * @return \DateTime|null
     */
    public function getProcessingStartTime()
    {
        return $this->container['processing_start_time'];
    }

    /**
     * Sets processing_start_time
     *
     * @param \DateTime|null $processing_start_time The date and time when feed processing started, in ISO 8601 date time format.
     *
     * @return $this
     */
    public function setProcessingStartTime($processing_start_time)
    {
        $this->container['processing_start_time'] = $processing_start_time;

        return $this;
    }

    /**
     * Gets processing_end_time
     *
     * @return \DateTime|null
     */
    public function getProcessingEndTime()
    {
        return $this->container['processing_end_time'];
    }

    /**
     * Sets processing_end_time
     *
     * @param \DateTime|null $processing_end_time The date and time when feed processing completed, in ISO 8601 date time format.
     *
     * @return $this
     */
    public function setProcessingEndTime($processing_end_time)
    {
        $this->container['processing_end_time'] = $processing_end_time;

        return $this;
    }

    /**
     * Gets result_feed_document_id
     *
     * @return string|null
     */
    public function getResultFeedDocumentId()
    {
        return $this->container['result_feed_document_id'];
    }

    /**
     * Sets result_feed_document_id
     *
     * @param string|null $result_feed_document_id The identifier for the feed document. This identifier is unique only in combination with a seller ID.
     *
     * @return $this
     */
    public function setResultFeedDocumentId($result_feed_document_id)
    {
        $this->container['result_feed_document_id'] = $result_feed_document_id;

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


