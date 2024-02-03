<?php

namespace Tests\Clients\FulfillmentInboundV0\Model;

use Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\SellerFreightClass;
use Tests\TestCase;

class SellerFreightClassTest extends TestCase
{
    public function test_getCombinedFormattedNumbers()
    {
        $mockModelGeneratedValues = [
            '10',
            '20',
            '20.5',
            '30',
            '40',
            '50',
        ];

        $actual = SellerFreightClass::getCombinedFormattedNumbers($mockModelGeneratedValues);

        $expected = [
            '10',
            '10.0',
            '20',
            '20.0',
            '20.5',
            '30',
            '30.0',
            '40',
            '40.0',
            '50',
            '50.0',
        ];

        $this->assertEquals($expected, $actual);
    }
}
