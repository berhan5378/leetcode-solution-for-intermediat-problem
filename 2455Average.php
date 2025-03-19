<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function averageValue($nums) {
        $sum=$count=0;
        foreach($nums as $num) {
            if($num%3 === 0 && $num%2 === 0){
                $sum+=$num;
                $count++;
            }
        }
        return floor(($sum)?$sum/$count:0);
    }
}