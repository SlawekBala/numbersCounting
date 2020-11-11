<?php

$fileName = readline("Podaj nazwę pliku textowego ");
echo  "\n";

//przykładowa tablica liczb
$array = array(
    16,22,42,44,
    1,17,23,38,
    8,19,34,40,
    1,3,13,23 ,
    3,20,29,49,
    17,28,37,42,
    3,24,35,49,
    14,31,37,42,
    5,18,27,46,
    7,10,18,33,
    6,13,37,40,
    6,12,24,28,
    6,12,18,33,
    18,19,31,36,
    2,29,34,49
);
$counts = array_count_values($array);
echo "Tak wygląda przekazana tablica ";
print_r($counts);

//parsuje tablice do zmiennej
$result = "liczba " . "\t" . " wystąpienie" . "\n";
foreach ($counts as $key => $value) {
    $result .= $key ." \t ". $value ."\n";
}


// otwarcie pliku do zapisu
$fp = fopen($fileName.".txt", "a+");

//zapisuja przygotowaną tablice ze zmiennej
// zapisanie danych do jsna to: json_encode($counts)
fputs($fp, $result);

// zamknięcie pliku
fclose($fp);
