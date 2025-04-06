<?php

// Scrivi una funzione in PHP che permetta all'utente di giocare ad un gioco in cui deve indovinare un numero segreto generato casualmente tra 1 e 50. 
// HINT trova l'equivalente di Math.random() in PHP. 

// L'utente ha 5 tentativi per indovinare il numero.
// Dopo ogni tentativo, il programma deve fornire un suggerimento:
// Se il numero inserito è troppo basso, il programma deve stampare: "Numero troppo basso".
// Se il numero inserito è troppo alto, il programma deve stampare: "Numero troppo alto".
// Se il numero inserito è corretto, esce dal ciclo e stampa un messaggio di vittoria: "Complimenti! Hai indovinato il numero!".
// Se l'utente esaurisce i 5 tentativi senza indovinare, il programma deve rivelare il numero segreto e terminare.

// Dobbiamo utilizzare un ciclo do-while per gestire i tentativi dell'utente.
function gioca() {
    $numeroSegreto = rand(1, 50); // Genera un numero segreto tra 1 e 50 con la funzione rand()
    $tentativi = 5; // Numero di tentativi disponibili

    do {
        $input = readline("Inserisci un numero tra 1 e 50: "); // Chiede all'utente di inserire un numero

        // Controlla se l'input è un numero valido
        if (!is_numeric($input)) {
            echo "Per favore, inserisci un numero valido.\n";
            continue; // Salta il resto del ciclo e richiede un nuovo input
        }

        $numeroUtente = (int)$input; // Converte l'input in un numero intero
        $tentativi--; // Decrementa il numero di tentativi rimasti

        if ($numeroUtente < $numeroSegreto) {
            echo "Numero troppo basso. Hai ancora $tentativi tentativi.\n";
        } elseif ($numeroUtente > $numeroSegreto) {
            echo "Numero troppo alto. Hai ancora $tentativi tentativi.\n";
        } else {
            echo "Complimenti! Hai indovinato il numero!\n";
            break; // Esce dal ciclo se l'utente indovina il numero
        }
    } while ($tentativi > 0); // Continua finché ci sono tentativi disponibili

    if ($tentativi == 0) {
        echo "Hai esaurito i tentativi. Il numero segreto era $numeroSegreto.\n"; // Rivela il numero segreto se l'utente esaurisce i tentativi
    }
}

gioca();