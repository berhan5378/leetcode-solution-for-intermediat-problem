<?php
class Solution {

    /**
     * @param Integer $dividend
     * @param Integer $divisor
     * @return Integer
     */
    function divide($dividend, $divisor) {
        // Handle overflow edge case
        if ($dividend == -2147483648 && $divisor == -1) {
            return 2147483647; // Return the max value of a 32-bit integer
        }

        // Determine if the result should be negative
        $negative = ($dividend < 0) ^ ($divisor < 0); // XOR to check if signs are different

        // Work with absolute values
        $dividend = abs($dividend);
        $divisor = abs($divisor);

        $quotient = 0;
        while ($dividend >= $divisor) {
            $temp = $divisor;
            $multiple = 1;

            // Double the divisor to optimize the subtraction process
            while ($dividend >= ($temp << 1)) {
                $temp <<= 1;
                $multiple <<= 1;
            }

            // Subtract the largest possible multiple of divisor
            $dividend -= $temp;
            $quotient += $multiple;
        }

        // Apply the sign
        if ($negative) {
            $quotient = -$quotient;
        }

        // Clamp the result to the 32-bit integer range
        return max(min($quotient, 2147483647), -2147483648);
    }
}