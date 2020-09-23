<?php
/**
 * Given a 32-bit signed integer, reverse digits of an integer.
 *
 * Example 1:
 *
 * Input: 123
 * Output: 321
 * Example 2:
 *
 * Input: -123
 * Output: -321
 * Example 3:
 *
 * Input: 120
 * Output: 21
 * Note:
 * Assume we are dealing with an environment which could only store
 * integers within the 32-bit signed integer range: [−231,  231 − 1].
 * For the purpose of this problem, assume that your function returns
 * 0 when the reversed integer overflows.
 */

class solution
{

    public function reverse($int) {
        $array = [];
        $flag = false;
        if ($int < 0) {
            $flag = 1;
            $int = -$int;
        }
        while ($int > 0) {
            $array[] = $int % 10;
            $int = floor($int / 10);
        }
        $result = 0;
        for ($i = 0; $i < count($array); $i++) {
            $result = $result * 10 + $array[$i];
        }
        if ($result >= pow(2, 31)) {
            return 0;
        }
        if ($flag) {
            $result = -$result;
        }
        return $result;
    }
}
