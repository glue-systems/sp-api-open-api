<?php

namespace Glue\SpApi\OpenAPI\ApiExecutions;

use Glue\SpApi\OpenAPI\Clients\ProductPricingV0\Api\ProductPricingApi;
use Glue\SpApi\OpenAPI\SpApiExecution;

/**
 * SP-API execution class for the Product Pricing API v0. See official documentation:
 * https://developer-docs.amazon.com/sp-api/docs/product-pricing-api-v0-reference
 */
class ProductPricingV0ApiExecution extends SpApiExecution
{
    public function getOperationToClientDictionary()
    {
        return [
            'getPricing'            => ProductPricingApi::class,
            'getCompetitivePricing' => ProductPricingApi::class,
            'getListingOffers'      => ProductPricingApi::class,
            'getItemOffers'         => ProductPricingApi::class,
            'getItemOffersBatch'    => ProductPricingApi::class,
            'getListingOffersBatch' => ProductPricingApi::class,
        ];
    }
}
