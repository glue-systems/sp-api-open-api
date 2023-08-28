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
        $result = $this->spApi->execute(function () {
            return $this->spApi->listingsItemsV20210801()->deleteListingsItemWithHttpInfo(
                $this->spApi->getSpApiConfig()->defaultSellerId,
                'TESTSKU123',
                [$this->spApi->getSpApiConfig()->defaultMarketplaceId]
            );
        });

        $this->_assertSubmissionResponseMatchesStandardExpectations($result);
    }

    public function test_patchListingsItem()
    {
        $result = $this->spApi->execute(function () {
            return $this->spApi->listingsItemsV20210801()
                ->patchListingsItemWithHttpInfo(
                    $this->spApi->getSpApiConfig()->defaultSellerId,
                    'TESTSKU123',
                    [$this->spApi->getSpApiConfig()->defaultMarketplaceId],
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
        $result = $this->spApi->execute(function () {
            return $this->spApi->listingsItemsV20210801()
                ->putListingsItemWithHttpInfo(
                    $this->spApi->getSpApiConfig()->defaultSellerId,
                    'TESTSKU123',
                    [$this->spApi->getSpApiConfig()->defaultMarketplaceId],
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
