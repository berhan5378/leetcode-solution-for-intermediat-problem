<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        $insert = 0;
        foreach($nums as $key => $num) {
            if ($num === $target) {
                return $key;
            }
            if ($num < $target) {
                $insert = $key + 1;
            }
        }

        return $insert;
    }
}