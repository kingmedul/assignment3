<?php

/**
 * @Problem 03
 * Create an array called $grades with the following values: 85, 92, 78, 88, 95. Write a PHP function 
 * which takes "$grades" as an argument to sort the array in descending order and print the sorted grades
 *  as array.
 */

$grades = [85, 92, 78, 88, 95];


// Function to compare grades in descending order
function sortedByDescendingOrder($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a > $b) ? -1 : 1;
}

usort($grades, 'sortedByDescendingOrder');

// Print the sorted grades as an array
print_r($grades);
