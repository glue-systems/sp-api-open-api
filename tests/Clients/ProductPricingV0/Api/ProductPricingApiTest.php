<?php

namespace Tests\Clients\ProductPricingV0\Api;

use Glue\SpApi\OpenAPI\Clients\ProductPricingV0\Api\ProductPricingApi;
use Glue\SpApi\OpenAPI\Clients\ProductPricingV0\Model\GetPricingResponse;
use Glue\SpApi\OpenAPI\Clients\ProductPricingV0\Model\OfferType;
use Glue\SpApi\OpenAPI\Clients\ProductPricingV0\Model\Price;
use Glue\SpApi\OpenAPI\Clients\ProductPricingV0\Model\Product;
use Tests\TestCase;

class ProductPricingApiTest extends TestCase
{
    public function test_getPricing()
    {
        $result = $this->tryButSkipIfUnauthorized(function () {
            return $this->sp_api()
                ->execute(function (ProductPricingApi $productPricingApi) {
                    return $productPricingApi->getPricingWithHttpInfo(
                        'ATVPDKIKX0DER',
                        'Asin'
                    );
                });
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
