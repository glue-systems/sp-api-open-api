<?php
/**
 * ProductTypeDefinition
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Product Type Definitions
 *
 * The Selling Partner API for Product Type Definitions provides programmatic access to attribute and data requirements for product types in the Amazon catalog. Use this API to return the JSON Schema for a product type that you can then use with other Selling Partner APIs, such as the Selling Partner API for Listings Items, the Selling Partner API for Catalog Items, and the Selling Partner API for Feeds (for JSON-based listing feeds).
 *
 * OpenAPI spec version: 2020-09-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\Model;

use \ArrayAccess;
use \Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\ObjectSerializer;

/**
 * ProductTypeDefinition Class Doc Comment
 *
 * @category Class
 * @description A product type definition represents the attributes and data requirements for a product type in the Amazon catalog. Product type definitions are used interchangeably between the Selling Partner API for Listings Items, Selling Partner API for Catalog Items, and JSON-based listings feeds in the Selling Partner API for Feeds.
 * @package  Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProductTypeDefinition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductTypeDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'meta_schema' => '\Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\Model\SchemaLink',
        'schema' => '\Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\Model\SchemaLink',
        'requirements' => 'string',
        'requirements_enforced' => 'string',
        'property_groups' => 'map[string,\Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\Model\PropertyGroup]',
        'locale' => 'string',
        'marketplace_ids' => 'string[]',
        'product_type' => 'string',
        'product_type_version' => '\Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\Model\ProductTypeVersion'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'meta_schema' => null,
        'schema' => null,
        'requirements' => null,
        'requirements_enforced' => null,
        'property_groups' => null,
        'locale' => null,
        'marketplace_ids' => null,
        'product_type' => null,
        'product_type_version' => null
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
        'meta_schema' => 'metaSchema',
        'schema' => 'schema',
        'requirements' => 'requirements',
        'requirements_enforced' => 'requirementsEnforced',
        'property_groups' => 'propertyGroups',
        'locale' => 'locale',
        'marketplace_ids' => 'marketplaceIds',
        'product_type' => 'productType',
        'product_type_version' => 'productTypeVersion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'meta_schema' => 'setMetaSchema',
        'schema' => 'setSchema',
        'requirements' => 'setRequirements',
        'requirements_enforced' => 'setRequirementsEnforced',
        'property_groups' => 'setPropertyGroups',
        'locale' => 'setLocale',
        'marketplace_ids' => 'setMarketplaceIds',
        'product_type' => 'setProductType',
        'product_type_version' => 'setProductTypeVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'meta_schema' => 'getMetaSchema',
        'schema' => 'getSchema',
        'requirements' => 'getRequirements',
        'requirements_enforced' => 'getRequirementsEnforced',
        'property_groups' => 'getPropertyGroups',
        'locale' => 'getLocale',
        'marketplace_ids' => 'getMarketplaceIds',
        'product_type' => 'getProductType',
        'product_type_version' => 'getProductTypeVersion'
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

    const REQUIREMENTS_LISTING = 'LISTING';
    const REQUIREMENTS_LISTING_PRODUCT_ONLY = 'LISTING_PRODUCT_ONLY';
    const REQUIREMENTS_LISTING_OFFER_ONLY = 'LISTING_OFFER_ONLY';
    const REQUIREMENTS_ENFORCED_ENFORCED = 'ENFORCED';
    const REQUIREMENTS_ENFORCED_NOT_ENFORCED = 'NOT_ENFORCED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRequirementsAllowableValues()
    {
        return [
            self::REQUIREMENTS_LISTING,
            self::REQUIREMENTS_LISTING_PRODUCT_ONLY,
            self::REQUIREMENTS_LISTING_OFFER_ONLY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRequirementsEnforcedAllowableValues()
    {
        return [
            self::REQUIREMENTS_ENFORCED_ENFORCED,
            self::REQUIREMENTS_ENFORCED_NOT_ENFORCED,
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
        $this->container['meta_schema'] = isset($data['meta_schema']) ? $data['meta_schema'] : null;
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
        $this->container['requirements'] = isset($data['requirements']) ? $data['requirements'] : null;
        $this->container['requirements_enforced'] = isset($data['requirements_enforced']) ? $data['requirements_enforced'] : null;
        $this->container['property_groups'] = isset($data['property_groups']) ? $data['property_groups'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['marketplace_ids'] = isset($data['marketplace_ids']) ? $data['marketplace_ids'] : null;
        $this->container['product_type'] = isset($data['product_type']) ? $data['product_type'] : null;
        $this->container['product_type_version'] = isset($data['product_type_version']) ? $data['product_type_version'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['schema'] === null) {
            $invalidProperties[] = "'schema' can't be null";
        }
        if ($this->container['requirements'] === null) {
            $invalidProperties[] = "'requirements' can't be null";
        }
        $allowedValues = $this->getRequirementsAllowableValues();
        if (!is_null($this->container['requirements']) && !in_array($this->container['requirements'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'requirements', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['requirements_enforced'] === null) {
            $invalidProperties[] = "'requirements_enforced' can't be null";
        }
        $allowedValues = $this->getRequirementsEnforcedAllowableValues();
        if (!is_null($this->container['requirements_enforced']) && !in_array($this->container['requirements_enforced'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'requirements_enforced', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['property_groups'] === null) {
            $invalidProperties[] = "'property_groups' can't be null";
        }
        if ($this->container['locale'] === null) {
            $invalidProperties[] = "'locale' can't be null";
        }
        if ($this->container['marketplace_ids'] === null) {
            $invalidProperties[] = "'marketplace_ids' can't be null";
        }
        if ($this->container['product_type'] === null) {
            $invalidProperties[] = "'product_type' can't be null";
        }
        if ($this->container['product_type_version'] === null) {
            $invalidProperties[] = "'product_type_version' can't be null";
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
     * Gets meta_schema
     *
     * @return \Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\Model\SchemaLink|null
     */
    public function getMetaSchema()
    {
        return $this->container['meta_schema'];
    }

    /**
     * Sets meta_schema
     *
     * @param \Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\Model\SchemaLink|null $meta_schema meta_schema
     *
     * @return $this
     */
    public function setMetaSchema($meta_schema)
    {
        $this->container['meta_schema'] = $meta_schema;

        return $this;
    }

    /**
     * Gets schema
     *
     * @return \Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\Model\SchemaLink
     */
    public function getSchema()
    {
        return $this->container['schema'];
    }

    /**
     * Sets schema
     *
     * @param \Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\Model\SchemaLink $schema schema
     *
     * @return $this
     */
    public function setSchema($schema)
    {
        $this->container['schema'] = $schema;

        return $this;
    }

    /**
     * Gets requirements
     *
     * @return string
     */
    public function getRequirements()
    {
        return $this->container['requirements'];
    }

    /**
     * Sets requirements
     *
     * @param string $requirements Name of the requirements set represented in this product type definition.
     *
     * @return $this
     */
    public function setRequirements($requirements)
    {
        $allowedValues = $this->getRequirementsAllowableValues();
        if (!in_array($requirements, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'requirements', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['requirements'] = $requirements;

        return $this;
    }

    /**
     * Gets requirements_enforced
     *
     * @return string
     */
    public function getRequirementsEnforced()
    {
        return $this->container['requirements_enforced'];
    }

    /**
     * Sets requirements_enforced
     *
     * @param string $requirements_enforced Identifies if the required attributes for a requirements set are enforced by the product type definition schema. Non-enforced requirements enable structural validation of individual attributes without all of the required attributes being present (such as for partial updates).
     *
     * @return $this
     */
    public function setRequirementsEnforced($requirements_enforced)
    {
        $allowedValues = $this->getRequirementsEnforcedAllowableValues();
        if (!in_array($requirements_enforced, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'requirements_enforced', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['requirements_enforced'] = $requirements_enforced;

        return $this;
    }

    /**
     * Gets property_groups
     *
     * @return map[string,\Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\Model\PropertyGroup]
     */
    public function getPropertyGroups()
    {
        return $this->container['property_groups'];
    }

    /**
     * Sets property_groups
     *
     * @param map[string,\Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\Model\PropertyGroup] $property_groups Mapping of property group names to property groups. Property groups represent logical groupings of schema properties that can be used for display or informational purposes.
     *
     * @return $this
     */
    public function setPropertyGroups($property_groups)
    {
        $this->container['property_groups'] = $property_groups;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string $locale Locale of the display elements contained in the product type definition.
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets marketplace_ids
     *
     * @return string[]
     */
    public function getMarketplaceIds()
    {
        return $this->container['marketplace_ids'];
    }

    /**
     * Sets marketplace_ids
     *
     * @param string[] $marketplace_ids Amazon marketplace identifiers for which the product type definition is applicable.
     *
     * @return $this
     */
    public function setMarketplaceIds($marketplace_ids)
    {
        $this->container['marketplace_ids'] = $marketplace_ids;

        return $this;
    }

    /**
     * Gets product_type
     *
     * @return string
     */
    public function getProductType()
    {
        return $this->container['product_type'];
    }

    /**
     * Sets product_type
     *
     * @param string $product_type The name of the Amazon product type that this product type definition applies to.
     *
     * @return $this
     */
    public function setProductType($product_type)
    {
        $this->container['product_type'] = $product_type;

        return $this;
    }

    /**
     * Gets product_type_version
     *
     * @return \Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\Model\ProductTypeVersion
     */
    public function getProductTypeVersion()
    {
        return $this->container['product_type_version'];
    }

    /**
     * Sets product_type_version
     *
     * @param \Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\Model\ProductTypeVersion $product_type_version product_type_version
     *
     * @return $this
     */
    public function setProductTypeVersion($product_type_version)
    {
        $this->container['product_type_version'] = $product_type_version;

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


