<?php

class Solution {
    /**
     * @param String $word
     * @return Integer
     */
    function numDifferentIntegers($word) {
        // Replace all non-digit characters with spaces
        $word = preg_replace('/[a-z]/', ' ', $word);
        
        // Extract all numbers as strings
        preg_match_all('/\d+/', $word, $matches);
        
        // Normalize numbers by removing leading zeros
        $uniqueNumbers = [];
        foreach ($matches[0] as $num) {
            $normalizedNum = ltrim($num, '0'); // Remove leading zeros
            if ($normalizedNum === '') $normalizedNum = '0'; // Handle case where number was all zeros
            $uniqueNumbers[$normalizedNum] = true; // Use associative array to store unique values
        }
        
        // Return the count of unique numbers
        return count($uniqueNumbers);
    }
}