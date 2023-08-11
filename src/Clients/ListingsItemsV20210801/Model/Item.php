<?php
/**
 * Item
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Listings Items
 *
 * The Selling Partner API for Listings Items (Listings Items API) provides programmatic access to selling partner listings on Amazon. Use this API in collaboration with the Selling Partner API for Product Type Definitions, which you use to retrieve the information about Amazon product types needed to use the Listings Items API.  For more information, see the [Listings Items API Use Case Guide](doc:listings-items-api-v2021-08-01-use-case-guide).
 *
 * OpenAPI spec version: 2021-08-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Model;

use \ArrayAccess;
use \Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\ObjectSerializer;

/**
 * Item Class Doc Comment
 *
 * @category Class
 * @description A listings item.
 * @package  Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Item implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sku' => 'string',
        'summaries' => '\Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Model\ItemSummaryByMarketplace[]',
        'attributes' => '\Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Model\ItemAttributes',
        'issues' => '\Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Model\Issue[]',
        'offers' => '\Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Model\ItemOfferByMarketplace[]',
        'fulfillmentAvailability' => '\Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Model\FulfillmentAvailability[]',
        'procurement' => '\Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Model\ItemProcurement'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'sku' => null,
        'summaries' => null,
        'attributes' => null,
        'issues' => null,
        'offers' => null,
        'fulfillmentAvailability' => null,
        'procurement' => null
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
        'sku' => 'sku',
        'summaries' => 'summaries',
        'attributes' => 'attributes',
        'issues' => 'issues',
        'offers' => 'offers',
        'fulfillmentAvailability' => 'fulfillmentAvailability',
        'procurement' => 'procurement'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sku' => 'setSku',
        'summaries' => 'setSummaries',
        'attributes' => 'setAttributes',
        'issues' => 'setIssues',
        'offers' => 'setOffers',
        'fulfillmentAvailability' => 'setFulfillmentAvailability',
        'procurement' => 'setProcurement'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sku' => 'getSku',
        'summaries' => 'getSummaries',
        'attributes' => 'getAttributes',
        'issues' => 'getIssues',
        'offers' => 'getOffers',
        'fulfillmentAvailability' => 'getFulfillmentAvailability',
        'procurement' => 'getProcurement'
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
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['summaries'] = isset($data['summaries']) ? $data['summaries'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['issues'] = isset($data['issues']) ? $data['issues'] : null;
        $this->container['offers'] = isset($data['offers']) ? $data['offers'] : null;
        $this->container['fulfillmentAvailability'] = isset($data['fulfillmentAvailability']) ? $data['fulfillmentAvailability'] : null;
        $this->container['procurement'] = isset($data['procurement']) ? $data['procurement'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
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
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku A selling partner provided identifier for an Amazon listing.
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets summaries
     *
     * @return \Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Model\ItemSummaryByMarketplace[]|null
     */
    public function getSummaries()
    {
        return $this->container['summaries'];
    }

    /**
     * Sets summaries
     *
     * @param \Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Model\ItemSummaryByMarketplace[]|null $summaries Summary details of a listings item.
     *
     * @return $this
     */
    public function setSummaries($summaries)
    {
        $this->container['summaries'] = $summaries;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return \Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Model\ItemAttributes|null
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param \Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Model\ItemAttributes|null $attributes attributes
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets issues
     *
     * @return \Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Model\Issue[]|null
     */
    public function getIssues()
    {
        return $this->container['issues'];
    }

    /**
     * Sets issues
     *
     * @param \Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Model\Issue[]|null $issues Issues associated with the listings item.
     *
     * @return $this
     */
    public function setIssues($issues)
    {
        $this->container['issues'] = $issues;

        return $this;
    }

    /**
     * Gets offers
     *
     * @return \Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Model\ItemOfferByMarketplace[]|null
     */
    public function getOffers()
    {
        return $this->container['offers'];
    }

    /**
     * Sets offers
     *
     * @param \Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Model\ItemOfferByMarketplace[]|null $offers Offer details for the listings item.
     *
     * @return $this
     */
    public function setOffers($offers)
    {
        $this->container['offers'] = $offers;

        return $this;
    }

    /**
     * Gets fulfillmentAvailability
     *
     * @return \Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Model\FulfillmentAvailability[]|null
     */
    public function getFulfillmentAvailability()
    {
        return $this->container['fulfillmentAvailability'];
    }

    /**
     * Sets fulfillmentAvailability
     *
     * @param \Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Model\FulfillmentAvailability[]|null $fulfillmentAvailability Fulfillment availability for the listings item.
     *
     * @return $this
     */
    public function setFulfillmentAvailability($fulfillmentAvailability)
    {
        $this->container['fulfillmentAvailability'] = $fulfillmentAvailability;

        return $this;
    }

    /**
     * Gets procurement
     *
     * @return \Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Model\ItemProcurement|null
     */
    public function getProcurement()
    {
        return $this->container['procurement'];
    }

    /**
     * Sets procurement
     *
     * @param \Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Model\ItemProcurement|null $procurement procurement
     *
     * @return $this
     */
    public function setProcurement($procurement)
    {
        $this->container['procurement'] = $procurement;

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


