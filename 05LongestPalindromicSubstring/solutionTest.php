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
     * @dataProvider dataProvider
     */
    public function testSolution($string, $expected) {
        $solution = new solution();
        $result = $solution->longestPalindromicSubstring($string);

        $this->assertEquals($expected, $result);
    }

    public function dataProvider() {
        return [
            ['babad', 'bab'],
            ['', ''],
            ['cbbd', 'bb'],
            ['abcdeffedcba', 'abcdefedcba'],
        ];
    }

}
