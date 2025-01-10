<?php
class Solution {

    /**
     * @param String $s
     * @param Integer $repeatLimit
     * @return String
     */
    function repeatLimitedString($s, $repeatLimit) {
        $array =str_split($s);
        $maxHeap = new SplMaxHeap();
        $counts = array_count_values($array); 

        foreach ($counts as $valueOfarray => $keyOfarray) {
            $maxHeap->insert([$valueOfarray,$keyOfarray]);
        }  

        $s="";
        while(!$maxHeap->isEmpty()) { 

            [$value,$key]=$maxHeap->extract();
            $diff=$key-$repeatLimit;
            if($diff>=0)
            {
                $s.=str_repeat($value, $repeatLimit);
                if(!$maxHeap->isEmpty())
                { 
                    if($diff!=0){
                        [$Secondvalue,$Secondkey]=$maxHeap->extract();
                        $s.=$Secondvalue;
                        $maxHeap->insert([$value,$diff]);
                        if($Secondkey>1)
                        {
                            $maxHeap->insert([$Secondvalue,$Secondkey-1]);
                        }
                    }
                }
                  
            }
            else 
            {
                $s.=str_repeat($value, $key);
            }
        }
         return $s;
    }
}