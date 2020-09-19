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
     * @param $nums1
     * @param $nums2
     * @param $expected
     * @dataProvider dataProvider
     */
    public function testAddTwoNumber($nums1, $nums2, $expected) {
        $solution = new solution();
        $result = $solution->findMedianSortedArrays($nums1, $nums2);

        $this->assertEquals($expected, $result);
    }

    public function dataProvider() {
        return [
            [[1, 3], [2], 2.00000],
            [[1, 2], [3, 4], 2.50000],
            [[0, 0], [0, 0], 0.00000],
            [[2], [], 2.00000],
        ];
    }

}
