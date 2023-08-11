<?php

namespace Tests\Clients\ListingsRestrictionsV20210801\Api;

use Glue\SpApi\OpenAPI\Clients\ListingsRestrictionsV20210801\Model\Link;
use Glue\SpApi\OpenAPI\Clients\ListingsRestrictionsV20210801\Model\Reason;
use Glue\SpApi\OpenAPI\Clients\ListingsRestrictionsV20210801\Model\Restriction;
use Glue\SpApi\OpenAPI\Clients\ListingsRestrictionsV20210801\Model\RestrictionList;
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

    public function test_getListingsRestrictions()
    {
        $result = $this->spApi->execute(function () {
            return $this->spApi->listingsRestrictionsV20210801()
                ->getListingsRestrictionsWithHttpInfo(
                    'foo',
                    'foo',
                    [$this->spApi->getSpApiConfig()->marketplaceId]
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
