<?php

namespace Tests\Clients\ListingsItemsV20210801\Api;

use Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Api\ListingsApi;
use Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Model\ListingsItemPatchRequest;
use Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Model\ListingsItemPutRequest;
use Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Model\ListingsItemSubmissionResponse;
use Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Model\PatchOperation;
use Tests\TestCase;

class ListingsApiTest extends TestCase
{
    public function test_deleteListingsItem()
    {
        $result = $this->sp_api()->listingsItemsV20210801(function (ListingsApi $listingsApi) {
            return $listingsApi->deleteListingsItemWithHttpInfo(
                $this->sp_api()->getSpApiConfig()->defaultSellerId,
                'TESTSKU123',
                [$this->sp_api()->getSpApiConfig()->defaultMarketplaceId]
            );
        });

        $this->_assertSubmissionResponseMatchesStandardExpectations($result);
    }

    public function test_patchListingsItem()
    {
        $result = $this->sp_api()->listingsItemsV20210801(function (ListingsApi $listingsApi) {
            return $listingsApi->patchListingsItemWithHttpInfo(
                $this->sp_api()->getSpApiConfig()->defaultSellerId,
                'TESTSKU123',
                [$this->sp_api()->getSpApiConfig()->defaultMarketplaceId],
                new ListingsItemPatchRequest([
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
                ])
            );
        });

        $this->_assertSubmissionResponseMatchesStandardExpectations($result);
    }

    public function test_putListingsItem()
    {
        $result = $this->sp_api()->listingsItemsV20210801(function (ListingsApi $listingsApi) {
            return $listingsApi->putListingsItemWithHttpInfo(
                $this->sp_api()->getSpApiConfig()->defaultSellerId,
                'TESTSKU123',
                [$this->sp_api()->getSpApiConfig()->defaultMarketplaceId],
                new ListingsItemPutRequest([
                    'productType'  => 'PRODUCT',
                    'requirements' => 'foo',
                    'attributes'   => [
                        'foo'  => 'bar',
                        'fizz' => 'buzz',
                    ],
                ])
            );
        });

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
