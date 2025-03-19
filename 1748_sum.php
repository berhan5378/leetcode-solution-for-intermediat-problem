<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function sumOfUnique($nums) {
        $count=array_count_values($nums);
        $sum=0; $temp=-1;
       foreach($count as $i=>$val) {
        if($val === 1 && $temp !== $i) {
            $temp = $i;
            $sum+=$i;
        }
       }
       return $sum;
    }
}