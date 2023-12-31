<?php
/**
 * JobListing
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
 * JobListing Class Doc Comment
 *
 * @category Class
 * @description The payload for the &#x60;getServiceJobs&#x60; operation.
 * @package  Glue\SpApi\OpenAPI\Clients\ServicesV1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class JobListing implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'JobListing';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'totalResultSize' => 'int',
        'nextPageToken' => 'string',
        'previousPageToken' => 'string',
        'jobs' => '\Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\ServiceJob[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'totalResultSize' => null,
        'nextPageToken' => null,
        'previousPageToken' => null,
        'jobs' => null
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
        'totalResultSize' => 'totalResultSize',
        'nextPageToken' => 'nextPageToken',
        'previousPageToken' => 'previousPageToken',
        'jobs' => 'jobs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'totalResultSize' => 'setTotalResultSize',
        'nextPageToken' => 'setNextPageToken',
        'previousPageToken' => 'setPreviousPageToken',
        'jobs' => 'setJobs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'totalResultSize' => 'getTotalResultSize',
        'nextPageToken' => 'getNextPageToken',
        'previousPageToken' => 'getPreviousPageToken',
        'jobs' => 'getJobs'
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
        $this->container['totalResultSize'] = isset($data['totalResultSize']) ? $data['totalResultSize'] : null;
        $this->container['nextPageToken'] = isset($data['nextPageToken']) ? $data['nextPageToken'] : null;
        $this->container['previousPageToken'] = isset($data['previousPageToken']) ? $data['previousPageToken'] : null;
        $this->container['jobs'] = isset($data['jobs']) ? $data['jobs'] : null;
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
     * Gets totalResultSize
     *
     * @return int|null
     */
    public function getTotalResultSize()
    {
        return $this->container['totalResultSize'];
    }

    /**
     * Sets totalResultSize
     *
     * @param int|null $totalResultSize Total result size of the query result.
     *
     * @return $this
     */
    public function setTotalResultSize($totalResultSize)
    {
        $this->container['totalResultSize'] = $totalResultSize;

        return $this;
    }

    /**
     * Gets nextPageToken
     *
     * @return string|null
     */
    public function getNextPageToken()
    {
        return $this->container['nextPageToken'];
    }

    /**
     * Sets nextPageToken
     *
     * @param string|null $nextPageToken A generated string used to pass information to your next request. If `nextPageToken` is returned, pass the value of `nextPageToken` to the `pageToken` to get next results.
     *
     * @return $this
     */
    public function setNextPageToken($nextPageToken)
    {
        $this->container['nextPageToken'] = $nextPageToken;

        return $this;
    }

    /**
     * Gets previousPageToken
     *
     * @return string|null
     */
    public function getPreviousPageToken()
    {
        return $this->container['previousPageToken'];
    }

    /**
     * Sets previousPageToken
     *
     * @param string|null $previousPageToken A generated string used to pass information to your next request. If `previousPageToken` is returned, pass the value of `previousPageToken` to the `pageToken` to get previous page results.
     *
     * @return $this
     */
    public function setPreviousPageToken($previousPageToken)
    {
        $this->container['previousPageToken'] = $previousPageToken;

        return $this;
    }

    /**
     * Gets jobs
     *
     * @return \Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\ServiceJob[]|null
     */
    public function getJobs()
    {
        return $this->container['jobs'];
    }

    /**
     * Sets jobs
     *
     * @param \Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\ServiceJob[]|null $jobs List of job details for the given input.
     *
     * @return $this
     */
    public function setJobs($jobs)
    {
        $this->container['jobs'] = $jobs;

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


