<?php
class Solution {

    /**
     * @param Integer $n
     * @return String[]
     */
    function fizzBuzz($n) {
        $result = [];
        
        for ($i = 1; $i <= $n; $i++) {
            // Check divisibility conditions
            if ($i % 15 == 0) {
                $result[] = "FizzBuzz";
            } elseif ($i % 3 == 0) {
                $result[] = "Fizz";
            } elseif ($i % 5 == 0) {
                $result[] = "Buzz";
            } else {
                $result[] = (string) $i;
            }
        }
        
        return $result;
    }
}
