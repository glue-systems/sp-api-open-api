<?php

namespace Tests\Clients\ListingsItemsV20210801\Api;

use Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Model\ListingsItemPatchRequest;
use Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Model\ListingsItemPutRequest;
use Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Model\ListingsItemSubmissionResponse;
use Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Model\PatchOperation;
use Glue\SpApi\OpenAPI\Container\SpApi;
use Tests\TestCase;

class ListingsApiTest extends TestCase
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

    public function test_deleteListingsItem()
    {
        $listingsApi = $this->spApi->listingsItemsV20210801();

        $result = $listingsApi->deleteListingsItemWithHttpInfo(
            $this->spApi->getSpApiConfig()->sellerId,
            'TESTSKU123',
            [$this->spApi->getSpApiConfig()->marketplaceId]
        );

        $this->_assertSubmissionResponseMatchesStandardExpectations($result);
    }

    public function test_patchListingsItem()
    {
        $listingsApi = $this->spApi->listingsItemsV20210801();

        $request = new ListingsItemPatchRequest([
            'productType'  => 'PRODUCT',
            'patches'      => [
                new PatchOperation([
                    'op'    => 'replace',
                    'path'  => '/attributes/fulfillment_availability',
                    'value' => [
                        [
                            'fulfillment_channel_code' => 'supply_source_xyz',
                            'quantity'                 => 5,
                        ],
                    ],
                ]),
            ],
        ]);

        $result = $listingsApi->patchListingsItemWithHttpInfo(
            $this->spApi->getSpApiConfig()->sellerId,
            'TESTSKU123',
            [$this->spApi->getSpApiConfig()->marketplaceId],
            $request
        );

        $this->_assertSubmissionResponseMatchesStandardExpectations($result);
    }

    public function test_putListingsItem()
    {
        $listingsApi = $this->spApi->listingsItemsV20210801();

        $request = new ListingsItemPutRequest([
            'productType'  => 'PRODUCT',
            'requirements' => 'foo',
            'attributes'   => [
                'foo'  => 'bar',
                'fizz' => 'buzz',
            ],
        ]);

        $result = $listingsApi->putListingsItemWithHttpInfo(
            $this->spApi->getSpApiConfig()->sellerId,
            'TESTSKU123',
            [$this->spApi->getSpApiConfig()->marketplaceId],
            $request
        );

        $this->_assertSubmissionResponseMatchesStandardExpectations($result);
    }

    /**
     * @param ListingsItemSubmissionResponse|mixed $result
     * @return void
     */
    protected function _assertSubmissionResponseMatchesStandardExpectations($result)
    {
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(ListingsItemSubmissionResponse::class, $response);
        $this->assertNotEmpty($response->getSubmissionId());
    }
}
