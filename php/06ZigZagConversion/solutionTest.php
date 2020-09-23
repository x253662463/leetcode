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
    public function testSolution($string, $numRows, $expected) {
        $solution = new solution();
        $result = $solution->convert($string, $numRows);

        $this->assertEquals($expected, $result);
    }

    public function dataProvider() {
        return [
            ['PAYPALISHIRING', 3, 'PAHNAPLSIIGYIR'],
            ['', 3, ''],
            ['PAYPALISHIRING', 4, 'PINALSIGYAHRPI'],
        ];
    }

}
