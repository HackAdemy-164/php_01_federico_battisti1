<?php

// Funzione per gestire il gioco
function gestisciTentativo($numeroSegreto, $tentativi) {
    $input = readline("Inserisci un numero tra 1 e 50: "); // Chiede all'utente di inserire un numero

    // Controlla se l'input è un numero valido
    if (!is_numeric($input)) {
        echo "Per favore, inserisci un numero valido.\n";
        return $tentativi; // Ritorna il numero di tentativi senza decrementarlo
    }

    $numeroUtente = (int)$input; // Converte l'input in un numero intero
    $tentativi--; // Decrementa il numero di tentativi rimasti

    if ($numeroUtente < $numeroSegreto) {
        echo "Numero troppo basso. Hai ancora $tentativi tentativi.\n";
    } elseif ($numeroUtente > $numeroSegreto) {
        echo "Numero troppo alto. Hai ancora $tentativi tentativi.\n";
    } else {
        echo "Complimenti! Hai indovinato il numero!\n";
        return 0; // Indica che il numero è stato indovinato
    }

    return $tentativi; // Ritorna il numero di tentativi aggiornato
}

// Funzione principale per il gioco
function gioca() {
    $numeroSegreto = rand(1, 50); // Genera un numero segreto tra 1 e 50 con la funzione rand()
    $tentativi = 5; // Numero di tentativi disponibili

    do {
        $tentativi = gestisciTentativo($numeroSegreto, $tentativi); // Gestisce il tentativo e aggiorna i tentativi
        if ($tentativi == 0) {
            break; // Esce dal ciclo se i tentativi sono esauriti
        }
    } while ($tentativi > 0);

    if ($tentativi == 0) {
        echo "Hai esaurito i tentativi. Il numero segreto era $numeroSegreto.\n"; // Rivela il numero segreto se l'utente esaurisce i tentativi
    }
}

// Avvia il gioco
gioca();