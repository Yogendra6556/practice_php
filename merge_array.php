<?php
function mergeArrays($array1, $array2) {
    // Use array_merge to combine both arrays
    return array_merge($array1, $array2);
}

// Example usage:
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$result = mergeArrays($array1, $array2);
print_r($result); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 )
?>