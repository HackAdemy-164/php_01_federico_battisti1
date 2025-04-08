<?php

// dipendenza: legame tra un'applicazione e altre applicazioni o librerie

abstract class ParteSuperiore{
    abstract public function faiQualcosaConLeMani();
}

abstract class ParteInferiore{
    abstract public function faiQualcosaConIPiedi();
}

class Afferra extends ParteSuperiore{
    public function faiQualcosaConLeMani(){
        echo "Afferra un oggetto\n";
    }
}

class Pugno extends ParteSuperiore{
    public function faiQualcosaConLeMani(){
        echo "Tira un pugno\n";
    }
}

class Saluta extends ParteSuperiore{
    public function faiQualcosaConLeMani(){
        echo "Fai un saluto\n";
    }
}

class Cammina extends ParteInferiore{
    public function faiQualcosaConIPiedi(){
        echo "Fai una passeggiata\n";
    }
}

class Corri extends ParteInferiore{
    public function faiQualcosaConIPiedi(){
        echo "Fai una corsa\n";
    }
}

class Calcio extends ParteInferiore{
    public function faiQualcosaConIPiedi(){
        echo "Dai un calcio\n";
    }
}
