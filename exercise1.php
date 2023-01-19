<?php
//1. Grąžinkite visų lyginių skaičių, esančių $numbers masyve, sumą (1 balas)
$numbers = [
    15,
    55,
    66,
    91,
    100,
    995,
    17,
    550,
];

function sum(array $nums):int
{
    $sumOfEqualNums = 0;
    foreach ($nums as $num){
        if ($num % 2 === 0){
            $sumOfEqualNums += $num;
        }
    }
    return $sumOfEqualNums;
}

print_r(sum($numbers));