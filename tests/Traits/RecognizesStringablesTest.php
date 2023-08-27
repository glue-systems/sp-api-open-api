<?php

namespace Tests\Traits;

use __PHP_Incomplete_Class;
use Glue\SpApi\OpenAPI\Traits\RecognizesStringables;
use Tests\TestCase;

class RecognizesStringablesTest extends TestCase
{
    use RecognizesStringables;

    public function test_isStringable_returns_true_for_expected_value_types()
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
                . " following values: [" . implode(', ', $failedValues) . "].");
        }
    }

    public function test_isStringable_returns_false_for_objects_and_arrays()
    {
        $dataset      = $this->_getObjectsAndArraysDataset();
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
                . " following values: [" . implode(', ', $failedValues) . "].");
        }
    }

    public function test_isStringable_returns_false_for_resource_types()
    {
        $sut                 = $this;
        $outputDirectoryPath = $this->getOutputDirectoryPath();

        $stream = fopen("{$outputDirectoryPath}/temp.txt", "w");
        if ($sut->isStringable($stream) === false) {
            $this->assertFalse(false);
        } else {
            $this->fail("Failed to assert that isStringable returns false for"
                . " open resource types.");
        }

        fclose($stream);
        if ($sut->isStringable($stream) === false) {
            $this->assertFalse(false);
        } else {
            $this->fail("Failed to assert that isStringable returns false for"
                . " closed resource types.");
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

    protected function _getObjectsAndArraysDataset()
    {
        return [
            'non-empty array'        => ['a' => 'b'],
            'empty array'            => [],
            'new \stdClass()'        => new \stdClass(),
            '(object)[]'             => (object)[],
            '__PHP_Incomplete_Class' => new __PHP_Incomplete_Class(),
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
