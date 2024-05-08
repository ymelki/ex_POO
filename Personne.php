<?php

class Personne {
    protected string  $nom;
    protected string $prenom;
    private int $age;

    public function __construct(string $nom,string $prenom,int $age)
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->age=$age;
    } 
    public function getNom(){
        return $this->nom;
    }
    public function setAge($age){
        if ($age>0 || $age < 121){
            $this->age=$age;
        }
    }
}

$p=new Personne("yoel","melki",34);
// $p->age(600);
$p->setAge(600);

