<?php

require ('dependency.php');

class Body {
    public $superiore;
    public $inferiore;

    // dependency injection: iniezione di dipendenza

    public function __construct(ParteSuperiore $superiore,ParteInferiore $inferiore) {
        $this->superiore = $superiore;
        $this->inferiore = $inferiore;
    }
}

// object composition: composizione di oggetti

$persona = new Body(new Afferra, new Corri);
// var_dump($persona);
$persona->superiore->faiQualcosaConLeMani();
$persona->inferiore->faiQualcosaConIPiedi();
