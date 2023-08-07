<?php
/**
 * ItemVariationsByMarketplace
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\CatalogItemsV20201201
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Catalog Items
 *
 * The Selling Partner API for Catalog Items provides programmatic access to information about items in the Amazon catalog.  For more information, see the [Catalog Items API Use Case Guide](doc:catalog-items-api-v2020-12-01-use-case-guide).
 *
 * OpenAPI spec version: 2020-12-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Glue\SpApi\OpenAPI\Clients\CatalogItemsV20201201\Model;

use \ArrayAccess;
use \Glue\SpApi\OpenAPI\Clients\CatalogItemsV20201201\ObjectSerializer;

/**
 * ItemVariationsByMarketplace Class Doc Comment
 *
 * @category Class
 * @description Variation details for the Amazon catalog item for the indicated Amazon marketplace.
 * @package  Glue\SpApi\OpenAPI\Clients\CatalogItemsV20201201
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ItemVariationsByMarketplace implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ItemVariationsByMarketplace';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'marketplaceId' => 'string',
        'asins' => 'string[]',
        'variationType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'marketplaceId' => null,
        'asins' => null,
        'variationType' => null
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
        'asins' => 'asins',
        'variationType' => 'variationType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplaceId' => 'setMarketplaceId',
        'asins' => 'setAsins',
        'variationType' => 'setVariationType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplaceId' => 'getMarketplaceId',
        'asins' => 'getAsins',
        'variationType' => 'getVariationType'
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

    const VARIATION_TYPE_PARENT = 'PARENT';
    const VARIATION_TYPE_CHILD = 'CHILD';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVariationTypeAllowableValues()
    {
        return [
            self::VARIATION_TYPE_PARENT,
            self::VARIATION_TYPE_CHILD,
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
        $this->container['marketplaceId'] = isset($data['marketplaceId']) ? $data['marketplaceId'] : null;
        $this->container['asins'] = isset($data['asins']) ? $data['asins'] : null;
        $this->container['variationType'] = isset($data['variationType']) ? $data['variationType'] : null;
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
        if ($this->container['asins'] === null) {
            $invalidProperties[] = "'asins' can't be null";
        }
        if ($this->container['variationType'] === null) {
            $invalidProperties[] = "'variationType' can't be null";
        }
        $allowedValues = $this->getVariationTypeAllowableValues();
        if (!is_null($this->container['variationType']) && !in_array($this->container['variationType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'variationType', must be one of '%s'",
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
     * @param string $marketplaceId Amazon marketplace identifier.
     *
     * @return $this
     */
    public function setMarketplaceId($marketplaceId)
    {
        $this->container['marketplaceId'] = $marketplaceId;

        return $this;
    }

    /**
     * Gets asins
     *
     * @return string[]
     */
    public function getAsins()
    {
        return $this->container['asins'];
    }

    /**
     * Sets asins
     *
     * @param string[] $asins Identifiers (ASINs) of the related items.
     *
     * @return $this
     */
    public function setAsins($asins)
    {
        $this->container['asins'] = $asins;

        return $this;
    }

    /**
     * Gets variationType
     *
     * @return string
     */
    public function getVariationType()
    {
        return $this->container['variationType'];
    }

    /**
     * Sets variationType
     *
     * @param string $variationType Type of variation relationship of the Amazon catalog item in the request to the related item(s): \"PARENT\" or \"CHILD\".
     *
     * @return $this
     */
    public function setVariationType($variationType)
    {
        $allowedValues = $this->getVariationTypeAllowableValues();
        if (!in_array($variationType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'variationType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['variationType'] = $variationType;

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


