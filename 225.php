<?php

class MyStack {
    private $q1;
    private $q2;

    function __construct() {
        $this->q1 = [];
        $this->q2 = [];
    }

    /**
     * Push element onto stack.
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        array_push($this->q1, $x);
    }

    /**
     * Removes the element on top of the stack and returns it.
     * @return Integer
     */
    function pop() {
        while (count($this->q1) > 1) {
            array_push($this->q2, array_shift($this->q1));
        }
        $top = array_shift($this->q1);
        $this->swapQueues();
        return $top;
    }

    /**
     * Get the top element.
     * @return Integer
     */
    function top() {
        while (count($this->q1) > 1) {
            array_push($this->q2, array_shift($this->q1));
        }
        $top = array_shift($this->q1);
        array_push($this->q2, $top);
        $this->swapQueues();
        return $top;
    }

    /**
     * Returns whether the stack is empty.
     * @return Boolean
     */
    function empty() {
        return empty($this->q1);
    }

    /**
     * Swap the queues (so q1 always acts as the main stack storage)
     */
    private function swapQueues() {
        list($this->q1, $this->q2) = [$this->q2, $this->q1];
    }
}


/**
 * Your MyStack object will be instantiated and called as such:
 * $obj = MyStack();
 * $obj->push($x);
 * $ret_2 = $obj->pop();
 * $ret_3 = $obj->top();
 * $ret_4 = $obj->empty();
 */