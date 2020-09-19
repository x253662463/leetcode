<?php
/**
 * Given a string s, find the length of the longest substring without repeating characters.
 *
 *
 *
 * Example 1:
 *
 * Input: s = "abcabcbb"
 * Output: 3
 * Explanation: The answer is "abc", with the length of 3.
 * Example 2:
 *
 * Input: s = "bbbbb"
 * Output: 1
 * Explanation: The answer is "b", with the length of 1.
 * Example 3:
 *
 * Input: s = "pwwkew"
 * Output: 3
 * Explanation: The answer is "wke", with the length of 3.
 * Notice that the answer must be a substring, "pwke" is a subsequence and not a substring.
 * Example 4:
 *
 * Input: s = ""
 * Output: 0
 *
 *
 * Constraints:
 *
 * 0 <= s.length <= 5 * 104
 * s consists of English letters, digits, symbols and spaces.
 */


class solution
{
    /**
     * 时间复杂度o(n²)
     * @param $s
     * @return int
     */
    public function lengthOfLongestSubstring($s) {
        $max = 0;
        $len = strlen($s);
        for ($i = 0;$i< $len;$i++) {
            $array = [$s[$i]];
            for ($j = $i + 1;$j< $len;$j++) {
                if (!in_array($s[$j],$array)) {
                    $array[] = $s[$j];
                } else {
                    break;
                }
            }
            $max = count($array) > $max ? count($array) : $max;
        }
        return $max;
    }

    /**
     * 时间复杂度O(n)
     * @param $s
     * @return int
     */
    public function lengthOfLongestSubstringV2($s) {
        return 0;
    }
}
