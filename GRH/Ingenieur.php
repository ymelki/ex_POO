<?php

class Ingenieur extends Personne implements Employee, Primable {
    private int $salaire;
    private int $prime;

    public function __construct($name, $age, $salaire, $prime){
        $this->name=$name;
        $this->age=$age;
        $this->salaire=$salaire;
        $this->prime=$prime;
    }


    /**
     * Get the value of salaire
     */ 
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Get the value of prime
     */ 
    public function getPrime()
    {
        return $this->prime;
    }

    /**
     * Set the value of prime
     *
     * @return  self
     */ 
    public function setPrime($prime)
    {
        $this->prime = $prime;

        return $this;
    }
}