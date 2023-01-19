<?php

//2. Grąžinkite visų skaičių, esančių $numbers masyve, sandaugą (1 balas)
$numbers = [
    [1, 3, 5],
    [55, 87, 100],
    [12],
    [],
];
function multiply(array $nums):int
{
    $newArray = array_map(function ($num){
        $multipliedNum = array_reduce($num, function($acc, $cv){
            return $acc * $cv;
        }, 1);
        return $multipliedNum;
    }, $nums
    );

    $finalSum = array_reduce($newArray, function($acc, $cv){
        return $acc * $cv;
    }, 1);

    return $finalSum;
}

print_r(multiply($numbers));