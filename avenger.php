<?php

require('avenger2.php');

class Avenger {
    public $attacco;
    public $accessori;

    public function __construct(Attacco $attacco, Accessorio $accessori){
        $this->attacco = $attacco;
        $this->accessori = $accessori;
    }

    public function attack(){
        return $this->attacco->attaccaIlNemico();
    }

    public function accessory(){
        return $this->accessori->equipaggio();
    }
}

$ironman = new Avenger(new Laser, new Armatura);
$thor = new Avenger(new Martellata, new Martello);
/* var_dump($thor); */
/* $ironman->accessori->equipaggio();
$thor->accessori->equipaggio();
$ironman->attacco->attaccaIlNemico();
$thor->attacco->attaccaIlNemico(); */

echo $ironman->accessory();
echo $thor->accessory();
echo $ironman->attack();
echo $thor->attack();
$ironman->attacco->ai();