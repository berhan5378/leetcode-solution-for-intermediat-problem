<?php

class Solution {

    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function uniqueOccurrences($arr) {
        $count=array_count_values($arr);
        sort($count);
        for($i=1;$i < count($count); $i++){
            if($count[$i-1] === $count[$i]) return false;
        }
        return true;
    }
}