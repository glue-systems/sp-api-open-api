<?php

namespace Tests;

use Aws\Credentials\CredentialProvider;
use Aws\Credentials\Credentials;
use Dotenv\Dotenv;
use Dotenv\Environment\Adapter\EnvConstAdapter;
use Dotenv\Environment\Adapter\PutenvAdapter;
use Dotenv\Environment\Adapter\ServerConstAdapter;
use Dotenv\Environment\DotenvFactory;
use Dotenv\Exception\InvalidFileException;
use Glue\SpApi\OpenAPI\Configuration\SpApiConfig;
use Glue\SpApi\OpenAPI\SpApi;
use Glue\SpApi\OpenAPI\Exceptions\DomainApiException;
use Glue\SpApi\OpenAPI\Services\Authenticator\ClientAuthenticator;
use Glue\SpApi\OpenAPI\Services\Factory\ClientFactory;
use Glue\SpApi\OpenAPI\Services\Lwa\LwaClient;
use Glue\SpApi\OpenAPI\Services\Lwa\LwaService;
use Glue\SpApi\OpenAPI\Services\Rdt\RdtService;
use Glue\SpApi\OpenAPI\Utilities\SpApiRoster;
use Mockery;
use PHPUnit_Framework_SkippedTestError;
// TODO: Switch to this after upgrading.
// use PHPUnit\Framework\TestCase as BaseTestCase;
use \PHPUnit_Framework_TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    /**
     * @var ArrayCache
     */
    public static $arrayCache;

    // TODO: This will need to be changed to `public function setUp(): void` after upgrading phpunit.
    public function setUp()
    {
        $this->loadEnv();

        require_once(__DIR__ . '/functions.php');

        // Allows for persistence of array cache to improve test performance,
        // e.g. by caching the LWA token to minimize OAuth requests. If this
        // is not desireable, see implementation of tearDown method below.
        if (!static::$arrayCache instanceof ArrayCache) {
            static::$arrayCache = new ArrayCache();
        }
    }

    public function loadEnv()
    {
        try {
            $dotEnv = Dotenv::create(
                __DIR__ . '/..',
                null,
                new DotenvFactory([new EnvConstAdapter, new PutenvAdapter, new ServerConstAdapter])
            );
            $dotEnv->safeLoad();
        } catch (InvalidFileException $ex) {
            throw new \RuntimeException("The environment file is invalid: " . $ex->getMessage(), 0, $ex);
        }
    }

    /**
     * Create a new SpApi execution instance.
     *
     * @return SpApi
     */
    public function sp_api()
    {
        $awsCredentials = new Credentials(
            env('AWS_ACCESS_KEY_ID'),
            env('AWS_SECRET_ACCESS_KEY')
        );

        // All of the below should be safe to bind as singletons to an IoC container.
        $spApiConfig            = $this->buildSpApiConfig();
        $awsCredentialProvider  = CredentialProvider::fromCredentials($awsCredentials);
        $lwaClient              = new LwaClient($spApiConfig);
        $lwaService             = new LwaService($lwaClient, static::$arrayCache, $spApiConfig);
        $clientAuthenticator    = new ClientAuthenticator($lwaService, $awsCredentialProvider, $spApiConfig);
        $clientFactory          = new ClientFactory($clientAuthenticator, $spApiConfig);
        $rdtService             = new RdtService($clientFactory);
        // ^^^^^^^^^^^^^^^^ END of singleton-safe dependencies ^^^^^^^^^^^^^^^^

        // This should always be new'ed up on every use -- i.e. should never be used as a singleton.
        // This is because this wrapper class has state (e.g. rdtRequest) that is intended to be
        // short-lived for the purpose of a single SP-API call.
        return new SpApi(
            $clientFactory,
            $rdtService,
            $lwaService,
            $spApiConfig
        );
    }

    /**
     * @return SpApiConfig
     */
    public function buildSpApiConfig()
    {
        return SpApiConfig::make([
            'defaultBaseUrl'                       => env('DEFAULT_BASE_URL', 'https://sandbox.sellingpartnerapi-na.amazon.com'),
            'defaultMarketplaceId'                 => env('DEFAULT_MARKETPLACE_ID'),
            'defaultSellerId'                      => env('DEFAULT_SELLER_ID'),
            'defaultAwsCredentialScopeRegion'      => env('DEFAULT_AWS_CREDENTIAL_SCOPE_REGION', 'us-east-1'),
            'defaultAwsCredentialScopeService'     => env('DEFAULT_AWS_CREDENTIAL_SCOPE_SERVICE', 'execute-api'),
            'lwaOAuthBaseUrl'                      => env('LWA_O_AUTH_BASE_URL', 'https://api.amazon.com'),
            'lwaRefreshToken'                      => env('LWA_REFRESH_TOKEN'),
            'lwaClientId'                          => env('LWA_CLIENT_ID'),
            'lwaClientSecret'                      => env('LWA_CLIENT_SECRET'),
            'lwaAccessTokenCacheKey'               => env('LWA_CLIENT_SECRET', 'lwa_access_token'),
            'appNameAndVersion'                    => env('APP_NAME_AND_VERSION', 'GLUE_TEST/0.0.1'),
            'appLanguageAndVersion'                => env('APP_LANGUAGE_AND_VERSION', 'PHP/7.2'),
            // SANDBOX env is also set to true in phpunit.xml.
            'sandbox'                              => true,
            'domainApiCallDebug'                   => env('DOMAIN_API_CALL_DEBUG', false),
            'oAuthApiCallDebug'                    => env('O_AUTH_API_CALL_DEBUG', false),
            'alwaysUnpackApiExceptionResponseBody' => env('ALWAYS_UNPACK_API_EXCEPTION_RESPONSE_BODY', true),
        ]);
    }

    /**
     * @return string
     */
    public function getOutputDirectoryPath()
    {
        return __DIR__ . '/../output';
    }

    /**
     * @param callable $callback
     * @return mixed
     * @throws PHPUnit_Framework_SkippedTestError
     */
    public function tryButSkipIfUnauthorized(callable $callback)
    {
        try {
            return $callback();
        } catch (\Exception $ex) {
            if ($ex instanceof DomainApiException || SpApiRoster::isApiException($ex)) {
                if ($ex->getCode() === 403) {
                    $this->markTestSkipped('[403] Unauthorized, possibly due to Developer Account settings on Seller Central.');
                }
            }
            throw $ex;
        }
    }

    public function tearDown()
    {
        if (env('TESTING_ALWAYS_RESET_ARRAY_CACHE', false)) {
            static::$arrayCache = null;
        }

        if (class_exists('Mockery')) {
            Mockery::close();
        }

        parent::tearDown();
    }
}
