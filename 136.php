<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
        $result = 0;

    // XOR all elements
    foreach ($nums as $num) {
        $result ^= $num;
    }

    return $result;
    }
}