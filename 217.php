<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        if(count(array_count_values($nums)) !== count($nums)) return true; return false;
    }
}