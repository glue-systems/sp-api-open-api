<?php

namespace Tests\Clients\ProductPricingV0\Api;

use Glue\SpApi\OpenAPI\Clients\ProductPricingV0\Model\GetPricingResponse;
use Glue\SpApi\OpenAPI\Clients\ProductPricingV0\Model\OfferType;
use Glue\SpApi\OpenAPI\Clients\ProductPricingV0\Model\Price;
use Glue\SpApi\OpenAPI\Clients\ProductPricingV0\Model\Product;
use Glue\SpApi\OpenAPI\Container\SpApi;
use Tests\TestCase;

class ProductPricingApiTest extends TestCase
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

    public function test_getPricing()
    {
        $result = $this->spApi->execute(function () {
            return $this->spApi->productPricingV0()->getPricingWithHttpInfo(
                'ATVPDKIKX0DER',
                'Asin'
            );
        });

        /**
         * @var GetPricingResponse $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(GetPricingResponse::class, $response);
        $this->assertNotEmpty($prices = $response->getPayload());
        $this->assertInstanceOf(Price::class, $prices[0]);
        $this->assertInstanceOf(Product::class, $product = $prices[0]->getProduct());
        $this->assertNotEmpty($offers = $product->getOffers());
        $this->assertInstanceOf(OfferType::class, $offers[0]);
        // $this->assertInstanceOf(CompetitivePricingType::class, $competitivePricing = $product->getCompetitivePricing());
        // $this->assertNotEmpty($competitivePrices = $competitivePricing->getCompetitivePrices());
        // $this->assertInstanceOf(CompetitivePriceType::class, $competitivePrices[0]);
    }
}
