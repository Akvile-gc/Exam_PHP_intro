<?php
//5. Parašykite programą, kuri Jūsų susigalvotus duomenis paimtų iš failo ir atspausdintų terminale. (1.5 balas)

function exercise5(string $file)
{
    $data = file_get_contents($file);
    $deserializedData = json_decode($data, true);
    print_r($deserializedData);
}

exercise5('./cities.json');