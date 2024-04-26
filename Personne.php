<?php

class Personne {
    protected string  $nom;
    protected string $prenom;
    protected int $age;

    public function __construct(string $nom,string $prenom,int $age)
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->age=$age;
    } 
    
}