<?php
/**
 * File MultipleSummary.php
 * PHP function returning the sum of all the multiples of 3 or 5 below a value chosen by the user.
 */

/**
 * Class MultipleSummary
 * @author Tuan Duong <bacduong@gmail.com>
 */
class MultipleSummary
{
    const NUM_3 = 3;
    const NUM_5 = 5;

    /**
     * Calculate the sum of all the multiples of 3 or 5 below $max
     *
     * @param  integer $max
     * @return integer
     */
    public static function getSum($max)
    {
        return static::sumMulitple(static::NUM_3, $max) + static::sumMulitple(static::NUM_5, $max) - static::sumMulitple(static::NUM_3 * static::NUM_5, $max);
    }

    /**
     * Sum of multiple of $number: $number + 2 * $number + ...
     *
     * @param  integer $number
     * @param  integer $max
     * @return integer
     */
    private static function sumMulitple($number, $max)
    {
        if ($max == 0) {
            return 0;
        }
        
        $count = floor(($max - 1) / $number);
        return $number * $count * ($count + 1) / 2;
    }
}
