<!--5.Write a PHP function to find the second largest number in an array of numbers.-->

<?php
function findSecondLargest($numbers) {
    if (count($numbers) < 2) {
        return null;
    }
    $largest = $numbers[0];
    $secondLargest = $numbers[1];
    for ($i = 1; $i < count($numbers); $i++) {
        if ($numbers[$i] > $largest) {
            $secondLargest = $largest;
            $largest = $numbers[$i];
        } elseif ($numbers[$i] > $secondLargest && $numbers[$i] != $largest) {
            $secondLargest = $numbers[$i];
        }
    }
    return $secondLargest;
}
$numbers = [3, 6, 1, 7, 4, 9, 2, 5];
$secondLargest = findSecondLargest($numbers);
echo "The second largest number is: " . $secondLargest;
