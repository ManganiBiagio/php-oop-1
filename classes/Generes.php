<?php

class Generes {
    private $gen_type;

    public function __construct($_gen_type){
        $this->setGen_type($_gen_type);
        
    }


    /**
     * Get the value of gen_type
     */ 
    public function getGen_type()
    {
        return $this->gen_type;
    }

    /**
     * Set the value of gen_type
     *
     * @return  self
     */ 
    public function setGen_type($gen_type)
    {
        $this->gen_type = $gen_type;

        return $this;
    }
}