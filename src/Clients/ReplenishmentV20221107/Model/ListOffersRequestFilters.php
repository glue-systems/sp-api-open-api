<?php
/**
 * ListOffersRequestFilters
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Replenishment
 *
 * The Selling Partner API for Replenishment (Replenishment API) provides programmatic access to replenishment program metrics and offers. These programs provide recurring delivery (automatic or manual) of any replenishable item at a frequency chosen by the customer.
 *
 * OpenAPI spec version: 2022-11-07
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model;

use \ArrayAccess;
use \Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\ObjectSerializer;

/**
 * ListOffersRequestFilters Class Doc Comment
 *
 * @category Class
 * @description Use these parameters to filter results. Any result must match all of the provided parameters. For any parameter that is an array, the result must match at least one element in the provided array.
 * @package  Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ListOffersRequestFilters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListOffersRequestFilters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'marketplaceId' => 'string',
        'skus' => 'string[]',
        'asins' => 'string[]',
        'eligibilities' => '\Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\EligibilityStatus[]',
        'preferences' => '\Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\Preference',
        'promotions' => '\Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\Promotion',
        'programTypes' => '\Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\ProgramType[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'marketplaceId' => null,
        'skus' => null,
        'asins' => null,
        'eligibilities' => null,
        'preferences' => null,
        'promotions' => null,
        'programTypes' => null
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
        'skus' => 'skus',
        'asins' => 'asins',
        'eligibilities' => 'eligibilities',
        'preferences' => 'preferences',
        'promotions' => 'promotions',
        'programTypes' => 'programTypes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplaceId' => 'setMarketplaceId',
        'skus' => 'setSkus',
        'asins' => 'setAsins',
        'eligibilities' => 'setEligibilities',
        'preferences' => 'setPreferences',
        'promotions' => 'setPromotions',
        'programTypes' => 'setProgramTypes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplaceId' => 'getMarketplaceId',
        'skus' => 'getSkus',
        'asins' => 'getAsins',
        'eligibilities' => 'getEligibilities',
        'preferences' => 'getPreferences',
        'promotions' => 'getPromotions',
        'programTypes' => 'getProgramTypes'
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
        $this->container['skus'] = isset($data['skus']) ? $data['skus'] : null;
        $this->container['asins'] = isset($data['asins']) ? $data['asins'] : null;
        $this->container['eligibilities'] = isset($data['eligibilities']) ? $data['eligibilities'] : null;
        $this->container['preferences'] = isset($data['preferences']) ? $data['preferences'] : null;
        $this->container['promotions'] = isset($data['promotions']) ? $data['promotions'] : null;
        $this->container['programTypes'] = isset($data['programTypes']) ? $data['programTypes'] : null;
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
        if ($this->container['programTypes'] === null) {
            $invalidProperties[] = "'programTypes' can't be null";
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
     * @param string $marketplaceId The marketplace identifier. The supported marketplaces for both sellers and vendors are US, CA, ES, UK, FR, IT, IN, DE and JP. The supported marketplaces for vendors only are BR, AU, MX, AE and NL. Refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids) to find the identifier for the marketplace.
     *
     * @return $this
     */
    public function setMarketplaceId($marketplaceId)
    {
        $this->container['marketplaceId'] = $marketplaceId;

        return $this;
    }

    /**
     * Gets skus
     *
     * @return string[]|null
     */
    public function getSkus()
    {
        return $this->container['skus'];
    }

    /**
     * Sets skus
     *
     * @param string[]|null $skus A list of SKUs to filter. This filter is only supported for sellers and not for vendors.
     *
     * @return $this
     */
    public function setSkus($skus)
    {
        $this->container['skus'] = $skus;

        return $this;
    }

    /**
     * Gets asins
     *
     * @return string[]|null
     */
    public function getAsins()
    {
        return $this->container['asins'];
    }

    /**
     * Sets asins
     *
     * @param string[]|null $asins A list of Amazon Standard Identification Numbers (ASINs).
     *
     * @return $this
     */
    public function setAsins($asins)
    {
        $this->container['asins'] = $asins;

        return $this;
    }

    /**
     * Gets eligibilities
     *
     * @return \Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\EligibilityStatus[]|null
     */
    public function getEligibilities()
    {
        return $this->container['eligibilities'];
    }

    /**
     * Sets eligibilities
     *
     * @param \Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\EligibilityStatus[]|null $eligibilities A list of eligibilities associated with an offer.
     *
     * @return $this
     */
    public function setEligibilities($eligibilities)
    {
        $this->container['eligibilities'] = $eligibilities;

        return $this;
    }

    /**
     * Gets preferences
     *
     * @return \Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\Preference|null
     */
    public function getPreferences()
    {
        return $this->container['preferences'];
    }

    /**
     * Sets preferences
     *
     * @param \Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\Preference|null $preferences preferences
     *
     * @return $this
     */
    public function setPreferences($preferences)
    {
        $this->container['preferences'] = $preferences;

        return $this;
    }

    /**
     * Gets promotions
     *
     * @return \Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\Promotion|null
     */
    public function getPromotions()
    {
        return $this->container['promotions'];
    }

    /**
     * Sets promotions
     *
     * @param \Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\Promotion|null $promotions promotions
     *
     * @return $this
     */
    public function setPromotions($promotions)
    {
        $this->container['promotions'] = $promotions;

        return $this;
    }

    /**
     * Gets programTypes
     *
     * @return \Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\ProgramType[]
     */
    public function getProgramTypes()
    {
        return $this->container['programTypes'];
    }

    /**
     * Sets programTypes
     *
     * @param \Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\ProgramType[] $programTypes A list of replenishment program types.
     *
     * @return $this
     */
    public function setProgramTypes($programTypes)
    {
        $this->container['programTypes'] = $programTypes;

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


