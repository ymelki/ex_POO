<?php

abstract class Monstre extends Personnages {
    protected $mechancete;

    abstract public function rugir(Hero $hero);

    abstract public function coupDeSalete(Hero $hero);

}