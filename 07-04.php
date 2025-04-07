<?php

// Traccia 1 
// Crea una classe Company che abbia i seguenti attributi pubblici:
// name: nome dell’azienda;
// location: stato in cui è ubicata la sede dell’azienda;
// tot_employees: numero di dipendenti assunti in quella sede.

// Crea 5 istanze di 5 aziende diverse

// Crea un metodo che permetta di stampare a terminale la seguente frase: “L’ufficio Aulab con sede in Italia ha ben 50 dipendenti“; se la sede non ha dipendenti, allora stampa: “L’ufficio Aulab con sede in Italia non ha dipendenti“;

// Aggiungi un nuovo attributo chiamato $avg_salary nella Classe Company. Aggiorna poi le aziende che hai già creato nel punto 2.

// Implementa un attributo statico che tenga traccia di quante aziende sono state create.

// Implementa un metodo statico che stampi a schermo con una frase quante aziende sono state create.

class Company {
    public $name;
    public $location;
    public $tot_employees;
    public $avg_salary;
    public static $company_count = 0;

    public function __construct($nome, $località, $tot_dipendenti) {
        $this->name = $nome;
        $this->location = $località;
        $this->tot_employees = $tot_dipendenti;
        self::$company_count++;
    }

    public function printDetails() {
        if ($this->tot_employees > 0) {
            echo "L’ufficio $this->name con sede in $this->location ha ben $this->tot_employees dipendenti.\n";
        } else {
            echo "L’ufficio $this->name con sede in $this->location non ha dipendenti.\n";
        }
    }

    public function setAvgSalary($media_salario) {
        $this->avg_salary = $media_salario;
        echo "Lo stipendio medio è di $this->avg_salary euro annui.\n";
    }

    public function setAndPrintDetails($media_salario) {
        $this->printDetails();
        $this->setAvgSalary($media_salario);
    }

    public static function printCompanyCount() {
        echo "Sono state create " . self::$company_count . " aziende.\n";
    }
}

// Crea 5 istanze di 5 aziende diverse
$company1 = new Company("Aulab", "Italia", 50);
$company2 = new Company("KKK", "USA", 200000);
$company3 = new Company("Reich", "Germania", 0);
$company4 = new Company("Piaggio", "India", 150);
$company5 = new Company("Maple", "Canada", 75);

// Usa la nuova funzione per stampare i dettagli e impostare lo stipendio medio
$company1->setAndPrintDetails(30000);
$company2->setAndPrintDetails(60000);
$company3->setAndPrintDetails(0);
$company4->setAndPrintDetails(20000);
$company5->setAndPrintDetails(40000);

// Stampa il numero totale di aziende create
Company::printCompanyCount();

// Traccia 2

// Utilizza i principi di OOP ed Ereditarietà per creare una struttura a classi come la seguente:
// +-|Continent
// +-----------|Country
// +--------------------|Region
// +---------------------------|Province
// +------------------------------------|City
// +------------------------------------------|Street


// Ogni classe avrà un attributo public del tipo:
// $nameContinent: 
// $nameCountry;
// $nameRegion;
// $nameProvince; 
// $nameCity;
// $nameStreet;

// La prima classe genitore avrà la seguente struttura:
// class Continent
// {
//  public $nameContinent;

//  public function __construct($continent){
//   $this->nameContinent = $continent; 
//  }
// }


// Istanzia un nuovo oggetto $myLocation, per poi richiamare un metodo che stampi a schermo la seguente frase: “Mi trovo in Europa, Italia, Puglia, Ba, Bari, Strada San Giorgio Martire 2D“.

// Classe genitore: Continent
class Continent {
    public $nameContinent;

    public function __construct($continent) {
        $this->nameContinent = $continent;
    }
}

// Classe Country che eredita da Continent
class Country extends Continent {
    public $nameCountry;

    public function __construct($continent, $country) {
        parent::__construct($continent); // Richiama il costruttore della classe genitore
        $this->nameCountry = $country;
    }
}

// Classe Region che eredita da Country
class Region extends Country {
    public $nameRegion;

    public function __construct($continent, $country, $region) {
        parent::__construct($continent, $country);
        $this->nameRegion = $region;
    }
}

// Classe Province che eredita da Region
class Province extends Region {
    public $nameProvince;

    public function __construct($continent, $country, $region, $province) {
        parent::__construct($continent, $country, $region);
        $this->nameProvince = $province;
    }
}

// Classe City che eredita da Province
class City extends Province {
    public $nameCity;

    public function __construct($continent, $country, $region, $province, $city) {
        parent::__construct($continent, $country, $region, $province);
        $this->nameCity = $city;
    }
}

// Classe Street che eredita da City
class Street extends City {
    public $nameStreet;

    public function __construct($continent, $country, $region, $province, $city, $street) {
        parent::__construct($continent, $country, $region, $province, $city);
        $this->nameStreet = $street;
    }

    // Metodo per stampare la posizione completa
    public function printLocation() {
        echo "Mi trovo in $this->nameContinent, $this->nameCountry, $this->nameRegion, $this->nameProvince, $this->nameCity, $this->nameStreet.\n";
    }
}

// Istanzia un nuovo oggetto $myLocation
$myLocation = new Street("Europa", "Italia", "Puglia", "Ba", "Bari", "Strada San Giorgio Martire 2D");

// Richiama il metodo per stampare la posizione
$myLocation->printLocation();

// Traccia 3

// Classe base: Vertebrate
class Vertebrate {
    public function __construct() {
        echo $this->getVertebrateMessage();
    }

    protected function vertebrateMethod() {
        return "Sono un animale Vertebrato\n";
    }

    public function getVertebrateMessage() {
        return $this->vertebrateMethod();
    }
}

// Classe intermedia: WarmBlooded (Sangue Caldo)
class WarmBlooded extends Vertebrate {
    public function __construct() {
        parent::__construct();
        echo $this->getWarmBloodedMessage();
    }

    protected function warmBloodedMethod() {
        return "Sono un animale a Sangue Caldo\n";
    }

    public function getWarmBloodedMessage() {
        return $this->warmBloodedMethod();
    }
}

// Classe intermedia: ColdBlooded (Sangue Freddo)
class ColdBlooded extends Vertebrate {
    public function __construct() {
        parent::__construct();
        echo $this->getColdBloodedMessage();
    }

    protected function coldBloodedMethod() {
        return "Sono un animale a Sangue Freddo\n";
    }

    public function getColdBloodedMessage() {
        return $this->coldBloodedMethod();
    }
}

// Classe finale: Fish (Pesce)
class Fish extends ColdBlooded {
    public function __construct() {
        parent::__construct();
        echo $this->getFishMessage();
    }

    protected function fishMethod() {
        return "Sono un pesce\n";
    }

    public function getFishMessage() {
        return $this->fishMethod();
    }
}

// Classe finale: Reptiles (Rettile)
class Reptiles extends ColdBlooded {
    public function __construct() {
        parent::__construct();
        echo $this->getReptileMessage();
    }

    protected function reptileMethod() {
        return "Sono un rettile\n";
    }

    public function getReptileMessage() {
        return $this->reptileMethod();
    }
}

// Classe finale: Amphibians (Anfibio)
class Amphibians extends ColdBlooded {
    public function __construct() {
        parent::__construct();
        echo $this->getAmphibianMessage();
    }

    protected function amphibianMethod() {
        return "Sono un anfibio\n";
    }

    public function getAmphibianMessage() {
        return $this->amphibianMethod();
    }
}

// Classe finale: Mammals (Mammifero)
class Mammals extends WarmBlooded {
    public function __construct() {
        parent::__construct();
        echo $this->getMammalMessage();
    }

    protected function mammalMethod() {
        return "Sono un mammifero\n";
    }

    public function getMammalMessage() {
        return $this->mammalMethod();
    }
}

// Classe finale: Birds (Uccello)
class Birds extends WarmBlooded {
    public function __construct() {
        parent::__construct();
        echo $this->getBirdMessage();
    }

    protected function birdMethod() {
        return "Sono un uccello\n";
    }

    public function getBirdMessage() {
        return $this->birdMethod();
    }
}

// Istanzia un oggetto della classe Fish
$magikarp = new Fish();