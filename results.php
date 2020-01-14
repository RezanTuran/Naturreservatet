
<?php

abstract class Animal {
    public $name;
    public $imageUrl;
    
    abstract function makeSound();
}

class Apa extends Animal {
    function __construct($name) {
        $this->name = $name;
        $this->imageUrl = "./img/apa.jpg";
    }
    public function makeSound() {
        return "Whoohoho";
    }
}

class Giraff extends Animal {
    function __construct($name) {
        $this->name = $name;
        $this->imageUrl = "./img/giraff.jpg";
    }
    public function makeSound() {
        return "Zrrrr";
    }
}

class Tiger extends Animal {
    function __construct($name) {
        $this->name = $name;
        $this->imageUrl = "./img/tiger.jpg";
    }
    public function makeSound() {
        return "Xrrrr";
    }
}

class Kokosnötter extends Animal {
    function __construct($name) {
        $this->name = $name;
        $this->imageUrl = "./img/kokosnötter.jpg";
    }
    public function makeSound() {
        return "Pitpitpti";
    }
}


$nrOfMonkeys = $_POST['apa'];
$nrOfGiraff = $_POST['giraff'];
$nrOfTiger = $_POST['tiger'];
$nrOfKokosnötter =$_POST['kokosnötter'];

$animalArray = array();

for ($i=0; $i < $nrOfMonkeys; $i++) { 
    $apa = new Apa("Johan");
    array_push($animalArray, $apa);
};
for ($i=0; $i < $nrOfGiraff; $i++) { 
    $giraff = new Giraff("Kalle");
    array_push($animalArray, $giraff);
};
for ($i=0; $i < $nrOfTiger; $i++) { 
    $tiger = new Tiger("Glenn");
    array_push($animalArray, $tiger);
};
for ($i=0; $i < $nrOfKokosnötter; $i++) { 
    $kokosnötter = new Kokosnötter("Martin");
    array_push($animalArray, $kokosnötter);
};


foreach($animalArray as $value){
    echo ($value->name);
    echo "<br>";
    echo "<img style='width: 10em; height: auto;' src='". $value->imageUrl ."'>" . "<br>". $value->makeSound(). "<br>";
}




// echo $apa ->makeSound();
// echo "<br>";
// echo $giraff ->makeSound();
// echo "<br>";
// echo $tiger ->makeSound();
// echo "<br>";
// echo $kokosnötter ->makeSound();
?>

    



