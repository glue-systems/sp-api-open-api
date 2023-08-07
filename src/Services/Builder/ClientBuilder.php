<?php

namespace Glue\SpApi\OpenAPI\Services\Builder;

use Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\Api\DefinitionsApi as DefinitionsProductTypesV20200901Api;
use Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\Configuration as DefinitionsProductTypesV20200901Config;
use Glue\SpApi\OpenAPI\Clients\FeedsV20200904\Api\FeedsApi as FeedsV20200904Api;
use Glue\SpApi\OpenAPI\Clients\FeedsV20200904\Configuration as FeedsV20200904Config;
use Glue\SpApi\OpenAPI\Clients\FeedsV20210630\Api\FeedsApi as FeedsV20210630Api;
use Glue\SpApi\OpenAPI\Clients\FeedsV20210630\Configuration as FeedsV20210630Config;
use Glue\SpApi\OpenAPI\Clients\ListingsItemsV20200901\Api\ListingsApi as ListingsItemsV20200901Api;
use Glue\SpApi\OpenAPI\Clients\ListingsItemsV20200901\Configuration as ListingsItemsV20200901Config;
use Glue\SpApi\OpenAPI\Clients\OrdersV0\Api\OrdersV0Api;
use Glue\SpApi\OpenAPI\Clients\OrdersV0\Api\ShipmentApi as OrdersV0ShipmentApi;
use Glue\SpApi\OpenAPI\Clients\OrdersV0\Configuration as OrdersV0Config;
use Glue\SpApi\OpenAPI\Clients\ReportsV20200904\Api\ReportsApi as ReportsV20200904Api;
use Glue\SpApi\OpenAPI\Clients\ReportsV20200904\Configuration as ReportsV20200904Config;
use Glue\SpApi\OpenAPI\Clients\ReportsV20210630\Api\ReportsApi as ReportsV20210630Api;
use Glue\SpApi\OpenAPI\Clients\ReportsV20210630\Configuration as ReportsV20210630Config;
use Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Api\SupplySourcesApi as SupplySourcesV20200701Api;
use Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Configuration as SupplySourcesV20200701Config;
use Glue\SpApi\OpenAPI\Clients\TokensV20210301\Api\TokensApi as TokensV20210301Api;
use Glue\SpApi\OpenAPI\Clients\TokensV20210301\Configuration as TokensV20210301Config;
use Glue\SpApi\OpenAPI\Exceptions\ClientBuilderException;
use Glue\SpApi\OpenAPI\Services\Authenticator\ClientAuthenticatorContract;
use Glue\SpApi\OpenAPI\Services\SpApiConfig;

class ClientBuilder implements ClientBuilderContract
{
    const API_TO_CONFIG_FQN_MAPS = [
        SupplySourcesV20200701Api::class           => SupplySourcesV20200701Config::class,
        ListingsItemsV20200901Api::class           => ListingsItemsV20200901Config::class,
        OrdersV0Api::class                         => OrdersV0Config::class,
        OrdersV0ShipmentApi::class                 => OrdersV0Config::class,
        DefinitionsProductTypesV20200901Api::class => DefinitionsProductTypesV20200901Config::class,
        TokensV20210301Api::class                  => TokensV20210301Config::class,
        FeedsV20200904Api::class                   => FeedsV20200904Config::class,
        FeedsV20210630Api::class                   => FeedsV20210630Config::class,
        ReportsV20200904Api::class                 => ReportsV20200904Config::class,
        ReportsV20210630Api::class                 => ReportsV20210630Config::class,
    ];

    /**
     * @var ClientAuthenticatorContract
     */
    protected $authenticator;

    /**
     * @var SpApiConfig
     */
    protected $spApiConfig;

    /**
     * @var string
     */
    protected $apiClassFqn;

    /**
     * @var ListingsItemsV20200901Config|OrdersV0Config|SupplySourcesV20200701Config|DefinitionsProductTypesV20200901Config|TokensV20210301Config|FeedsV20200904Config|FeedsV20210630Config|ReportsV20200904Config|ReportsV20210630Config
     */
    protected $domainConfig;

    /**
     * Provider callback for retrieving a Restricted Data Token (RDT),
     * if applicable to the target API.
     *
     * @var callable|null
     */
    protected $rdtProvider = null;

    public function __construct(
        ClientAuthenticatorContract $authenticator,
        SpApiConfig $spApiConfig
    ) {
        $this->authenticator = $authenticator;
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
     * Set the target API by fully-qualified class name.
     *
     * @param string $apiClassFqn Fully qualified class name of the target API
     * @return static
     */
    public function forApi($apiClassFqn)
    {
        if (!array_key_exists($apiClassFqn, self::API_TO_CONFIG_FQN_MAPS)) {
            throw new ClientBuilderException("Invalid API class FQN [{$apiClassFqn}]: Must be"
                . " one of: " . implode(', ', array_keys(self::API_TO_CONFIG_FQN_MAPS)) . ".");
        }
        $domainConfigClassFqn = self::API_TO_CONFIG_FQN_MAPS[$apiClassFqn];

        $this->apiClassFqn  = $apiClassFqn;
        $this->domainConfig = new $domainConfigClassFqn();

        return $this;
    }

    /**
     * Set the Configuration object specific to the target API.
     *
     * @param null|ListingsItemsV20200901Config|OrdersV0Config|SupplySourcesV20200701Config|DefinitionsProductTypesV20200901Config|TokensV20210301Config|FeedsV20200904Config|FeedsV20210630Config|ReportsV20200904Config|ReportsV20210630Config $domainConfig
     * @return static
     */
    public function withConfig($domainConfig = null)
    {
        if (!isset($this->apiClassFqn)) {
            throw new ClientBuilderException("Method 'withConfig' cannot be called"
                . " before the target API has been set via the 'forApi' method.");
        }

        if (is_null($domainConfig)) {
            return $this;
        }

        $expectedConfigClass = self::API_TO_CONFIG_FQN_MAPS[$this->apiClassFqn];
        if (!$domainConfig instanceof $expectedConfigClass) {
            throw new ClientBuilderException("Invalid configuartion class [" . get_class($domainConfig) . "]"
                . " for API [{$this->apiClassFqn}]: Expected instance of [{$expectedConfigClass}].");
        }

        $this->domainConfig = $domainConfig;
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
     * Create the API client according to the values set up in this builder instance.
     *
     * @return SupplySourcesV20200701Api|ListingsItemsV20200901Api|OrdersV0Api|OrdersV0ShipmentApi|DefinitionsProductTypesV20200901Api|TokensV20210301Api|FeedsV20200904Api|FeedsV20210630Api|ReportsV20200904Api|ReportsV20210630Api
     */
    public function createClient()
    {
        $this->_validateReadyToCreate();

        if ($this->rdtProvider) {
            $restrictedDataToken = call_user_func($this->rdtProvider);
        } else {
            $restrictedDataToken = null;
        }

        $apiClassFqn = $this->apiClassFqn;

        return new $apiClassFqn(
            $this->authenticator->createAuthenticatedGuzzleClient($restrictedDataToken),
            $this->_setUpClientConfig($this->domainConfig)
        );
    }

    /**
     * @param  ListingsItemsV20200901Config|OrdersV0Config|SupplySourcesV20200701Config|DefinitionsProductTypesV20200901Config|TokensV20210301Config|FeedsV20200904Config|FeedsV20210630Config|ReportsV20200904Config|ReportsV20210630Config  $clientConfig
     * @return ListingsItemsV20200901Config|OrdersV0Config|SupplySourcesV20200701Config|DefinitionsProductTypesV20200901Config|TokensV20210301Config|FeedsV20200904Config|FeedsV20210630Config|ReportsV20200904Config|ReportsV20210630Config
     */
    protected function _setUpClientConfig($clientConfig)
    {
        $clientConfig->setUserAgent($this->spApiConfig->userAgent());

        $clientConfig->setHost($this->spApiConfig->spApiBaseUrl);

        return $clientConfig;
    }

    protected function _validateReadyToCreate()
    {
        if (!isset($this->apiClassFqn)) {
            throw new ClientBuilderException("Builder not ready to create: Target API has not yet been set.");
        }
        if (!isset($this->domainConfig)) {
            throw new ClientBuilderException("Builder not ready to create: Domain config has not yet been set.");
        }
    }
}
