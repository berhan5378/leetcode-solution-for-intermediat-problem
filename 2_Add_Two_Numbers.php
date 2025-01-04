<?php
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution
{
    function addTwoNumbers($l1, $l2)
    {
        static $carry; 
        $carry += $l1?->val + $l2?->val;
        if ($l1 or $l2 or $carry) {
            $digits = $carry % 10;
            $carry = ($carry - $digits) / 10;
            return new ListNode($digits, $this->addTwoNumbers($l1?->next, $l2?->next));
        }
    }
}