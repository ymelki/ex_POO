<?php

// new ingenieur

include "Ingenieur.php";
include "Grh.php";
$monIngenieur=new Ingenieur("Yoel", 36,4000,500);
$secretaire =new Secretaire("toto","tata",3000);
var_dump($monIngenieur);

$monGrh = new Grh();
// le code est protégé il empeche d'envoyé une chaine de caractere
// $monGrh->setIngenieur("toto");

$monGrh->setIngenieur($monIngenieur);
$monGrh->setIngenieur($monIngenieur);
$monGrh->setIngenieur($monIngenieur);
echo "<pre>";
var_dump($monGrh->getIngenieur());
echo "</pre>";

$monGrh->setEmployee($monIngenieur);

// $monGrh->setPrimableSalarie($secretaire);
include "Vehicule.php";
include "Car.php";
$tesla=new Car();
$tesla->setColor("red");
$tesla->changeWheel();


$velo=new Bike("black");
$velo->changeWheel();
$vehicule =new Vehicule();



