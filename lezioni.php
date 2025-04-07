<?php
// lezione 02.04

// $username = 'Federico'; 
// questa è una variabile, il punto  virgola è obbligatorio sono accetati numeri e underscore
// i numeri non possono essere di apertura o chiusura, l'underscore può;

//! sbagliati
// Examples of invalid variable names: $1username, $user!name, $user-name, $user name, $user@name, etc.

//* giusti 
// Examples of valid variable declarations:
// $username = '';
// $user_name = '';
// $userName = '';
// $userName1 = '';
// $userName_1 = '';
// $userName_1_2 = '';
// $userName1234567890 = '';
// $_username = '';
// $_user_name = '';
// $_user_name_1 = '';
// $_user_name_1_2 = '';
// $_user_name1234567890 = '';

// le variabili sono scope locali, mai globali 

// abbiamo anche le costanti in php 
// const USERNAME = 'Federico'; // non possono essere modificate, sono scritte in maiuscolo per convenzione
// esiste anche un vecchio metodo define (USERNAME, Federico) 

// le variabili hanno tipizzazione debole, ovvero può mutare nel tempo 

// in php il tag di apertura è obbligatorio mentre quello di chiusura no, solo se sto in un file con estensione .php 

// 8 tipi di dato: predefiniti, composti o user defined, speciali 

// predefiniti o primitivi: sono i tipi di dato che il linguaggio implementa in maniera nativa Integer: numeri interi. Float: numeri decimali. Booleani, stringhe 

// differenza tra singolo o doppio apice: 

// si usa echo per stampare qualcosa nella console, lo leggo nel terminale scrivendo php e poi il nome del file 
// \serve per considerare il carattere successivo come normale, non come un carattere speciale, ad esempio per le virgolette o per le variabili, chiamato escape character

// .$name serve per concatenare le stringhe, il punto è l'operatore di concatenazione, non serve il + come in altri linguaggi

// per mandare a capo si usa \n, per il tab \t, per il ritorno a capo \r, per il backslash \\

// $name = 'Mario'; // Definizione della variabile $name
// $site_name = 'PHP Academy'; // Definizione della variabile $site_name
// echo "Ciao $name, benvenuto in $site_name\n"; // con le virgolette doppie, le variabili vengono interpretate

// tipi di dato composti: array, oggetti, callable, iterable, generator, resource
// tipi di dato che scriviamo noi programmatori.

// array: è tipo di dato array, non oggetto come js, array omogenei: ['a', 'b', 'c'], array eterogenei: ['a', 1, true, 1.5]. hanno anche loro un vecchio modo di scriverli con il metodo array().anche in php il primo indice che troviamo è 0

// echo "stampa solo i dati predefiniti, non gli array, per stampare gli array si usa print_r(\$array) o var_dump(\$array), var_dump stampa anche il tipo di dato e la lunghezza dell'array";
// print_r($array) stampa solo il contenuto dell'array, non il tipo di dato e la lunghezza

// array associativi: sono array in cui l'indice è una stringa, ad esempio $array = ['nome' => 'Federico', 'cognome' => 'Rossi', 'eta' => 30]; per accedere all'elemento si usa $array['nome']

// operatrori matematici: +, -, *, /, %, ** (esponenziale), ++ (incremento), -- (decremento), +=, -=, *=, /=, %=, **=
// gli operatori di incremento e decremento possono essere sia prefissi che suffissi, ++$a o $a++, --$a o $a--, il primo incrementa prima e poi restituisce il valore, il secondo restituisce il valore e poi incrementa
// operatori di confronto: ==, === (identico), !=, !== (non identico), <, >, <=, >=, <=> (spaceship operator, restituisce -1 se il primo è minore del secondo, 0 se sono uguali e 1 se il primo è maggiore del secondo)
// operatori logici: &&, ||, !, xor (restituisce true se uno dei due è true ma non entrambi non come js che restituisce il valore, trasforma in booleano)  
// ! è un bang operator ovvero inverte il risultato, se è true diventa false e viceversa

// con la sequenza il codice viene eseguito riga dopo riga
// con la selezione il codice viene eseguito in base a una condizione, se è vera esegue una parte di codice, altrimenti un'altra parte di codice
// if ($a == $b) { echo 'a è uguale a b'; } elseif ($a > $b) { echo 'a è maggiore di b'; } else { echo 'a è minore di b'; }
// switch serve per confrontare più condizioni, è come un if ma più semplice da leggere, non serve il break come in js, se non lo metti continua a eseguire il codice anche se trova una condizione vera
// iterazioni o cicli: for, while, do while, foreach (solo per gli array)
// for: quando sappiamo il numero preciso di iterazioni da fare, ad esempio per ($i = 0; $i < 10; $i++) { echo $i; }
// foreach: sintassi giusta per gli array, foreach ($array as $key => $value) { echo $key . ' => ' . $value; } // per stampare l'array associativo
// as: keyword per associare la chiave al valore, => è l'operatore di associazione, $key è la chiave e $value è il valore
// per stampare un array in una stringa uso implode, implode(',', $array) // implode è una funzione che unisce gli elementi di un array in una stringa, il primo parametro è il separatore e il secondo è l'array
// explode è l'opposto di implode, separa una stringa in un array, explode(',', $string) // il primo parametro è il separatore e il secondo è la stringa

// lezione 03.04

// funzione: porzione di codice che può essere richiamata più volte, ha un nome e può avere dei parametri, può restituire un valore o meno, la sintassi è function nomeFunzione($parametro1, $parametro2) { // codice } per richiamarla si usa nomeFunzione($argomento1, $argomento2)

// built-in function: echo, var_dump(), print_r().

// user function: funzioni scritte da noi programmatori.
// function nomeFunzione($parametro) {
    // codice che deve essere eseguito quando invochiamo la funzione.
// }

// invocazione della funzione
// nomeFunzione('parametroReale'); // passiamo il parametro reale alla funzione, il parametro formale è quello che abbiamo scritto nella funzione, il parametro reale è quello che passiamo quando invochiamo la funzione

// function saluta(){
    // echo 'Ciao a tutti!';
// }

// saluta(); // invocazione della funzione, stampa Ciao a tutti!

// function sum($num1, $num2){
//     echo $num1 + $num2;
// }

// sum(5,4);

// passaggio per valore: quando passiamo un valore a una funzione, il valore viene copiato in una nuova variabile, quindi se modifichiamo la variabile dentro la funzione non viene modificata anche fuori dalla funzione
// $val = 3;
// passaggio per valore: passo una copia del contenuto della variabile, se la stampo dopo il richiamo della funzione ci da comunque 3, ovvero il valore iniziale.
// function increment($num) {
//     $num++;
//     echo $num;
// }

// echo $val . "\n";
// increment($val);

// passaggio per riferimento: quando passiamo una variabile a una funzione, la funzione può modificare il valore della variabile originale, quindi se modifichiamo la variabile dentro la funzione viene modificata anche fuori dalla funzione

// $val = 3;

// function increment(&$num) {
//     $num++;
//     echo $num . "\n";
// }

// echo $val . "\n";
// increment($val);
// echo $val . "\n";

// parametri di default: quando definiamo una funzione possiamo specificare dei valori di default per i parametri, in questo modo se non passiamo un valore alla funzione verrà usato il valore di default, ad esempio function saluta($nome = 'Mario') { echo "Ciao $nome"; }

// basta solo aggiungre il valore al parametro formale interno alla funzione

// parametri variabili: quando non sappiamo quanti parametri passeremo alla funzione, possiamo usare i tre puntini ... prima del nome del parametro, in questo modo la funzione accetterà un numero variabile di parametri, ad esempio function somma(...$numeri) { $somma = 0; foreach ($numeri as $numero) { $somma += $numero; } return $somma; }
// splat operator in php

// function media(...$numbers){
//     $sum=0;
//     foreach($numbers as $number){
//         $sum+=$number;
//     }
//     echo "La media è: " . $sum/count($numbers) . "\n";
// }

// media(1,2,3,4,5,6,7,8,9,10);

// function sum($num1, $num2){
//     return $num1 + $num2;
// }

// $somma = sum(5,4); 
// echo "La somma è: " . $somma . "\n";

// esercizio: se la password inserita dall'utente è valida seguendo i criteri:
// 1. Deve essere lunga almeno 8 caratteri
// 2. Deve contenere almeno un numero
// 3. Deve contenere almeno una lettera maiuscola
// 4. Deve contenere almeno un carattere speciale (!@#$%^&*)

// $firstRule = false; // se la regola sarà rispettata, il valore sarà true
// $secondRule = false;
// $thirdRule = false;
// $fourthRule = false;

// prendiamo la password inserita dall'utente
// $password = readline("Inserisci la password: ");
// la funzione readline legge una riga di input dall'utente, il valore inserito viene salvato nella variabile $password
// echo "La password inserita è: $password\n";
// var_dump(strlen($password));
// prima regola: lunghezza minima 8 caratteri

// if (strlen($password) >= 8) {
//     $firstRule = true;
// }

// seconda regola: deve contenere almeno un numero

// for ($i = 0; $i < strlen($password); $i++) {
//     if (is_numeric($password[$i])) {
//         $secondRule = true;
//     }
// }

// if (preg_match('/[0-9]/', $password)) {
//     $secondRule = true;
// } else {
//     echo "La password deve contenere almeno un numero\n";
// }

// terza regola: deve contenere almeno una lettera maiuscola

// for ($i = 0; $i < strlen($password); $i++) {
//     if (ctype_upper($password[$i])) {
//         $thirdRule = true;
//     }
// }

// quarta regola: deve contenere almeno un carattere speciale (!@#$%^&*)

// $specialChars = ['!','@','#','$','%','^','&','*'];

// for ($i = 0; $i < strlen($password); $i++) {
//     if (in_array($password[$i], $specialChars)) {
//         $fourthRule = true;
//     }
// }

// OOP - Object Oriented Programming, programmazione orientata agli oggetti, paradigma di progettazione che si basa sui concetti di classe e oggetto.
// classe: modello che rappresenta un'entità reale.

// $person = [
//     'name' => 'Mario',
//     'surname' => 'Rossi',
//     'age' => 25,
// ];

// $person2 = [
//     'name' => 'Luigi',
//     'surname' => 'Verdi',
//     'age' => 30,
//     'city' => 'Milano',
// ];

// $person3 = [
//     'name' => 'Anna',
//     'surname' => 'Bianchi',
//     'age' => 24,
//     'city' => 'Roma',
//     'job' => 'Infermiera',
// ];

// function printPerson($persona) {
//     foreach ($persona as $key => $property) {
//         echo "$key: $property\n";
//     }
// }

// printPerson($person);
// printPerson($person2);
// printPerson($person3);

// lezione 07.04

// creare una classe: keyword class, nome della classe con lettera maiuscola e al singolare, parentesi graffe

class Person {
    // attributi: caratteristiche comuni

    public $name;
    public $surname;
    public $age;
    // per metodi statici usiamo la keyword static, per accedere a questi metodi usiamo la keyword self:: e non $this->
    public static $counter = 0;

    // metotodo costruttore: permette di generare un oggetto di questa classe, keyword public, function __construct, nome obbligatorio dato da php
    public function __construct($nome, $cognome, $età) {
        // codice per inizializzare gli attributi
        $this->name = $nome; // $this è una variabile speciale che fa riferimento all'oggetto corrente, pseudo-variabile
        $this->surname = $cognome;
        $this->age = $età;
        // $this->introduceYou(); // chiamiamo il metodo introduceYou all'interno del costruttore, così quando creiamo un oggetto di questa classe viene eseguito automaticamente
        self::$counter++; // incrementiamo il contatore statico ogni volta che creiamo un oggetto di questa classe
    }
    // metodi: azioni comuni
    public function introduceYou() {
        // codice per presentarsi
        echo "Ciao, sono $this->name $this->surname e ho $this->age anni.\n";
    }

    public static function howManyPeople() {
        echo "Hai creato". " " . self::$counter . " " . "persone\n" ; // restituiamo il valore del contatore statico
    }
}

echo Person::$counter . "\n"; // accediamo all'attributo statico counter della classe Person prima di creare oggetti
// instanziare un oggetto: keyword new, nome della classe, parentesi tonde, passiamo i parametri al costruttore
$person1 = new Person('Mario', 'Rossi', 25);
// var_dump($person1); // stampa l'oggetto creato, vediamo gli attributi e i metodi disponibili
$person2 = new Person('Luigi', 'Verdi', 30);
$person3 = new Person('Anna', 'Bianchi', 24);
// echo $person1->name . "\n"; // accediamo all'attributo name dell'oggetto person1
// $person1->introduceYou(); // chiamiamo il metodo introduceYou dell'oggetto person1
// attributi e metodi statici: li usiamo principalmente per i conteggi
echo $person1::$counter . "\n"; // accediamo all'attributo statico counter della classe Person, non dell'oggetto
// echo $person1->counter . "\n"; // non possiamo accedere all'attributo statico counter dell'oggetto person1, dobbiamo usare la classe Person
Person::howManyPeople(); // chiamiamo il metodo statico howManyPeople della classe Person, non dell'oggetto

?>