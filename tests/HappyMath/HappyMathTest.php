<?php

namespace Gigac\Tests\HappyMath;

class HappyMathTest extends TestCase
{

    /**
     * @test
     */
    public function evalSum()
    {
        $expressions = [
            'SUM(1,2)'               => 3,
            'SUM(1,3,22)'            => 26,
            'SUM(0,1,3,1)'           => 5,
            'SUM(0,1.5,3.2,1.8,0.5)' => 7
        ];

        $this->evaluateExpressionArray($expressions);
    }
}
