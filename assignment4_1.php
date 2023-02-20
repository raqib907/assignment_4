
<!--1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)-->


<?php
function sort_strings_by_length($strings) {
    usort($strings, function($a, $b) {
        return strlen($a) - strlen($b);
    });
    return $strings;
}
$strings = array("apple","mango","orange","jackfruits","coconut","guava");
$sorted_strings = sort_strings_by_length($strings);
print_r($sorted_strings);

