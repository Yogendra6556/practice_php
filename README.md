#  practice_php
# sumArray that takes an array of numbers and returns the sum of its elements
<?php
function sumArray($numbers) {
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }

    return $sum;
}

$exampleArray = [1, 2, 3, 4, 5];
$result = sumArray($exampleArray);
echo "The sum of the array is: " . $result; // Output: The sum of the array is: 15
?>

# function find MaxValue that takes an array of numbers and returns the maximum value
<?php
function findMaxValue($numbers) {

    if (empty($numbers)) {
        return null;
    }

    $max = $numbers[0];

    foreach ($numbers as $number) {
        if ($number > $max) {
            $max = $number;
        }
    }

    return $max;
}

$exampleArray = [3, 5, 1, 8, 2];
$result = findMaxValue($exampleArray);
echo "The maximum value in the array is: " . $result; // Output: The maximum value in the array is: 8
?>

#  merge Arrays that takes two arrays and returns a single array containing all elements from both arrays
<?php
function mergeArrays($array1, $array2) {

    return array_merge($array1, $array2);
}

$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$result = mergeArrays($array1, $array2);
print_r($result); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 )
?>

# countOccurrences that takes an array and returns an associative array where the keys are the unique values from the input array and the values are their counts
<?php
function countOccurrences($array) {

    $occurrences = [];

    foreach ($array as $value) {
 
        if (isset($occurrences[$value])) {
            $occurrences[$value]++;
        } else {

            $occurrences[$value] = 1;
        }
    }

    return $occurrences;
}

$exampleArray = [1, 2, 2, 3, 1, 4, 3, 3];
$result = countOccurrences($exampleArray);
print_r($result); // Output: Array ( [1] => 2 [2] => 2 [3] => 3 [4] => 1 )
?>

# removeDuplicates that takes an array and returns a new array with duplicate values removed
<?php
function removeDuplicates($array) {

    return array_values(array_unique($array));
}

$exampleArray = [1, 2, 2, 3, 4, 4, 5, 1];
$result = removeDuplicates($exampleArray);
print_r($result); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
?>

# Towaction reverseArray that takes an array and returns a new array with the elements in reverse order
<?php
function reverseArray($array) {

    return array_reverse($array);
}

$exampleArray = [1, 2, 3, 4, 5];
$result = reverseArray($exampleArray);
print_r($result); // Output: Array ( [0] => 5 [1] => 4 [2] => 3 [3] => 2 [4] => 1 )
?>

