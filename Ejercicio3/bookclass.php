<?php

class Book
{
    private $nom;
    private $edition;
    private $auteur;
    private $dateParution;

    public function __construct($nom, $edition, $auteur, $dateParution)
    {
        $this->nom          = $nom;
        $this->edition      = $edition;
        $this->auteur       = $auteur;
        $this->dateParution = $dateParution;
    }

    public function getNom()          { return $this->nom; }
    public function getEdition()      { return $this->edition; }
    public function getAuteur()       { return $this->auteur; }
    public function getDateParution() { return $this->dateParution; }

    public function afficher()
    {
        echo "-------------------------- <br />";
        echo "Nom : " . $this->nom . "<br>";
        echo "Edition : " . $this->edition . "<br>";
        echo "Auteur : " . $this->auteur . "<br>";
        echo "Date : " . $this->dateParution . "<br>";
    }
}
