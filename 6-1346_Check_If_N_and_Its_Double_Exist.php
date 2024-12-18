<?php

class Solution {

    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function checkIfExist($arr) {
        for ($i=0; $i <count( $arr); $i++) { 
            if($arr[$i]%2==0)
            {
                if(in_array($arr[$i]/2, $arr) && $arr[$i]/2!=$arr[$i]){
                    return true; 
                }elseif(in_array($arr[$i]/2, $arr) && $arr[$i]/2==$arr[$i])
                {
                    if(2<=count(array_keys($arr, $arr[$i])))
                    {
                        return true; 
                    }
                }
            }
        }
        return false;
    }
}