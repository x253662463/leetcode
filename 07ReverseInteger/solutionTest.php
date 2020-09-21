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
    public function testSolution($int, $expected) {
        $solution = new solution();
        $result = $solution->reverse($int);

        $this->assertEquals($expected, $result);
    }

    public function dataProvider() {
        return [
            [123, 321],
            [-123, -321],
            [120, 21],
            [1534236469, 0]
        ];
    }

}
