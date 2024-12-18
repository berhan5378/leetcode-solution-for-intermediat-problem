<?php

class Solution {

    /**
     * @param String $sentence
     * @param String $searchWord
     * @return Integer
     */
    function isPrefixOfWord($sentence, $searchWord) {
        //convert a string into an array of words
        $arrayOfWord=explode(' ',$sentence);
        for ($i=0; $i <count($arrayOfWord) ; $i++) { 
             if(str_starts_with($arrayOfWord[$i], $searchWord))
             {
                return $i+1;
             }
        }
        return -1;
    }
}