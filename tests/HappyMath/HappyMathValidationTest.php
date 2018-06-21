<?php

namespace Gigac\Tests\HappyMath;

use InvalidArgumentException;

class HappyMathValidationTest extends TestCase
{

    /**
     * @test
     */
    public function it_throws_an_error_if_brackets_are_messed_up()
    {
        $expression = 'SUM(1,3';

        $this->expectException(InvalidArgumentException::class);

        $this->evaluateExpression($expression);
    }
}