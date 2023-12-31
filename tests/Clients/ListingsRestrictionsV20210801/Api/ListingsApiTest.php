<?php

namespace Tests\Clients\ListingsRestrictionsV20210801\Api;

use Glue\SpApi\OpenAPI\Clients\ListingsRestrictionsV20210801\Api\ListingsApi;
use Glue\SpApi\OpenAPI\Clients\ListingsRestrictionsV20210801\Model\Link;
use Glue\SpApi\OpenAPI\Clients\ListingsRestrictionsV20210801\Model\Reason;
use Glue\SpApi\OpenAPI\Clients\ListingsRestrictionsV20210801\Model\Restriction;
use Glue\SpApi\OpenAPI\Clients\ListingsRestrictionsV20210801\Model\RestrictionList;
use Tests\TestCase;

class ListingsApiTest extends TestCase
{
    public function test_getListingsRestrictions()
    {
        $result = $this->sp_api()
            ->listingsRestrictionsV20210801()
            ->execute(function (ListingsApi $listingsApi) {
                return $listingsApi->getListingsRestrictionsWithHttpInfo(
                    'foo',
                    'foo',
                    [$this->sp_api()->getSpApiConfig()->defaultMarketplaceId]
                );
            });

        /**
         * @var RestrictionList $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(RestrictionList::class, $response);
        $this->assertNotEmpty($restrictions = $response->getRestrictions());
        $this->assertInstanceOf(Restriction::class, $restrictions[0]);
        $this->assertNotEmpty($reasons = $restrictions[0]->getReasons());
        $this->assertInstanceOf(Reason::class, $reasons[0]);
        $this->assertNotEmpty($links = $reasons[0]->getLinks());
        $this->assertInstanceOf(Link::class, $links[0]);
        $this->assertNotEmpty($links[0]->getResource());
    }
}
