<?php

namespace Tests\Clients\AplusContentV20201101\Api;

use Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\ApiException;
use Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\ContentMetadataRecord;
use Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\SearchContentDocumentsResponse;
use Glue\SpApi\OpenAPI\Container\SpApi;
use GuzzleHttp\Psr7\Stream;
use Tests\TestCase;

class AplusContentApiTest extends TestCase
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

    public function test_searchContentDocuments()
    {
        $aplusContentApi  = $this->spApi->aplusContentV20201101();

        try {
            $result = $aplusContentApi->searchContentDocumentsWithHttpInfo(
                $this->spApi->getSpApiConfig()->marketplaceId
            );
        } catch (ApiException $ex) {
            $body = $ex->getResponseBody();
            if ($body instanceof Stream) {
                $contents = $body->getContents();
            }
            if ($ex->getCode() !== 400) {
                throw $ex;
            }
            $this->markTestSkipped('Sandbox not yet available for A+ Content Management API.');
        }

        /**
         * @var SearchContentDocumentsResponse $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(SearchContentDocumentsResponse::class, $response);
        $this->assertNotEmpty($contentMetadataRecords = $response->getContentMetadataRecords());
        $this->assertInstanceOf(ContentMetadataRecord::class, $contentMetadataRecords[0]);
    }
}
