<?php

namespace Glue\SpApi\OpenAPI\Builder;

use Glue\SpApi\OpenAPI\Clients\APlusContentV20201101\Configuration as APlusContentV20201101Config;
use Glue\SpApi\OpenAPI\Clients\AuthorizationV1\Configuration as AuthorizationV1Config;
use Glue\SpApi\OpenAPI\Clients\CatalogItemsV0\Configuration as CatalogItemsV0Config;
use Glue\SpApi\OpenAPI\Clients\CatalogItemsV20201201\Configuration as CatalogItemsV20201201Config;
use Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\Configuration as DefinitionsProductTypesV20200901Config;
use Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Configuration as EasyShipV20220323Config;
use Glue\SpApi\OpenAPI\Clients\FbaInboundEligibilityV1\Configuration as FbaInboundEligibilityV1Config;
use Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Configuration as FbaInventoryV1Config;
use Glue\SpApi\OpenAPI\Clients\FbaSmallAndLightV1\Configuration as FbaSmallAndLightV1Config;
use Glue\SpApi\OpenAPI\Clients\FeedsV20200904\Configuration as FeedsV20200904Config;
use Glue\SpApi\OpenAPI\Clients\FeedsV20210630\Configuration as FeedsV20210630Config;
use Glue\SpApi\OpenAPI\Clients\FinancesV0\Configuration as FinancesV0Config;
use Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Configuration as FulfillmentInboundV0Config;
use Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Configuration as FulfillmentOutboundV20200701Config;
use Glue\SpApi\OpenAPI\Clients\ListingsItemsV20200901\Configuration as ListingsItemsV20200901Config;
use Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Configuration as ListingsItemsV20210801Config;
use Glue\SpApi\OpenAPI\Clients\ListingsRestrictionsV20210801\Configuration as ListingsRestrictionsV20210801Config;
use Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Configuration as MerchantFulfillmentV0Config;
use Glue\SpApi\OpenAPI\Clients\NotificationsV1\Configuration as NotificationsV1Config;
use Glue\SpApi\OpenAPI\Clients\OrdersV0\Configuration as OrdersV0Config;
use Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Configuration as ProductFeesV0Config;
use Glue\SpApi\OpenAPI\Clients\ProductPricingV0\Configuration as ProductPricingV0Config;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Configuration as ReplenishmentV20221107Config;
use Glue\SpApi\OpenAPI\Clients\ReportsV20200904\Configuration as ReportsV20200904Config;
use Glue\SpApi\OpenAPI\Clients\ReportsV20210630\Configuration as ReportsV20210630Config;
use Glue\SpApi\OpenAPI\Clients\SalesV1\Configuration as SalesV1Config;
use Glue\SpApi\OpenAPI\Clients\SellersV1\Configuration as SellersV1Config;
use Glue\SpApi\OpenAPI\Clients\ServicesV1\Configuration as ServicesV1Config;
use Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0\Configuration as ShipmentInvoicingV0Config;
use Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Configuration as SupplySourcesV20200701Config;
use Glue\SpApi\OpenAPI\Clients\TokensV20210301\Configuration as TokensV20210301Config;
use Glue\SpApi\OpenAPI\Clients\UploadsV20201101\Configuration as UploadsV20201101Config;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentInventoryV1\Configuration as VendorDirectFulfillmentInventoryV1Config;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Configuration as VendorDirectFulfillmentOrdersV1Config;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\Configuration as VendorDirectFulfillmentOrdersV20211228Config;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Configuration as VendorDirectFulfillmentPaymentsV1Config;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228\Configuration as VendorDirectFulfillmentSandboxDataV20211228Config;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Configuration as VendorDirectFulfillmentShippingV1Config;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Configuration as VendorDirectFulfillmentShippingV20211228Config;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV1\Configuration as VendorDirectFulfillmentTransactionsV1Config;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV20211228\Configuration as VendorDirectFulfillmentTransactionsV20211228Config;
use Glue\SpApi\OpenAPI\Clients\VendorTransactionStatusV1\Configuration as VendorTransactionStatusV1Config;
use Glue\SpApi\OpenAPI\Configuration\SpApiConfig;
use Glue\SpApi\OpenAPI\Exceptions\ClientBuilderException;
use Glue\SpApi\OpenAPI\Exceptions\LwaAccessTokenException;
use Glue\SpApi\OpenAPI\Exceptions\RestrictedDataTokenException;
use Glue\SpApi\OpenAPI\Middleware\Guzzle\AwsSignatureV4Middleware;
use Glue\SpApi\OpenAPI\Middleware\Guzzle\SpApiAccessTokenMiddleware;
use Glue\SpApi\OpenAPI\Services\Lwa\LwaServiceInterface;
use Glue\SpApi\OpenAPI\SpApiRoster;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;

class ClientBuilder
{
    /**
     * @var LwaServiceInterface
     */
    protected $lwaService;

    /**
     * @var callable
     */
    protected $awsCredentialProvider;

    /**
     * @var SpApiConfig
     */
    protected $spApiConfig;

    /**
     * @var HandlerStack
     */
    protected $guzzleHandlerStack;

    /**
     * @var string
     */
    protected $clientClassFqn;

    /**
     * @var APlusContentV20201101Config|AuthorizationV1Config|CatalogItemsV0Config|CatalogItemsV20201201Config|DefinitionsProductTypesV20200901Config|EasyShipV20220323Config|FbaInboundEligibilityV1Config|FbaInventoryV1Config|FbaSmallAndLightV1Config|FeedsV20200904Config|FeedsV20210630Config|FinancesV0Config|FulfillmentInboundV0Config|FulfillmentOutboundV20200701Config|ListingsItemsV20200901Config|ListingsItemsV20210801Config|ListingsRestrictionsV20210801Config|MerchantFulfillmentV0Config|NotificationsV1Config|OrdersV0Config|ProductFeesV0Config|ProductPricingV0Config|ReplenishmentV20221107Config|ReportsV20200904Config|ReportsV20210630Config|SalesV1Config|SellersV1Config|ServicesV1Config|ShipmentInvoicingV0Config|SupplySourcesV20200701Config|TokensV20210301Config|UploadsV20201101Config|VendorDirectFulfillmentInventoryV1Config|VendorDirectFulfillmentOrdersV1Config|VendorDirectFulfillmentOrdersV20211228Config|VendorDirectFulfillmentPaymentsV1Config|VendorDirectFulfillmentSandboxDataV20211228Config|VendorDirectFulfillmentShippingV1Config|VendorDirectFulfillmentShippingV20211228Config|VendorDirectFulfillmentTransactionsV1Config|VendorDirectFulfillmentTransactionsV20211228Config|VendorTransactionStatusV1Config
     */
    protected $domainConfig;

    /**
     * @var string|null
     */
    protected $awsCredentialScopeServiceOverride = null;

    /**
     * @var string|null
     */
    protected $awsCredentialScopeRegionOverride = null;

    /**
     * Provider callback for retrieving a Restricted Data Token (RDT),
     * if applicable to the target API.
     *
     * @var callable|null
     */
    protected $rdtProvider = null;

    public function __construct(
        LwaServiceInterface $lwaService,
        callable $awsCredentialProvider,
        SpApiConfig $spApiConfig
    ) {
        $spApiConfig->validateConfig();

        $this->lwaService            = $lwaService;
        $this->awsCredentialProvider = $awsCredentialProvider;
        $this->spApiConfig           = $spApiConfig;
        $this->guzzleHandlerStack    = HandlerStack::create();
    }

    /**
     * Set the target client by fully-qualified class name.
     *
     * @param string $clientClassFqn Fully qualified class name of the target API
     * @return static
     */
    public function forClient($clientClassFqn)
    {
        if (isset($this->clientClassFqn)) {
            throw new ClientBuilderException("ClientBuilder method 'forClient'"
                . " cannot be called more than once.");
        }

        if (!SpApiRoster::isValidClientClassFqn($clientClassFqn)) {
            throw new ClientBuilderException("Invalid API class FQN [{$clientClassFqn}]: Must be"
                . " one of: " . implode(', ', SpApiRoster::allClientClassFqns()) . ".");
        }
        $domainConfigClassFqn = SpApiRoster::getClientConfigFqnFromClientClass($clientClassFqn);

        $this->clientClassFqn  = $clientClassFqn;
        $this->domainConfig = $this->_configureDomainConfigDefaults(
            new $domainConfigClassFqn()
        );

        return $this;
    }

    /**
     * Modify the Configuration object specific to the target API by passing in
     * a callback argument and making changes to its first parameter.
     *
     * @param callable $callback
     * @return static
     */
    public function usingConfig(callable $callback)
    {
        if (!isset($this->clientClassFqn)) {
            throw new ClientBuilderException("Method 'usingConfig' cannot be called"
                . " before the target API has been set via the 'forClient' method.");
        }

        $callback($this->domainConfig);

        return $this;
    }

    /**
     * Set the provider callback for retrieving a Restricted Data Token (RDT),
     * if applicable to the target API.
     *
     * @return static
     */
    public function withRdtProvider(callable $rdtProvider = null)
    {
        $this->rdtProvider = $rdtProvider;
        return $this;
    }

    /**
     * Set the Guzzle HandlerStack property. This is likely not needed for
     * most developer use-cases, as the constructor of the current object
     * already sets the `guzzleHandlerStack` property equal to the return
     * value of `\GuzzleHttp\HandlerStack::create()`, which follows
     * Guzzle-recommended defaults based on your system's environment.
     * If you would like to simply push a new middleware onto the HandlerStack,
     * call the `pushGuzzleMiddleware` method instead.
     *
     * @return static
     */
    public function withGuzzleHandlerStack(HandlerStack $guzzleHandlerStack)
    {
        $this->guzzleHandlerStack = $guzzleHandlerStack;
        return $this;
    }

    /**
     * Push a middleware to the top of the Guzzle HandlerStack.
     *
     * @param callable $middleware
     * @param string|null $name
     * @return static
     */
    public function pushGuzzleMiddleware(
        callable $middleware,
        $name = null
    ) {
        $this->guzzleHandlerStack->push($middleware, $name);
        return $this;
    }

    /**
     * Override the default service set in the SpApiConfig to be used as the
     * credential scope during the AWS request signature.
     *
     * @param string $awsCredentialScopeServiceOverride
     * @return static
     */
    public function overrideAwsCredentialScopeService($awsCredentialScopeServiceOverride)
    {
        $this->awsCredentialScopeServiceOverride = $awsCredentialScopeServiceOverride;
        return $this;
    }

    /**
     * Override the default region set in the SpApiConfig to be used as the
     * credential scope during the AWS request signature.
     *
     * @param string $awsCredentialScopeServiceOverride
     * @return static
     */
    public function overrideAwsCredentialScopeRegion($awsCredentialScopeRegionOverride)
    {
        $this->awsCredentialScopeRegionOverride = $awsCredentialScopeRegionOverride;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientClassFqn()
    {
        return $this->clientClassFqn;
    }

    /**
     * @return APlusContentV20201101Config|AuthorizationV1Config|CatalogItemsV0Config|CatalogItemsV20201201Config|DefinitionsProductTypesV20200901Config|EasyShipV20220323Config|FbaInboundEligibilityV1Config|FbaInventoryV1Config|FbaSmallAndLightV1Config|FeedsV20200904Config|FeedsV20210630Config|FinancesV0Config|FulfillmentInboundV0Config|FulfillmentOutboundV20200701Config|ListingsItemsV20200901Config|ListingsItemsV20210801Config|ListingsRestrictionsV20210801Config|MerchantFulfillmentV0Config|NotificationsV1Config|OrdersV0Config|ProductFeesV0Config|ProductPricingV0Config|ReplenishmentV20221107Config|ReportsV20200904Config|ReportsV20210630Config|SalesV1Config|SellersV1Config|ServicesV1Config|ShipmentInvoicingV0Config|SupplySourcesV20200701Config|TokensV20210301Config|UploadsV20201101Config|VendorDirectFulfillmentInventoryV1Config|VendorDirectFulfillmentOrdersV1Config|VendorDirectFulfillmentOrdersV20211228Config|VendorDirectFulfillmentPaymentsV1Config|VendorDirectFulfillmentSandboxDataV20211228Config|VendorDirectFulfillmentShippingV1Config|VendorDirectFulfillmentShippingV20211228Config|VendorDirectFulfillmentTransactionsV1Config|VendorDirectFulfillmentTransactionsV20211228Config|VendorTransactionStatusV1Config
     */
    public function getDomainConfig()
    {
        return clone $this->domainConfig;
    }

    /**
     * @return callable|null
     */
    public function getRdtProvider()
    {
        if (is_null($this->rdtProvider)) {
            return null;
        }
        return clone $this->rdtProvider;
    }

    /**
     * @return HandlerStack
     */
    public function getGuzzleHandlerStack()
    {
        return clone $this->guzzleHandlerStack;
    }

    /**
     * @return string|null
     */
    public function getAwsCredentialScopeServiceOverride()
    {
        return $this->awsCredentialScopeServiceOverride;
    }

    /**
     * @return string|null
     */
    public function getAwsCredentialScopeRegionOverride()
    {
        return $this->awsCredentialScopeRegionOverride;
    }

    /**
     * Create the API client according to the values set up in this builder instance.
     *
     * @return mixed
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createClient()
    {
        $this->_throwIfNotReadyToCreate();

        $clientClassFqn = $this->clientClassFqn;

        return new $clientClassFqn(
            $this->_makeGuzzleClient(),
            $this->domainConfig
        );
    }

    /**
     * @return Client
     */
    protected function _makeGuzzleClient()
    {
        $this->guzzleHandlerStack->push(
            new SpApiAccessTokenMiddleware(
                $this->lwaService,
                $this->rdtProvider
            ),
            SpApiAccessTokenMiddleware::MIDDLEWARE_NAME
        );

        $this->guzzleHandlerStack->push(
            AwsSignatureV4Middleware::fromSpApiConfig(
                $this->spApiConfig,
                $this->awsCredentialProvider,
                $this->awsCredentialScopeServiceOverride,
                $this->awsCredentialScopeRegionOverride
            ),
            AwsSignatureV4Middleware::MIDDLEWARE_NAME
        );

        // Note that several key Guzzle request fields / options such as 'base_uri',
        // 'debug' etc. are overwritten downstream when the domain client is
        // invoked. The source of truth for such fields are the Configuration objects
        // with each SP-API domain being used.
        return new Client([
            'handler'  => $this->guzzleHandlerStack,
        ]);
    }

    /**
     * @param APlusContentV20201101Config|AuthorizationV1Config|CatalogItemsV0Config|CatalogItemsV20201201Config|DefinitionsProductTypesV20200901Config|EasyShipV20220323Config|FbaInboundEligibilityV1Config|FbaInventoryV1Config|FbaSmallAndLightV1Config|FeedsV20200904Config|FeedsV20210630Config|FinancesV0Config|FulfillmentInboundV0Config|FulfillmentOutboundV20200701Config|ListingsItemsV20200901Config|ListingsItemsV20210801Config|ListingsRestrictionsV20210801Config|MerchantFulfillmentV0Config|NotificationsV1Config|OrdersV0Config|ProductFeesV0Config|ProductPricingV0Config|ReplenishmentV20221107Config|ReportsV20200904Config|ReportsV20210630Config|SalesV1Config|SellersV1Config|ServicesV1Config|ShipmentInvoicingV0Config|SupplySourcesV20200701Config|TokensV20210301Config|UploadsV20201101Config|VendorDirectFulfillmentInventoryV1Config|VendorDirectFulfillmentOrdersV1Config|VendorDirectFulfillmentOrdersV20211228Config|VendorDirectFulfillmentPaymentsV1Config|VendorDirectFulfillmentSandboxDataV20211228Config|VendorDirectFulfillmentShippingV1Config|VendorDirectFulfillmentShippingV20211228Config|VendorDirectFulfillmentTransactionsV1Config|VendorDirectFulfillmentTransactionsV20211228Config|VendorTransactionStatusV1Config $domainConfig
     * @return APlusContentV20201101Config|AuthorizationV1Config|CatalogItemsV0Config|CatalogItemsV20201201Config|DefinitionsProductTypesV20200901Config|EasyShipV20220323Config|FbaInboundEligibilityV1Config|FbaInventoryV1Config|FbaSmallAndLightV1Config|FeedsV20200904Config|FeedsV20210630Config|FinancesV0Config|FulfillmentInboundV0Config|FulfillmentOutboundV20200701Config|ListingsItemsV20200901Config|ListingsItemsV20210801Config|ListingsRestrictionsV20210801Config|MerchantFulfillmentV0Config|NotificationsV1Config|OrdersV0Config|ProductFeesV0Config|ProductPricingV0Config|ReplenishmentV20221107Config|ReportsV20200904Config|ReportsV20210630Config|SalesV1Config|SellersV1Config|ServicesV1Config|ShipmentInvoicingV0Config|SupplySourcesV20200701Config|TokensV20210301Config|UploadsV20201101Config|VendorDirectFulfillmentInventoryV1Config|VendorDirectFulfillmentOrdersV1Config|VendorDirectFulfillmentOrdersV20211228Config|VendorDirectFulfillmentPaymentsV1Config|VendorDirectFulfillmentSandboxDataV20211228Config|VendorDirectFulfillmentShippingV1Config|VendorDirectFulfillmentShippingV20211228Config|VendorDirectFulfillmentTransactionsV1Config|VendorDirectFulfillmentTransactionsV20211228Config|VendorTransactionStatusV1Config
     */
    protected function _configureDomainConfigDefaults($domainConfig)
    {
        $domainConfig->setUserAgent($this->spApiConfig->userAgent());
        $domainConfig->setHost($this->spApiConfig->defaultBaseUrl);
        $domainConfig->setDebug($this->spApiConfig->domainApiCallDebug);

        return $domainConfig;
    }

    protected function _throwIfNotReadyToCreate()
    {
        if (!isset($this->clientClassFqn)) {
            throw new ClientBuilderException("Builder not ready to create: Target API has not yet been set.");
        }
        if (!isset($this->domainConfig)) {
            throw new ClientBuilderException("Builder not ready to create: Domain config has not yet been set.");
        }
    }
}
