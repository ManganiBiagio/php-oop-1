<?php 
require_once __DIR__ . "./PersonAbstract.php";


class Actor extends Person{
    private $yearsActive="";
    private $filmografia=[];
    public function __construct($_name="",$_surname="",$_age=null,$_occupation="",$_yearsActive="",$_filmografia=[]){
        parent::__construct($_name,$_surname,$_age,$_occupation);
        $this->setYearsActive($_yearsActive);
        $this->setFilmografia($_filmografia);

    }

    public function saluta(){
        return  $this->presentation() . "e faccio l'attore";
    }


    /**
     * Get the value of yearsActive
     */ 
    public function getYearsActive()
    {
        return $this->yearsActive;
    }

    /**
     * Set the value of yearsActive
     *
     * @return  self
     */ 
    public function setYearsActive($yearsActive)
    {
        $this->yearsActive = $yearsActive;

        return $this;
    }

    /**
     * Get the value of filmografia
     */ 
    public function getFilmografia()
    {
        return $this->filmografia;
    }

    /**
     * Set the value of filmografia
     *
     * @return  self
     */ 
    public function setFilmografia($filmografia)
    {
        $this->filmografia = $filmografia;

        return $this;
    }
}
