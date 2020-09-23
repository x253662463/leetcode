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
     * @param $nums
     * @param $target
     * @param $expected
     * @dataProvider dataProvider
     */
    public function testAddTwoNumber($nums, $target, $expected) {
        $solution = new solution();
        $result = $solution->twoSum($nums, $target);

        $this->assertEquals($expected, $result);
    }

    public function dataProvider() {
        return [
            [[2, 7, 11, 15], 9, [0, 1]],
            [[3, 2, 4], 6, [1, 2]],
            [[3, 3], 6, [0, 1]],
        ];
    }

    /**
     * 通过数组创建链表
     * @param $array
     * @return ListNode|null
     */
    private function createNodeFromArray($array) {
        $listNode = null;
        for ($i = count($array) - 1; $i >= 0; $i--) {
            $node = new ListNode($array[$i], $listNode);
            $listNode = $node;
        }
        return $listNode;
    }

}
