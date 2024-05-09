<?php

class Lutin extends Monstre {

    private $salete;

    public function __construct()
    {
        $this->musculation=8;
        $this->lachete=10;
        $this->endurance=100;
        $this->sante=100;
        $this->salete=100;
        $this->mechancete=8;
        
    }

    public function rugir(Hero $hero){
        $hero->setSante($hero->getSante()-10 );
    }

    public function coupDeSalete(Hero $hero){
        $hero->setSante($hero->getSante()-4 );
    }




}