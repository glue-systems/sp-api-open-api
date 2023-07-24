<?php

namespace Glue\SPAPI\OpenAPI\Services\Factory;

use Glue\SPAPI\OpenAPI\Clients\DefinitionsProductTypes\Api\DefinitionsApi;
use Glue\SPAPI\OpenAPI\Clients\ListingsItems\Api\ListingsApi;
use Glue\SPAPI\OpenAPI\Clients\OrdersV0\Api\OrdersV0Api;
use Glue\SPAPI\OpenAPI\Clients\SupplySources\Api\SupplySourcesApi;
use Glue\SPAPI\OpenAPI\Clients\DefinitionsProductTypes\Configuration as DefinitionsProductTypesConfig;
use Glue\SPAPI\OpenAPI\Clients\ListingsItems\Configuration as ListingsItemsConfig;
use Glue\SPAPI\OpenAPI\Clients\OrdersV0\Configuration as OrdersV0Config;
use Glue\SPAPI\OpenAPI\Clients\SupplySources\Configuration as SupplySourcesConfig;
use Glue\SPAPI\OpenAPI\Services\Authenticator\ClientAuthenticatorContract;
use Glue\SPAPI\OpenAPI\Services\SPAPIConfig;

class ClientFactory implements ClientFactoryContract
{
    /**
     * @var SPAPIConfig
     */
    protected $config;

    /**
     * @var ClientAuthenticatorContract
     */
    protected $authenticator;

    public function __construct(
        SPAPIConfig $config,
        ClientAuthenticatorContract $authenticator
    ) {
        $this->config        = $config;
        $this->authenticator = $authenticator;
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
     * @param  ListingsItemsConfig|OrdersV0Config|SupplySourcesConfig|DefinitionsProductTypesConfig  $clientConfig
     * @return ListingsItemsConfig|OrdersV0Config|SupplySourcesConfig|DefinitionsProductTypesConfig
     */
    protected function _setUpClientConfig($clientConfig)
    {
        $clientConfig->setUserAgent($this->config->userAgent());

        $clientConfig->setHost($this->config->apiBaseUrl);

        return $clientConfig;
    }
}
