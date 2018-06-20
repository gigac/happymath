<?php

namespace Gigac\HappyMath;

class HappyMath
{

    /**
     * Calculate expression
     *
     * @param  string $expression
     *
     * @return string
     */
    public static function calculate($expression)
    {
        do
        {
            preg_match_all("/\(([0-9,\.]*?)\)/", $expression, $matches, PREG_OFFSET_CAPTURE);
            if ( ! empty($matches[1]))
            {
                $match = $matches[1][0];
                $values = $match[0];
                $position = $match[1];

                $command = substr($expression, $position - 4, 3);

                $result = self::doOperation($command, $values);

                $str1 = substr($expression, 0, $position - 4);
                $str2 = substr($expression, $position + strlen($values) + 1);
                $expression = $str1 . $result . $str2;
            }
        } while ( ! empty($matches[1]));

        return $expression;
    }

    private static function doOperation($operation, $values)
    {
        $values = explode(',', $values);

        switch ($operation)
        {
            case 'SUM':
                return array_sum($values);
                break;

            case 'DIFF':
                return self::subtract($values);
                break;

            case 'MUL':
                return self::multiply($values);
                break;

            case 'DIV':
                return $values[0] / $values[1];
                break;

            case 'AVG':
                return array_sum($values) / count($values);
                break;

            case 'ABS':
                return abs($values[0]);

            case 'MAX':
                return max($values);
                break;

            case 'MIN':
                return min($values);
                break;

            default:
                return 0;
                break;
        }
    }


    private static function multiply($values)
    {
        $result = 1;
        foreach ($values as $value)
        {
            $result = $result * $value;
        }

        return $result;
    }

    private static function subtract($values)
    {
        $result = 0;
        foreach ($values as $value)
        {
            $result = $result - $value;
        }

        return $result;
    }
}
