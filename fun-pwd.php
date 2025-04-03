<?php

$password = readline("Inserisci la password: ");

function checkFirstRule($password) {
    if (strlen($password) >= 8) {
        return true;
    } else {
        echo "La password deve essere lunga almeno 8 caratteri\n";
        return false;
    }
}

function checkSecondRule($password) {
    for ($i = 0; $i < strlen($password); $i++) {
        if (is_numeric($password[$i])) {
            return true;
        }
    }
    echo "La password deve contenere almeno un numero\n";
    return false;
}

function checkThirdRule($password) {
    for ($i = 0; $i < strlen($password); $i++) {
        if (ctype_upper($password[$i])) {
            return true;
        }
    }
    echo "La password deve contenere almeno una lettera maiuscola\n";
    return false;
}

function checkFourthRule($password) {
    $specialChars = ['!', '@', '#', '$', '%', '^', '&', '*'];
    for ($i = 0; $i < strlen($password); $i++) {
        if (in_array($password[$i], $specialChars)) {
            return true;
        }
    }
    echo "La password deve contenere almeno un carattere speciale (!@#$%^&*)\n";
    return false;
}

function checkPassword($password) {
    $firstRule = checkFirstRule($password);
    $secondRule = checkSecondRule($password);
    $thirdRule = checkThirdRule($password);
    $fourthRule = checkFourthRule($password);

    if ($firstRule && $secondRule && $thirdRule && $fourthRule) {
        echo "La password è valida\n";
    } else {
        echo "La password non è valida\n";
    }
}

// Chiamata alla funzione
checkPassword($password);

