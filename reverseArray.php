<?php
function reverseArray($array) {
    // Use array_reverse to reverse the array
    return array_reverse($array);
}

$exampleArray = [1, 2, 3, 4, 5];
$result = reverseArray($exampleArray);
print_r($result); // Output: Array ( [0] => 5 [1] => 4 [2] => 3 [3] => 2 [4] => 1 )
?>