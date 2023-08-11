<?php
/**
 * CODSettings
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner APIs for Fulfillment Outbound
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * OpenAPI spec version: 2020-07-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model;

use \ArrayAccess;
use \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\ObjectSerializer;

/**
 * CODSettings Class Doc Comment
 *
 * @category Class
 * @description The COD (Cash On Delivery) charges that you associate with a COD fulfillment order.
 * @package  Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CODSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CODSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'isCodRequired' => 'bool',
        'codCharge' => '\Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\Money',
        'codChargeTax' => '\Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\Money',
        'shippingCharge' => '\Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\Money',
        'shippingChargeTax' => '\Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\Money'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'isCodRequired' => null,
        'codCharge' => null,
        'codChargeTax' => null,
        'shippingCharge' => null,
        'shippingChargeTax' => null
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
        'isCodRequired' => 'isCodRequired',
        'codCharge' => 'codCharge',
        'codChargeTax' => 'codChargeTax',
        'shippingCharge' => 'shippingCharge',
        'shippingChargeTax' => 'shippingChargeTax'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'isCodRequired' => 'setIsCodRequired',
        'codCharge' => 'setCodCharge',
        'codChargeTax' => 'setCodChargeTax',
        'shippingCharge' => 'setShippingCharge',
        'shippingChargeTax' => 'setShippingChargeTax'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'isCodRequired' => 'getIsCodRequired',
        'codCharge' => 'getCodCharge',
        'codChargeTax' => 'getCodChargeTax',
        'shippingCharge' => 'getShippingCharge',
        'shippingChargeTax' => 'getShippingChargeTax'
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
        $this->container['isCodRequired'] = isset($data['isCodRequired']) ? $data['isCodRequired'] : null;
        $this->container['codCharge'] = isset($data['codCharge']) ? $data['codCharge'] : null;
        $this->container['codChargeTax'] = isset($data['codChargeTax']) ? $data['codChargeTax'] : null;
        $this->container['shippingCharge'] = isset($data['shippingCharge']) ? $data['shippingCharge'] : null;
        $this->container['shippingChargeTax'] = isset($data['shippingChargeTax']) ? $data['shippingChargeTax'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['isCodRequired'] === null) {
            $invalidProperties[] = "'isCodRequired' can't be null";
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
     * Gets isCodRequired
     *
     * @return bool
     */
    public function getIsCodRequired()
    {
        return $this->container['isCodRequired'];
    }

    /**
     * Sets isCodRequired
     *
     * @param bool $isCodRequired When true, this fulfillment order requires a COD (Cash On Delivery) payment.
     *
     * @return $this
     */
    public function setIsCodRequired($isCodRequired)
    {
        $this->container['isCodRequired'] = $isCodRequired;

        return $this;
    }

    /**
     * Gets codCharge
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\Money|null
     */
    public function getCodCharge()
    {
        return $this->container['codCharge'];
    }

    /**
     * Sets codCharge
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\Money|null $codCharge codCharge
     *
     * @return $this
     */
    public function setCodCharge($codCharge)
    {
        $this->container['codCharge'] = $codCharge;

        return $this;
    }

    /**
     * Gets codChargeTax
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\Money|null
     */
    public function getCodChargeTax()
    {
        return $this->container['codChargeTax'];
    }

    /**
     * Sets codChargeTax
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\Money|null $codChargeTax codChargeTax
     *
     * @return $this
     */
    public function setCodChargeTax($codChargeTax)
    {
        $this->container['codChargeTax'] = $codChargeTax;

        return $this;
    }

    /**
     * Gets shippingCharge
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\Money|null
     */
    public function getShippingCharge()
    {
        return $this->container['shippingCharge'];
    }

    /**
     * Sets shippingCharge
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\Money|null $shippingCharge shippingCharge
     *
     * @return $this
     */
    public function setShippingCharge($shippingCharge)
    {
        $this->container['shippingCharge'] = $shippingCharge;

        return $this;
    }

    /**
     * Gets shippingChargeTax
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\Money|null
     */
    public function getShippingChargeTax()
    {
        return $this->container['shippingChargeTax'];
    }

    /**
     * Sets shippingChargeTax
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\Money|null $shippingChargeTax shippingChargeTax
     *
     * @return $this
     */
    public function setShippingChargeTax($shippingChargeTax)
    {
        $this->container['shippingChargeTax'] = $shippingChargeTax;

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


