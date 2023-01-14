<?php

abstract class Person{
    private $name="";
    private $surname="";
    private $age=null;
    private $occupation="";

    public function __construct($_name="",$_surname="",$_age=null,$_occupation=""){
        $this->setName($_name);
        $this->setSurname($_surname);
        $this->setAge($_age);
        $this->setOccupation($_occupation);

        
    }


    abstract public function saluta();
    public function getFullName(){
        return $this->name ." ".$this->surname ;
    }

    public function presentation(){
        return "Ciao sono ". $this->name ." ".$this->surname ;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of surname
     */ 
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set the value of surname
     *
     * @return  self
     */ 
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of occupation
     */ 
    public function getOccupation()
    {
        return $this->occupation;
    }

    /**
     * Set the value of occupation
     *
     * @return  self
     */ 
    public function setOccupation($occupation)
    {
        $this->occupation = $occupation;

        return $this;
    }
}