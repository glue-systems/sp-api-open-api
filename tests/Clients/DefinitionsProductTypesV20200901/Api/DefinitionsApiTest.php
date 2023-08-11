<?php

namespace Tests\Clients\DefinitionsProductTypesV20200901\Api;

use Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\Model\ProductTypeDefinition;
use Glue\SpApi\OpenAPI\Container\SpApi;
use Tests\TestCase;

class DefinitionsApiTest extends TestCase
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

    public function test_getDefinitionsProductType()
    {
        $result = $this->spApi->execute(function () {
            return $this->spApi->definitionsProductTypesV20200901()
                ->getDefinitionsProductTypeWithHttpInfo(
                    'testProductType123',
                    [$this->spApi->getSpApiConfig()->marketplaceId]
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
