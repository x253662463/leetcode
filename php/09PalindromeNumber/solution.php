<?php
/**
 * Determine whether an integer is a palindrome. An integer is a palindrome when it reads the same backward as forward.
 *
 * Example 1:
 *
 * Input: 121
 * Output: true
 * Example 2:
 *
 * Input: -121
 * Output: false
 * Explanation: From left to right, it reads -121. From right to left, it becomes 121-. Therefore it is not a palindrome.
 * Example 3:
 *
 * Input: 10
 * Output: false
 * Explanation: Reads 01 from right to left. Therefore it is not a palindrome.
 * Follow up:
 *
 * Coud you solve it without converting the integer to a string?
 */

class solution
{

    /**
     * 多用了一个数组，导致内存占用高
     * @param $x
     * @return bool
     */
    public function isPalindrome($x) {
        if ($x < 0) {
            return false;
        }
        $array = [];
        while ($x > 0) {
            $array[] = $x % 10;
            $x = floor($x / 10);
        }
        for ($i = 0; $i < count($array) / 2; $i++) {
            if ($array[$i] !== $array[count($array) - 1 - $i]) {
                return false;
            }
        }
        return true;
    }

    public function isPalindromeV2($x) {
        if ($x < 0) {
            return false;
        }
        $y = $x;
        $rev = 0;
        while ($y > 0) {
            $rev = $rev * 10 + $y % 10;
            $y = floor($y / 10);
        }
        return $x == $rev;
    }
}
