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
    public function testSolution($x, $expected) {
        $solution = new solution();
        $result = $solution->isPalindrome($x);
        $result2 = $solution->isPalindromeV2($x);

        $this->assertEquals($expected, $result);

        $this->assertEquals($expected, $result2);
    }

    public function dataProvider() {
        return [
            [121, true],
            [-121, false],
            [10, false],
            [12344321, true],
            [1234566, false]
        ];
    }

}
