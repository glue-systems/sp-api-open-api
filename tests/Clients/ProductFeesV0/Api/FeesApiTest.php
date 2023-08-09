<?php

namespace Tests\Clients\ProductFeesV0\Api;

use Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Model\FeesEstimate;
use Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Model\FeesEstimateRequest;
use Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Model\FeesEstimateResult;
use Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Model\GetMyFeesEstimateRequest;
use Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Model\GetMyFeesEstimateResponse;
use Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Model\GetMyFeesEstimateResult;
use Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Model\MoneyType;
use Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Model\Points;
use Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Model\PriceToEstimateFees;
use Glue\SpApi\OpenAPI\Container\SpApi;
use Tests\TestCase;

class FeesApiTest extends TestCase
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

    public function test_getMyFeesEstimateForSKU()
    {
        $feesApi = $this->spApi->productFeesV0();

        $result = $feesApi->getMyFeesEstimateForSKUWithHttpInfo(
            'FAKE-SKU-123',
            new GetMyFeesEstimateRequest([
                'feesEstimateRequest' => new FeesEstimateRequest([
                    'marketplaceId'        => 'ATVPDKIKX0DER',
                    'isAmazonFulfilled'    => false,
                    'priceToEstimateFees'  => new PriceToEstimateFees([
                        'listingPrice' => new MoneyType([
                            'currencyCode' => 'USD',
                            'amount'       => 10,
                        ]),
                        'shipping'     => new MoneyType([
                            'currencyCode' => 'USD',
                            'amount'       => 10,
                        ]),
                        'points'       => new Points([
                            'pointsNumber'        => 0,
                            'pointsMonetaryValue' => new MoneyType([
                                'currencyCode' => 'USD',
                                'amount'       => 0,
                            ]),
                        ]),
                    ]),
                    'identifier'           => 'UmaS1',
                ]),
            ])
        );

        /**
         * @var GetMyFeesEstimateResponse $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(GetMyFeesEstimateResponse::class, $response);
        $this->assertInstanceOf(GetMyFeesEstimateResult::class, $payload = $response->getPayload());
        $this->assertInstanceOf(FeesEstimateResult::class, $feesEstimateResult = $payload->getFeesEstimateResult());
        $this->assertNotEmpty($feesEstimateResult->getStatus());
        $this->assertInstanceOf(FeesEstimate::class, $feesEstimate = $feesEstimateResult->getFeesEstimate());
        $this->assertInstanceOf(MoneyType::class, $totalFeesEstimate = $feesEstimate->getTotalFeesEstimate());
        $this->assertNotEmpty($totalFeesEstimate->getAmount());
    }
}
