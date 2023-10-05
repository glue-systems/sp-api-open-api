<?php

namespace Tests\Clients\APlusContentV20201101\Api;

use Glue\SpApi\OpenAPI\Clients\APlusContentV20201101\Api\APlusContentApi;
use Tests\TestCase;

class APlusContentApiTest extends TestCase
{
    public function test_searchContentDocuments()
    {
        $this->markTestSkipped('Sandbox not yet available according to JSON API schema.');
    }
}
