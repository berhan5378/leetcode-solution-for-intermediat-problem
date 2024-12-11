<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer[][] $queries
     * @return Boolean[]
     */
    public function isArraySpecial($nums, $queries) {
        $n = count($nums);
        $special = array_fill(0, $n - 1, false);

        // Step 1: Precompute special transitions
        for ($i = 0; $i < $n - 1; $i++) {
            $special[$i] = ($nums[$i] % 2) !== ($nums[$i + 1] % 2);
        }

        // Step 2: Build prefix sum array
        $prefixSpecial = array_fill(0, $n, 0);
        for ($i = 0; $i < $n - 1; $i++) {
            $prefixSpecial[$i + 1] = $prefixSpecial[$i] + ($special[$i] ? 1 : 0);
        }

        // Step 3: Process queries
        $results = [];
        foreach ($queries as [$from, $to]) {
            if ($from === $to) {
                // Single element subarray is trivially special
                $results[] = true;
                continue;
            }

            // Check if all transitions in subarray are special
            $transitions = $to - $from; // Number of transitions in subarray
            $specialCount = $prefixSpecial[$to] - $prefixSpecial[$from];
            $results[] = ($specialCount === $transitions);
        }

        return $results;
    }
}