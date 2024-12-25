<?php
/**
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
     * @param TreeNode $root
     * @return Integer
     */
    function minimumOperations($root) {
        $res = 0;
        $lvl = 1;
        $def = [];

        $this->dfs($root, $def, $lvl);

        foreach ($def as $lvl => $values) {
            $sorted = $values;
            sort($sorted);
            $swap_map = array_flip($sorted);
            
            for ($i = 0; $i < count($values);) {
                $val = $values[$i];
                if ($i !== $swap_map[$val]) {
                    //perform swap
                    $tmp = $values[$swap_map[$val]];
                    $values[$swap_map[$val]] = $val;
                    $values[$i] = $tmp;
                    $res++;
                    continue;
                }

                $i++;
            }
        }

        return $res;
    }

    public function dfs($root, &$def, $lvl) {

        $l = $root->left;
        $r = $root->right;

        if ($l !== null) {
            $def[$lvl][] = $l->val;
        }

        if ($r !== null) {
            $def[$lvl][] = $r->val;
        }

        if (!empty($l->left) || !empty($l->right)) {
            $this->dfs($l, $def, $lvl+1);
        }

        if (!empty($r->left) || !empty($r->right)) {
            $this->dfs($r, $def, $lvl+1);
        }
    }
}