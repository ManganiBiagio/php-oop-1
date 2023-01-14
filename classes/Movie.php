<?php
require_once __DIR__  . "/Generes.php";
require_once __DIR__ ."/Actor.php";
require_once __DIR__ ."/Regista.php";
class Movie
{
    private $title;
    private $actors;
    private $year_production;
    private $vote;
    private $generes;
    private $regia;


    public function  __construct($_title, $_actors, $_year_production, $_vote, $_generes = [],$_regia=[])
    {
        $this->setTitle($_title);
        $this->setActors($_actors);
        $this->setYear_production($_year_production);
        $this->setVote($_vote);
        $this->setGeneres($_generes);
        $this->setRegia($_regia);
    }

    public function toString()
    {
        return "title:" . $this->getTitle() . " attori:" . $this->getActors();
    }







    // GETTERS AND SETTERS

    /**
     * Get the value of generes
     */
    public function getGeneres()
    {
        return $this->generes;
    }

    /**
     * Set the value of generes
     *
     * @return  self
     */
    public function setGeneres($generesList)
    {

        foreach ($generesList as $gen) {
            if(gettype($gen)=="string"){
                $this->generes[]=new Generes($gen);
            }else{

            }
            
        }







        return $this;
    }

    /**
     * Get the value of vote
     */
    public function getVote()
    {
        return $this->vote;
    }

    /**
     * Set the value of vote
     *
     * @return  self
     */
    public function setVote($vote)
    {
        $this->vote = $vote;

        return $this;
    }

    /**
     * Get the value of year_production
     */
    public function getYear_production()
    {
        return $this->year_production;
    }

    /**
     * Set the value of year_production
     *
     * @return  self
     */
    public function setYear_production($year_production)
    {
        $this->year_production = $year_production;

        return $this;
    }

    /**
     * Get the value of actors
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * Set the value of actors
     *
     * @return  self
     */
    public function setActors($actorsList)
    {
        foreach ($actorsList as $actor) {
            if(gettype($actor)=="array"){
                $newActor=new Actor($actor["name"],$actor["surname"]);
                $this->actors[]=$newActor;
            }else{

            }
            
        }

        return $this;
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of regia
     */ 
    public function getRegia()
    {
        return $this->regia;
    }

    /**
     * Set the value of regia
     *
     * @return  self
     */ 
    public function setRegia($regiaList)
    {
        foreach ($regiaList as $regista) {
            if(gettype($regista)=="array"){
                $newRegista=new Regista($regista["name"],$regista["surname"],$regista["style"]);
                $this->regia[]=$newRegista;
            }else{

            }
            
        }
       

        return $this;
    }
}
