<?php

namespace Tests\Clients\AuthorizationV1\Api;

use Glue\SpApi\OpenAPI\Container\SpApi;
use Tests\TestCase;

class AuthorizationApiTest extends TestCase
{
    /**
     * @var SpApi
     */
    public $spApi;

    // TODO: This will need to be changed to `public function setUp(): void` after upgrading.
    public function setUp()
    {
        parent::setup();
        $this->spApi = $this->buildSpApiContainer();
    }

    public function test_getAuthorizationCode()
    {
        $this->markTestSkipped('Documentation is unclear on how Authorization API v1 can be tested in the Sandbox.');
    }
}
