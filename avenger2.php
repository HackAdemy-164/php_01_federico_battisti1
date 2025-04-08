<?php

trait Computer{
    public function ai(){
        echo "Attiva l'AI";
    }
}

abstract class Attacco {
    abstract public function attaccaIlNemico();
}

class Laser extends Attacco{
    use Computer;
    
    public function attaccaIlNemico(){
        echo "Ti colpisco con il mio laser\n";
    }
}

class Martellata extends Attacco {
    public function attaccaIlNemico(){
        echo "Ti attacco con il mio martello\n";
    }
}

abstract class Accessorio{
    abstract public function equipaggio();
}

class Martello extends Accessorio{
    public function equipaggio(){
        echo "Afferro il martello\n";
    }
}

class Armatura extends Accessorio{
    public function equipaggio(){
        echo "Indosso la mia armatura\n";
    }
}