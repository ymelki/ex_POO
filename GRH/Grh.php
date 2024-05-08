<?php

include_once "Ingenieur.php";
class Grh {

   private $ingenieur;     //- une liste d'Ingenieur 
   private $employee; // - une liste d'employée
   private $primable; // -ou une liste primable 
   private $salarie; // - ou une liste de salarié 
   private $primableSalarie;// - une liste de primable et d'ingénieur

   public function setIngenieur(Ingenieur $ingenieur)
   {
      $this->ingenieur[] = $ingenieur;

   }

   /**
    * Get the value of ingenieur
    */ 
   public function getIngenieur()
   {
      return $this->ingenieur;
   }

   /**
    * Get the value of employee
    */ 
   public function getEmployee()
   {
      return $this->employee;
   }

   /**
    * Set the value of employee
    *
    * @return  self
    */ 
   public function setEmployee(Employee $employee)
   {
      $this->employee[] = $employee;

      return $this;
   }
}