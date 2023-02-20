<!--3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.-->

<?php
function remove_first_last($arr) {
    $length = count($arr);
    if ($length > 1) {
        $new_arr = array_slice($arr, 1, $length - 2);
        return $new_arr;
    } else {
        return array();
    }
}

$my_array = array('apple', 'banana', 'cherry', 'date', 'elderberry');
$new_array = remove_first_last($my_array);
print_r($new_array);

