<?php

// $password = readline("Inserisci la password: ");

// function checkFirstRule($password) {
//     if (strlen($password) >= 8) {
//         return true;
//     } else {
//         echo "La password deve essere lunga almeno 8 caratteri\n";
//         return false;
//     }
// }

// function checkSecondRule($password) {
//     for ($i = 0; $i < strlen($password); $i++) {
//         if (is_numeric($password[$i])) {
//             return true;
//         }
//     }
//     echo "La password deve contenere almeno un numero\n";
//     return false;
// }

// function checkThirdRule($password) {
//     for ($i = 0; $i < strlen($password); $i++) {
//         if (ctype_upper($password[$i])) {
//             return true;
//         }
//     }
//     echo "La password deve contenere almeno una lettera maiuscola\n";
//     return false;
// }

// function checkFourthRule($password) {
//     $specialChars = ['!', '@', '#', '$', '%', '^', '&', '*'];
//     for ($i = 0; $i < strlen($password); $i++) {
//         if (in_array($password[$i], $specialChars)) {
//             return true;
//         }
//     }
//     echo "La password deve contenere almeno un carattere speciale (!@#$%^&*)\n";
//     return false;
// }

// function checkPassword($password) {
//     $firstRule = checkFirstRule($password);
//     $secondRule = checkSecondRule($password);
//     $thirdRule = checkThirdRule($password);
//     $fourthRule = checkFourthRule($password);

//     if ($firstRule && $secondRule && $thirdRule && $fourthRule) {
//         echo "La password è valida\n";
//     } else {
//         echo "La password non è valida\n";
//     }
// }

// Chiamata alla funzione
// checkPassword($password);

// esercizio : se la password inserita dall'utente è valida seguendo i criteri:
// 1. Deve essere lunga almeno 8 caratteri
// 2. Deve contenere almeno un numero
// 3. Deve contenere almeno una lettera maiuscola
// 4. Deve contenere almeno un carattere speciale (!@#$%^&*)

$password = readline("Inserisci la password: ");

// Regola 1: Lunghezza minima di 8 caratteri
$firstRule = strlen($password) >= 8;
if (!$firstRule) {
    echo "La password deve essere lunga almeno 8 caratteri\n";
}

// Regola 2: Deve contenere almeno un numero
$secondRule = false;
for ($i = 0; $i < strlen($password); $i++) {
    if (is_numeric($password[$i])) {
        $secondRule = true;
        break;
    }
}
if (!$secondRule) {
    echo "La password deve contenere almeno un numero\n";
}

// Regola 3: Deve contenere almeno una lettera maiuscola
$thirdRule = false;
for ($i = 0; $i < strlen($password); $i++) {
    if (ctype_upper($password[$i])) {
        $thirdRule = true;
        break;
    }
}
if (!$thirdRule) {
    echo "La password deve contenere almeno una lettera maiuscola\n";
}

// Regola 4: Deve contenere almeno un carattere speciale
$specialChars = ['!', '@', '#', '$', '%', '^', '&', '*'];
$fourthRule = false;
for ($i = 0; $i < strlen($password); $i++) {
    if (in_array($password[$i], $specialChars)) {
        $fourthRule = true;
        break;
    }
}
if (!$fourthRule) {
    echo "La password deve contenere almeno un carattere speciale (!@#$%^&*)\n";
}

// Verifica finale
if ($firstRule && $secondRule && $thirdRule && $fourthRule) {
    echo "La password è valida\n";
} else {
    echo "La password non è valida\n";
}

// prima prova con do while

// do {
//     $password = readline("Inserisci la password: ");

//     $firstRule = strlen($password) >= 8;
//     if (!$firstRule) {
//         echo "La password deve essere lunga almeno 8 caratteri\n";
//     }

//     $secondRule = false;
//     for ($i = 0; $i < strlen($password); $i++) {
//         if (is_numeric($password[$i])) {
//             $secondRule = true;
//             break;
//         }
//     }
//     if (!$secondRule) {
//         echo "La password deve contenere almeno un numero\n";
//     }

//     $thirdRule = false;
//     for ($i = 0; $i < strlen($password); $i++) {
//         if (ctype_upper($password[$i])) {
//             $thirdRule = true;
//             break;
//         }
//     }
//     if (!$thirdRule) {
//         echo "La password deve contenere almeno una lettera maiuscola\n";
//     }

//     $specialChars = ['!', '@', '#', '$', '%', '^', '&', '*'];
//     $fourthRule = false;
//     for ($i = 0; $i < strlen($password); $i++) {
//         if (in_array($password[$i], $specialChars)) {
//             $fourthRule = true;
//             break;
//         }
//     }
//     if (!$fourthRule) {
//         echo "La password deve contenere almeno un carattere speciale (!@#$%^&*)\n";
//     }

//     if ($firstRule && $secondRule && $thirdRule && $fourthRule) {
//         echo "La password è valida\n";
//         break; // Esce dal ciclo se la password è valida
//     } else {
//         echo "La password non è valida. Riprova.\n";
//     }
// } while (true);

// seconda prova con do while e il preg_match

do {
    $password = readline("Inserisci la password: ");
    if (!preg_match('/^(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])[A-Za-z0-9!@#$%^&*]{8,}$/', $password)) {
        echo "La password non è valida. Deve rispettare le seguenti regole:\n";
        echo "- Deve essere lunga almeno 8 caratteri\n";
        echo "- Deve contenere almeno una lettera maiuscola\n";
        echo "- Deve contenere almeno un numero\n";
        echo "- Deve contenere almeno un carattere speciale (!@#$%^&*)\n";
    } else {
        echo "La password è valida\n";
        break; // Esce dal ciclo se la password è valida
    }
} while (true);
