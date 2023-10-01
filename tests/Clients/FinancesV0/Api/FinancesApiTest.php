<?php

namespace Tests\Clients\FinancesV0\Api;

use Glue\SpApi\OpenAPI\Clients\FinancesV0\Api\DefaultApi;
use Glue\SpApi\OpenAPI\Clients\FinancesV0\Model\FinancialEventGroup;
use Glue\SpApi\OpenAPI\Clients\FinancesV0\Model\ListFinancialEventGroupsPayload;
use Glue\SpApi\OpenAPI\Clients\FinancesV0\Model\ListFinancialEventGroupsResponse;
use Tests\TestCase;

class FinancesApiTest extends TestCase
{
    public function test_listFinancialEventGroups()
    {
        $result = $this->tryButSkipIfUnauthorized(function () {
            return $this->sp_api()
                ->execute(function (DefaultApi $financesApi) {
                    return $financesApi->listFinancialEventGroupsWithHttpInfo(
                        1,
                        '2019-10-31',
                        '2019-10-13'
                    );
                });
        });

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
