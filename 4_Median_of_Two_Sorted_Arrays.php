<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $merge= array_merge($nums1,$nums2);
        sort($merge);
        if(($n=count($merge))%2!=0)return $merge[($n+1)/2-1];
        return ($merge[$n/2-1] + $merge[$n/2])/2;
    }
}