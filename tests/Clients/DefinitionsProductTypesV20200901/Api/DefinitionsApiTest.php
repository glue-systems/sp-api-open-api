<?php

namespace Tests\Clients\DefinitionsProductTypesV20200901\Api;

use Glue\SPAPI\OpenAPI\Clients\DefinitionsProductTypesV20200901\Model\ProductTypeDefinition;
use Glue\SPAPI\OpenAPI\Services\Factory\ClientFactory;
use Tests\TestCase;

class DefinitionsApiTest extends TestCase
{
    /**
     * @var ClientFactory
     */
    public $clientFactory;

    // TODO: This will need to be changed to `public function setUp(): void` after upgrading.
    public function setUp()
    {
        parent::setup();
        $this->clientFactory = $this->buildClientFactory();
    }

    public function test_getDefinitionsProductType()
    {
        $definitionsApi  = $this->clientFactory->createDefinitionsProductTypesV20200901ApiClient();

        $result = $definitionsApi->getDefinitionsProductTypeWithHttpInfo(
            'testProductType123',
            [$this->clientFactory->getConfig()->marketplaceId]
        );

        /**
         * @var ProductTypeDefinition $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(ProductTypeDefinition::class, $response);
        $this->assertNotEmpty($response->getProductType());
    }
}
