<?php

namespace Glue\SpApi\OpenAPI\ApiExecutions;

use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Api\OffersApi;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Api\SellingpartnersApi;
use Glue\SpApi\OpenAPI\SpApiExecution;

/**
 * SP-API execution class for the Replenishment API v2022-11-07. See official documentation:
 * https://developer-docs.amazon.com/sp-api/docs/replenishment-api-v2022-11-07-reference
 */
class ReplenishmentV20221107ApiExecution extends SpApiExecution
{
    public function getOperationToClientDictionary()
    {
        return [
            'getSellingPartnerMetrics' => SellingpartnersApi::class,

            'listOfferMetrics' => OffersApi::class,
            'listOffers'       => OffersApi::class,
        ];
    }
}
