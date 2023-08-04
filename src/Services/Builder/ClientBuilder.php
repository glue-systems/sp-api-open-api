<?php

namespace Glue\SPAPI\OpenAPI\Services\Builder;

use Glue\SPAPI\OpenAPI\Clients\DefinitionsProductTypesV20200901\Api\DefinitionsApi as DefinitionsProductTypesV20200901Api;
use Glue\SPAPI\OpenAPI\Clients\DefinitionsProductTypesV20200901\Configuration as DefinitionsProductTypesV20200901Config;
use Glue\SPAPI\OpenAPI\Clients\FeedsV20200904\Api\FeedsApi as FeedsV20200904Api;
use Glue\SPAPI\OpenAPI\Clients\FeedsV20200904\Configuration as FeedsV20200904Config;
use Glue\SPAPI\OpenAPI\Clients\FeedsV20210630\Api\FeedsApi as FeedsV20210630Api;
use Glue\SPAPI\OpenAPI\Clients\FeedsV20210630\Configuration as FeedsV20210630Config;
use Glue\SPAPI\OpenAPI\Clients\ListingsItemsV20200901\Api\ListingsApi as ListingsItemsV20200901Api;
use Glue\SPAPI\OpenAPI\Clients\ListingsItemsV20200901\Configuration as ListingsItemsV20200901Config;
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

class ClientBuilder implements ClientBuilderContract
{
    const API_FQN_TO_CONFIG_FQN_MAPS = [
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
     * @var SPAPIConfig
     */
    protected $config;

    /**
     * @var string
     */
    protected $domainApiClassFqn;

    /**
     * @var ListingsItemsV20200901Config|OrdersV0Config|SupplySourcesV20200701Config|DefinitionsProductTypesV20200901Config|TokensV20210301Config|FeedsV20200904Config|FeedsV20210630Config|ReportsV20200904Config|ReportsV20210630Config
     */
    protected $domainConfigObject;

    /**
     * @var callable|null
     */
    protected $rdtProvider = null;

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
     * @param string $domainApiClassFqn Fully qualified class name of the target domain API
     * @return static
     */
    public function forDomainApi($domainApiClassFqn)
    {
        if (!array_key_exists($domainApiClassFqn, self::API_FQN_TO_CONFIG_FQN_MAPS)) {
            throw new \RuntimeException("Invalid domain API class FQN [{$domainApiClassFqn}]: Must be"
                . " one of: " . implode(', ', array_keys(self::API_FQN_TO_CONFIG_FQN_MAPS)) . ".");
        }
        $domainConfigClassFqn = self::API_FQN_TO_CONFIG_FQN_MAPS[$domainApiClassFqn];

        $this->domainApiClassFqn  = $domainApiClassFqn;
        $this->domainConfigObject = new $domainConfigClassFqn();

        return $this;
    }

    /**
     * @param null|ListingsItemsV20200901Config|OrdersV0Config|SupplySourcesV20200701Config|DefinitionsProductTypesV20200901Config|TokensV20210301Config|FeedsV20200904Config|FeedsV20210630Config|ReportsV20200904Config|ReportsV20210630Config $domainConfigObject
     * @return static
     */
    public function withConfig($domainConfigObject = null)
    {
        if (!isset($this->domainApiClassFqn)) {
            throw new \RuntimeException("Method 'withConfig' cannot be called before the target domain API has been set.");
        }

        if (is_null($domainConfigObject)) {
            return $this;
        }

        $expectedConfigClass = self::API_FQN_TO_CONFIG_FQN_MAPS[$this->domainApiClassFqn];
        if (!$domainConfigObject instanceof $expectedConfigClass) {
            throw new \RuntimeException("Invalid configuartion class [" . get_class($domainConfigObject) . "]"
                . " for domain API [{$this->domainApiClassFqn}]: Expected instance of [{$expectedConfigClass}].");
        }

        $this->domainConfigObject = $domainConfigObject;
        return $this;
    }

    /**
     * @return static
     */
    public function withRdtProvider(callable $rdtProvider = null)
    {
        $this->rdtProvider = $rdtProvider;
        return $this;
    }

    /**
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

        $domainApiClassFqn = $this->domainApiClassFqn;

        return new $domainApiClassFqn(
            $this->authenticator->createAuthenticatedGuzzleClient($restrictedDataToken),
            $this->_setUpClientConfig($this->domainConfigObject)
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

    protected function _validateReadyToCreate()
    {
        if (!isset($this->domainApiClassFqn)) {
            throw new \RuntimeException("Builder not ready to create: Target domain API has not yet been set.");
        }
        if (!isset($this->domainConfigObject)) {
            throw new \RuntimeException("Builder not ready to create: Domain configuration object has not yet been set.");
        }
    }
}
