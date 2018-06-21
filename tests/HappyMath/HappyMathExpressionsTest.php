<?php

namespace Gigac\Tests\HappyMath;

class HappyMathExpressionsTest extends TestCase
{

    /**
     * @test
     */
    public function evaluateSum()
    {
        $expressions = [
            'SUM(1,2)'               => 3,
            'SUM(1,3,22)'            => 26,
            'SUM(0,1,3,1)'           => 5,
            'SUM(0,1.5,3.2,1.8,0.5)' => 7
        ];

        $this->evaluateExpressionArray($expressions);
    }

    /**
     * @test
     */
    public function evaluateNestedSum()
    {
        $expressions = [
            'SUM(1,SUM(2,3))'                    => 6,
            'SUM(SUM(3,SUM(1,3)),1,SUM(2,1),22)' => 33,
            'SUM(1,3,SUM(5,8))'                  => 17,
        ];

        $this->evaluateExpressionArray($expressions);
    }

    /**
     * @test
     */
    public function evaluateCount()
    {
        $expressions = [
            'CNT(1,3,6)'      => 3,
            'CNT(1,SUM(2,3))' => 2,
            'CNT(5,4,2,1,6)'  => 5,
        ];

        $this->evaluateExpressionArray($expressions);
    }
}
