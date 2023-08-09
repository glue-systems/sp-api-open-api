<?php

namespace Tests\Clients\FinancesV0\Api;

use Glue\SpApi\OpenAPI\Clients\FinancesV0\Model\FinancialEventGroup;
use Glue\SpApi\OpenAPI\Clients\FinancesV0\Model\ListFinancialEventGroupsPayload;
use Glue\SpApi\OpenAPI\Clients\FinancesV0\Model\ListFinancialEventGroupsResponse;
use Glue\SpApi\OpenAPI\Container\SpApi;
use Tests\TestCase;

class FinancesApiTest extends TestCase
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

    public function test_listFinancialEventGroups()
    {
        $financesApi = $this->spApi->financesV0();

        $result = $financesApi->listFinancialEventGroupsWithHttpInfo(
            1,
            '2019-10-31',
            '2019-10-13'
        );

        /**
         * @var ListFinancialEventGroupsResponse $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(ListFinancialEventGroupsResponse::class, $response);
        $this->assertInstanceOf(ListFinancialEventGroupsPayload::class, $payload = $response->getPayload());
        $this->assertNotEmpty($financialEventGroups = $payload->getFinancialEventGroupList());
        $this->assertInstanceOf(FinancialEventGroup::class, $financialEventGroup = $financialEventGroups[0]);
        $this->assertNotEmpty($financialEventGroup->getFundTransferStatus());
    }
}
