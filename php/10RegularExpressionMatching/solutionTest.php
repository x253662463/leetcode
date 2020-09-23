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
    public function testSolution($s, $p, $expected) {
        $solution = new solution();
        $result = $solution->isMatch($s, $p);

        $this->assertEquals($expected, $result);
    }

    public function dataProvider() {
        return [
            ['aa', 'a', false],
            ['aa', 'a*', true],
            ['ab', '.*', true],
            ['aab', 'c*a*b', true],
            ['mississippi', 'mis*is*p*.', false]
        ];
    }

}
