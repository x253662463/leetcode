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


    /**
     * @param $l1 ListNode
     * @param $l2 ListNode
     * @return ListNode
     */
    public function addTwoNumbers($l1, $l2) {
        $carry = 0;
        $result = new ListNode();
        $current = $result;
        while ($l1 !== null || $l2 !== null) {
            $sum = $carry;
            if ($l1 !== null) {
                $sum += $l1->val;
                $l1 = $l1->next;
            }
            if ($l2 !== null) {
                $sum += $l2->val;
                $l2 = $l2->next;
            }
            $node = new ListNode($sum % 10);
            $current->next = $node;
            $current = $current->next;
            $carry = $sum >= 10 ? 1 : 0;
        }
        if ($carry == 1) {
            $current->next = new ListNode(1, null);
        }
        return $result->next;
    }
}
