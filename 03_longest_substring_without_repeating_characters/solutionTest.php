<?php
/**
 * Creator: xie
 * Time: 2020/9/18
 */

use PHPUnit\Framework\TestCase;

require '../vendor/autoload.php';
require 'solution.php';

class solutionTest extends TestCase
{

    /**
     * @param $l1
     * @param $l2
     * @param $expected
     * @dataProvider dataProvider
     */
    public function testAddTwoNumber($s, $expected) {
        $solution = new solution();
        $result = $solution->lengthOfLongestSubstring($s);

        $this->assertEquals($expected, $result);
    }

    public function dataProvider() {
        return [
            ['abcabcbb', 3],
            ['bbbbbb', 1],
            ['pwwkew', 3],
            ['', 0]
        ];
    }

}
