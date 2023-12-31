<?php
/**
 * ListOfferMetricsResponseOffer
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
 * ListOfferMetricsResponseOffer Class Doc Comment
 *
 * @category Class
 * @description An object which contains offer metrics.
 * @package  Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ListOfferMetricsResponseOffer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListOfferMetricsResponseOffer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'asin' => 'string',
        'notDeliveredDueToOOS' => 'double',
        'totalSubscriptionsRevenue' => 'double',
        'shippedSubscriptionUnits' => 'double',
        'activeSubscriptions' => 'double',
        'revenuePenetration' => 'double',
        'next30DayTotalSubscriptionsRevenue' => 'double',
        'next60DayTotalSubscriptionsRevenue' => 'double',
        'next90DayTotalSubscriptionsRevenue' => 'double',
        'next30DayShippedSubscriptionUnits' => 'double',
        'next60DayShippedSubscriptionUnits' => 'double',
        'next90DayShippedSubscriptionUnits' => 'double',
        'timeInterval' => '\Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\TimeInterval',
        'currencyCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'asin' => null,
        'notDeliveredDueToOOS' => 'double',
        'totalSubscriptionsRevenue' => 'double',
        'shippedSubscriptionUnits' => 'int64',
        'activeSubscriptions' => 'int64',
        'revenuePenetration' => 'double',
        'next30DayTotalSubscriptionsRevenue' => 'double',
        'next60DayTotalSubscriptionsRevenue' => 'double',
        'next90DayTotalSubscriptionsRevenue' => 'double',
        'next30DayShippedSubscriptionUnits' => 'int64',
        'next60DayShippedSubscriptionUnits' => 'int64',
        'next90DayShippedSubscriptionUnits' => 'int64',
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
        'asin' => 'asin',
        'notDeliveredDueToOOS' => 'notDeliveredDueToOOS',
        'totalSubscriptionsRevenue' => 'totalSubscriptionsRevenue',
        'shippedSubscriptionUnits' => 'shippedSubscriptionUnits',
        'activeSubscriptions' => 'activeSubscriptions',
        'revenuePenetration' => 'revenuePenetration',
        'next30DayTotalSubscriptionsRevenue' => 'next30DayTotalSubscriptionsRevenue',
        'next60DayTotalSubscriptionsRevenue' => 'next60DayTotalSubscriptionsRevenue',
        'next90DayTotalSubscriptionsRevenue' => 'next90DayTotalSubscriptionsRevenue',
        'next30DayShippedSubscriptionUnits' => 'next30DayShippedSubscriptionUnits',
        'next60DayShippedSubscriptionUnits' => 'next60DayShippedSubscriptionUnits',
        'next90DayShippedSubscriptionUnits' => 'next90DayShippedSubscriptionUnits',
        'timeInterval' => 'timeInterval',
        'currencyCode' => 'currencyCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'asin' => 'setAsin',
        'notDeliveredDueToOOS' => 'setNotDeliveredDueToOOS',
        'totalSubscriptionsRevenue' => 'setTotalSubscriptionsRevenue',
        'shippedSubscriptionUnits' => 'setShippedSubscriptionUnits',
        'activeSubscriptions' => 'setActiveSubscriptions',
        'revenuePenetration' => 'setRevenuePenetration',
        'next30DayTotalSubscriptionsRevenue' => 'setNext30DayTotalSubscriptionsRevenue',
        'next60DayTotalSubscriptionsRevenue' => 'setNext60DayTotalSubscriptionsRevenue',
        'next90DayTotalSubscriptionsRevenue' => 'setNext90DayTotalSubscriptionsRevenue',
        'next30DayShippedSubscriptionUnits' => 'setNext30DayShippedSubscriptionUnits',
        'next60DayShippedSubscriptionUnits' => 'setNext60DayShippedSubscriptionUnits',
        'next90DayShippedSubscriptionUnits' => 'setNext90DayShippedSubscriptionUnits',
        'timeInterval' => 'setTimeInterval',
        'currencyCode' => 'setCurrencyCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asin' => 'getAsin',
        'notDeliveredDueToOOS' => 'getNotDeliveredDueToOOS',
        'totalSubscriptionsRevenue' => 'getTotalSubscriptionsRevenue',
        'shippedSubscriptionUnits' => 'getShippedSubscriptionUnits',
        'activeSubscriptions' => 'getActiveSubscriptions',
        'revenuePenetration' => 'getRevenuePenetration',
        'next30DayTotalSubscriptionsRevenue' => 'getNext30DayTotalSubscriptionsRevenue',
        'next60DayTotalSubscriptionsRevenue' => 'getNext60DayTotalSubscriptionsRevenue',
        'next90DayTotalSubscriptionsRevenue' => 'getNext90DayTotalSubscriptionsRevenue',
        'next30DayShippedSubscriptionUnits' => 'getNext30DayShippedSubscriptionUnits',
        'next60DayShippedSubscriptionUnits' => 'getNext60DayShippedSubscriptionUnits',
        'next90DayShippedSubscriptionUnits' => 'getNext90DayShippedSubscriptionUnits',
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
        $this->container['asin'] = isset($data['asin']) ? $data['asin'] : null;
        $this->container['notDeliveredDueToOOS'] = isset($data['notDeliveredDueToOOS']) ? $data['notDeliveredDueToOOS'] : null;
        $this->container['totalSubscriptionsRevenue'] = isset($data['totalSubscriptionsRevenue']) ? $data['totalSubscriptionsRevenue'] : null;
        $this->container['shippedSubscriptionUnits'] = isset($data['shippedSubscriptionUnits']) ? $data['shippedSubscriptionUnits'] : null;
        $this->container['activeSubscriptions'] = isset($data['activeSubscriptions']) ? $data['activeSubscriptions'] : null;
        $this->container['revenuePenetration'] = isset($data['revenuePenetration']) ? $data['revenuePenetration'] : null;
        $this->container['next30DayTotalSubscriptionsRevenue'] = isset($data['next30DayTotalSubscriptionsRevenue']) ? $data['next30DayTotalSubscriptionsRevenue'] : null;
        $this->container['next60DayTotalSubscriptionsRevenue'] = isset($data['next60DayTotalSubscriptionsRevenue']) ? $data['next60DayTotalSubscriptionsRevenue'] : null;
        $this->container['next90DayTotalSubscriptionsRevenue'] = isset($data['next90DayTotalSubscriptionsRevenue']) ? $data['next90DayTotalSubscriptionsRevenue'] : null;
        $this->container['next30DayShippedSubscriptionUnits'] = isset($data['next30DayShippedSubscriptionUnits']) ? $data['next30DayShippedSubscriptionUnits'] : null;
        $this->container['next60DayShippedSubscriptionUnits'] = isset($data['next60DayShippedSubscriptionUnits']) ? $data['next60DayShippedSubscriptionUnits'] : null;
        $this->container['next90DayShippedSubscriptionUnits'] = isset($data['next90DayShippedSubscriptionUnits']) ? $data['next90DayShippedSubscriptionUnits'] : null;
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

        if (!is_null($this->container['revenuePenetration']) && ($this->container['revenuePenetration'] > 1E+2)) {
            $invalidProperties[] = "invalid value for 'revenuePenetration', must be smaller than or equal to 1E+2.";
        }

        if (!is_null($this->container['revenuePenetration']) && ($this->container['revenuePenetration'] < 0)) {
            $invalidProperties[] = "invalid value for 'revenuePenetration', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['next30DayTotalSubscriptionsRevenue']) && ($this->container['next30DayTotalSubscriptionsRevenue'] < 0)) {
            $invalidProperties[] = "invalid value for 'next30DayTotalSubscriptionsRevenue', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['next60DayTotalSubscriptionsRevenue']) && ($this->container['next60DayTotalSubscriptionsRevenue'] < 0)) {
            $invalidProperties[] = "invalid value for 'next60DayTotalSubscriptionsRevenue', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['next90DayTotalSubscriptionsRevenue']) && ($this->container['next90DayTotalSubscriptionsRevenue'] < 0)) {
            $invalidProperties[] = "invalid value for 'next90DayTotalSubscriptionsRevenue', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['next30DayShippedSubscriptionUnits']) && ($this->container['next30DayShippedSubscriptionUnits'] < 0)) {
            $invalidProperties[] = "invalid value for 'next30DayShippedSubscriptionUnits', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['next60DayShippedSubscriptionUnits']) && ($this->container['next60DayShippedSubscriptionUnits'] < 0)) {
            $invalidProperties[] = "invalid value for 'next60DayShippedSubscriptionUnits', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['next90DayShippedSubscriptionUnits']) && ($this->container['next90DayShippedSubscriptionUnits'] < 0)) {
            $invalidProperties[] = "invalid value for 'next90DayShippedSubscriptionUnits', must be bigger than or equal to 0.";
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
     * Gets asin
     *
     * @return string|null
     */
    public function getAsin()
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin
     *
     * @param string|null $asin The Amazon Standard Identification Number (ASIN).
     *
     * @return $this
     */
    public function setAsin($asin)
    {
        $this->container['asin'] = $asin;

        return $this;
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
            throw new \InvalidArgumentException('invalid value for $notDeliveredDueToOOS when calling ListOfferMetricsResponseOffer., must be smaller than or equal to 1E+2.');
        }
        if (!is_null($notDeliveredDueToOOS) && ($notDeliveredDueToOOS < 0)) {
            throw new \InvalidArgumentException('invalid value for $notDeliveredDueToOOS when calling ListOfferMetricsResponseOffer., must be bigger than or equal to 0.');
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
     * @param double|null $totalSubscriptionsRevenue The revenue generated from subscriptions over a period of time. Applicable only for the PERFORMANCE timePeriodType.
     *
     * @return $this
     */
    public function setTotalSubscriptionsRevenue($totalSubscriptionsRevenue)
    {

        if (!is_null($totalSubscriptionsRevenue) && ($totalSubscriptionsRevenue < 0)) {
            throw new \InvalidArgumentException('invalid value for $totalSubscriptionsRevenue when calling ListOfferMetricsResponseOffer., must be bigger than or equal to 0.');
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
     * @param double|null $shippedSubscriptionUnits The number of units shipped to the subscribers over a period of time. Applicable only for the PERFORMANCE timePeriodType.
     *
     * @return $this
     */
    public function setShippedSubscriptionUnits($shippedSubscriptionUnits)
    {

        if (!is_null($shippedSubscriptionUnits) && ($shippedSubscriptionUnits < 0)) {
            throw new \InvalidArgumentException('invalid value for $shippedSubscriptionUnits when calling ListOfferMetricsResponseOffer., must be bigger than or equal to 0.');
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
            throw new \InvalidArgumentException('invalid value for $activeSubscriptions when calling ListOfferMetricsResponseOffer., must be bigger than or equal to 0.');
        }

        $this->container['activeSubscriptions'] = $activeSubscriptions;

        return $this;
    }

    /**
     * Gets revenuePenetration
     *
     * @return double|null
     */
    public function getRevenuePenetration()
    {
        return $this->container['revenuePenetration'];
    }

    /**
     * Sets revenuePenetration
     *
     * @param double|null $revenuePenetration The percentage of total program revenue out of total product revenue. Applicable only for the PERFORMANCE timePeriodType.
     *
     * @return $this
     */
    public function setRevenuePenetration($revenuePenetration)
    {

        if (!is_null($revenuePenetration) && ($revenuePenetration > 1E+2)) {
            throw new \InvalidArgumentException('invalid value for $revenuePenetration when calling ListOfferMetricsResponseOffer., must be smaller than or equal to 1E+2.');
        }
        if (!is_null($revenuePenetration) && ($revenuePenetration < 0)) {
            throw new \InvalidArgumentException('invalid value for $revenuePenetration when calling ListOfferMetricsResponseOffer., must be bigger than or equal to 0.');
        }

        $this->container['revenuePenetration'] = $revenuePenetration;

        return $this;
    }

    /**
     * Gets next30DayTotalSubscriptionsRevenue
     *
     * @return double|null
     */
    public function getNext30DayTotalSubscriptionsRevenue()
    {
        return $this->container['next30DayTotalSubscriptionsRevenue'];
    }

    /**
     * Sets next30DayTotalSubscriptionsRevenue
     *
     * @param double|null $next30DayTotalSubscriptionsRevenue The forecasted total subscription revenue for the next 30 days. Applicable only for the FORECAST timePeriodType.
     *
     * @return $this
     */
    public function setNext30DayTotalSubscriptionsRevenue($next30DayTotalSubscriptionsRevenue)
    {

        if (!is_null($next30DayTotalSubscriptionsRevenue) && ($next30DayTotalSubscriptionsRevenue < 0)) {
            throw new \InvalidArgumentException('invalid value for $next30DayTotalSubscriptionsRevenue when calling ListOfferMetricsResponseOffer., must be bigger than or equal to 0.');
        }

        $this->container['next30DayTotalSubscriptionsRevenue'] = $next30DayTotalSubscriptionsRevenue;

        return $this;
    }

    /**
     * Gets next60DayTotalSubscriptionsRevenue
     *
     * @return double|null
     */
    public function getNext60DayTotalSubscriptionsRevenue()
    {
        return $this->container['next60DayTotalSubscriptionsRevenue'];
    }

    /**
     * Sets next60DayTotalSubscriptionsRevenue
     *
     * @param double|null $next60DayTotalSubscriptionsRevenue The forecasted total subscription revenue for the next 60 days. Applicable only for the FORECAST timePeriodType.
     *
     * @return $this
     */
    public function setNext60DayTotalSubscriptionsRevenue($next60DayTotalSubscriptionsRevenue)
    {

        if (!is_null($next60DayTotalSubscriptionsRevenue) && ($next60DayTotalSubscriptionsRevenue < 0)) {
            throw new \InvalidArgumentException('invalid value for $next60DayTotalSubscriptionsRevenue when calling ListOfferMetricsResponseOffer., must be bigger than or equal to 0.');
        }

        $this->container['next60DayTotalSubscriptionsRevenue'] = $next60DayTotalSubscriptionsRevenue;

        return $this;
    }

    /**
     * Gets next90DayTotalSubscriptionsRevenue
     *
     * @return double|null
     */
    public function getNext90DayTotalSubscriptionsRevenue()
    {
        return $this->container['next90DayTotalSubscriptionsRevenue'];
    }

    /**
     * Sets next90DayTotalSubscriptionsRevenue
     *
     * @param double|null $next90DayTotalSubscriptionsRevenue The forecasted total subscription revenue for the next 90 days. Applicable only for the FORECAST timePeriodType.
     *
     * @return $this
     */
    public function setNext90DayTotalSubscriptionsRevenue($next90DayTotalSubscriptionsRevenue)
    {

        if (!is_null($next90DayTotalSubscriptionsRevenue) && ($next90DayTotalSubscriptionsRevenue < 0)) {
            throw new \InvalidArgumentException('invalid value for $next90DayTotalSubscriptionsRevenue when calling ListOfferMetricsResponseOffer., must be bigger than or equal to 0.');
        }

        $this->container['next90DayTotalSubscriptionsRevenue'] = $next90DayTotalSubscriptionsRevenue;

        return $this;
    }

    /**
     * Gets next30DayShippedSubscriptionUnits
     *
     * @return double|null
     */
    public function getNext30DayShippedSubscriptionUnits()
    {
        return $this->container['next30DayShippedSubscriptionUnits'];
    }

    /**
     * Sets next30DayShippedSubscriptionUnits
     *
     * @param double|null $next30DayShippedSubscriptionUnits The forecasted shipped subscription units for the next 30 days. Applicable only for the FORECAST timePeriodType.
     *
     * @return $this
     */
    public function setNext30DayShippedSubscriptionUnits($next30DayShippedSubscriptionUnits)
    {

        if (!is_null($next30DayShippedSubscriptionUnits) && ($next30DayShippedSubscriptionUnits < 0)) {
            throw new \InvalidArgumentException('invalid value for $next30DayShippedSubscriptionUnits when calling ListOfferMetricsResponseOffer., must be bigger than or equal to 0.');
        }

        $this->container['next30DayShippedSubscriptionUnits'] = $next30DayShippedSubscriptionUnits;

        return $this;
    }

    /**
     * Gets next60DayShippedSubscriptionUnits
     *
     * @return double|null
     */
    public function getNext60DayShippedSubscriptionUnits()
    {
        return $this->container['next60DayShippedSubscriptionUnits'];
    }

    /**
     * Sets next60DayShippedSubscriptionUnits
     *
     * @param double|null $next60DayShippedSubscriptionUnits The forecasted shipped subscription units for the next 60 days. Applicable only for the FORECAST timePeriodType.
     *
     * @return $this
     */
    public function setNext60DayShippedSubscriptionUnits($next60DayShippedSubscriptionUnits)
    {

        if (!is_null($next60DayShippedSubscriptionUnits) && ($next60DayShippedSubscriptionUnits < 0)) {
            throw new \InvalidArgumentException('invalid value for $next60DayShippedSubscriptionUnits when calling ListOfferMetricsResponseOffer., must be bigger than or equal to 0.');
        }

        $this->container['next60DayShippedSubscriptionUnits'] = $next60DayShippedSubscriptionUnits;

        return $this;
    }

    /**
     * Gets next90DayShippedSubscriptionUnits
     *
     * @return double|null
     */
    public function getNext90DayShippedSubscriptionUnits()
    {
        return $this->container['next90DayShippedSubscriptionUnits'];
    }

    /**
     * Sets next90DayShippedSubscriptionUnits
     *
     * @param double|null $next90DayShippedSubscriptionUnits The forecasted shipped subscription units for the next 90 days. Applicable only for the FORECAST timePeriodType.
     *
     * @return $this
     */
    public function setNext90DayShippedSubscriptionUnits($next90DayShippedSubscriptionUnits)
    {

        if (!is_null($next90DayShippedSubscriptionUnits) && ($next90DayShippedSubscriptionUnits < 0)) {
            throw new \InvalidArgumentException('invalid value for $next90DayShippedSubscriptionUnits when calling ListOfferMetricsResponseOffer., must be bigger than or equal to 0.');
        }

        $this->container['next90DayShippedSubscriptionUnits'] = $next90DayShippedSubscriptionUnits;

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


