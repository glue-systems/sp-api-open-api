<?php
/**
 * LabelData
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Direct Fulfillment Shipping
 *
 * The Selling Partner API for Direct Fulfillment Shipping provides programmatic access to a direct fulfillment vendor's shipping data.
 *
 * OpenAPI spec version: 2021-12-28
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Model;

use \ArrayAccess;
use \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\ObjectSerializer;

/**
 * LabelData Class Doc Comment
 *
 * @category Class
 * @description Details of the shipment label.
 * @package  Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LabelData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LabelData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'packageIdentifier' => 'string',
        'trackingNumber' => 'string',
        'shipMethod' => 'string',
        'shipMethodName' => 'string',
        'content' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'packageIdentifier' => null,
        'trackingNumber' => null,
        'shipMethod' => null,
        'shipMethodName' => null,
        'content' => null
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
        'packageIdentifier' => 'packageIdentifier',
        'trackingNumber' => 'trackingNumber',
        'shipMethod' => 'shipMethod',
        'shipMethodName' => 'shipMethodName',
        'content' => 'content'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'packageIdentifier' => 'setPackageIdentifier',
        'trackingNumber' => 'setTrackingNumber',
        'shipMethod' => 'setShipMethod',
        'shipMethodName' => 'setShipMethodName',
        'content' => 'setContent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'packageIdentifier' => 'getPackageIdentifier',
        'trackingNumber' => 'getTrackingNumber',
        'shipMethod' => 'getShipMethod',
        'shipMethodName' => 'getShipMethodName',
        'content' => 'getContent'
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
        $this->container['packageIdentifier'] = isset($data['packageIdentifier']) ? $data['packageIdentifier'] : null;
        $this->container['trackingNumber'] = isset($data['trackingNumber']) ? $data['trackingNumber'] : null;
        $this->container['shipMethod'] = isset($data['shipMethod']) ? $data['shipMethod'] : null;
        $this->container['shipMethodName'] = isset($data['shipMethodName']) ? $data['shipMethodName'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
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
     * Gets packageIdentifier
     *
     * @return string|null
     */
    public function getPackageIdentifier()
    {
        return $this->container['packageIdentifier'];
    }

    /**
     * Sets packageIdentifier
     *
     * @param string|null $packageIdentifier Identifier for the package. The first package will be 001, the second 002, and so on. This number is used as a reference to refer to this package from the pallet level.
     *
     * @return $this
     */
    public function setPackageIdentifier($packageIdentifier)
    {
        $this->container['packageIdentifier'] = $packageIdentifier;

        return $this;
    }

    /**
     * Gets trackingNumber
     *
     * @return string|null
     */
    public function getTrackingNumber()
    {
        return $this->container['trackingNumber'];
    }

    /**
     * Sets trackingNumber
     *
     * @param string|null $trackingNumber Package tracking identifier from the shipping carrier.
     *
     * @return $this
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->container['trackingNumber'] = $trackingNumber;

        return $this;
    }

    /**
     * Gets shipMethod
     *
     * @return string|null
     */
    public function getShipMethod()
    {
        return $this->container['shipMethod'];
    }

    /**
     * Sets shipMethod
     *
     * @param string|null $shipMethod Ship method to be used for shipping the order. Amazon defines Ship Method Codes indicating shipping carrier and shipment service level. Ship Method Codes are case and format sensitive. The same ship method code should returned on the shipment confirmation. Note that the Ship Method Codes are vendor specific and will be provided to each vendor during the implementation.
     *
     * @return $this
     */
    public function setShipMethod($shipMethod)
    {
        $this->container['shipMethod'] = $shipMethod;

        return $this;
    }

    /**
     * Gets shipMethodName
     *
     * @return string|null
     */
    public function getShipMethodName()
    {
        return $this->container['shipMethodName'];
    }

    /**
     * Sets shipMethodName
     *
     * @param string|null $shipMethodName Shipping method name for internal reference.
     *
     * @return $this
     */
    public function setShipMethodName($shipMethodName)
    {
        $this->container['shipMethodName'] = $shipMethodName;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string $content This field will contain the Base64encoded string of the shipment label content.
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

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


