<?php
//4. Pakoreguokite 3 užduotį taip, kad ji duomenis rašytų ne į terminalą, o spausdintų į failą. (1.5 balas)

$holidays = [
    [
        'title' => 'Romantic Paris',
        'destination' => 'Paris',
        'price' => 1500,
        'tourists' => 55,
    ],
    [
        'title' => 'Amazing New York',
        'destination' => 'New York',
        'price' => 2699,
        'tourists' => 21,
    ],
    [
        'title' => 'Spectacular Sydney',
        'destination' => 'Sydney',
        'price' => 4130,
        'tourists' => 9,
    ],
    [
        'title' => 'Hidden Paris',
        'destination' => 'Paris',
        'price' => 1700,
        'tourists' => 10,
    ],
    [
        'title' => 'Emperors of the past',
        'destination' => 'Beijing',
        'price' => null,
        'tourists' => 10,
    ],
];

function tripSummary(array $trips): void
{
    $textFileName = './holiday_summary.txt';
    $jsonFileName = './holiday_summary.json';

    foreach ($trips as $currentKey => $currentTrip) {
        if ($currentTrip['price'] !== null) {
            foreach ($trips as $searchKey => $searchTrip) {
                if ($searchTrip['destination'] == $currentTrip['destination']) {
                    if ($searchKey != $currentKey) {

                        $currentTrip['title'] = $currentTrip['title'] . ', ' . $searchTrip['title'];
                        $currentTrip['price'] = $currentTrip['price'] + $searchTrip['price'];
                        $currentTrip['tourists'] = $currentTrip['tourists'] + $searchTrip['tourists'];
                        unset($searchTrip);
                    }
                }
            }
//to .txt file
            $destination = 'Destination: ' . $currentTrip['destination'] . PHP_EOL;
            $titles = 'Titles: ' . $currentTrip['title'] . PHP_EOL;
            $total = 'Total: ' . $currentTrip['price'] * $currentTrip['tourists'] . PHP_EOL;
            $separation = '************' . PHP_EOL;
            file_put_contents($textFileName, $destination . $titles . $total . $separation, FILE_APPEND);

            //to .json file
//            $holidaySummary = [];
//            $holidaySummary[] = $destination;
//            $holidaySummary[] = $titles;
//            $holidaySummary[] = $total;
//            $holidaySummary[] = $separation;
//            $serializedData = json_encode($holidaySummary, JSON_PRETTY_PRINT);
//            file_put_contents($jsonFileName, $serializedData, FILE_APPEND);


        }
    }
}

tripSummary($holidays);