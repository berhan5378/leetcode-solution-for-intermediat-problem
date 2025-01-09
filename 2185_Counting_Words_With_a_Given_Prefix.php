<?php

class Solution {

    /**
     * @param String[] $words
     * @param String $pref
     * @return Integer
     */
    function prefixCount($words, $pref) {
        $ans=0;
        foreach($words as $word) {
            if(strpos($word, $pref) === 0) $ans++;
        }
        return $ans;
    }
}