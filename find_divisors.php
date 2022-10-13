<?php

    /*
     * A function used to print out an
     * arbitrary array.
     *
     * @param array $array The arbitrary array
     *
     * @return void
     */
    function printArray(array $array): void {
        foreach($array as $index => $element) {
            echo "$index => $element \n";
        }
    }

    /*
     * A function used to calculate all the
     * divisors of a given integer.
     *
     * @param int $number The given integer
     *
     * @return array
     */
    function getDivisors(int $number): array {

        $iterator = 1;
        $divisors = array();

        do {
            if($number % $iterator == 0) {
                $divisors[] = $iterator;
            }
            $iterator = $iterator + 1;
        } while($iterator <= $number);

        return $divisors;
    }

    // Run the code
    printArray(getDivisors(100));
