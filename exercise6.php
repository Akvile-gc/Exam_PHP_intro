<?php
//6. Parašykite programą, kuri per argumentų padavimą terminale paleidžiant funkciją juos priimtų ir
// juos sudaugintų tarpusavyje ir pakeltu kvadratu.
// Atkreipkite dėmesį, kad jeigu argumentas yra paduodamas ne skaičius, reikia,
// kad terminale gautumėme atitinkamą klaidos kodą ir pranešimą. (2 balai)
function exercise6():void
{
    $number1 = readline('Enter 1\'st number ');
    $number2 = readline('Enter 2\'nd number ');
    if (is_numeric($number1)){
        if (is_numeric($number2)){
            echo ($number1 * $number2) ** 2;
        } else {
            echo 'One or both entries are not numbers. Please enter numbers.';
        }
    } else {
        echo 'One or both entries are not numbers. Please enter numbers.';
    };
}

exercise6();