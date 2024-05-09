<?php

class Chevalier extends Hero {

    public function __construct()
    {
        $this->musculation=15;
        $this->lachete=5;
        $this->intelligence=8;
        $this->epee=12;
        $this->endurance=100;
        $this->sante=100;
        
    }

    public function gifle(Monstre $monstre) {
        $monstre->setSante($monstre->getSante()-15);
    }

    public function coupSpecial(Monstre $monstre) {
        $monstre->setSante($monstre->getSante()-8);
    }

}