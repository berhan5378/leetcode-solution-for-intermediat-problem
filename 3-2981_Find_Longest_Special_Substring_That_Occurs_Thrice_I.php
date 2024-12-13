<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function maximumLength($s) {
        $n = strlen($s);
        $maxLength = -1;

        // Iterate over possible lengths of the substring
        for ($len = 1; $len <= $n; $len++) {
            $count = [];

            // Check all substrings of the current length
            for ($i = 0; $i <= $n - $len; $i++) {
                $substring = substr($s, $i, $len);

                // Check if the substring is "special"
                if (count(array_unique(str_split($substring))) === 1) {
                    if (!isset($count[$substring])) {
                        $count[$substring] = 0;
                    }
                    $count[$substring]++;

                    // If it appears at least 3 times, update maxLength
                    if ($count[$substring] >= 3) {
                        $maxLength = max($maxLength, $len);
                    }
                }
            }
        }

        return $maxLength;
    }
}