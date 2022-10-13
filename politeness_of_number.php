<?php

    /*
     * A function used to calculate the
     * politeness of a given integer.
     *
     * @param int $number The given integer
     *
     * @return int
     */
    function getPoliteness(int $number): int {

        $result = 1;

        // Eliminate all even prime factors of $number
        while($number % 2 == 0) {
            $number /= 2;
        }

        /*
         * $number must be odd by now, iterate for each
         * odd number until sqrt($number) is reached
         */
        for ($iterator = 3; $iterator * $iterator <= $number; $iterator += 2)
        {
            $dividerCount = 0;
            
            // Start counting number of odd divisors 
            while($number % $iterator == 0) {
                $number /= $iterator;
                ++$dividerCount;
            }

            $result *= $dividerCount + 1;
        }
        
        if($number > 2) {
            $result *= 2;
        }

        return $result - 1;
    }

    // Run the code
    echo getPoliteness(9);
