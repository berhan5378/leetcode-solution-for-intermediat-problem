<?php
class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        $i=strpos($haystack,$needle);
        return ($i!==false)?$i:-1;
    }
}