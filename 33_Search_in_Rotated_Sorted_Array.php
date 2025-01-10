<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {
        if(($key=array_search($target,$nums)) === false) return -1;
        return $key;
    }
}