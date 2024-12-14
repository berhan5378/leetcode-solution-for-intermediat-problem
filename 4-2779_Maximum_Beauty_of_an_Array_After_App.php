<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function maximumBeauty($nums, $k) {
        // Sort the input array to simplify range comparisons
        sort($nums);
        $n = count($nums);

        $maxBeauty = 0;
        $left = 0;

        // Sliding window approach
        for ($right = 0; $right < $n; $right++) {
            // Ensure the current window satisfies the range condition
            while ($nums[$right] - $nums[$left] > 2 * $k) {
                $left++;
            }

            // Calculate the length of the current valid subsequence
            $maxBeauty = max($maxBeauty, $right - $left + 1);
        }

        return $maxBeauty;
    }
}