<?php

namespace Glue\SpApi\OpenAPI\Exceptions;

use Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\ApiException as AplusContentV20201101ApiException;
use Glue\SpApi\OpenAPI\Clients\AuthorizationV1\ApiException as AuthorizationV1ApiException;
use Glue\SpApi\OpenAPI\Clients\CatalogItemsV0\ApiException as CatalogItemsV0ApiException;
use Glue\SpApi\OpenAPI\Clients\CatalogItemsV20201201\ApiException as CatalogItemsV20201201ApiException;
use Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\ApiException as DefinitionsProductTypesV20200901ApiException;
use Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\ApiException as EasyShipV20220323ApiException;
use Glue\SpApi\OpenAPI\Clients\FbaInboundEligibilityV1\ApiException as FbaInboundEligibilityV1ApiException;
use Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\ApiException as FbaInventoryV1ApiException;
use Glue\SpApi\OpenAPI\Clients\FbaSmallAndLightV1\ApiException as FbaSmallAndLightV1ApiException;
use Glue\SpApi\OpenAPI\Clients\FeedsV20200904\ApiException as FeedsV20200904ApiException;
use Glue\SpApi\OpenAPI\Clients\FeedsV20210630\ApiException as FeedsV20210630ApiException;
use Glue\SpApi\OpenAPI\Clients\FinancesV0\ApiException as FinancesV0ApiException;
use Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\ApiException as FulfillmentInboundV0ApiException;
use Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\ApiException as FulfillmentOutboundV20200701ApiException;
use Glue\SpApi\OpenAPI\Clients\ListingsItemsV20200901\ApiException as ListingsItemsV20200901ApiException;
use Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\ApiException as ListingsItemsV20210801ApiException;
use Glue\SpApi\OpenAPI\Clients\ListingsRestrictionsV20210801\ApiException as ListingsRestrictionsV20210801ApiException;
use Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\ApiException as MerchantFulfillmentV0ApiException;
use Glue\SpApi\OpenAPI\Clients\NotificationsV1\ApiException as NotificationsV1ApiException;
use Glue\SpApi\OpenAPI\Clients\OrdersV0\ApiException as OrdersV0ApiException;
use Glue\SpApi\OpenAPI\Clients\ProductFeesV0\ApiException as ProductFeesV0ApiException;
use Glue\SpApi\OpenAPI\Clients\ProductPricingV0\ApiException as ProductPricingV0ApiException;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\ApiException as ReplenishmentV20221107ApiException;
use Glue\SpApi\OpenAPI\Clients\ReportsV20200904\ApiException as ReportsV20200904ApiException;
use Glue\SpApi\OpenAPI\Clients\ReportsV20210630\ApiException as ReportsV20210630ApiException;
use Glue\SpApi\OpenAPI\Clients\SalesV1\ApiException as SalesV1ApiException;
use Glue\SpApi\OpenAPI\Clients\SellersV1\ApiException as SellersV1ApiException;
use Glue\SpApi\OpenAPI\Clients\ServicesV1\ApiException as ServicesV1ApiException;
use Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0\ApiException as ShipmentInvoicingV0ApiException;
use Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\ApiException as SupplySourcesV20200701ApiException;
use Glue\SpApi\OpenAPI\Clients\TokensV20210301\ApiException as TokensV20210301ApiException;
use Glue\SpApi\OpenAPI\Clients\UploadsV20201101\ApiException as UploadsV20201101ApiException;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentInventoryV1\ApiException as VendorDirectFulfillmentInventoryV1ApiException;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\ApiException as VendorDirectFulfillmentOrdersV1ApiException;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\ApiException as VendorDirectFulfillmentOrdersV20211228ApiException;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\ApiException as VendorDirectFulfillmentPaymentsV1ApiException;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228\ApiException as VendorDirectFulfillmentSandboxDataV20211228ApiException;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\ApiException as VendorDirectFulfillmentShippingV1ApiException;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\ApiException as VendorDirectFulfillmentShippingV20211228ApiException;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV1\ApiException as VendorDirectFulfillmentTransactionsV1ApiException;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV20211228\ApiException as VendorDirectFulfillmentTransactionsV20211228ApiException;
use Glue\SpApi\OpenAPI\Clients\VendorTransactionStatusV1\ApiException as VendorTransactionStatusV1ApiException;
use Glue\SpApi\OpenAPI\Traits\RecognizesStringables;
use Glue\SpApi\OpenAPI\Utilities\SpApiRoster;
use Psr\Http\Message\StreamInterface;

class DomainApiException extends \Exception
{
    use RecognizesStringables;

    /**
     * @param AplusContentV20201101ApiException|AuthorizationV1ApiException|CatalogItemsV0ApiException|CatalogItemsV20201201ApiException|DefinitionsProductTypesV20200901ApiException|EasyShipV20220323ApiException|FbaInboundEligibilityV1ApiException|FbaInventoryV1ApiException|FbaSmallAndLightV1ApiException|FeedsV20200904ApiException|FeedsV20210630ApiException|FinancesV0ApiException|FulfillmentInboundV0ApiException|FulfillmentOutboundV20200701ApiException|ListingsItemsV20200901ApiException|ListingsItemsV20210801ApiException|ListingsRestrictionsV20210801ApiException|MerchantFulfillmentV0ApiException|NotificationsV1ApiException|OrdersV0ApiException|ProductFeesV0ApiException|ProductPricingV0ApiException|ReplenishmentV20221107ApiException|ReportsV20200904ApiException|ReportsV20210630ApiException|SalesV1ApiException|SellersV1ApiException|ServicesV1ApiException|ShipmentInvoicingV0ApiException|SupplySourcesV20200701ApiException|TokensV20210301ApiException|UploadsV20201101ApiException|VendorDirectFulfillmentInventoryV1ApiException|VendorDirectFulfillmentOrdersV1ApiException|VendorDirectFulfillmentOrdersV20211228ApiException|VendorDirectFulfillmentPaymentsV1ApiException|VendorDirectFulfillmentSandboxDataV20211228ApiException|VendorDirectFulfillmentShippingV1ApiException|VendorDirectFulfillmentShippingV20211228ApiException|VendorDirectFulfillmentTransactionsV1ApiException|VendorDirectFulfillmentTransactionsV20211228ApiException|VendorTransactionStatusV1ApiException $apiException
     * @param bool $shouldStringifyResponseBodyIntoMessage Note that, if set to true and the ApiException's response body is a stream, it is possible that it can only be unpacked once for that object before the internal stream handle becomes detached.
     */
    public function __construct(
        \Exception $apiException,
        $shouldStringifyResponseBodyIntoMessage = false
    ) {
        if (!SpApiRoster::isApiException($apiException)) {
            $invalidExceptionType = get_class($apiException);
            throw new \InvalidArgumentException("Invalid exception type [{$invalidExceptionType}]"
                . " - Argument instance must be one of: " . implode(', ', SpApiRoster::allApiExceptionClassFqns())
                . ".");
        }

        $message = $apiException->getMessage();
        if ($shouldStringifyResponseBodyIntoMessage) {
            $unpackedResponseBody = self::unpackApiExceptionResponseBodyAsString($apiException);
            $message              .= " RESPONSE BODY: $unpackedResponseBody";
        }

        parent::__construct($message, $apiException->getCode(), $apiException);
    }

    /**
     * Unpack the ApiException argument's response body into a string value.
     * Note that, if the response body is a stream, it is possible that it
     * can only be unpacked once for that object before the internal stream
     * handle becomes detached.
     *
     * @param AplusContentV20201101ApiException|AuthorizationV1ApiException|CatalogItemsV0ApiException|CatalogItemsV20201201ApiException|DefinitionsProductTypesV20200901ApiException|EasyShipV20220323ApiException|FbaInboundEligibilityV1ApiException|FbaInventoryV1ApiException|FbaSmallAndLightV1ApiException|FeedsV20200904ApiException|FeedsV20210630ApiException|FinancesV0ApiException|FulfillmentInboundV0ApiException|FulfillmentOutboundV20200701ApiException|ListingsItemsV20200901ApiException|ListingsItemsV20210801ApiException|ListingsRestrictionsV20210801ApiException|MerchantFulfillmentV0ApiException|NotificationsV1ApiException|OrdersV0ApiException|ProductFeesV0ApiException|ProductPricingV0ApiException|ReplenishmentV20221107ApiException|ReportsV20200904ApiException|ReportsV20210630ApiException|SalesV1ApiException|SellersV1ApiException|ServicesV1ApiException|ShipmentInvoicingV0ApiException|SupplySourcesV20200701ApiException|TokensV20210301ApiException|UploadsV20201101ApiException|VendorDirectFulfillmentInventoryV1ApiException|VendorDirectFulfillmentOrdersV1ApiException|VendorDirectFulfillmentOrdersV20211228ApiException|VendorDirectFulfillmentPaymentsV1ApiException|VendorDirectFulfillmentSandboxDataV20211228ApiException|VendorDirectFulfillmentShippingV1ApiException|VendorDirectFulfillmentShippingV20211228ApiException|VendorDirectFulfillmentTransactionsV1ApiException|VendorDirectFulfillmentTransactionsV20211228ApiException|VendorTransactionStatusV1ApiException $apiException
     * @return string
     */
    public static function unpackApiExceptionResponseBodyAsString(
        \Exception $apiException
    ) {
        $body = $apiException->getResponseBody();

        if ($body instanceof StreamInterface) {
            $contents = $body->getContents();
        } elseif (self::isStringable($body)) {
            $contents = (string) $body;
        } elseif ($json = json_encode($body)) {
            $contents = $json;
        } else {
            $contents = '';
        }

        return $contents;
    }

    /**
     * Get the original HTTP response body of the server response, which could
     * be a string, Stream or \stdClass according to OpenAPI-generated PHPDocs.
     *
     * @return mixed
     */
    public function getOriginalResponseBody()
    {
        return $this->getPrevious()->getResponseBody();
    }

    /**
     * @return string
     */
    public function getUnpackedResponseBodyAsString()
    {
        return self::unpackApiExceptionResponseBodyAsString($this->getPrevious());
    }

    /**
     * Get the HTTP response header.
     *
     * @return string[]|null HTTP response header
     */
    public function getResponseHeaders()
    {
        return $this->getPrevious()->getResponseHeaders();
    }

    /**
     * Get the Amazon RequestId from the header if set.
     *
     * @return string|null
     */
    public function getRequestId()
    {
        $responseHeaders = $this->getResponseHeaders();

        return isset($responseHeaders['x-amzn-RequestId'][0])
            ? $responseHeaders['x-amzn-RequestId'][0]
            : null;
    }
}
