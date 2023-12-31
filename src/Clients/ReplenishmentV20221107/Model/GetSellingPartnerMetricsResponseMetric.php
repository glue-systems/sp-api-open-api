<?php
/**
 * GetSellingPartnerMetricsResponseMetric
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
 * GetSellingPartnerMetricsResponseMetric Class Doc Comment
 *
 * @category Class
 * @description An object which contains metric data for a selling partner.
 * @package  Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GetSellingPartnerMetricsResponseMetric implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetSellingPartnerMetricsResponseMetric';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'notDeliveredDueToOOS' => 'double',
        'totalSubscriptionsRevenue' => 'double',
        'shippedSubscriptionUnits' => 'double',
        'activeSubscriptions' => 'double',
        'subscriberAverageRevenue' => 'double',
        'nonSubscriberAverageRevenue' => 'double',
        'timeInterval' => '\Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\TimeInterval',
        'currencyCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'notDeliveredDueToOOS' => 'double',
        'totalSubscriptionsRevenue' => 'double',
        'shippedSubscriptionUnits' => 'int64',
        'activeSubscriptions' => 'int64',
        'subscriberAverageRevenue' => 'double',
        'nonSubscriberAverageRevenue' => 'double',
        'timeInterval' => null,
        'currencyCode' => null
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
        'notDeliveredDueToOOS' => 'notDeliveredDueToOOS',
        'totalSubscriptionsRevenue' => 'totalSubscriptionsRevenue',
        'shippedSubscriptionUnits' => 'shippedSubscriptionUnits',
        'activeSubscriptions' => 'activeSubscriptions',
        'subscriberAverageRevenue' => 'subscriberAverageRevenue',
        'nonSubscriberAverageRevenue' => 'nonSubscriberAverageRevenue',
        'timeInterval' => 'timeInterval',
        'currencyCode' => 'currencyCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'notDeliveredDueToOOS' => 'setNotDeliveredDueToOOS',
        'totalSubscriptionsRevenue' => 'setTotalSubscriptionsRevenue',
        'shippedSubscriptionUnits' => 'setShippedSubscriptionUnits',
        'activeSubscriptions' => 'setActiveSubscriptions',
        'subscriberAverageRevenue' => 'setSubscriberAverageRevenue',
        'nonSubscriberAverageRevenue' => 'setNonSubscriberAverageRevenue',
        'timeInterval' => 'setTimeInterval',
        'currencyCode' => 'setCurrencyCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'notDeliveredDueToOOS' => 'getNotDeliveredDueToOOS',
        'totalSubscriptionsRevenue' => 'getTotalSubscriptionsRevenue',
        'shippedSubscriptionUnits' => 'getShippedSubscriptionUnits',
        'activeSubscriptions' => 'getActiveSubscriptions',
        'subscriberAverageRevenue' => 'getSubscriberAverageRevenue',
        'nonSubscriberAverageRevenue' => 'getNonSubscriberAverageRevenue',
        'timeInterval' => 'getTimeInterval',
        'currencyCode' => 'getCurrencyCode'
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
        $this->container['notDeliveredDueToOOS'] = isset($data['notDeliveredDueToOOS']) ? $data['notDeliveredDueToOOS'] : null;
        $this->container['totalSubscriptionsRevenue'] = isset($data['totalSubscriptionsRevenue']) ? $data['totalSubscriptionsRevenue'] : null;
        $this->container['shippedSubscriptionUnits'] = isset($data['shippedSubscriptionUnits']) ? $data['shippedSubscriptionUnits'] : null;
        $this->container['activeSubscriptions'] = isset($data['activeSubscriptions']) ? $data['activeSubscriptions'] : null;
        $this->container['subscriberAverageRevenue'] = isset($data['subscriberAverageRevenue']) ? $data['subscriberAverageRevenue'] : null;
        $this->container['nonSubscriberAverageRevenue'] = isset($data['nonSubscriberAverageRevenue']) ? $data['nonSubscriberAverageRevenue'] : null;
        $this->container['timeInterval'] = isset($data['timeInterval']) ? $data['timeInterval'] : null;
        $this->container['currencyCode'] = isset($data['currencyCode']) ? $data['currencyCode'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['notDeliveredDueToOOS']) && ($this->container['notDeliveredDueToOOS'] > 1E+2)) {
            $invalidProperties[] = "invalid value for 'notDeliveredDueToOOS', must be smaller than or equal to 1E+2.";
        }

        if (!is_null($this->container['notDeliveredDueToOOS']) && ($this->container['notDeliveredDueToOOS'] < 0)) {
            $invalidProperties[] = "invalid value for 'notDeliveredDueToOOS', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['totalSubscriptionsRevenue']) && ($this->container['totalSubscriptionsRevenue'] < 0)) {
            $invalidProperties[] = "invalid value for 'totalSubscriptionsRevenue', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['shippedSubscriptionUnits']) && ($this->container['shippedSubscriptionUnits'] < 0)) {
            $invalidProperties[] = "invalid value for 'shippedSubscriptionUnits', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['activeSubscriptions']) && ($this->container['activeSubscriptions'] < 0)) {
            $invalidProperties[] = "invalid value for 'activeSubscriptions', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['subscriberAverageRevenue']) && ($this->container['subscriberAverageRevenue'] < 0)) {
            $invalidProperties[] = "invalid value for 'subscriberAverageRevenue', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['nonSubscriberAverageRevenue']) && ($this->container['nonSubscriberAverageRevenue'] < 0)) {
            $invalidProperties[] = "invalid value for 'nonSubscriberAverageRevenue', must be bigger than or equal to 0.";
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
     * Gets notDeliveredDueToOOS
     *
     * @return double|null
     */
    public function getNotDeliveredDueToOOS()
    {
        return $this->container['notDeliveredDueToOOS'];
    }

    /**
     * Sets notDeliveredDueToOOS
     *
     * @param double|null $notDeliveredDueToOOS The percentage of items that were not shipped out of the total shipped units over a period of time due to being out of stock. Applicable only for the PERFORMANCE timePeriodType.
     *
     * @return $this
     */
    public function setNotDeliveredDueToOOS($notDeliveredDueToOOS)
    {

        if (!is_null($notDeliveredDueToOOS) && ($notDeliveredDueToOOS > 1E+2)) {
            throw new \InvalidArgumentException('invalid value for $notDeliveredDueToOOS when calling GetSellingPartnerMetricsResponseMetric., must be smaller than or equal to 1E+2.');
        }
        if (!is_null($notDeliveredDueToOOS) && ($notDeliveredDueToOOS < 0)) {
            throw new \InvalidArgumentException('invalid value for $notDeliveredDueToOOS when calling GetSellingPartnerMetricsResponseMetric., must be bigger than or equal to 0.');
        }

        $this->container['notDeliveredDueToOOS'] = $notDeliveredDueToOOS;

        return $this;
    }

    /**
     * Gets totalSubscriptionsRevenue
     *
     * @return double|null
     */
    public function getTotalSubscriptionsRevenue()
    {
        return $this->container['totalSubscriptionsRevenue'];
    }

    /**
     * Sets totalSubscriptionsRevenue
     *
     * @param double|null $totalSubscriptionsRevenue The revenue generated from subscriptions over a period of time. Applicable for both the PERFORMANCE and FORECAST timePeriodType.
     *
     * @return $this
     */
    public function setTotalSubscriptionsRevenue($totalSubscriptionsRevenue)
    {

        if (!is_null($totalSubscriptionsRevenue) && ($totalSubscriptionsRevenue < 0)) {
            throw new \InvalidArgumentException('invalid value for $totalSubscriptionsRevenue when calling GetSellingPartnerMetricsResponseMetric., must be bigger than or equal to 0.');
        }

        $this->container['totalSubscriptionsRevenue'] = $totalSubscriptionsRevenue;

        return $this;
    }

    /**
     * Gets shippedSubscriptionUnits
     *
     * @return double|null
     */
    public function getShippedSubscriptionUnits()
    {
        return $this->container['shippedSubscriptionUnits'];
    }

    /**
     * Sets shippedSubscriptionUnits
     *
     * @param double|null $shippedSubscriptionUnits The number of units shipped to the subscribers over a period of time. Applicable for both the PERFORMANCE and FORECAST timePeriodType.
     *
     * @return $this
     */
    public function setShippedSubscriptionUnits($shippedSubscriptionUnits)
    {

        if (!is_null($shippedSubscriptionUnits) && ($shippedSubscriptionUnits < 0)) {
            throw new \InvalidArgumentException('invalid value for $shippedSubscriptionUnits when calling GetSellingPartnerMetricsResponseMetric., must be bigger than or equal to 0.');
        }

        $this->container['shippedSubscriptionUnits'] = $shippedSubscriptionUnits;

        return $this;
    }

    /**
     * Gets activeSubscriptions
     *
     * @return double|null
     */
    public function getActiveSubscriptions()
    {
        return $this->container['activeSubscriptions'];
    }

    /**
     * Sets activeSubscriptions
     *
     * @param double|null $activeSubscriptions The number of active subscriptions present at the end of the period. Applicable only for the PERFORMANCE timePeriodType.
     *
     * @return $this
     */
    public function setActiveSubscriptions($activeSubscriptions)
    {

        if (!is_null($activeSubscriptions) && ($activeSubscriptions < 0)) {
            throw new \InvalidArgumentException('invalid value for $activeSubscriptions when calling GetSellingPartnerMetricsResponseMetric., must be bigger than or equal to 0.');
        }

        $this->container['activeSubscriptions'] = $activeSubscriptions;

        return $this;
    }

    /**
     * Gets subscriberAverageRevenue
     *
     * @return double|null
     */
    public function getSubscriberAverageRevenue()
    {
        return $this->container['subscriberAverageRevenue'];
    }

    /**
     * Sets subscriberAverageRevenue
     *
     * @param double|null $subscriberAverageRevenue The average revenue per subscriber of the program over a period of past 12 months for sellers and 6 months for vendors. Applicable only for the PERFORMANCE timePeriodType.
     *
     * @return $this
     */
    public function setSubscriberAverageRevenue($subscriberAverageRevenue)
    {

        if (!is_null($subscriberAverageRevenue) && ($subscriberAverageRevenue < 0)) {
            throw new \InvalidArgumentException('invalid value for $subscriberAverageRevenue when calling GetSellingPartnerMetricsResponseMetric., must be bigger than or equal to 0.');
        }

        $this->container['subscriberAverageRevenue'] = $subscriberAverageRevenue;

        return $this;
    }

    /**
     * Gets nonSubscriberAverageRevenue
     *
     * @return double|null
     */
    public function getNonSubscriberAverageRevenue()
    {
        return $this->container['nonSubscriberAverageRevenue'];
    }

    /**
     * Sets nonSubscriberAverageRevenue
     *
     * @param double|null $nonSubscriberAverageRevenue The average revenue per non-subscriber of the program over a period of past 12 months for sellers and 6 months for vendors. Applicable only for the PERFORMANCE timePeriodType.
     *
     * @return $this
     */
    public function setNonSubscriberAverageRevenue($nonSubscriberAverageRevenue)
    {

        if (!is_null($nonSubscriberAverageRevenue) && ($nonSubscriberAverageRevenue < 0)) {
            throw new \InvalidArgumentException('invalid value for $nonSubscriberAverageRevenue when calling GetSellingPartnerMetricsResponseMetric., must be bigger than or equal to 0.');
        }

        $this->container['nonSubscriberAverageRevenue'] = $nonSubscriberAverageRevenue;

        return $this;
    }

    /**
     * Gets timeInterval
     *
     * @return \Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\TimeInterval|null
     */
    public function getTimeInterval()
    {
        return $this->container['timeInterval'];
    }

    /**
     * Sets timeInterval
     *
     * @param \Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\TimeInterval|null $timeInterval timeInterval
     *
     * @return $this
     */
    public function setTimeInterval($timeInterval)
    {
        $this->container['timeInterval'] = $timeInterval;

        return $this;
    }

    /**
     * Gets currencyCode
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->container['currencyCode'];
    }

    /**
     * Sets currencyCode
     *
     * @param string|null $currencyCode The currency code in ISO 4217 format.
     *
     * @return $this
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->container['currencyCode'] = $currencyCode;

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


