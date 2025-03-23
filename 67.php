<?php

class Solution {

    /**
     * @param String $a
     * @param String $b
     * @return String
     */
    function addBinary($a, $b) {
        $result = ""; // Store the result
        $carry = 0;   // Initialize the carry
        $i = strlen($a) - 1;
        $j = strlen($b) - 1;

        // Process each bit from right to left
        while ($i >= 0 || $j >= 0 || $carry > 0) {
            $bitA = $i >= 0 ? $a[$i] - '0' : 0; // Get bit from $a or 0 if out of bounds
            $bitB = $j >= 0 ? $b[$j] - '0' : 0; // Get bit from $b or 0 if out of bounds

            $sum = $bitA + $bitB + $carry; // Sum the bits and carry
            $result = ($sum % 2) . $result; // Append the remainder (0 or 1) to the result
            $carry = intdiv($sum, 2); // Update the carry (0 or 1)

            $i--; // Move to the next bit in $a
            $j--; // Move to the next bit in $b
        }

        return $result; // Return the final binary sum   
    }
}