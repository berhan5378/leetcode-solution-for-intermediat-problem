<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function waysToSplitArray($nums) {
        $total=array_sum($nums); $ls=$ans=0;
        $n=count($nums)-1;
        for ($i=0; $i < $n; $i++) { 
             $ls=$ls+$nums[$i];
             $rs=$total-$ls;
           if($ls>=$rs)$ans++;
        }
        return $ans;
    }
}