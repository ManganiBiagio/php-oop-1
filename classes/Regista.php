<?php 
require_once __DIR__ . "./PersonAbstract.php";


class Regista extends Person{
    private $yearsActive="";
    private $filmografia=[];
    private $style=[];
    public function __construct($_name="",$_surname="",$_style=[],$_occupation="",$_yearsActive="",$_filmografia=[],$_age=null){
        parent::__construct($_name,$_surname,$_age,$_occupation);
        $this->setYearsActive($_yearsActive);
        $this->setFilmografia($_filmografia);
        $this->setStyle($_style);

    }
   

    public function saluta(){
        return  $this->presentation() . "e faccio il regista";
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

    /**
     * Get the value of style
     */ 
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Set the value of style
     *
     * @return  self
     */ 
    public function setStyle($style)
    {
        $this->style = $style;

        return $this;
    }
}