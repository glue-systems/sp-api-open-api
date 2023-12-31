<?php
/**
 * ServiceJob
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
 * ServiceJob Class Doc Comment
 *
 * @category Class
 * @description The job details of a service.
 * @package  Glue\SpApi\OpenAPI\Clients\ServicesV1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ServiceJob implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ServiceJob';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'createTime' => '\DateTime',
        'serviceJobId' => 'string',
        'serviceJobStatus' => 'string',
        'scopeOfWork' => '\Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\ScopeOfWork',
        'seller' => '\Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\Seller',
        'serviceJobProvider' => '\Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\ServiceJobProvider',
        'preferredAppointmentTimes' => '\Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\AppointmentTime[]',
        'appointments' => '\Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\Appointment[]',
        'serviceOrderId' => 'string',
        'marketplaceId' => 'string',
        'storeId' => 'string',
        'buyer' => '\Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\Buyer',
        'associatedItems' => '\Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\AssociatedItem[]',
        'serviceLocation' => '\Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\ServiceLocation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'createTime' => 'date-time',
        'serviceJobId' => null,
        'serviceJobStatus' => null,
        'scopeOfWork' => null,
        'seller' => null,
        'serviceJobProvider' => null,
        'preferredAppointmentTimes' => null,
        'appointments' => null,
        'serviceOrderId' => null,
        'marketplaceId' => null,
        'storeId' => null,
        'buyer' => null,
        'associatedItems' => null,
        'serviceLocation' => null
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
        'createTime' => 'createTime',
        'serviceJobId' => 'serviceJobId',
        'serviceJobStatus' => 'serviceJobStatus',
        'scopeOfWork' => 'scopeOfWork',
        'seller' => 'seller',
        'serviceJobProvider' => 'serviceJobProvider',
        'preferredAppointmentTimes' => 'preferredAppointmentTimes',
        'appointments' => 'appointments',
        'serviceOrderId' => 'serviceOrderId',
        'marketplaceId' => 'marketplaceId',
        'storeId' => 'storeId',
        'buyer' => 'buyer',
        'associatedItems' => 'associatedItems',
        'serviceLocation' => 'serviceLocation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'createTime' => 'setCreateTime',
        'serviceJobId' => 'setServiceJobId',
        'serviceJobStatus' => 'setServiceJobStatus',
        'scopeOfWork' => 'setScopeOfWork',
        'seller' => 'setSeller',
        'serviceJobProvider' => 'setServiceJobProvider',
        'preferredAppointmentTimes' => 'setPreferredAppointmentTimes',
        'appointments' => 'setAppointments',
        'serviceOrderId' => 'setServiceOrderId',
        'marketplaceId' => 'setMarketplaceId',
        'storeId' => 'setStoreId',
        'buyer' => 'setBuyer',
        'associatedItems' => 'setAssociatedItems',
        'serviceLocation' => 'setServiceLocation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'createTime' => 'getCreateTime',
        'serviceJobId' => 'getServiceJobId',
        'serviceJobStatus' => 'getServiceJobStatus',
        'scopeOfWork' => 'getScopeOfWork',
        'seller' => 'getSeller',
        'serviceJobProvider' => 'getServiceJobProvider',
        'preferredAppointmentTimes' => 'getPreferredAppointmentTimes',
        'appointments' => 'getAppointments',
        'serviceOrderId' => 'getServiceOrderId',
        'marketplaceId' => 'getMarketplaceId',
        'storeId' => 'getStoreId',
        'buyer' => 'getBuyer',
        'associatedItems' => 'getAssociatedItems',
        'serviceLocation' => 'getServiceLocation'
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

    const SERVICE_JOB_STATUS_NOT_SERVICED = 'NOT_SERVICED';
    const SERVICE_JOB_STATUS_CANCELLED = 'CANCELLED';
    const SERVICE_JOB_STATUS_COMPLETED = 'COMPLETED';
    const SERVICE_JOB_STATUS_PENDING_SCHEDULE = 'PENDING_SCHEDULE';
    const SERVICE_JOB_STATUS_NOT_FULFILLABLE = 'NOT_FULFILLABLE';
    const SERVICE_JOB_STATUS_HOLD = 'HOLD';
    const SERVICE_JOB_STATUS_PAYMENT_DECLINED = 'PAYMENT_DECLINED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getServiceJobStatusAllowableValues()
    {
        return [
            self::SERVICE_JOB_STATUS_NOT_SERVICED,
            self::SERVICE_JOB_STATUS_CANCELLED,
            self::SERVICE_JOB_STATUS_COMPLETED,
            self::SERVICE_JOB_STATUS_PENDING_SCHEDULE,
            self::SERVICE_JOB_STATUS_NOT_FULFILLABLE,
            self::SERVICE_JOB_STATUS_HOLD,
            self::SERVICE_JOB_STATUS_PAYMENT_DECLINED,
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
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['serviceJobId'] = isset($data['serviceJobId']) ? $data['serviceJobId'] : null;
        $this->container['serviceJobStatus'] = isset($data['serviceJobStatus']) ? $data['serviceJobStatus'] : null;
        $this->container['scopeOfWork'] = isset($data['scopeOfWork']) ? $data['scopeOfWork'] : null;
        $this->container['seller'] = isset($data['seller']) ? $data['seller'] : null;
        $this->container['serviceJobProvider'] = isset($data['serviceJobProvider']) ? $data['serviceJobProvider'] : null;
        $this->container['preferredAppointmentTimes'] = isset($data['preferredAppointmentTimes']) ? $data['preferredAppointmentTimes'] : null;
        $this->container['appointments'] = isset($data['appointments']) ? $data['appointments'] : null;
        $this->container['serviceOrderId'] = isset($data['serviceOrderId']) ? $data['serviceOrderId'] : null;
        $this->container['marketplaceId'] = isset($data['marketplaceId']) ? $data['marketplaceId'] : null;
        $this->container['storeId'] = isset($data['storeId']) ? $data['storeId'] : null;
        $this->container['buyer'] = isset($data['buyer']) ? $data['buyer'] : null;
        $this->container['associatedItems'] = isset($data['associatedItems']) ? $data['associatedItems'] : null;
        $this->container['serviceLocation'] = isset($data['serviceLocation']) ? $data['serviceLocation'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['serviceJobId']) && (mb_strlen($this->container['serviceJobId']) > 100)) {
            $invalidProperties[] = "invalid value for 'serviceJobId', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['serviceJobId']) && (mb_strlen($this->container['serviceJobId']) < 1)) {
            $invalidProperties[] = "invalid value for 'serviceJobId', the character length must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getServiceJobStatusAllowableValues();
        if (!is_null($this->container['serviceJobStatus']) && !in_array($this->container['serviceJobStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'serviceJobStatus', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['serviceOrderId']) && (mb_strlen($this->container['serviceOrderId']) > 20)) {
            $invalidProperties[] = "invalid value for 'serviceOrderId', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['serviceOrderId']) && (mb_strlen($this->container['serviceOrderId']) < 5)) {
            $invalidProperties[] = "invalid value for 'serviceOrderId', the character length must be bigger than or equal to 5.";
        }

        if (!is_null($this->container['marketplaceId']) && !preg_match("/^[A-Z0-9]*$/", $this->container['marketplaceId'])) {
            $invalidProperties[] = "invalid value for 'marketplaceId', must be conform to the pattern /^[A-Z0-9]*$/.";
        }

        if (!is_null($this->container['storeId']) && (mb_strlen($this->container['storeId']) > 100)) {
            $invalidProperties[] = "invalid value for 'storeId', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['storeId']) && (mb_strlen($this->container['storeId']) < 1)) {
            $invalidProperties[] = "invalid value for 'storeId', the character length must be bigger than or equal to 1.";
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
     * Gets createTime
     *
     * @return \DateTime|null
     */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
     * Sets createTime
     *
     * @param \DateTime|null $createTime The date and time of the creation of the job in ISO 8601 format.
     *
     * @return $this
     */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;

        return $this;
    }

    /**
     * Gets serviceJobId
     *
     * @return string|null
     */
    public function getServiceJobId()
    {
        return $this->container['serviceJobId'];
    }

    /**
     * Sets serviceJobId
     *
     * @param string|null $serviceJobId Amazon identifier for the service job.
     *
     * @return $this
     */
    public function setServiceJobId($serviceJobId)
    {
        if (!is_null($serviceJobId) && (mb_strlen($serviceJobId) > 100)) {
            throw new \InvalidArgumentException('invalid length for $serviceJobId when calling ServiceJob., must be smaller than or equal to 100.');
        }
        if (!is_null($serviceJobId) && (mb_strlen($serviceJobId) < 1)) {
            throw new \InvalidArgumentException('invalid length for $serviceJobId when calling ServiceJob., must be bigger than or equal to 1.');
        }

        $this->container['serviceJobId'] = $serviceJobId;

        return $this;
    }

    /**
     * Gets serviceJobStatus
     *
     * @return string|null
     */
    public function getServiceJobStatus()
    {
        return $this->container['serviceJobStatus'];
    }

    /**
     * Sets serviceJobStatus
     *
     * @param string|null $serviceJobStatus The status of the service job.
     *
     * @return $this
     */
    public function setServiceJobStatus($serviceJobStatus)
    {
        $allowedValues = $this->getServiceJobStatusAllowableValues();
        if (!is_null($serviceJobStatus) && !in_array($serviceJobStatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'serviceJobStatus', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['serviceJobStatus'] = $serviceJobStatus;

        return $this;
    }

    /**
     * Gets scopeOfWork
     *
     * @return \Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\ScopeOfWork|null
     */
    public function getScopeOfWork()
    {
        return $this->container['scopeOfWork'];
    }

    /**
     * Sets scopeOfWork
     *
     * @param \Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\ScopeOfWork|null $scopeOfWork scopeOfWork
     *
     * @return $this
     */
    public function setScopeOfWork($scopeOfWork)
    {
        $this->container['scopeOfWork'] = $scopeOfWork;

        return $this;
    }

    /**
     * Gets seller
     *
     * @return \Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\Seller|null
     */
    public function getSeller()
    {
        return $this->container['seller'];
    }

    /**
     * Sets seller
     *
     * @param \Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\Seller|null $seller seller
     *
     * @return $this
     */
    public function setSeller($seller)
    {
        $this->container['seller'] = $seller;

        return $this;
    }

    /**
     * Gets serviceJobProvider
     *
     * @return \Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\ServiceJobProvider|null
     */
    public function getServiceJobProvider()
    {
        return $this->container['serviceJobProvider'];
    }

    /**
     * Sets serviceJobProvider
     *
     * @param \Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\ServiceJobProvider|null $serviceJobProvider serviceJobProvider
     *
     * @return $this
     */
    public function setServiceJobProvider($serviceJobProvider)
    {
        $this->container['serviceJobProvider'] = $serviceJobProvider;

        return $this;
    }

    /**
     * Gets preferredAppointmentTimes
     *
     * @return \Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\AppointmentTime[]|null
     */
    public function getPreferredAppointmentTimes()
    {
        return $this->container['preferredAppointmentTimes'];
    }

    /**
     * Sets preferredAppointmentTimes
     *
     * @param \Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\AppointmentTime[]|null $preferredAppointmentTimes A list of appointment windows preferred by the buyer. Included only if the buyer selected appointment windows when creating the order.
     *
     * @return $this
     */
    public function setPreferredAppointmentTimes($preferredAppointmentTimes)
    {
        $this->container['preferredAppointmentTimes'] = $preferredAppointmentTimes;

        return $this;
    }

    /**
     * Gets appointments
     *
     * @return \Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\Appointment[]|null
     */
    public function getAppointments()
    {
        return $this->container['appointments'];
    }

    /**
     * Sets appointments
     *
     * @param \Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\Appointment[]|null $appointments A list of appointments.
     *
     * @return $this
     */
    public function setAppointments($appointments)
    {
        $this->container['appointments'] = $appointments;

        return $this;
    }

    /**
     * Gets serviceOrderId
     *
     * @return string|null
     */
    public function getServiceOrderId()
    {
        return $this->container['serviceOrderId'];
    }

    /**
     * Sets serviceOrderId
     *
     * @param string|null $serviceOrderId The Amazon-defined identifier for an order placed by the buyer, in 3-7-7 format.
     *
     * @return $this
     */
    public function setServiceOrderId($serviceOrderId)
    {
        if (!is_null($serviceOrderId) && (mb_strlen($serviceOrderId) > 20)) {
            throw new \InvalidArgumentException('invalid length for $serviceOrderId when calling ServiceJob., must be smaller than or equal to 20.');
        }
        if (!is_null($serviceOrderId) && (mb_strlen($serviceOrderId) < 5)) {
            throw new \InvalidArgumentException('invalid length for $serviceOrderId when calling ServiceJob., must be bigger than or equal to 5.');
        }

        $this->container['serviceOrderId'] = $serviceOrderId;

        return $this;
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
     * @param string|null $marketplaceId The marketplace identifier.
     *
     * @return $this
     */
    public function setMarketplaceId($marketplaceId)
    {

        if (!is_null($marketplaceId) && (!preg_match("/^[A-Z0-9]*$/", $marketplaceId))) {
            throw new \InvalidArgumentException("invalid value for $marketplaceId when calling ServiceJob., must conform to the pattern /^[A-Z0-9]*$/.");
        }

        $this->container['marketplaceId'] = $marketplaceId;

        return $this;
    }

    /**
     * Gets storeId
     *
     * @return string|null
     */
    public function getStoreId()
    {
        return $this->container['storeId'];
    }

    /**
     * Sets storeId
     *
     * @param string|null $storeId The Amazon-defined identifier for the region scope.
     *
     * @return $this
     */
    public function setStoreId($storeId)
    {
        if (!is_null($storeId) && (mb_strlen($storeId) > 100)) {
            throw new \InvalidArgumentException('invalid length for $storeId when calling ServiceJob., must be smaller than or equal to 100.');
        }
        if (!is_null($storeId) && (mb_strlen($storeId) < 1)) {
            throw new \InvalidArgumentException('invalid length for $storeId when calling ServiceJob., must be bigger than or equal to 1.');
        }

        $this->container['storeId'] = $storeId;

        return $this;
    }

    /**
     * Gets buyer
     *
     * @return \Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\Buyer|null
     */
    public function getBuyer()
    {
        return $this->container['buyer'];
    }

    /**
     * Sets buyer
     *
     * @param \Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\Buyer|null $buyer buyer
     *
     * @return $this
     */
    public function setBuyer($buyer)
    {
        $this->container['buyer'] = $buyer;

        return $this;
    }

    /**
     * Gets associatedItems
     *
     * @return \Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\AssociatedItem[]|null
     */
    public function getAssociatedItems()
    {
        return $this->container['associatedItems'];
    }

    /**
     * Sets associatedItems
     *
     * @param \Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\AssociatedItem[]|null $associatedItems A list of items associated with the service job.
     *
     * @return $this
     */
    public function setAssociatedItems($associatedItems)
    {
        $this->container['associatedItems'] = $associatedItems;

        return $this;
    }

    /**
     * Gets serviceLocation
     *
     * @return \Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\ServiceLocation|null
     */
    public function getServiceLocation()
    {
        return $this->container['serviceLocation'];
    }

    /**
     * Sets serviceLocation
     *
     * @param \Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\ServiceLocation|null $serviceLocation serviceLocation
     *
     * @return $this
     */
    public function setServiceLocation($serviceLocation)
    {
        $this->container['serviceLocation'] = $serviceLocation;

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


