<?php
class RecentCounter {
    private $queue;
    /**
     */
    function __construct() {
        $this->queue = [];
    }
  
    /**
     * @param Integer $t
     * @return Integer
     */
    function ping($t) {
        array_push($this->queue, $t); // Add new request

        // Remove outdated requests
        while ($this->queue[0] < $t - 3000) {
            array_shift($this->queue);
        }

        return count($this->queue);
    }
}

/**
 * Your RecentCounter object will be instantiated and called as such:
 * $obj = RecentCounter();
 * $ret_1 = $obj->ping($t);
 */
 