<?php
/**
 * FulfillmentOrder
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
 * FulfillmentOrder Class Doc Comment
 *
 * @category Class
 * @description General information about a fulfillment order, including its status.
 * @package  Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FulfillmentOrder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FulfillmentOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sellerFulfillmentOrderId' => 'string',
        'marketplaceId' => 'string',
        'displayableOrderId' => 'string',
        'displayableOrderDate' => '\DateTime',
        'displayableOrderComment' => 'string',
        'shippingSpeedCategory' => '\Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\ShippingSpeedCategory',
        'deliveryWindow' => '\Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\DeliveryWindow',
        'destinationAddress' => '\Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\Address',
        'fulfillmentAction' => '\Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\FulfillmentAction',
        'fulfillmentPolicy' => '\Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\FulfillmentPolicy',
        'codSettings' => '\Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\CODSettings',
        'receivedDate' => '\DateTime',
        'fulfillmentOrderStatus' => '\Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\FulfillmentOrderStatus',
        'statusUpdatedDate' => '\DateTime',
        'notificationEmails' => 'string[]',
        'featureConstraints' => '\Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\FeatureSettings[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'sellerFulfillmentOrderId' => null,
        'marketplaceId' => null,
        'displayableOrderId' => null,
        'displayableOrderDate' => 'date-time',
        'displayableOrderComment' => null,
        'shippingSpeedCategory' => null,
        'deliveryWindow' => null,
        'destinationAddress' => null,
        'fulfillmentAction' => null,
        'fulfillmentPolicy' => null,
        'codSettings' => null,
        'receivedDate' => 'date-time',
        'fulfillmentOrderStatus' => null,
        'statusUpdatedDate' => 'date-time',
        'notificationEmails' => null,
        'featureConstraints' => null
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
        'sellerFulfillmentOrderId' => 'sellerFulfillmentOrderId',
        'marketplaceId' => 'marketplaceId',
        'displayableOrderId' => 'displayableOrderId',
        'displayableOrderDate' => 'displayableOrderDate',
        'displayableOrderComment' => 'displayableOrderComment',
        'shippingSpeedCategory' => 'shippingSpeedCategory',
        'deliveryWindow' => 'deliveryWindow',
        'destinationAddress' => 'destinationAddress',
        'fulfillmentAction' => 'fulfillmentAction',
        'fulfillmentPolicy' => 'fulfillmentPolicy',
        'codSettings' => 'codSettings',
        'receivedDate' => 'receivedDate',
        'fulfillmentOrderStatus' => 'fulfillmentOrderStatus',
        'statusUpdatedDate' => 'statusUpdatedDate',
        'notificationEmails' => 'notificationEmails',
        'featureConstraints' => 'featureConstraints'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sellerFulfillmentOrderId' => 'setSellerFulfillmentOrderId',
        'marketplaceId' => 'setMarketplaceId',
        'displayableOrderId' => 'setDisplayableOrderId',
        'displayableOrderDate' => 'setDisplayableOrderDate',
        'displayableOrderComment' => 'setDisplayableOrderComment',
        'shippingSpeedCategory' => 'setShippingSpeedCategory',
        'deliveryWindow' => 'setDeliveryWindow',
        'destinationAddress' => 'setDestinationAddress',
        'fulfillmentAction' => 'setFulfillmentAction',
        'fulfillmentPolicy' => 'setFulfillmentPolicy',
        'codSettings' => 'setCodSettings',
        'receivedDate' => 'setReceivedDate',
        'fulfillmentOrderStatus' => 'setFulfillmentOrderStatus',
        'statusUpdatedDate' => 'setStatusUpdatedDate',
        'notificationEmails' => 'setNotificationEmails',
        'featureConstraints' => 'setFeatureConstraints'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sellerFulfillmentOrderId' => 'getSellerFulfillmentOrderId',
        'marketplaceId' => 'getMarketplaceId',
        'displayableOrderId' => 'getDisplayableOrderId',
        'displayableOrderDate' => 'getDisplayableOrderDate',
        'displayableOrderComment' => 'getDisplayableOrderComment',
        'shippingSpeedCategory' => 'getShippingSpeedCategory',
        'deliveryWindow' => 'getDeliveryWindow',
        'destinationAddress' => 'getDestinationAddress',
        'fulfillmentAction' => 'getFulfillmentAction',
        'fulfillmentPolicy' => 'getFulfillmentPolicy',
        'codSettings' => 'getCodSettings',
        'receivedDate' => 'getReceivedDate',
        'fulfillmentOrderStatus' => 'getFulfillmentOrderStatus',
        'statusUpdatedDate' => 'getStatusUpdatedDate',
        'notificationEmails' => 'getNotificationEmails',
        'featureConstraints' => 'getFeatureConstraints'
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
        $this->container['sellerFulfillmentOrderId'] = isset($data['sellerFulfillmentOrderId']) ? $data['sellerFulfillmentOrderId'] : null;
        $this->container['marketplaceId'] = isset($data['marketplaceId']) ? $data['marketplaceId'] : null;
        $this->container['displayableOrderId'] = isset($data['displayableOrderId']) ? $data['displayableOrderId'] : null;
        $this->container['displayableOrderDate'] = isset($data['displayableOrderDate']) ? $data['displayableOrderDate'] : null;
        $this->container['displayableOrderComment'] = isset($data['displayableOrderComment']) ? $data['displayableOrderComment'] : null;
        $this->container['shippingSpeedCategory'] = isset($data['shippingSpeedCategory']) ? $data['shippingSpeedCategory'] : null;
        $this->container['deliveryWindow'] = isset($data['deliveryWindow']) ? $data['deliveryWindow'] : null;
        $this->container['destinationAddress'] = isset($data['destinationAddress']) ? $data['destinationAddress'] : null;
        $this->container['fulfillmentAction'] = isset($data['fulfillmentAction']) ? $data['fulfillmentAction'] : null;
        $this->container['fulfillmentPolicy'] = isset($data['fulfillmentPolicy']) ? $data['fulfillmentPolicy'] : null;
        $this->container['codSettings'] = isset($data['codSettings']) ? $data['codSettings'] : null;
        $this->container['receivedDate'] = isset($data['receivedDate']) ? $data['receivedDate'] : null;
        $this->container['fulfillmentOrderStatus'] = isset($data['fulfillmentOrderStatus']) ? $data['fulfillmentOrderStatus'] : null;
        $this->container['statusUpdatedDate'] = isset($data['statusUpdatedDate']) ? $data['statusUpdatedDate'] : null;
        $this->container['notificationEmails'] = isset($data['notificationEmails']) ? $data['notificationEmails'] : null;
        $this->container['featureConstraints'] = isset($data['featureConstraints']) ? $data['featureConstraints'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sellerFulfillmentOrderId'] === null) {
            $invalidProperties[] = "'sellerFulfillmentOrderId' can't be null";
        }
        if ($this->container['marketplaceId'] === null) {
            $invalidProperties[] = "'marketplaceId' can't be null";
        }
        if ($this->container['displayableOrderId'] === null) {
            $invalidProperties[] = "'displayableOrderId' can't be null";
        }
        if ($this->container['displayableOrderDate'] === null) {
            $invalidProperties[] = "'displayableOrderDate' can't be null";
        }
        if ($this->container['displayableOrderComment'] === null) {
            $invalidProperties[] = "'displayableOrderComment' can't be null";
        }
        if ($this->container['shippingSpeedCategory'] === null) {
            $invalidProperties[] = "'shippingSpeedCategory' can't be null";
        }
        if ($this->container['destinationAddress'] === null) {
            $invalidProperties[] = "'destinationAddress' can't be null";
        }
        if ($this->container['receivedDate'] === null) {
            $invalidProperties[] = "'receivedDate' can't be null";
        }
        if ($this->container['fulfillmentOrderStatus'] === null) {
            $invalidProperties[] = "'fulfillmentOrderStatus' can't be null";
        }
        if ($this->container['statusUpdatedDate'] === null) {
            $invalidProperties[] = "'statusUpdatedDate' can't be null";
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
     * Gets sellerFulfillmentOrderId
     *
     * @return string
     */
    public function getSellerFulfillmentOrderId()
    {
        return $this->container['sellerFulfillmentOrderId'];
    }

    /**
     * Sets sellerFulfillmentOrderId
     *
     * @param string $sellerFulfillmentOrderId The fulfillment order identifier submitted with the createFulfillmentOrder operation.
     *
     * @return $this
     */
    public function setSellerFulfillmentOrderId($sellerFulfillmentOrderId)
    {
        $this->container['sellerFulfillmentOrderId'] = $sellerFulfillmentOrderId;

        return $this;
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
     * @param string $marketplaceId The identifier for the marketplace the fulfillment order is placed against.
     *
     * @return $this
     */
    public function setMarketplaceId($marketplaceId)
    {
        $this->container['marketplaceId'] = $marketplaceId;

        return $this;
    }

    /**
     * Gets displayableOrderId
     *
     * @return string
     */
    public function getDisplayableOrderId()
    {
        return $this->container['displayableOrderId'];
    }

    /**
     * Sets displayableOrderId
     *
     * @param string $displayableOrderId A fulfillment order identifier submitted with the createFulfillmentOrder operation. Displays as the order identifier in recipient-facing materials such as the packing slip.
     *
     * @return $this
     */
    public function setDisplayableOrderId($displayableOrderId)
    {
        $this->container['displayableOrderId'] = $displayableOrderId;

        return $this;
    }

    /**
     * Gets displayableOrderDate
     *
     * @return \DateTime
     */
    public function getDisplayableOrderDate()
    {
        return $this->container['displayableOrderDate'];
    }

    /**
     * Sets displayableOrderDate
     *
     * @param \DateTime $displayableOrderDate displayableOrderDate
     *
     * @return $this
     */
    public function setDisplayableOrderDate($displayableOrderDate)
    {
        $this->container['displayableOrderDate'] = $displayableOrderDate;

        return $this;
    }

    /**
     * Gets displayableOrderComment
     *
     * @return string
     */
    public function getDisplayableOrderComment()
    {
        return $this->container['displayableOrderComment'];
    }

    /**
     * Sets displayableOrderComment
     *
     * @param string $displayableOrderComment A text block submitted with the createFulfillmentOrder operation. Displays in recipient-facing materials such as the packing slip.
     *
     * @return $this
     */
    public function setDisplayableOrderComment($displayableOrderComment)
    {
        $this->container['displayableOrderComment'] = $displayableOrderComment;

        return $this;
    }

    /**
     * Gets shippingSpeedCategory
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\ShippingSpeedCategory
     */
    public function getShippingSpeedCategory()
    {
        return $this->container['shippingSpeedCategory'];
    }

    /**
     * Sets shippingSpeedCategory
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\ShippingSpeedCategory $shippingSpeedCategory shippingSpeedCategory
     *
     * @return $this
     */
    public function setShippingSpeedCategory($shippingSpeedCategory)
    {
        $this->container['shippingSpeedCategory'] = $shippingSpeedCategory;

        return $this;
    }

    /**
     * Gets deliveryWindow
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\DeliveryWindow|null
     */
    public function getDeliveryWindow()
    {
        return $this->container['deliveryWindow'];
    }

    /**
     * Sets deliveryWindow
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\DeliveryWindow|null $deliveryWindow deliveryWindow
     *
     * @return $this
     */
    public function setDeliveryWindow($deliveryWindow)
    {
        $this->container['deliveryWindow'] = $deliveryWindow;

        return $this;
    }

    /**
     * Gets destinationAddress
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\Address
     */
    public function getDestinationAddress()
    {
        return $this->container['destinationAddress'];
    }

    /**
     * Sets destinationAddress
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\Address $destinationAddress destinationAddress
     *
     * @return $this
     */
    public function setDestinationAddress($destinationAddress)
    {
        $this->container['destinationAddress'] = $destinationAddress;

        return $this;
    }

    /**
     * Gets fulfillmentAction
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\FulfillmentAction|null
     */
    public function getFulfillmentAction()
    {
        return $this->container['fulfillmentAction'];
    }

    /**
     * Sets fulfillmentAction
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\FulfillmentAction|null $fulfillmentAction fulfillmentAction
     *
     * @return $this
     */
    public function setFulfillmentAction($fulfillmentAction)
    {
        $this->container['fulfillmentAction'] = $fulfillmentAction;

        return $this;
    }

    /**
     * Gets fulfillmentPolicy
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\FulfillmentPolicy|null
     */
    public function getFulfillmentPolicy()
    {
        return $this->container['fulfillmentPolicy'];
    }

    /**
     * Sets fulfillmentPolicy
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\FulfillmentPolicy|null $fulfillmentPolicy fulfillmentPolicy
     *
     * @return $this
     */
    public function setFulfillmentPolicy($fulfillmentPolicy)
    {
        $this->container['fulfillmentPolicy'] = $fulfillmentPolicy;

        return $this;
    }

    /**
     * Gets codSettings
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\CODSettings|null
     */
    public function getCodSettings()
    {
        return $this->container['codSettings'];
    }

    /**
     * Sets codSettings
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\CODSettings|null $codSettings codSettings
     *
     * @return $this
     */
    public function setCodSettings($codSettings)
    {
        $this->container['codSettings'] = $codSettings;

        return $this;
    }

    /**
     * Gets receivedDate
     *
     * @return \DateTime
     */
    public function getReceivedDate()
    {
        return $this->container['receivedDate'];
    }

    /**
     * Sets receivedDate
     *
     * @param \DateTime $receivedDate receivedDate
     *
     * @return $this
     */
    public function setReceivedDate($receivedDate)
    {
        $this->container['receivedDate'] = $receivedDate;

        return $this;
    }

    /**
     * Gets fulfillmentOrderStatus
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\FulfillmentOrderStatus
     */
    public function getFulfillmentOrderStatus()
    {
        return $this->container['fulfillmentOrderStatus'];
    }

    /**
     * Sets fulfillmentOrderStatus
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\FulfillmentOrderStatus $fulfillmentOrderStatus fulfillmentOrderStatus
     *
     * @return $this
     */
    public function setFulfillmentOrderStatus($fulfillmentOrderStatus)
    {
        $this->container['fulfillmentOrderStatus'] = $fulfillmentOrderStatus;

        return $this;
    }

    /**
     * Gets statusUpdatedDate
     *
     * @return \DateTime
     */
    public function getStatusUpdatedDate()
    {
        return $this->container['statusUpdatedDate'];
    }

    /**
     * Sets statusUpdatedDate
     *
     * @param \DateTime $statusUpdatedDate statusUpdatedDate
     *
     * @return $this
     */
    public function setStatusUpdatedDate($statusUpdatedDate)
    {
        $this->container['statusUpdatedDate'] = $statusUpdatedDate;

        return $this;
    }

    /**
     * Gets notificationEmails
     *
     * @return string[]|null
     */
    public function getNotificationEmails()
    {
        return $this->container['notificationEmails'];
    }

    /**
     * Sets notificationEmails
     *
     * @param string[]|null $notificationEmails A list of email addresses that the seller provides that are used by Amazon to send ship-complete notifications to recipients on behalf of the seller.
     *
     * @return $this
     */
    public function setNotificationEmails($notificationEmails)
    {
        $this->container['notificationEmails'] = $notificationEmails;

        return $this;
    }

    /**
     * Gets featureConstraints
     *
     * @return \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\FeatureSettings[]|null
     */
    public function getFeatureConstraints()
    {
        return $this->container['featureConstraints'];
    }

    /**
     * Sets featureConstraints
     *
     * @param \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\FeatureSettings[]|null $featureConstraints A list of features and their fulfillment policies to apply to the order.
     *
     * @return $this
     */
    public function setFeatureConstraints($featureConstraints)
    {
        $this->container['featureConstraints'] = $featureConstraints;

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


