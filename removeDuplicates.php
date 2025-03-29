<?php
function removeDuplicates($array) {
    // Use array_unique to remove duplicate values
    return array_values(array_unique($array));
}

$exampleArray = [1, 2, 2, 3, 4, 4, 5, 1];
$result = removeDuplicates($exampleArray);
print_r($result); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
?>