<?php

$nom="nom client";
$prenom="prenom client";
$âge=36;

function afficher($nom,$prenom){
    echo "le client est ".$nom." ".$prenom;
}
afficher("Yoel","Melki");

include "Personne.php";

include "Client.php";
$toto=new Client("yoyo", "tata", 34 );
//$toto->age=36;
//$toto->prenom="yoyo";
//$toto->nom="tata";
$toto->afficher();

include "Fournisseur.php";
$baba= new Fournisseur("baba","bobo",35);
$baba->travaille($toto);