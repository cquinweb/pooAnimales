<?php

class Maison
{
    private static $lastId = 0;

    private $id;
    private $date;
    private $chambres;
    private $surface;

    public function __construct($date, $chambres, $surface)
    {
        self::$lastId++;
        $this->id = self::$lastId;

        $this->date     = $date;
        $this->chambres = $chambres;
        $this->surface  = $surface;
    }

    // GETTERS
    public function getId()        { return $this->id; }
    public function getDate()      { return $this->date; }
    public function getChambres()  { return $this->chambres; }
    public function getSurface()   { return $this->surface; }
}
