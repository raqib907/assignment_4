<?php
function evenOdd($number){
if($number%2==0){
    return true;
}else{
    return false;
     }
}
$number=50;

if (evenOdd($number)){
    echo "{$number} is an Even Number";
}else{
    echo "{$number} is an Odd Number";
}