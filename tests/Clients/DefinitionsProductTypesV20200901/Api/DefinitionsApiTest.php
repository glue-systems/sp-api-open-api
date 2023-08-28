<?php

namespace Tests\Clients\DefinitionsProductTypesV20200901\Api;

use Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\Model\ProductTypeDefinition;
use Tests\TestCase;

class DefinitionsApiTest extends TestCase
{
    // TODO: This will need to be changed to `public function setUp(): void` after upgrading.
    public function setUp()
    {
        parent::setup();
    }

    public function test_getDefinitionsProductType()
    {
        $result = $this->sp_api()->execute(function () {
            return $this->sp_api()->definitionsProductTypesV20200901()
                ->getDefinitionsProductTypeWithHttpInfo(
                    'testProductType123',
                    [$this->sp_api()->getSpApiConfig()->defaultMarketplaceId]
                );
        });

        /**
         * @var ProductTypeDefinition $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(ProductTypeDefinition::class, $response);
        $this->assertNotEmpty($response->getProductType());
    }
}
