<?php
class Solution {
    /**
     * @param Integer[] $students
     * @param Integer[] $sandwiches
     * @return Integer
     */
    function countStudents($students, $sandwiches) {
        $count0 = 0;  
        $count1 = 0; 
        
        // Count the number of students who prefer each type
        foreach ($students as $student) {
            if ($student == 0) {
                $count0++;
            } else {
                $count1++;
            }
        }
        
        // Process sandwiches
        foreach ($sandwiches as $sandwich) {
            if ($sandwich == 0 && $count0 > 0) {
                $count0--;
            } elseif ($sandwich == 1 && $count1 > 0) {
                $count1--;
            } else {
                // If no student wants this sandwich, return the remaining students
                return $count0 + $count1;
            }
        }
        
        return 0;
    }
}
