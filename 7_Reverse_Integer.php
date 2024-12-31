<?php

class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) { 
        $reversed = (int)strrev((string)abs($x));
        if ( $x < 0)$reversed = -$reversed;
        // Check for overflow (32-bit integer limit)
        if ($reversed > (2**31) - 1 || $reversed < -2**31) {
           return 0;
        }
    
    return $reversed;
    }
}