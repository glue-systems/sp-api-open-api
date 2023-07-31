<?php

namespace Glue\SPAPI\OpenAPI\Services\Factory;

use Glue\SPAPI\OpenAPI\Clients\ListingsItemsV20200901\Api\ListingsApi as ListingsItemsV20200901Api;
use Glue\SPAPI\OpenAPI\Clients\ListingsItemsV20200901\Configuration as ListingsItemsV20200901Config;
use Glue\SPAPI\OpenAPI\Clients\DefinitionsProductTypesV20200901\Api\DefinitionsApi as DefinitionsProductTypesV20200901Api;
use Glue\SPAPI\OpenAPI\Clients\DefinitionsProductTypesV20200901\Configuration as DefinitionsProductTypesV20200901Config;
use Glue\SPAPI\OpenAPI\Clients\FeedsV20200904\Api\FeedsApi as FeedsV20200904Api;
use Glue\SPAPI\OpenAPI\Clients\FeedsV20200904\Configuration as FeedsV20200904Config;
use Glue\SPAPI\OpenAPI\Clients\FeedsV20210630\Api\FeedsApi as FeedsV20210630Api;
use Glue\SPAPI\OpenAPI\Clients\FeedsV20210630\Configuration as FeedsV20210630Config;
use Glue\SPAPI\OpenAPI\Clients\OrdersV0\Api\OrdersV0Api;
use Glue\SPAPI\OpenAPI\Clients\OrdersV0\Api\ShipmentApi as OrdersV0ShipmentApi;
use Glue\SPAPI\OpenAPI\Clients\OrdersV0\Configuration as OrdersV0Config;
use Glue\SPAPI\OpenAPI\Clients\ReportsV20200904\Api\ReportsApi as ReportsV20200904Api;
use Glue\SPAPI\OpenAPI\Clients\ReportsV20200904\Configuration as ReportsV20200904Config;
use Glue\SPAPI\OpenAPI\Clients\ReportsV20210630\Api\ReportsApi as ReportsV20210630Api;
use Glue\SPAPI\OpenAPI\Clients\ReportsV20210630\Configuration as ReportsV20210630Config;
use Glue\SPAPI\OpenAPI\Clients\SupplySourcesV20200701\Api\SupplySourcesApi as SupplySourcesV20200701Api;
use Glue\SPAPI\OpenAPI\Clients\SupplySourcesV20200701\Configuration as SupplySourcesV20200701Config;
use Glue\SPAPI\OpenAPI\Clients\TokensV20210301\Api\TokensApi as TokensV20210301Api;
use Glue\SPAPI\OpenAPI\Clients\TokensV20210301\Configuration as TokensV20210301Config;
use Glue\SPAPI\OpenAPI\Services\Authenticator\ClientAuthenticatorContract;
use Glue\SPAPI\OpenAPI\Services\SPAPIConfig;

class ClientFactory implements ClientFactoryContract
{
    /**
     * @var ClientAuthenticatorContract
     */
    protected $authenticator;

    /**
     * @var SPAPIConfig
     */
    protected $config;

    public function __construct(
        ClientAuthenticatorContract $authenticator,
        SPAPIConfig $config
    ) {
        $this->authenticator = $authenticator;
        $this->config        = $config;
    }

    /**
     * @return SPAPIConfig
     */
    public function getConfig()
    {
        return clone $this->config;
    }

    /**
     * @return SupplySourcesV20200701Api
     */
    public function createSupplySourcesV20200701ApiClient()
    {
        return new SupplySourcesV20200701Api(
            $this->authenticator->createAuthenticatedGuzzleClient(),
            $this->_setUpClientConfig(new SupplySourcesV20200701Config())
        );
    }

    /**
     * @return ListingsItemsV20200901Api
     */
    public function createListingsItemsV20200901ApiClient()
    {
        return new ListingsItemsV20200901Api(
            $this->authenticator->createAuthenticatedGuzzleClient(),
            $this->_setUpClientConfig(new ListingsItemsV20200901Config())
        );
    }

    /**
     * @return OrdersV0Api
     */
    public function createOrdersV0ApiClient()
    {
        return new OrdersV0Api(
            $this->authenticator->createAuthenticatedGuzzleClient(),
            $this->_setUpClientConfig(new OrdersV0Config())
        );
    }

    /**
     * @return OrdersV0ShipmentApi
     */
    public function createOrdersV0ShipmentApiClient()
    {
        // OrdersV0ShipmentApi does not have its own Configuration class,
        // as it originats the same models/ordersV0.json spec.
        return new OrdersV0ShipmentApi(
            $this->authenticator->createAuthenticatedGuzzleClient(),
            $this->_setUpClientConfig(new OrdersV0Config())
        );
    }

    /**
     * @return DefinitionsProductTypesV20200901Api
     */
    public function createDefinitionsProductTypesV20200901ApiClient()
    {
        return new DefinitionsProductTypesV20200901Api(
            $this->authenticator->createAuthenticatedGuzzleClient(),
            $this->_setUpClientConfig(new DefinitionsProductTypesV20200901Config())
        );
    }

    /**
     * @return TokensV20210301Api
     */
    public function createTokensV20210301ApiClient()
    {
        return new TokensV20210301Api(
            $this->authenticator->createAuthenticatedGuzzleClient(),
            $this->_setUpClientConfig(new TokensV20210301Config())
        );
    }

    /**
     * @return FeedsV20200904Api
     */
    public function createFeedsV20200904ApiClient()
    {
        return new FeedsV20200904Api(
            $this->authenticator->createAuthenticatedGuzzleClient(),
            $this->_setUpClientConfig(new FeedsV20200904Config())
        );
    }

    /**
     * @return FeedsV20210630Api
     */
    public function createFeedsV20210630ApiClient()
    {
        return new FeedsV20210630Api(
            $this->authenticator->createAuthenticatedGuzzleClient(),
            $this->_setUpClientConfig(new FeedsV20210630Config())
        );
    }

    /**
     * @return ReportsV20200904Api
     */
    public function createReportsV20200904ApiClient()
    {
        return new ReportsV20200904Api(
            $this->authenticator->createAuthenticatedGuzzleClient(),
            $this->_setUpClientConfig(new ReportsV20200904Config())
        );
    }

    /**
     * @return ReportsV20210630Api
     */
    public function createReportsV20210630ApiClient()
    {
        return new ReportsV20210630Api(
            $this->authenticator->createAuthenticatedGuzzleClient(),
            $this->_setUpClientConfig(new ReportsV20210630Config())
        );
    }

    /**
     * @param  ListingsItemsV20200901Config|OrdersV0Config|SupplySourcesV20200701Config|DefinitionsProductTypesV20200901Config|TokensV20210301Config|FeedsV20200904Config|FeedsV20210630Config|ReportsV20200904Config|ReportsV20210630Config  $clientConfig
     * @return ListingsItemsV20200901Config|OrdersV0Config|SupplySourcesV20200701Config|DefinitionsProductTypesV20200901Config|TokensV20210301Config|FeedsV20200904Config|FeedsV20210630Config|ReportsV20200904Config|ReportsV20210630Config
     */
    protected function _setUpClientConfig($clientConfig)
    {
        $clientConfig->setUserAgent($this->config->userAgent());

        $clientConfig->setHost($this->config->spApiBaseUrl);

        return $clientConfig;
    }
}
