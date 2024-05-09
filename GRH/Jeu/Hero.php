<?php

abstract class Hero extends Personnages {
    protected $intelligence;
    protected $epee;

    abstract public function coupSpecial(Monstre $monstre);
    abstract public function gifle(Monstre $monstre);
}