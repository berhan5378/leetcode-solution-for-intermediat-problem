<?php

class Solution {

    /**
     * @param String $s
     * @param Integer[] $spaces
     * @return String
     */
    function addSpaces($s, $spaces) {
        $result = ""; // Initialize an empty result string
        $spaceIndex = 0; // Pointer for the spaces array
        $n = strlen($s);

        for ($i = 0; $i < $n; $i++) {
            // Check if the current position matches the next space to add
            if ($spaceIndex < count($spaces) && $i == $spaces[$spaceIndex]) {
                $result .= " "; // Add a space
                $spaceIndex++; // Move to the next space index
            }
            $result .= $s[$i]; // Add the current character to the result
        }

        return $result;
    }
}