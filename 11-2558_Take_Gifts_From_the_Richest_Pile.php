<?php

class Solution {

    /**
     * @param Integer[] $gifts
     * @param Integer $k
     * @return Integer
     */
    function pickGifts($gifts, $k) {
        // Convert the array into a max heap
        $maxHeap = new SplMaxHeap();
        foreach ($gifts as $gift) {
            $maxHeap->insert($gift);
        }

        // Perform the operation `k` times
        for ($i = 0; $i < $k; $i++) {
            // Extract the maximum value from the heap
            $maxGifts = $maxHeap->extract();

            // Perform the operation to get the remaining gifts
            $remainingGifts = floor(sqrt($maxGifts));

            // Add the remaining gifts back into the heap
            $maxHeap->insert($remainingGifts);
        }

        // Calculate the sum of all remaining elements in the heap
        $sum = 0;
        while (!$maxHeap->isEmpty()) {
            $sum += $maxHeap->extract();
        }

        return $sum;
    }
}
