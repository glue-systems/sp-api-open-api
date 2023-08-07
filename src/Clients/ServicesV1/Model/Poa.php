<?php
/**
 * Poa
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
 * Poa Class Doc Comment
 *
 * @category Class
 * @description Proof of Appointment (POA) details.
 * @package  Glue\SpApi\OpenAPI\Clients\ServicesV1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Poa implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Poa';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'appointmentTime' => '\Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\AppointmentTime',
        'technicians' => '\Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\Technician[]',
        'uploadingTechnician' => 'string',
        'uploadTime' => '\DateTime',
        'poaType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'appointmentTime' => null,
        'technicians' => null,
        'uploadingTechnician' => null,
        'uploadTime' => 'date-time',
        'poaType' => null
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
        'appointmentTime' => 'appointmentTime',
        'technicians' => 'technicians',
        'uploadingTechnician' => 'uploadingTechnician',
        'uploadTime' => 'uploadTime',
        'poaType' => 'poaType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'appointmentTime' => 'setAppointmentTime',
        'technicians' => 'setTechnicians',
        'uploadingTechnician' => 'setUploadingTechnician',
        'uploadTime' => 'setUploadTime',
        'poaType' => 'setPoaType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'appointmentTime' => 'getAppointmentTime',
        'technicians' => 'getTechnicians',
        'uploadingTechnician' => 'getUploadingTechnician',
        'uploadTime' => 'getUploadTime',
        'poaType' => 'getPoaType'
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

    const POA_TYPE_NO_SIGNATURE_DUMMY_POS = 'NO_SIGNATURE_DUMMY_POS';
    const POA_TYPE_CUSTOMER_SIGNATURE = 'CUSTOMER_SIGNATURE';
    const POA_TYPE_DUMMY_RECEIPT = 'DUMMY_RECEIPT';
    const POA_TYPE_POA_RECEIPT = 'POA_RECEIPT';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPoaTypeAllowableValues()
    {
        return [
            self::POA_TYPE_NO_SIGNATURE_DUMMY_POS,
            self::POA_TYPE_CUSTOMER_SIGNATURE,
            self::POA_TYPE_DUMMY_RECEIPT,
            self::POA_TYPE_POA_RECEIPT,
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
        $this->container['appointmentTime'] = isset($data['appointmentTime']) ? $data['appointmentTime'] : null;
        $this->container['technicians'] = isset($data['technicians']) ? $data['technicians'] : null;
        $this->container['uploadingTechnician'] = isset($data['uploadingTechnician']) ? $data['uploadingTechnician'] : null;
        $this->container['uploadTime'] = isset($data['uploadTime']) ? $data['uploadTime'] : null;
        $this->container['poaType'] = isset($data['poaType']) ? $data['poaType'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['uploadingTechnician']) && !preg_match("/^[A-Z0-9]*$/", $this->container['uploadingTechnician'])) {
            $invalidProperties[] = "invalid value for 'uploadingTechnician', must be conform to the pattern /^[A-Z0-9]*$/.";
        }

        $allowedValues = $this->getPoaTypeAllowableValues();
        if (!is_null($this->container['poaType']) && !in_array($this->container['poaType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'poaType', must be one of '%s'",
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
     * Gets appointmentTime
     *
     * @return \Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\AppointmentTime|null
     */
    public function getAppointmentTime()
    {
        return $this->container['appointmentTime'];
    }

    /**
     * Sets appointmentTime
     *
     * @param \Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\AppointmentTime|null $appointmentTime appointmentTime
     *
     * @return $this
     */
    public function setAppointmentTime($appointmentTime)
    {
        $this->container['appointmentTime'] = $appointmentTime;

        return $this;
    }

    /**
     * Gets technicians
     *
     * @return \Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\Technician[]|null
     */
    public function getTechnicians()
    {
        return $this->container['technicians'];
    }

    /**
     * Sets technicians
     *
     * @param \Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\Technician[]|null $technicians A list of technicians.
     *
     * @return $this
     */
    public function setTechnicians($technicians)
    {
        $this->container['technicians'] = $technicians;

        return $this;
    }

    /**
     * Gets uploadingTechnician
     *
     * @return string|null
     */
    public function getUploadingTechnician()
    {
        return $this->container['uploadingTechnician'];
    }

    /**
     * Sets uploadingTechnician
     *
     * @param string|null $uploadingTechnician The identifier of the technician who uploaded the POA.
     *
     * @return $this
     */
    public function setUploadingTechnician($uploadingTechnician)
    {

        if (!is_null($uploadingTechnician) && (!preg_match("/^[A-Z0-9]*$/", $uploadingTechnician))) {
            throw new \InvalidArgumentException("invalid value for $uploadingTechnician when calling Poa., must conform to the pattern /^[A-Z0-9]*$/.");
        }

        $this->container['uploadingTechnician'] = $uploadingTechnician;

        return $this;
    }

    /**
     * Gets uploadTime
     *
     * @return \DateTime|null
     */
    public function getUploadTime()
    {
        return $this->container['uploadTime'];
    }

    /**
     * Sets uploadTime
     *
     * @param \DateTime|null $uploadTime The date and time when the POA was uploaded in ISO 8601 format.
     *
     * @return $this
     */
    public function setUploadTime($uploadTime)
    {
        $this->container['uploadTime'] = $uploadTime;

        return $this;
    }

    /**
     * Gets poaType
     *
     * @return string|null
     */
    public function getPoaType()
    {
        return $this->container['poaType'];
    }

    /**
     * Sets poaType
     *
     * @param string|null $poaType The type of POA uploaded.
     *
     * @return $this
     */
    public function setPoaType($poaType)
    {
        $allowedValues = $this->getPoaTypeAllowableValues();
        if (!is_null($poaType) && !in_array($poaType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'poaType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['poaType'] = $poaType;

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


