<?php
/**
 *
 * The string "PAYPALISHIRING" is written in a zigzag pattern on a given number of rows
 * like this: (you may want to display this pattern in a fixed font for better legibility)
 *
 * P   A   H   N
 * A P L S I I G
 * Y   I   R
 * And then read line by line: "PAHNAPLSIIGYIR"
 *
 * Write the code that will take a string and make this conversion given a number of rows:
 *
 * string convert(string s, int numRows);
 * Example 1:
 *
 * Input: s = "PAYPALISHIRING", numRows = 3
 * Output: "PAHNAPLSIIGYIR"
 * Example 2:
 *
 * Input: s = "PAYPALISHIRING", numRows = 4
 * Output: "PINALSIGYAHRPI"
 * Explanation:
 *
 * P     I    N
 * A   L S  I G
 * Y A   H R
 * P     I
 *
 * P     H
 * A   S I
 * Y  I  R  N
 * P L   I G
 * A     N
 *   0 1 2 3
 * 3:0 4 8
 * 4:0 6 12
 * 5:0 8 16
 */

class solution
{

    public function convert($s, $numRows) {
        $result = array_fill(0, $numRows, '');
        $len = strlen($s);
        $i = 0;
        while ($i < $len) {
            for ($j = 0; $j < $numRows && $i < $len; $j++) {
                $result[$j] .= $s[$i++];
            }
            for ($k = $numRows - 2; $k > 0 && $i < $len; $k--) {
                $result[$k] .= $s[$i++];
            }
        }
        return implode('', $result);
    }
}
