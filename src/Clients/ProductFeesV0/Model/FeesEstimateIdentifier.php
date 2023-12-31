<?php
/**
 * FeesEstimateIdentifier
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
 * FeesEstimateIdentifier Class Doc Comment
 *
 * @category Class
 * @description An item identifier, marketplace, time of request, and other details that identify an estimate.
 * @package  Glue\SpApi\OpenAPI\Clients\ProductFeesV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FeesEstimateIdentifier implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FeesEstimateIdentifier';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'marketplaceId' => 'string',
        'sellerId' => 'string',
        'idType' => '\Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Model\IdType',
        'idValue' => 'string',
        'isAmazonFulfilled' => 'bool',
        'priceToEstimateFees' => '\Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Model\PriceToEstimateFees',
        'sellerInputIdentifier' => 'string',
        'optionalFulfillmentProgram' => '\Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Model\OptionalFulfillmentProgram'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'marketplaceId' => null,
        'sellerId' => null,
        'idType' => null,
        'idValue' => null,
        'isAmazonFulfilled' => null,
        'priceToEstimateFees' => null,
        'sellerInputIdentifier' => null,
        'optionalFulfillmentProgram' => null
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
        'marketplaceId' => 'MarketplaceId',
        'sellerId' => 'SellerId',
        'idType' => 'IdType',
        'idValue' => 'IdValue',
        'isAmazonFulfilled' => 'IsAmazonFulfilled',
        'priceToEstimateFees' => 'PriceToEstimateFees',
        'sellerInputIdentifier' => 'SellerInputIdentifier',
        'optionalFulfillmentProgram' => 'OptionalFulfillmentProgram'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplaceId' => 'setMarketplaceId',
        'sellerId' => 'setSellerId',
        'idType' => 'setIdType',
        'idValue' => 'setIdValue',
        'isAmazonFulfilled' => 'setIsAmazonFulfilled',
        'priceToEstimateFees' => 'setPriceToEstimateFees',
        'sellerInputIdentifier' => 'setSellerInputIdentifier',
        'optionalFulfillmentProgram' => 'setOptionalFulfillmentProgram'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplaceId' => 'getMarketplaceId',
        'sellerId' => 'getSellerId',
        'idType' => 'getIdType',
        'idValue' => 'getIdValue',
        'isAmazonFulfilled' => 'getIsAmazonFulfilled',
        'priceToEstimateFees' => 'getPriceToEstimateFees',
        'sellerInputIdentifier' => 'getSellerInputIdentifier',
        'optionalFulfillmentProgram' => 'getOptionalFulfillmentProgram'
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
        $this->container['sellerId'] = isset($data['sellerId']) ? $data['sellerId'] : null;
        $this->container['idType'] = isset($data['idType']) ? $data['idType'] : null;
        $this->container['idValue'] = isset($data['idValue']) ? $data['idValue'] : null;
        $this->container['isAmazonFulfilled'] = isset($data['isAmazonFulfilled']) ? $data['isAmazonFulfilled'] : null;
        $this->container['priceToEstimateFees'] = isset($data['priceToEstimateFees']) ? $data['priceToEstimateFees'] : null;
        $this->container['sellerInputIdentifier'] = isset($data['sellerInputIdentifier']) ? $data['sellerInputIdentifier'] : null;
        $this->container['optionalFulfillmentProgram'] = isset($data['optionalFulfillmentProgram']) ? $data['optionalFulfillmentProgram'] : null;
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
     * Gets marketplaceId
     *
     * @return string|null
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplaceId'];
    }

    /**
     * Sets marketplaceId
     *
     * @param string|null $marketplaceId A marketplace identifier.
     *
     * @return $this
     */
    public function setMarketplaceId($marketplaceId)
    {
        $this->container['marketplaceId'] = $marketplaceId;

        return $this;
    }

    /**
     * Gets sellerId
     *
     * @return string|null
     */
    public function getSellerId()
    {
        return $this->container['sellerId'];
    }

    /**
     * Sets sellerId
     *
     * @param string|null $sellerId The seller identifier.
     *
     * @return $this
     */
    public function setSellerId($sellerId)
    {
        $this->container['sellerId'] = $sellerId;

        return $this;
    }

    /**
     * Gets idType
     *
     * @return \Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Model\IdType|null
     */
    public function getIdType()
    {
        return $this->container['idType'];
    }

    /**
     * Sets idType
     *
     * @param \Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Model\IdType|null $idType idType
     *
     * @return $this
     */
    public function setIdType($idType)
    {
        $this->container['idType'] = $idType;

        return $this;
    }

    /**
     * Gets idValue
     *
     * @return string|null
     */
    public function getIdValue()
    {
        return $this->container['idValue'];
    }

    /**
     * Sets idValue
     *
     * @param string|null $idValue The item identifier.
     *
     * @return $this
     */
    public function setIdValue($idValue)
    {
        $this->container['idValue'] = $idValue;

        return $this;
    }

    /**
     * Gets isAmazonFulfilled
     *
     * @return bool|null
     */
    public function getIsAmazonFulfilled()
    {
        return $this->container['isAmazonFulfilled'];
    }

    /**
     * Sets isAmazonFulfilled
     *
     * @param bool|null $isAmazonFulfilled When true, the offer is fulfilled by Amazon.
     *
     * @return $this
     */
    public function setIsAmazonFulfilled($isAmazonFulfilled)
    {
        $this->container['isAmazonFulfilled'] = $isAmazonFulfilled;

        return $this;
    }

    /**
     * Gets priceToEstimateFees
     *
     * @return \Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Model\PriceToEstimateFees|null
     */
    public function getPriceToEstimateFees()
    {
        return $this->container['priceToEstimateFees'];
    }

    /**
     * Sets priceToEstimateFees
     *
     * @param \Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Model\PriceToEstimateFees|null $priceToEstimateFees priceToEstimateFees
     *
     * @return $this
     */
    public function setPriceToEstimateFees($priceToEstimateFees)
    {
        $this->container['priceToEstimateFees'] = $priceToEstimateFees;

        return $this;
    }

    /**
     * Gets sellerInputIdentifier
     *
     * @return string|null
     */
    public function getSellerInputIdentifier()
    {
        return $this->container['sellerInputIdentifier'];
    }

    /**
     * Sets sellerInputIdentifier
     *
     * @param string|null $sellerInputIdentifier A unique identifier provided by the caller to track this request.
     *
     * @return $this
     */
    public function setSellerInputIdentifier($sellerInputIdentifier)
    {
        $this->container['sellerInputIdentifier'] = $sellerInputIdentifier;

        return $this;
    }

    /**
     * Gets optionalFulfillmentProgram
     *
     * @return \Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Model\OptionalFulfillmentProgram|null
     */
    public function getOptionalFulfillmentProgram()
    {
        return $this->container['optionalFulfillmentProgram'];
    }

    /**
     * Sets optionalFulfillmentProgram
     *
     * @param \Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Model\OptionalFulfillmentProgram|null $optionalFulfillmentProgram optionalFulfillmentProgram
     *
     * @return $this
     */
    public function setOptionalFulfillmentProgram($optionalFulfillmentProgram)
    {
        $this->container['optionalFulfillmentProgram'] = $optionalFulfillmentProgram;

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


