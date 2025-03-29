<?php
function sumArray($numbers) {
    // Initialize the sum variable
    $sum = 0;

    // Loop through each number in the array and add it to the sum
    foreach ($numbers as $number) {
        $sum += $number;
    }

    // Return the total sum
    return $sum;
}

// Example usage:
$exampleArray = [1, 2, 3, 4, 5];
$result = sumArray($exampleArray);
echo "The sum of the array is: " . $result; // Output: The sum of the array is: 15
?>