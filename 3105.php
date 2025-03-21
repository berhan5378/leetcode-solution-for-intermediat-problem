<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function longestMonotonicSubarray($nums) { 
        $max_length = 1;
        $inc_length = 1;
        $dec_length = 1;
        
        for ($i = 1; $i < count($nums); $i++) {
            if ($nums[$i] > $nums[$i - 1]) {
                $inc_length++;
                $dec_length = 1;
            } elseif ($nums[$i] < $nums[$i - 1]) {
                $dec_length++;
                $inc_length = 1;
            } else {
                $inc_length = 1;
                $dec_length = 1;
            }
            
            $max_length = max($max_length, $inc_length, $dec_length);
        }
        
        return $max_length;
    }
}