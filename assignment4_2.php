<!--2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.-->
<?php
function concatenateFromEnd($string1, $string2) {
    $string2Length = strlen($string2);
    $string1End = substr($string1, -$string2Length);
    return $string1 . $string2;
}
$string1 = "Hello, world!";
$string2 = "Goodbye";
$result = concatenateFromEnd($string1, $string2);
echo $result; //Hello, world!Goodbye


