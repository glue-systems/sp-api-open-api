<?php
/**
 * RegulatedOrderVerificationStatus
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\OrdersV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Orders
 *
 * The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools. The Orders API only supports orders that are less than two years old. Orders more than two years old will not show in the API response.
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

namespace Glue\SpApi\OpenAPI\Clients\OrdersV0\Model;

use \ArrayAccess;
use \Glue\SpApi\OpenAPI\Clients\OrdersV0\ObjectSerializer;

/**
 * RegulatedOrderVerificationStatus Class Doc Comment
 *
 * @category Class
 * @description The verification status of the order along with associated approval or rejection metadata.
 * @package  Glue\SpApi\OpenAPI\Clients\OrdersV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RegulatedOrderVerificationStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RegulatedOrderVerificationStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'status' => '\Glue\SpApi\OpenAPI\Clients\OrdersV0\Model\VerificationStatus',
        'requiresMerchantAction' => 'bool',
        'validRejectionReasons' => '\Glue\SpApi\OpenAPI\Clients\OrdersV0\Model\RejectionReason[]',
        'rejectionReason' => '\Glue\SpApi\OpenAPI\Clients\OrdersV0\Model\RejectionReason',
        'reviewDate' => 'string',
        'externalReviewerId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'status' => null,
        'requiresMerchantAction' => null,
        'validRejectionReasons' => null,
        'rejectionReason' => null,
        'reviewDate' => null,
        'externalReviewerId' => null
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
        'status' => 'Status',
        'requiresMerchantAction' => 'RequiresMerchantAction',
        'validRejectionReasons' => 'ValidRejectionReasons',
        'rejectionReason' => 'RejectionReason',
        'reviewDate' => 'ReviewDate',
        'externalReviewerId' => 'ExternalReviewerId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'requiresMerchantAction' => 'setRequiresMerchantAction',
        'validRejectionReasons' => 'setValidRejectionReasons',
        'rejectionReason' => 'setRejectionReason',
        'reviewDate' => 'setReviewDate',
        'externalReviewerId' => 'setExternalReviewerId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'requiresMerchantAction' => 'getRequiresMerchantAction',
        'validRejectionReasons' => 'getValidRejectionReasons',
        'rejectionReason' => 'getRejectionReason',
        'reviewDate' => 'getReviewDate',
        'externalReviewerId' => 'getExternalReviewerId'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['requiresMerchantAction'] = isset($data['requiresMerchantAction']) ? $data['requiresMerchantAction'] : null;
        $this->container['validRejectionReasons'] = isset($data['validRejectionReasons']) ? $data['validRejectionReasons'] : null;
        $this->container['rejectionReason'] = isset($data['rejectionReason']) ? $data['rejectionReason'] : null;
        $this->container['reviewDate'] = isset($data['reviewDate']) ? $data['reviewDate'] : null;
        $this->container['externalReviewerId'] = isset($data['externalReviewerId']) ? $data['externalReviewerId'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['requiresMerchantAction'] === null) {
            $invalidProperties[] = "'requiresMerchantAction' can't be null";
        }
        if ($this->container['validRejectionReasons'] === null) {
            $invalidProperties[] = "'validRejectionReasons' can't be null";
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
     * Gets status
     *
     * @return \Glue\SpApi\OpenAPI\Clients\OrdersV0\Model\VerificationStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Glue\SpApi\OpenAPI\Clients\OrdersV0\Model\VerificationStatus $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets requiresMerchantAction
     *
     * @return bool
     */
    public function getRequiresMerchantAction()
    {
        return $this->container['requiresMerchantAction'];
    }

    /**
     * Sets requiresMerchantAction
     *
     * @param bool $requiresMerchantAction When true, the regulated information provided in the order requires a review by the merchant.
     *
     * @return $this
     */
    public function setRequiresMerchantAction($requiresMerchantAction)
    {
        $this->container['requiresMerchantAction'] = $requiresMerchantAction;

        return $this;
    }

    /**
     * Gets validRejectionReasons
     *
     * @return \Glue\SpApi\OpenAPI\Clients\OrdersV0\Model\RejectionReason[]
     */
    public function getValidRejectionReasons()
    {
        return $this->container['validRejectionReasons'];
    }

    /**
     * Sets validRejectionReasons
     *
     * @param \Glue\SpApi\OpenAPI\Clients\OrdersV0\Model\RejectionReason[] $validRejectionReasons A list of valid rejection reasons that may be used to reject the order's regulated information.
     *
     * @return $this
     */
    public function setValidRejectionReasons($validRejectionReasons)
    {
        $this->container['validRejectionReasons'] = $validRejectionReasons;

        return $this;
    }

    /**
     * Gets rejectionReason
     *
     * @return \Glue\SpApi\OpenAPI\Clients\OrdersV0\Model\RejectionReason|null
     */
    public function getRejectionReason()
    {
        return $this->container['rejectionReason'];
    }

    /**
     * Sets rejectionReason
     *
     * @param \Glue\SpApi\OpenAPI\Clients\OrdersV0\Model\RejectionReason|null $rejectionReason rejectionReason
     *
     * @return $this
     */
    public function setRejectionReason($rejectionReason)
    {
        $this->container['rejectionReason'] = $rejectionReason;

        return $this;
    }

    /**
     * Gets reviewDate
     *
     * @return string|null
     */
    public function getReviewDate()
    {
        return $this->container['reviewDate'];
    }

    /**
     * Sets reviewDate
     *
     * @param string|null $reviewDate The date the order was reviewed. In ISO 8601 date time format.
     *
     * @return $this
     */
    public function setReviewDate($reviewDate)
    {
        $this->container['reviewDate'] = $reviewDate;

        return $this;
    }

    /**
     * Gets externalReviewerId
     *
     * @return string|null
     */
    public function getExternalReviewerId()
    {
        return $this->container['externalReviewerId'];
    }

    /**
     * Sets externalReviewerId
     *
     * @param string|null $externalReviewerId The identifier for the order's regulated information reviewer.
     *
     * @return $this
     */
    public function setExternalReviewerId($externalReviewerId)
    {
        $this->container['externalReviewerId'] = $externalReviewerId;

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


