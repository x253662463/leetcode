<?php
/**
 * Given an input string (s) and a pattern (p), implement regular expression matching with support for '.' and '*'.
 *
 * '.' Matches any single character.
 * '*' Matches zero or more of the preceding element.
 * The matching should cover the entire input string (not partial).
 *
 * Note:
 *
 * s could be empty and contains only lowercase letters a-z.
 * p could be empty and contains only lowercase letters a-z, and characters like . or *.
 * Example 1:
 *
 * Input:
 * s = "aa"
 * p = "a"
 * Output: false
 * Explanation: "a" does not match the entire string "aa".
 * Example 2:
 *
 * Input:
 * s = "aa"
 * p = "a*"
 * Output: true
 * Explanation: '*' means zero or more of the preceding element, 'a'. Therefore, by repeating 'a' once, it becomes "aa".
 * Example 3:
 *
 * Input:
 * s = "ab"
 * p = ".*"
 * Output: true
 * Explanation: ".*" means "zero or more (*) of any character (.)".
 * Example 4:
 *
 * Input:
 * s = "aab"
 * p = "c*a*b"
 * Output: true
 * Explanation: c can be repeated 0 times, a can be repeated 1 time. Therefore, it matches "aab".
 * Example 5:
 *
 * Input:
 * s = "mississippi"
 * p = "mis*is*p*."
 * Output: false
 */

class solution
{

    public function isMatch($s, $p) {
        if ($s == null || $p == null) {
            return false;
        }
        $dp = [];
        $dp[0][0] = true;
        for ($i = 0; $i < strlen($p); $i++) {
            if ($p[$i] == '*' && $dp[0][$i - 1]) {
                $dp[0][$i + 1] = true;
            }
        }
        for ($i = 0; $i < strlen($s); $i++) {
            for ($j = 0; $j < strlen($p); $j++) {
                if ($p[$j] == '.') {
                    $dp[$i + 1][$j + 1] = $dp[$i][$j];
                }

                if ($p[$j] == $s[$i]) {
                    $dp[$i + 1][$j + 1] = $dp[$i][$j];
                }

                if ($p[$j] == '*') {
                    if ($p[$j - 1] != $s[$i] && $p[$j - 1] != '.') {
                        $dp[$i + 1][$j + 1] = $dp[$i + 1][$j - 1];
                    } else {
                        $dp[$i + 1][$j + 1] = ($dp[$i + 1][$j] || $dp[$i][$j + 1] || $dp[$i + 1][$j - 1]);
                    }
                }
            }
        }
        var_dump($s . '=======' . $p);
        var_dump($dp);
        return $dp[strlen($s)][strlen($p)];
    }

}
