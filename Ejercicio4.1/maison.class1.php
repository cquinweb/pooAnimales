<?php
class Maison{
    public $lastId= 0;
    public $date;
    public $chambres;
    public $surface;


    public function __construct($lastId,$date,$chambres,$surface){
        $this->lastId = $lastId;
        $this->date = $date;
        $this->chambres = $chambres;
        $this->surface = $surface;
    }
    public function getLastId(){ return $this->Id;}
    public function getDate(){ return $this->date;}
    public function getChambres(){ return $this->chambres;}
    public function getSurface(){ return $this->surface;}


}
