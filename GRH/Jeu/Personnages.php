<?php

abstract class Personnages {
    protected $musculation;
    protected $lachete;
    protected $endurance;
    protected $sante;

    public function __toString()
    {
        return "La santé est de ".$this->sante;
    }

    /**
     * Get the value of sante
     */ 
    public function getSante()
    {
        return $this->sante;
    }

    /**
     * Set the value of sante
     *
     * @return  self
     */ 
    public function setSante($sante)
    {
        $this->sante = $sante;

        return $this;
    }
}