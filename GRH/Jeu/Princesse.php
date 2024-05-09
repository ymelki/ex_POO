<?php

class Princesse extends Hero {

    public function __construct()
    {
        $this->musculation=6;
        $this->lachete=2;
        $this->intelligence=15;
        $this->epee=6;
        $this->endurance=120;
        $this->sante=100;
        
    }

    public function gifle(Monstre $monstre) {
        $monstre->setSante($monstre->getSante()-10);
    }

    public function coupSpecial(Monstre $monstre) {
        $monstre->setSante($monstre->getSante()-12);
    }

}