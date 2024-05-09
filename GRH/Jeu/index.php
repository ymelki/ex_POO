<?php
include_once "Personnages.php";
include_once "Monstre.php";
include_once "Hero.php";
include_once "Chevalier.php";
include_once "Princesse.php";
include_once "Lutin.php";
include_once "Ogre.php";

// un héros va combattre un monstre
$nbHeros=rand(0,1);
$nbMonstre=rand(0,1);
// instancier un héro
if ($nbHeros==0){
    $heros=new Princesse();
}
else {
    $heros=new Chevalier();
}
if ($nbMonstre==0){
    $monstre=new Ogre();
}
else {
    $monstre=new Lutin();
}

$compteur=1;
while($monstre->getSante()>0 || $heros->getSante()>0  ){
    if ($monstre->getSante()<0 || $heros->getSante()<0)
     {
        break;
     }
    echo "Etape".$compteur;

    echo "--Hero--";
    echo "<pre>";
    var_dump($heros);
    echo "</pre>";
    echo "--monstre--";
    echo "<pre>";
    var_dump($monstre);
    echo "</pre>";

    $debut=rand(0,1);
    if ($debut==0){
        echo "--Hero attaque le monstre--";
        $typeCoup=rand(0,1);
        if ($typeCoup==0){
            $heros->coupSpecial($monstre);
        }
        else {
            $heros->gifle($monstre);
        }
    }
    else {
        echo "--Monstre attaque le Heros--";
        $typeCoup=rand(0,1);
        if ($typeCoup==0){
            $monstre->coupDeSalete($heros);
        }
        else {
            $monstre->rugir($heros);
        }
    }
    $compteur++;
    
}


