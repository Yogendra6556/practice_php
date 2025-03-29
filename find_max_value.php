<?php
function findMaxValue($numbers) {
    // Check if the array is empty
    if (empty($numbers)) {
        return null; // or you can return an appropriate value or throw an exception
    }

    // Initialize the max variable with the first element of the array
    $max = $numbers[0];

    // Loop through each number in the array to find the maximum
    foreach ($numbers as $number) {
        if ($number > $max) {
            $max = $number;
        }
    }

    // Return the maximum value
    return $max;
}

// Example usage:
$exampleArray = [3, 5, 1, 8, 2];
$result = findMaxValue($exampleArray);
echo "The maximum value in the array is: " . $result; // Output: The maximum value in the array is: 8
?>