<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function continuousSubarrays($nums) {
        $n = count($nums);
        $start = 0; // Start of the sliding window
        $result = 0;

        // We use these to track the min and max values in the current window
        $minQueue = [];
        $maxQueue = [];

        for ($end = 0; $end < $n; $end++) {
            // Maintain the maxQueue (store indices, and keep values in decreasing order)
            while (!empty($maxQueue) && $nums[end($maxQueue)] <= $nums[$end]) {
                array_pop($maxQueue);
            }
            $maxQueue[] = $end;

            // Maintain the minQueue (store indices, and keep values in increasing order)
            while (!empty($minQueue) && $nums[end($minQueue)] >= $nums[$end]) {
                array_pop($minQueue);
            }
            $minQueue[] = $end;

            // Shrink the window if the difference between max and min exceeds 2
            while ($nums[$maxQueue[0]] - $nums[$minQueue[0]] > 2) {
                $start++;
                if ($maxQueue[0] < $start) {
                    array_shift($maxQueue);
                }
                if ($minQueue[0] < $start) {
                    array_shift($minQueue);
                }
            }

            // Add the number of subarrays ending at index $end
            $result += ($end - $start + 1);
        }

        return $result;
    }
}
