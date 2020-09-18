<?php
/**
 * You are given two non-empty linked lists representing two non-negative integers.
 * The digits are stored in reverse order and each of their nodes contain a single digit.
 * Add the two numbers and return it as a linked list.
 *
 * You may assume the two numbers do not contain any leading zero, except the number 0 itself.
 *
 * Example:
 *
 * Input: (2 -> 4 -> 3) + (5 -> 6 -> 4)
 * Output: 7 -> 0 -> 8
 * Explanation: 342 + 465 = 807.
 */

class ListNode
{
    public $val = 0;
    public $next = null;

    public function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}

class solution
{

    public function addTwoNumbers($l1, $l2) {
        $c1 = $l1;
        $c2 = $l2;
        $result = new ListNode(0);
        $d = $result;
        $sum = 0;
        while ($c1 != null || $c2 !== null) {
            $sum /= 10;
            if ($c1 != null) {
                $sum += $c1->val;
                $c1 = $c1->next;
            }
            if ($c2 != null) {
                $sum += $c2->val;
                $c2 = $c2->next;
            }
            $d->next = new ListNode($sum % 10);
            $d = $d->next;
        }
        if ($sum / 10 == 1) {
            $d->next = new ListNode(1);
        }
        return $result->next;

    }
}
