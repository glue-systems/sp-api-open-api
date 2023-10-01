<?php

namespace Tests\Clients\DefinitionsProductTypesV20200901\Api;

use Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\Api\DefinitionsApi;
use Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\Model\ProductTypeDefinition;
use Tests\TestCase;

class DefinitionsApiTest extends TestCase
{
    public function test_getDefinitionsProductType()
    {
        $result = $this->tryButSkipIfUnauthorized(function () {
            return $this->sp_api()
                ->execute(function (DefinitionsApi $definitionsApi) {
                    return $definitionsApi->getDefinitionsProductTypeWithHttpInfo(
                        'testProductType123',
                        [$this->sp_api()->getSpApiConfig()->defaultMarketplaceId]
                    );
                });
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
