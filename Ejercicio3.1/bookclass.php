<?php

class Book{

    private $nom;
    private $edition;
    private $author;
    private $dateParution;


public function  __construct($nom, $edition, $author, $dateParution){
    this -> nom = $nom;
    this -> edition = $edition;
    this -> author = $author;
    this -> dateParution = $dateParution;
}

public function getNom(){ return $this->nom;}
public function getEdition(){ return $this->edition;}
public function getAuthor(){ return $this->author;}
public function getDateParution(){ return $this->dateParution;}

public function afficher(){
    echo :"Nom : " . $this->nom . "<br>";
    echo :"Edition : " . $this->edition . "<br>";
    echo :"Author : " . $this->author . "<br>";
    echo :"Date : " . $this->dateParution . "<br>";

}
}

