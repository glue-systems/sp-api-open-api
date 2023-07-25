<?php

namespace Tests\Clients\ListingsItems\Api;

use Glue\SPAPI\OpenAPI\Clients\ListingsItems\Model\ListingsItemPatchRequest;
use Glue\SPAPI\OpenAPI\Clients\ListingsItems\Model\ListingsItemPutRequest;
use Glue\SPAPI\OpenAPI\Clients\ListingsItems\Model\ListingsItemSubmissionResponse;
use Glue\SPAPI\OpenAPI\Clients\ListingsItems\Model\PatchOperation;
use Glue\SPAPI\OpenAPI\Services\Factory\ClientFactory;
use Tests\TestCase;

class ListingsApiTest extends TestCase
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

    public function test_deleteListingsItem()
    {
        $listingsApi = $this->clientFactory->createListingsItemsApiClient();

        $result = $listingsApi->deleteListingsItemWithHttpInfo(
            $this->clientFactory->getConfig()->sellerId,
            'TESTSKU123',
            [$this->clientFactory->getConfig()->marketplaceId]
        );

        $this->_assertSubmissionResponseMatchesStandardExpectations($result);
    }

    public function test_patchListingsItem()
    {
        $listingsApi = $this->clientFactory->createListingsItemsApiClient();

        $request = new ListingsItemPatchRequest([
            'product_type' => 'PRODUCT',
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
            $this->clientFactory->getConfig()->sellerId,
            'TESTSKU123',
            [$this->clientFactory->getConfig()->marketplaceId],
            $request
        );

        $this->_assertSubmissionResponseMatchesStandardExpectations($result);
    }

    public function test_putListingsItem()
    {
        $listingsApi = $this->clientFactory->createListingsItemsApiClient();

        $request = new ListingsItemPutRequest([
            'product_type' => 'PRODUCT',
            'requirements' => 'foo',
            'attributes'   => [
                'foo'  => 'bar',
                'fizz' => 'buzz',
            ],
        ]);

        $result = $listingsApi->putListingsItemWithHttpInfo(
            $this->clientFactory->getConfig()->sellerId,
            'TESTSKU123',
            [$this->clientFactory->getConfig()->marketplaceId],
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
