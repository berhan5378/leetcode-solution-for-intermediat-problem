<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function minimumIndex($nums) {
        $n = count($nums);

         // Find the dominant element using Boyer-Moore Voting Algorithm
        $candidate = null;
        $count = 0;

        foreach ($nums as $num) {
            if ($count == 0) {
                $candidate = $num;
            }
            $count += ($num == $candidate) ? 1 : -1;
        }

        // Count total occurrences of the dominant element
        $totalCount = 0;
        foreach ($nums as $num) {
            if ($num == $candidate) {
                $totalCount++;
            }
        }

        // Iterate to find the minimum valid split index
        $leftCount = 0;
        for ($i = 0; $i < $n - 1; $i++) {
            if ($nums[$i] == $candidate) {
                $leftCount++;
            }
            $rightCount = $totalCount - $leftCount;

            if ($leftCount * 2 > ($i + 1) && $rightCount * 2 > ($n - ($i + 1))) {
                return $i;
            }
        }

        return -1;
    }
}
