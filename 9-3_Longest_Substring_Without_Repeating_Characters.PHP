<?php
class Solution {
    /**
    * @param String $s
    * @return Integer
    */
    function lengthOfLongestSubstring($s) {
        $start = 0;    //current starting position of search
        $length = 0; //current max length of substring
        for($i = 0; $i < strlen($s); $i++){
            $char = $s[$i];
            if(isset($arr[$char]) && $arr[$char] >= $start){
                $start = $arr[$char] + 1;
            } elseif($i - $start === $length) {
                $length++;//this update when length of substring befor update start== length of substring after update start
            }
            $arr[$char] = $i;
        }
        return $length;
    }
}