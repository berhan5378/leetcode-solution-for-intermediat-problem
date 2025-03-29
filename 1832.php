<?php

class Solution {
    /**
     * @param String $sentence
     * @return Boolean
     */
    function checkIfPangram($sentence) {
        // Create a set of all unique characters in the sentence
        $uniqueChars = array_unique(str_split($sentence));

        // Count the unique characters
        return count($uniqueChars) === 26;
    }
}
