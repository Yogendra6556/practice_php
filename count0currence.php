<?php
function countOccurrences($array) {
    // Initialize an empty associative array to hold the counts
    $occurrences = [];

    // Loop through each element in the input array
    foreach ($array as $value) {
        // If the value is already a key in the occurrences array, increment its count
        if (isset($occurrences[$value])) {
            $occurrences[$value]++;
        } else {
            // Otherwise, initialize it with a count of 1
            $occurrences[$value] = 1;
        }
    }

    // Return the associative array with counts
    return $occurrences;
}

$exampleArray = [1, 2, 2, 3, 1, 4, 3, 3];
$result = countOccurrences($exampleArray);
print_r($result); // Output: Array ( [1] => 2 [2] => 2 [3] => 3 [4] => 1 )
?>