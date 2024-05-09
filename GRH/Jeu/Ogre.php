<?php
include_once "Personnages.php";
class Ogre extends Monstre {
    private $arme;

    public function __construct()
    {
        $this->musculation=10;
        $this->lachete=3;
        $this->endurance=100;
        $this->sante=100;
        $this->arme=15;
        $this->mechancete=12;
    }

    public function rugir(Hero $hero){
        $hero->setSante($hero->getSante()-5 );
    }
    
    public function coupDeSalete(Hero $hero){
        $hero->setSante($hero->getSante()-5 );
    }






}