<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortArrayByParity($nums) {
        $key=0;
        foreach($nums as $i=>$val){
            if($val%2===0){
                $temp=$nums[$key];
                $nums[$key]=$val;
                $nums[$i]=$temp;
                $key++;
            } 
        }
        return $nums;
    }
}