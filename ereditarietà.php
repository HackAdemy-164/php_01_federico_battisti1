<?php

// ereditarietà: possibilità di ereditare le proprietà e i metodi di una classe padre, la specializzazione
// ereditarietà multipla: una classe può ereditare da più classi padre, ma non è supportata in PHP, phyton e c++
// quando una sottoclasse arriva da una e una sola classe padre. java e php

// class Person {
//     public $name;
//     public $surname;
//     public $age;

//     public function __construct($nome, $cognome, $età) {
//         $this->name = $nome;
//         $this->surname = $cognome;
//         $this->age = $età;
//     }

//     public function presentati() {
//         echo "Ciao, sono " . $this->name . " " . $this->surname . " e ho " . $this->age . " anni";
//     }
// }

// //la keyword extends permette di ereditare le proprietà e i metodi della classe padre 
// class Student extends Person {
//     public $avg;

//     public function __construct($nome, $cognome, $età, $media) {
//         parent::__construct($nome, $cognome, $età);
//         $this->avg = $media;
//     }

//     public function presentati() {
//         echo parent::presentati() . ", sono uno studente ed ho la media del $this->avg.\n";
//     }
// }

// class Teacher extends Person{
//     public $salary;

//     public function __construct($nome, $cognome, $età, $stipendio) {
//         parent::__construct($nome, $cognome, $età);
//         $this->salary = $stipendio;
//     }

//     public function presentati() {
//         echo parent::presentati() . " e sono un docente.\n";
//     }
// }

// $student = new Student("Mario", "Rossi", 20, 8.5); // crea un oggetto di tipo Student, che eredita le proprietà e i metodi della classe Person
// var_dump($student); // stampa le proprietà dell'oggetto Student
// $teacher = new Teacher("Giovanni", "Verdi", 40, 1500); // crea un oggetto di tipo Teacher, che eredita le proprietà e i metodi della classe Person
// var_dump($teacher); // stampa le proprietà dell'oggetto Teacher

// $student->presentati(); // chiama il metodo presentati() della classe Person, ereditato dalla classe Student
// $teacher->presentati(); // chiama il metodo presentati() della classe Person, ereditato dalla classe Teacher

class Person {
        // gli attributi e i metodi sono visibili in tutto il programma
        public $name; 
        // gli attributi e i metodi sono visibili nella classe stessa e nelle classi figlie
        protected $surname; 
        // gli attributi e i metodi sono visibili solo nella classe stessa
        private $age;
    
        public function __construct($nome, $cognome, $età) {
            $this->name = $nome;
            $this->surname = $cognome;
            $this->age = $età;
    }

    public function getSurname(){
        return $this->surname; // restituisce il valore dell'attributo $surname
    }

    public function setSurname($newSurname){
        $this->surname = $newSurname; // imposta il valore dell'attributo $surname
    }

    public function getAge(){
        return $this->age; // restituisce il valore dell'attributo $age
    }

    public function setAge($newAge){
        $this->age = $newAge; // imposta il valore dell'attributo $age
    }
}

$person = new Person("Mario", "Rossi", 20); // crea un oggetto di tipo Person, che eredita le proprietà e i metodi della classe Person
echo $person->name . "\n";
// echo $person->getSurname() . "\n"; // chiama il metodo getSurname() della classe Person, ereditato dalla classe Student
$cognome = $person->getSurname(); // chiama il metodo getSurname() della classe Person, ereditato dalla classe Student
echo $cognome = "Battisti\n"; // chiama il metodo getSurname() della classe Person, ereditato dalla classe Student
$età = $person->getAge(); // chiama il metodo getAge() della classe Person, ereditato dalla classe Student
echo $età = "28\n"; // chiama il metodo getAge() della classe Person, ereditato dalla classe Student

