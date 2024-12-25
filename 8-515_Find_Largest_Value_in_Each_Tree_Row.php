<?php
/**515. Find Largest Value in Each Tree Row
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */

 class Solution {

    /**
     * @param TreeNode|null $root
     * @return Integer[]
     */
    function largestValues($root) {
        if ($root === null) {
            return [];
        }

        $ans = []; // To store the largest values for each level
        $levels = []; // To store all values at each level
        $this->dfs($root, $levels, 0); // Start DFS from level 0

        foreach ($levels as $values) { 
            $ans[] = max($values); // Take the maximum value at each level
        }

        return $ans;
    }

    /**
     * Depth-first search helper to populate levels
     * @param TreeNode $root
     * @param array &$levels
     * @param int $lvl
     */
    private function dfs($root, &$levels, $lvl) {
        if ($root === null) {
            return;
        }

        // Add the current node value to the respective level
        $levels[$lvl][] = $root->val;

        // Recur for the left and right subtrees
        $this->dfs($root->left, $levels, $lvl + 1);
        $this->dfs($root->right, $levels, $lvl + 1);
    }
}
