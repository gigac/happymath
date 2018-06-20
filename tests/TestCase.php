<?php

namespace Gigac\Tests\HappyMath;

use Gigac\HappyMath\HappyMath;

abstract class TestCase extends \PHPUnit\Framework\TestCase
{

    public function evaluateExpressionArray($expressions)
    {
        foreach ($expressions as $expression => $expected)
        {
            $result = HappyMath::calculate($expression);

            $this->assertEquals($expected, $result);
        }
    }
}
