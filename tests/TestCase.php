<?php

namespace Gigac\Tests\HappyMath;

use Gigac\HappyMath\HappyMath;

abstract class TestCase extends \PHPUnit\Framework\TestCase
{

    public function evaluateExpression($expression)
    {
        return HappyMath::calculate($expression);
    }

    public function evaluateExpressionArray($expressions)
    {
        foreach ($expressions as $expression => $expected)
        {
            $result = $this->evaluateExpression($expression);

            $this->assertEquals($expected, $result);
        }
    }
}
