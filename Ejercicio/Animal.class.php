<?php

class Animal
{
    public $nom;
    public $age;
    public $type;


    public function __construct($nom, $age, $type)
    {
        $this->nom  = $nom;
        $this->age  = $age;
        $this->type = $type;
    }

    public function afficherAnimal()
    {
        echo "-------------------------- <br />";
        echo "Nom : " . $this->nom . "<br>";
        echo "Age : " . $this->age . "<br>";
        echo "Type : " . $this->type . "<br>";
        echo "-------------------------- <br />";
    }

    public static function afficherAnimalerie($animaux)
    {
        foreach ($animaux as $animal) {
            $animal->afficherAnimal();
        }
    }

    public static function afficherAnimalerieParType($animaux, $type)
    {
        foreach ($animaux as $animal) {
            if ($animal->type === $type) {
                $animal->afficherAnimal();
            }
        }
    }
}
