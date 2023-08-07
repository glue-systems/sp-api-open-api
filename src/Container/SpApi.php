<?php

namespace Glue\SpApi\OpenAPI\Container;

use Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\Api\DefinitionsApi as DefinitionsProductTypesV20200901Api;
use Glue\SpApi\OpenAPI\Clients\FeedsV20200904\Api\FeedsApi as FeedsV20200904Api;
use Glue\SpApi\OpenAPI\Clients\FeedsV20210630\Api\FeedsApi as FeedsV20210630Api;
use Glue\SpApi\OpenAPI\Clients\ListingsItemsV20200901\Api\ListingsApi as ListingsItemsV20200901Api;
use Glue\SpApi\OpenAPI\Clients\OrdersV0\Api\OrdersV0Api;
use Glue\SpApi\OpenAPI\Clients\OrdersV0\Api\ShipmentApi as OrdersV0ShipmentApi;
use Glue\SpApi\OpenAPI\Clients\ReportsV20200904\Api\ReportsApi as ReportsV20200904Api;
use Glue\SpApi\OpenAPI\Clients\ReportsV20210630\Api\ReportsApi as ReportsV20210630Api;
use Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Api\SupplySourcesApi as SupplySourcesV20200701Api;
use Glue\SpApi\OpenAPI\Clients\TokensV20210301\Api\TokensApi as TokensV20210301Api;
use Glue\SpApi\OpenAPI\Clients\TokensV20210301\Model\CreateRestrictedDataTokenRequest;
use Glue\SpApi\OpenAPI\Services\Factory\ClientFactoryContract;
use Glue\SpApi\OpenAPI\Services\Rdt\RestrictedDataTokenProviderContract;
use Glue\SpApi\OpenAPI\SpApiConfig;

class SpApi implements SpApiInterface
{
    /**
     * @var ClientFactoryContract
     */
    protected $clientFactory;

    /**
     * @var RestrictedDataTokenProviderContract
     */
    protected $rdtProvider;

    /**
     * @var SpApiConfig
     */
    protected $spApiConfig;

    public function __construct(
        ClientFactoryContract $clientFactory,
        RestrictedDataTokenProviderContract $rdtProvider,
        SpApiConfig $spApiConfig
    ) {
        $this->clientFactory = $clientFactory;
        $this->rdtProvider   = $rdtProvider;
        $this->spApiConfig   = $spApiConfig;
    }

    /**
     * Get the global SP-API config object.
     *
     * @return SpApiConfig
     */
    public function getSpApiConfig()
    {
        return clone $this->spApiConfig;
    }

    /**
     * @return DefinitionsProductTypesV20200901Api
     */
    public function definitionsProductTypesV20200901()
    {
        return $this->clientFactory->createDefinitionsProductTypesV20200901ApiClient();
    }

    /**
     * @return FeedsV20200904Api
     */
    public function feedsV20200904()
    {
        return $this->clientFactory->createFeedsV20200904ApiClient();
    }

    /**
     * @return FeedsV20210630Api
     */
    public function feedsV20210630()
    {
        return $this->clientFactory->createFeedsV20210630ApiClient();
    }

    /**
     * @return ListingsItemsV20200901Api
     */
    public function listingsItemsV20200901()
    {
        return $this->clientFactory->createListingsItemsV20200901ApiClient();
    }

    /**
     * @return OrdersV0Api
     */
    public function ordersV0(
        CreateRestrictedDataTokenRequest $rdtRequest = null
    ) {
        return $this->clientFactory->createOrdersV0ApiClient(
            null,
            $this->_resolveRdtProvider($rdtRequest)
        );
    }

    /**
     * @return OrdersV0ShipmentApi
     */
    public function ordersV0Shipment()
    {
        return $this->clientFactory->createOrdersV0ShipmentApiClient();
    }

    /**
     * @return ReportsV20200904Api
     */
    public function reportsV20200904(
        CreateRestrictedDataTokenRequest $rdtRequest = null
    ) {
        return $this->clientFactory->createReportsV20200904ApiClient(
            null,
            $this->_resolveRdtProvider($rdtRequest)
        );
    }

    /**
     * @return ReportsV20210630Api
     */
    public function reportsV20210630(
        CreateRestrictedDataTokenRequest $rdtRequest = null
    ) {
        return $this->clientFactory->createReportsV20210630ApiClient(
            null,
            $this->_resolveRdtProvider($rdtRequest)
        );
    }

    /**
     * @return SupplySourcesV20200701Api
     */
    public function supplySourcesV20200701()
    {
        return $this->clientFactory->createSupplySourcesV20200701ApiClient();
    }

    /**
     * @return TokensV20210301Api
     */
    public function tokensV20210301()
    {
        return $this->clientFactory->createTokensV20210301ApiClient();
    }

    /**
     * @param CreateRestrictedDataTokenRequest|null $rdtRequest
     * @return callable|null
     */
    protected function _resolveRdtProvider(
        CreateRestrictedDataTokenRequest $rdtRequest = null
    ) {
        if (is_null($rdtRequest)) {
            return null;
        }
        return $this->rdtProvider->fromRdtRequest($rdtRequest);
    }
}
