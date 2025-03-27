<?php

class Solution {
    /**
     * @param Integer[] $tickets
     * @param Integer $k
     * @return Integer
     */
    function timeRequiredToBuy($tickets, $k) {
        $time = 0;
        $target_tickets = $tickets[$k];

        foreach ($tickets as $i => $t) {
            if ($i <= $k) {
                $time += min($t, $target_tickets);
            } else {
                $time += min($t, $target_tickets - 1);
            }
        }

        return $time;
    }
}
