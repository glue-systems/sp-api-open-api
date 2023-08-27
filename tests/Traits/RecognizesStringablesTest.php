<?php

namespace Tests\Traits;

use Glue\SpApi\OpenAPI\Traits\RecognizesStringables;
use Tests\TestCase;

class RecognizesStringablesTest extends TestCase
{
    use RecognizesStringables;

    public function test_isStringable_can_return_true()
    {
        $dataset      = $this->_getAssertTrueDataset();
        $sut          = $this;
        $failedValues = [];

        foreach ($dataset as $name => $value) {
            if ($sut->isStringable($value) === true) {
                $this->assertTrue(true);
            } else {
                $failedValues[] = $name;
            }
        }

        if (count($failedValues)) {
            $this->fail("Failed to assert that isStringable returns true for the"
                . " following values: [" . implode(', ', $failedValues) . '].');
        }
    }

    public function test_isStringable_can_return_false()
    {
        $dataset      = $this->_getAssertFalseDataset();
        $sut          = $this;
        $failedValues = [];

        foreach ($dataset as $name => $value) {
            if ($sut->isStringable($value) === false) {
                $this->assertFalse(false);
            } else {
                $failedValues[] = $name;
            }
        }

        if (count($failedValues)) {
            $this->fail("Failed to assert that isStringable returns false for the"
                . " following values: [" . implode(', ', $failedValues) . '].');
        }
    }

    protected function _getAssertTrueDataset()
    {
        return [
            'non-empty string'               => 'a',
            'empty string'                   => '',
            'true'                           => true,
            'false'                          => false,
            'null'                           => null,
            'integer'                        => 0,
            'float'                          => 1.11,
            'object implementing __toString' => new ExampleImplementing__toString(),
        ];
    }

    protected function _getAssertFalseDataset()
    {
        return [
            'non-empty array' => ['a' => 'b'],
            'empty array'     => [],
            'new \stdClass()' => new \stdClass(),
            '(object)[]'      => (object)[],
        ];
    }
}

class ExampleImplementing__toString
{
    public function __toString()
    {
        return 'foo';
    }
}
