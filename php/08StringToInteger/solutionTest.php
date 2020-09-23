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
        $result = $solution->myAtoi($string);

        $this->assertEquals($expected, $result);
    }

    public function dataProvider() {
        return [
            ["42", 42],
            ["   -42", -42],
            ["4193 with words", 4193],
            ['words and 987', 0],
            ['-91283472332', -2147483648],
            ['-+1', 0],
            ['+-2', 0],
            ['   +0 123', 0],
            ['+1', 1],
            ["2147483648", 2147483647],
            ["0-1", 0]
        ];
    }

}
