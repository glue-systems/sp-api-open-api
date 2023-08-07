<?php
/**
 * InvoiceDetail
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Direct Fulfillment Payments
 *
 * The Selling Partner API for Direct Fulfillment Payments provides programmatic access to a direct fulfillment vendor's invoice data.
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

namespace Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Model;

use \ArrayAccess;
use \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\ObjectSerializer;

/**
 * InvoiceDetail Class Doc Comment
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InvoiceDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InvoiceDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'invoiceNumber' => 'string',
        'invoiceDate' => '\DateTime',
        'referenceNumber' => 'string',
        'remitToParty' => '\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Model\PartyIdentification',
        'shipFromParty' => '\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Model\PartyIdentification',
        'billToParty' => '\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Model\PartyIdentification',
        'shipToCountryCode' => 'string',
        'paymentTermsCode' => 'string',
        'invoiceTotal' => '\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Model\Money',
        'taxTotals' => '\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Model\TaxDetail[]',
        'additionalDetails' => '\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Model\AdditionalDetails[]',
        'chargeDetails' => '\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Model\ChargeDetails[]',
        'items' => '\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Model\InvoiceItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'invoiceNumber' => null,
        'invoiceDate' => 'date-time',
        'referenceNumber' => null,
        'remitToParty' => null,
        'shipFromParty' => null,
        'billToParty' => null,
        'shipToCountryCode' => null,
        'paymentTermsCode' => null,
        'invoiceTotal' => null,
        'taxTotals' => null,
        'additionalDetails' => null,
        'chargeDetails' => null,
        'items' => null
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
        'invoiceNumber' => 'invoiceNumber',
        'invoiceDate' => 'invoiceDate',
        'referenceNumber' => 'referenceNumber',
        'remitToParty' => 'remitToParty',
        'shipFromParty' => 'shipFromParty',
        'billToParty' => 'billToParty',
        'shipToCountryCode' => 'shipToCountryCode',
        'paymentTermsCode' => 'paymentTermsCode',
        'invoiceTotal' => 'invoiceTotal',
        'taxTotals' => 'taxTotals',
        'additionalDetails' => 'additionalDetails',
        'chargeDetails' => 'chargeDetails',
        'items' => 'items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'invoiceNumber' => 'setInvoiceNumber',
        'invoiceDate' => 'setInvoiceDate',
        'referenceNumber' => 'setReferenceNumber',
        'remitToParty' => 'setRemitToParty',
        'shipFromParty' => 'setShipFromParty',
        'billToParty' => 'setBillToParty',
        'shipToCountryCode' => 'setShipToCountryCode',
        'paymentTermsCode' => 'setPaymentTermsCode',
        'invoiceTotal' => 'setInvoiceTotal',
        'taxTotals' => 'setTaxTotals',
        'additionalDetails' => 'setAdditionalDetails',
        'chargeDetails' => 'setChargeDetails',
        'items' => 'setItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'invoiceNumber' => 'getInvoiceNumber',
        'invoiceDate' => 'getInvoiceDate',
        'referenceNumber' => 'getReferenceNumber',
        'remitToParty' => 'getRemitToParty',
        'shipFromParty' => 'getShipFromParty',
        'billToParty' => 'getBillToParty',
        'shipToCountryCode' => 'getShipToCountryCode',
        'paymentTermsCode' => 'getPaymentTermsCode',
        'invoiceTotal' => 'getInvoiceTotal',
        'taxTotals' => 'getTaxTotals',
        'additionalDetails' => 'getAdditionalDetails',
        'chargeDetails' => 'getChargeDetails',
        'items' => 'getItems'
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
        $this->container['invoiceNumber'] = isset($data['invoiceNumber']) ? $data['invoiceNumber'] : null;
        $this->container['invoiceDate'] = isset($data['invoiceDate']) ? $data['invoiceDate'] : null;
        $this->container['referenceNumber'] = isset($data['referenceNumber']) ? $data['referenceNumber'] : null;
        $this->container['remitToParty'] = isset($data['remitToParty']) ? $data['remitToParty'] : null;
        $this->container['shipFromParty'] = isset($data['shipFromParty']) ? $data['shipFromParty'] : null;
        $this->container['billToParty'] = isset($data['billToParty']) ? $data['billToParty'] : null;
        $this->container['shipToCountryCode'] = isset($data['shipToCountryCode']) ? $data['shipToCountryCode'] : null;
        $this->container['paymentTermsCode'] = isset($data['paymentTermsCode']) ? $data['paymentTermsCode'] : null;
        $this->container['invoiceTotal'] = isset($data['invoiceTotal']) ? $data['invoiceTotal'] : null;
        $this->container['taxTotals'] = isset($data['taxTotals']) ? $data['taxTotals'] : null;
        $this->container['additionalDetails'] = isset($data['additionalDetails']) ? $data['additionalDetails'] : null;
        $this->container['chargeDetails'] = isset($data['chargeDetails']) ? $data['chargeDetails'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['invoiceNumber'] === null) {
            $invalidProperties[] = "'invoiceNumber' can't be null";
        }
        if ($this->container['invoiceDate'] === null) {
            $invalidProperties[] = "'invoiceDate' can't be null";
        }
        if ($this->container['remitToParty'] === null) {
            $invalidProperties[] = "'remitToParty' can't be null";
        }
        if ($this->container['shipFromParty'] === null) {
            $invalidProperties[] = "'shipFromParty' can't be null";
        }
        if ($this->container['invoiceTotal'] === null) {
            $invalidProperties[] = "'invoiceTotal' can't be null";
        }
        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
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
     * Gets invoiceNumber
     *
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoiceNumber'];
    }

    /**
     * Sets invoiceNumber
     *
     * @param string $invoiceNumber The unique invoice number.
     *
     * @return $this
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->container['invoiceNumber'] = $invoiceNumber;

        return $this;
    }

    /**
     * Gets invoiceDate
     *
     * @return \DateTime
     */
    public function getInvoiceDate()
    {
        return $this->container['invoiceDate'];
    }

    /**
     * Sets invoiceDate
     *
     * @param \DateTime $invoiceDate Invoice date.
     *
     * @return $this
     */
    public function setInvoiceDate($invoiceDate)
    {
        $this->container['invoiceDate'] = $invoiceDate;

        return $this;
    }

    /**
     * Gets referenceNumber
     *
     * @return string|null
     */
    public function getReferenceNumber()
    {
        return $this->container['referenceNumber'];
    }

    /**
     * Sets referenceNumber
     *
     * @param string|null $referenceNumber An additional unique reference number used for regulatory or other purposes.
     *
     * @return $this
     */
    public function setReferenceNumber($referenceNumber)
    {
        $this->container['referenceNumber'] = $referenceNumber;

        return $this;
    }

    /**
     * Gets remitToParty
     *
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Model\PartyIdentification
     */
    public function getRemitToParty()
    {
        return $this->container['remitToParty'];
    }

    /**
     * Sets remitToParty
     *
     * @param \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Model\PartyIdentification $remitToParty remitToParty
     *
     * @return $this
     */
    public function setRemitToParty($remitToParty)
    {
        $this->container['remitToParty'] = $remitToParty;

        return $this;
    }

    /**
     * Gets shipFromParty
     *
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Model\PartyIdentification
     */
    public function getShipFromParty()
    {
        return $this->container['shipFromParty'];
    }

    /**
     * Sets shipFromParty
     *
     * @param \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Model\PartyIdentification $shipFromParty shipFromParty
     *
     * @return $this
     */
    public function setShipFromParty($shipFromParty)
    {
        $this->container['shipFromParty'] = $shipFromParty;

        return $this;
    }

    /**
     * Gets billToParty
     *
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Model\PartyIdentification|null
     */
    public function getBillToParty()
    {
        return $this->container['billToParty'];
    }

    /**
     * Sets billToParty
     *
     * @param \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Model\PartyIdentification|null $billToParty billToParty
     *
     * @return $this
     */
    public function setBillToParty($billToParty)
    {
        $this->container['billToParty'] = $billToParty;

        return $this;
    }

    /**
     * Gets shipToCountryCode
     *
     * @return string|null
     */
    public function getShipToCountryCode()
    {
        return $this->container['shipToCountryCode'];
    }

    /**
     * Sets shipToCountryCode
     *
     * @param string|null $shipToCountryCode Ship-to country code.
     *
     * @return $this
     */
    public function setShipToCountryCode($shipToCountryCode)
    {
        $this->container['shipToCountryCode'] = $shipToCountryCode;

        return $this;
    }

    /**
     * Gets paymentTermsCode
     *
     * @return string|null
     */
    public function getPaymentTermsCode()
    {
        return $this->container['paymentTermsCode'];
    }

    /**
     * Sets paymentTermsCode
     *
     * @param string|null $paymentTermsCode The payment terms for the invoice.
     *
     * @return $this
     */
    public function setPaymentTermsCode($paymentTermsCode)
    {
        $this->container['paymentTermsCode'] = $paymentTermsCode;

        return $this;
    }

    /**
     * Gets invoiceTotal
     *
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Model\Money
     */
    public function getInvoiceTotal()
    {
        return $this->container['invoiceTotal'];
    }

    /**
     * Sets invoiceTotal
     *
     * @param \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Model\Money $invoiceTotal invoiceTotal
     *
     * @return $this
     */
    public function setInvoiceTotal($invoiceTotal)
    {
        $this->container['invoiceTotal'] = $invoiceTotal;

        return $this;
    }

    /**
     * Gets taxTotals
     *
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Model\TaxDetail[]|null
     */
    public function getTaxTotals()
    {
        return $this->container['taxTotals'];
    }

    /**
     * Sets taxTotals
     *
     * @param \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Model\TaxDetail[]|null $taxTotals Individual tax details per line item.
     *
     * @return $this
     */
    public function setTaxTotals($taxTotals)
    {
        $this->container['taxTotals'] = $taxTotals;

        return $this;
    }

    /**
     * Gets additionalDetails
     *
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Model\AdditionalDetails[]|null
     */
    public function getAdditionalDetails()
    {
        return $this->container['additionalDetails'];
    }

    /**
     * Sets additionalDetails
     *
     * @param \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Model\AdditionalDetails[]|null $additionalDetails Additional details provided by the selling party, for tax-related or other purposes.
     *
     * @return $this
     */
    public function setAdditionalDetails($additionalDetails)
    {
        $this->container['additionalDetails'] = $additionalDetails;

        return $this;
    }

    /**
     * Gets chargeDetails
     *
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Model\ChargeDetails[]|null
     */
    public function getChargeDetails()
    {
        return $this->container['chargeDetails'];
    }

    /**
     * Sets chargeDetails
     *
     * @param \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Model\ChargeDetails[]|null $chargeDetails Total charge amount details for all line items.
     *
     * @return $this
     */
    public function setChargeDetails($chargeDetails)
    {
        $this->container['chargeDetails'] = $chargeDetails;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Model\InvoiceItem[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Model\InvoiceItem[] $items Provides the details of the items in this invoice.
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

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

