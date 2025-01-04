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
class Solution {
    function swapPairs($head) { 
        if (!$head || !$head->next) {
            return $head;
        }
        // Nodes to be swapped
        $firstNode = $head;
        $secondNode = $head->next;

        // Recursively swap the rest of the list
        $firstNode->next = $this->swapPairs($secondNode->next);

        // Swap the current pair
        $secondNode->next = $firstNode;

        // Return the new head
        return $secondNode;
    }
}