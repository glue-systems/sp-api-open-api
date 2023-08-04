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
use Glue\SPAPI\OpenAPI\Services\Authenticator\ClientAuthenticator;
use Glue\SPAPI\OpenAPI\Services\Builder\ClientBuilder;
use Glue\SPAPI\OpenAPI\Services\Factory\ClientFactory;
use Glue\SPAPI\OpenAPI\Services\SPAPIConfig;
// TODO: Switch to this after upgrading.
// use PHPUnit\Framework\TestCase as BaseTestCase;
use \PHPUnit_Framework_TestCase as BaseTestCase;
use Tests\Helpers\ArrayCache;

class TestCase extends BaseTestCase
{
    /**
     * @var ArrayCache
     */
    public static $arrayCache;

    // TODO: This will need to be changed to `public function setUp(): void` after upgrading.
    public function setUp()
    {
        if (!self::$arrayCache instanceof ArrayCache) {
            self::$arrayCache = new ArrayCache();
        }

        $this->loadEnv();

        require_once(__DIR__ . '/Helpers/functions.php');
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
     * @return ClientFactory
     */
    public function buildClientFactory()
    {
        $spApiConfig = SPAPIConfig::make([
            'spApiBaseUrl'          => env('SP_API_BASE_URL', 'https://sandbox.sellingpartnerapi-na.amazon.com'),
            'marketplaceId'         => env('MARKETPLACE_ID'),
            'sellerId'              => env('SELLER_ID'),
            'lwaOAuthBaseUrl'       => env('LWA_O_AUTH_BASE_URL', 'https://api.amazon.com'),
            'lwaRefreshToken'       => env('LWA_REFRESH_TOKEN'),
            'lwaClientId'           => env('LWA_CLIENT_ID'),
            'lwaClientSecret'       => env('LWA_CLIENT_SECRET'),
            'appNameAndVersion'     => env('APP_NAME_AND_VERSION', 'GLUE_TEST/0.0.1'),
            'appLanguageAndVersion' => env('APP_LANGUAGE_AND_VERSION', 'PHP/7.2'),
            // SANDBOX env is also set to true in phpunit.xml.
            'sandbox'               => true,
            'debugDomainApiCall'    => env('DEBUG_DOMAIN_API_CALL', false),
            'debugOAuthApiCall'     => env('DEBUG_O_AUTH_API_CALL', false),
        ]);

        if (env('TESTING_ALWAYS_RESET_ARRAY_CACHE', false)) {
            self::$arrayCache = new ArrayCache();
        }
        $credentialProvider  = $this->buildDotEnvCredentialProvider();
        $clientAuthenticator = new ClientAuthenticator(self::$arrayCache, $credentialProvider, $spApiConfig);
        $clientBuilder       = new ClientBuilder($clientAuthenticator, $spApiConfig);
        $clientFactory       = new ClientFactory($clientBuilder, $spApiConfig);

        return $clientFactory;
    }

    /**
     * @return callable
     */
    public function buildDotEnvCredentialProvider()
    {
        $credentials = new Credentials(
            env('AWS_ACCESS_KEY_ID'),
            env('AWS_SECRET_ACCESS_KEY')
        );

        return CredentialProvider::fromCredentials($credentials);
    }
}
