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
    public function testAddTwoNumber($l1, $l2, $expected) {
        $list1 = $this->createNodeFromArray($l1);
        $list2 = $this->createNodeFromArray($l2);
        $expectedList = $this->createNodeFromArray($expected);
        $solution = new solution();
        $resultList = $solution->addTwoNumbers($list1, $list2);

        $this->assertEquals($expectedList, $resultList);
    }

    public function dataProvider() {
        return [
            [[2, 4, 3], [5, 6, 4], [7, 0, 8]],
            [[1], [1], [2]],
            [[3, 2], [7], [0, 3]]
        ];
    }

    private function createNodeFromArray($array) {
        $listNode = null;
        for ($i = count($array); $i >= 0; $i--) {
            $node = new ListNode($array[$i], $listNode);
            $listNode = $node;
        }
        return $listNode;
    }

}
