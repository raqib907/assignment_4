<!--4.Write a PHP function to check if a string contains only letters and whitespace.-->

<?php
function onlyLettersAndWhitespace($str) {
    return preg_match('/^[A-Za-z\s]+$/', $str);
}
$str1 = "Hello World";
$str2 = "Hello 321";
$str3 = "Hello, World!";

var_dump(onlyLettersAndWhitespace($str1)); // true
var_dump(onlyLettersAndWhitespace($str2)); // false
var_dump(onlyLettersAndWhitespace($str3)); // false
