<?php

// esercizio 1

// Definizione delle variabili
$integer = 42;
$float = 3.14;
$string = "Hello, world!";
$boolean = true;

// Utilizzo di var_dump() per mostrare il tipo di dato
var_dump($integer); 
var_dump($float);   
var_dump($string); 
var_dump($boolean);

// trasformazione costanti
const INTEGER = 42;
const FLOAT = 3.14;
const STRING = "Hello, world!";
const BOOLEAN = true;

// VAR_DUMP() per mostrare il tipo di dato delle costanti
var_dump(INTEGER, FLOAT, STRING, BOOLEAN);

// esercizio 2

// Correzione delle variabili
$text1 = "Marco";
$text2 = "hai";
$text3 = "sete";
$text4 = "?";
$text5 = "Perché";
$text6 = "hai";
$text7 = "bevuto";
$text8 = "tutto";

// Stampa della stringa corretta
echo "$text1 $text2 $text3 $text4 $text5 $text6 $text7 $text8." . "\n";

// esercizio 3

// Definizione degli array
$words1 = [
    'vostro', 67, 'essere', 'colle', 'mi', 'sempre', [
        'oscura', 'era', 89, ['mezzo', 'E'],
        'ritrovai', 'per'
    ],
    'diritta'
];
$words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'possa',
    'elemento3' => [
        'Virgilio',
        'Favore',
        'favore',
        ['Fortuna']
    ],
    'fine' => '!'
];

// Creazione della variabile $results
$results = $words1[6][3][1] . " " . $words2['elemento2'] . " la " . $words2['elemento3'][3][0] . " " . $words1[2] . " " . $words1[5] . " a " . $words1[0] . " " . $words2['elemento3'][2] . $words2['fine'];

// Stampa del risultato
echo $results . "\n";

// esercizio 4

$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'M'],
    ['name' => 'Angela', 'surname' => 'Cardone', 'gender' => 'NB'],
    ['name' => 'Philip', 'surname' => 'Coulson', 'gender' => 'F']
];

// Iterazione sull'array $users
foreach ($users as $user) {
    if ($user['gender'] == 'M') {
        echo "Buongiorno Sig. " . $user['name'] . " " . $user['surname'] . "\n";
    } else if ($user['gender'] == 'F') {
        echo "Buongiorno Sig.ra " . $user['name'] . " " . $user['surname'] . "\n";
    } else {
        echo "Buongiorno " . $user['name'] . " " . $user['surname'] . "\n";
    }
}

// esercizio 5

$numeri = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$somma = 0;
$conteggio = 0;

foreach ($numeri as $numero) {
    if ($numero % 2 === 0) { 
        $somma += $numero;
        $conteggio++;
    }
}

if ($conteggio > 0) {
    $media = $somma / $conteggio;
    echo "La media dei numeri pari è: $media" . "\n";
} else {
    echo "Non ci sono numeri pari nell'array." . "\n";
}

// esercizio 6

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "HACKADEMY\n";
    } else if ($i % 3 == 0) {
        echo "PHP\n";
    } else if ($i % 5 == 0) {
        echo "JAVASCRIPT\n";
    } else {
        echo "$i\n";
    }
}
?>