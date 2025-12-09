<?php

class User {
    public $name;
    public $lastName;

    // Getters
    public function getLastName()
    {
        return $this->lastName;
    }

    public function getName()
    {
        return $this->name;
    }
    //constructeur

    public function _construct($name, $lastName){
        $this->name = $name;
        $this->lastName = $lastName;
    }

    // Setters
    public function set_name($name)
    {
        $this->name = $name;
    }

    public function set_lastName($lastName)
    {
        $this->lastName = $lastName;
    }
}

// Crear objeto
$user1 = new User();
$user1->set_name("Juan");
$user1->set_lastName("Lippens");

// Mostrar datos
echo $user1->getName();
echo "<br>";
echo $user1->getLastName();
