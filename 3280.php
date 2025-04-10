<?php

class Solution {

    /**
     * @param String $date
     * @return String
     */
    function convertDateToBinary($date) {
        list($year, $month, $day) = explode('-', $date);
        
        $yearBinary = decbin((int)$year);
        $monthBinary = decbin((int)$month);
        $dayBinary = decbin((int)$day);
        
        return "$yearBinary-$monthBinary-$dayBinary";
    }
}
