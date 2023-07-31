<?php

namespace Glue\SPAPI\OpenAPI\Services\Factory;

use Glue\SPAPI\OpenAPI\Clients\DefinitionsProductTypes\Api\DefinitionsApi;
use Glue\SPAPI\OpenAPI\Clients\ListingsItems\Api\ListingsApi;
use Glue\SPAPI\OpenAPI\Clients\OrdersV0\Api\OrdersV0Api;
use Glue\SPAPI\OpenAPI\Clients\SupplySources\Api\SupplySourcesApi;
use Glue\SPAPI\OpenAPI\Clients\DefinitionsProductTypes\Configuration as DefinitionsProductTypesConfig;
use Glue\SPAPI\OpenAPI\Clients\FeedsV20200904\Api\FeedsApi as FeedsApiV20200904;
use Glue\SPAPI\OpenAPI\Clients\FeedsV20200904\Configuration as FeedsV20200904Config;
use Glue\SPAPI\OpenAPI\Clients\FeedsV20210630\Api\FeedsApi as FeedsApiV20210630;
use Glue\SPAPI\OpenAPI\Clients\FeedsV20210630\Configuration as FeedsV20210630Config;
use Glue\SPAPI\OpenAPI\Clients\ListingsItems\Configuration as ListingsItemsConfig;
use Glue\SPAPI\OpenAPI\Clients\OrdersV0\Api\ShipmentApi;
use Glue\SPAPI\OpenAPI\Clients\OrdersV0\Configuration as OrdersV0Config;
use Glue\SPAPI\OpenAPI\Clients\ReportsV20200904\Api\ReportsApi as ReportsApiV20200904;
use Glue\SPAPI\OpenAPI\Clients\ReportsV20200904\Configuration as ReportsV20200904Config;
use Glue\SPAPI\OpenAPI\Clients\ReportsV20210630\Api\ReportsApi as ReportsApiV20210630;
use Glue\SPAPI\OpenAPI\Clients\ReportsV20210630\Configuration as ReportsV20210630Config;
use Glue\SPAPI\OpenAPI\Clients\SupplySources\Configuration as SupplySourcesConfig;
use Glue\SPAPI\OpenAPI\Clients\TokensV20210301\Api\TokensApi as TokensApiV20210301;
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
     * @return SupplySourcesApi
     */
    public function createSupplySourcesApiClient()
    {
        return new SupplySourcesApi(
            $this->authenticator->createAuthenticatedGuzzleClient(),
            $this->_setUpClientConfig(new SupplySourcesConfig())
        );
    }

    /**
     * @return ListingsApi
     */
    public function createListingsItemsApiClient()
    {
        return new ListingsApi(
            $this->authenticator->createAuthenticatedGuzzleClient(),
            $this->_setUpClientConfig(new ListingsItemsConfig())
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
     * @return ShipmentApi
     */
    public function createShipmentApiClient()
    {
        // ShipmentAPi does not have its own Configuration class,
        // as it originats the same models/ordersV0.json spec.
        return new ShipmentApi(
            $this->authenticator->createAuthenticatedGuzzleClient(),
            $this->_setUpClientConfig(new OrdersV0Config())
        );
    }

    /**
     * @return DefinitionsApi
     */
    public function createDefinitionsProductTypesApiClient()
    {
        return new DefinitionsApi(
            $this->authenticator->createAuthenticatedGuzzleClient(),
            $this->_setUpClientConfig(new DefinitionsProductTypesConfig())
        );
    }

    /**
     * @return TokensApiV20210301
     */
    public function createTokensApiV20210301Client()
    {
        return new TokensApiV20210301(
            $this->authenticator->createAuthenticatedGuzzleClient(),
            $this->_setUpClientConfig(new TokensV20210301Config())
        );
    }

    /**
     * @return FeedsApiV20200904
     */
    public function createFeedsApiV20200904Client()
    {
        return new FeedsApiV20200904(
            $this->authenticator->createAuthenticatedGuzzleClient(),
            $this->_setUpClientConfig(new FeedsV20200904Config())
        );
    }

    /**
     * @return FeedsApiV20210630
     */
    public function createFeedsApiV20210630Client()
    {
        return new FeedsApiV20210630(
            $this->authenticator->createAuthenticatedGuzzleClient(),
            $this->_setUpClientConfig(new FeedsV20210630Config())
        );
    }

    /**
     * @return ReportsApiV20200904
     */
    public function createReportsApiV20200904Client()
    {
        return new ReportsApiV20200904(
            $this->authenticator->createAuthenticatedGuzzleClient(),
            $this->_setUpClientConfig(new ReportsV20200904Config())
        );
    }

    /**
     * @return ReportsApiV20210630
     */
    public function createReportsApiV20210630Client()
    {
        return new ReportsApiV20210630(
            $this->authenticator->createAuthenticatedGuzzleClient(),
            $this->_setUpClientConfig(new ReportsV20210630Config())
        );
    }

    /**
     * @param  ListingsItemsConfig|OrdersV0Config|SupplySourcesConfig|DefinitionsProductTypesConfig|TokensV20210301Config|FeedsV20200904Config|FeedsV20210630Config|ReportsV20200904Config|ReportsV20210630Config  $clientConfig
     * @return ListingsItemsConfig|OrdersV0Config|SupplySourcesConfig|DefinitionsProductTypesConfig|TokensV20210301Config|FeedsV20200904Config|FeedsV20210630Config|ReportsV20200904Config|ReportsV20210630Config
     */
    protected function _setUpClientConfig($clientConfig)
    {
        $clientConfig->setUserAgent($this->config->userAgent());

        $clientConfig->setHost($this->config->spApiBaseUrl);

        return $clientConfig;
    }
}
