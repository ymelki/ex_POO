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

   /**
    * Get the value of primableSalarie
    */ 
   public function getPrimableSalarie()
   {
      return $this->primableSalarie;
   }

   /**
    * Set the value of primableSalarie
    *
    * @return  self
    */ 
   public function setPrimableSalarie(Primable $primableSalarie)
   {
      $this->primableSalarie[] = $primableSalarie;

      return $this;
   }
}