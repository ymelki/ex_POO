<?php

class Ingenieur implements Employee {
    private string $name;
    private int $age;
    private int $salaire;
    private int $prime;

    public function __construct($name, $age, $salaire, $prime){
        $this->name=$name;
        $this->age=$age;
        $this->salaire=$salaire;
        $this->prime=$prime;
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